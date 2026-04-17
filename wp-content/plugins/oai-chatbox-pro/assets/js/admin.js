(function ($) {
    const $list = $('#oai-chat-conversations');
    const $detail = $('#oai-chat-detail');
    const $empty = $('#oai-chat-detail-empty');
    const $messages = $('#oai-admin-messages');
    let currentId = 0;
    let poll = null;

    function escapeHtml(value) {
        return $('<div>').text(value == null ? '' : value).html();
    }

    function request(action, data = {}, method = 'GET') {
        return $.ajax({
            url: oaiChatboxAdmin.ajaxUrl,
            method,
            data: Object.assign({ action, nonce: oaiChatboxAdmin.nonce }, data)
        });
    }

    function renderStats() {
        request('oai_admin_stats').done((res) => {
            if (!res.success) return;
            Object.keys(res.data).forEach((key) => {
                $('[data-stat="' + key + '"]').text(key === 'avg_rating' ? Number(res.data[key]).toFixed(1) : res.data[key]);
            });
        });
    }

    function renderList(items) {
        $list.empty();
        if (!items.length) {
            $list.html('<div class="oai-chat-empty">No conversations found.</div>');
            return;
        }
        items.forEach((item) => {
            const cls = item.admin_unread > 0 ? 'has-unread' : '';
            const name = escapeHtml(item.visitor_name || ('Visitor #' + item.id));
            const date = escapeHtml(item.last_message_at || '');
            const email = escapeHtml(item.visitor_email || '');
            const status = escapeHtml(item.status || 'new');
            const preview = escapeHtml(item.last_message_preview || '');
            const html = `
                <button class="oai-conversation-item ${cls}" data-id="${item.id}">
                    <div class="oai-conversation-top">
                        <strong>${name}</strong>
                        <span>${date}</span>
                    </div>
                    <div class="oai-conversation-meta">
                        <span>${email}</span>
                        <span class="tag status-${status}">${status}</span>
                    </div>
                    <p>${preview}</p>
                </button>
            `;
            $list.append(html);
        });
    }

    function loadList() {
        request('oai_admin_chat_list', {
            s: $('#oai-chat-search').val(),
            status: $('#oai-chat-status-filter').val()
        }).done((res) => {
            if (!res.success) return;
            renderList(res.data.items || []);
            renderStats();
        });
    }

    function renderMessages(messages) {
        $messages.empty();
        messages.forEach((msg) => {
            let attachment = '';
            if (msg.attachment_url) {
                const url = escapeHtml(msg.attachment_url);
                const attachmentName = escapeHtml(msg.attachment_name || 'Attachment');
                attachment = msg.message_type === 'image'
                    ? `<div class="attachment"><img src="${url}" alt=""></div>`
                    : `<div class="attachment"><a href="${url}" target="_blank" rel="noopener">${attachmentName}</a></div>`;
            }
            $messages.append(`
                <div class="admin-msg ${escapeHtml(msg.sender_type)}">
                    <div class="bubble">
                        <div class="row"><strong>${escapeHtml(msg.sender_name)}</strong><span>${escapeHtml(msg.created_at)}</span></div>
                        ${msg.message_text ? `<div class="text">${msg.message_text}</div>` : ''}
                        ${attachment}
                    </div>
                </div>
            `);
        });
        if ($messages[0]) {
            $messages.scrollTop($messages[0].scrollHeight);
        }
    }

    function loadDetail(id) {
        currentId = id;
        request('oai_admin_chat_detail', { conversation_id: id }).done((res) => {
            if (!res.success) return;
            $detail.prop('hidden', false);
            $empty.hide();
            const c = res.data.conversation;
            $('.detail-title').text(c.visitor_name || 'Visitor #' + c.id);
            $('.detail-meta').html(`${escapeHtml(c.visitor_email || '-')} • ${escapeHtml(c.visitor_phone || '-')} • ${escapeHtml(c.source_url || '-')}`);
            $('#oai-detail-status').val(c.status);
            $('#oai-detail-tag').val(c.tag);
            $('#oai-detail-assigned').val(c.assigned_user_id || '0');
            $('#oai-visitor-info').html(`
                <p><strong>IP:</strong> ${escapeHtml(c.visitor_ip || '-')}</p>
                <p><strong>Device:</strong> ${escapeHtml(c.user_agent || '-')}</p>
                <p><strong>Last seen:</strong> ${escapeHtml(c.last_seen_at || '-')}</p>
                <p><strong>Source:</strong> ${escapeHtml(c.source_ref || '-')}</p>
                <p><strong>Rating:</strong> ${escapeHtml(c.rating || '-')}</p>
            `);
            renderMessages(res.data.messages || []);
            $('#oai-notes-list').html((res.data.notes || []).map(note => `<div class="note"><strong>${escapeHtml(note.display_name || 'Admin')}</strong><p>${escapeHtml(note.note_text)}</p></div>`).join('') || '<p>No notes yet.</p>');
            $('#oai-history-list').html((res.data.history || []).map(item => `<div class="history-item">#${escapeHtml(item.id)} • ${escapeHtml(item.status)} • ${escapeHtml(item.created_at)}</div>`).join('') || '<p>No previous chats.</p>');
        });
    }

    function startPoll() {
        clearInterval(poll);
        poll = setInterval(() => {
            loadList();
            if (currentId) loadDetail(currentId);
        }, 4000);
    }

    $('#oai-chat-refresh').on('click', loadList);
    $('#oai-chat-search, #oai-chat-status-filter').on('input change', loadList);

    $(document).on('click', '.oai-conversation-item', function () {
        loadDetail($(this).data('id'));
    });

    $('#oai-admin-reply-send').on('click', function () {
        const message = $('#oai-admin-reply').val().trim();
        if (!currentId || !message) return;
        request('oai_admin_send_reply', { conversation_id: currentId, message }, 'POST').done((res) => {
            if (!res.success) return;
            $('#oai-admin-reply').val('');
            renderMessages(res.data.messages || []);
            loadList();
        });
    });

    $('#oai-detail-save').on('click', function () {
        if (!currentId) return;
        request('oai_admin_update_conversation', {
            conversation_id: currentId,
            status: $('#oai-detail-status').val(),
            tag: $('#oai-detail-tag').val(),
            assigned_user_id: $('#oai-detail-assigned').val()
        }, 'POST').done(() => loadList());
    });

    $('#oai-note-save').on('click', function () {
        const note = $('#oai-note-input').val().trim();
        if (!currentId || !note) return;
        request('oai_admin_add_note', { conversation_id: currentId, note }, 'POST').done(() => {
            $('#oai-note-input').val('');
            loadDetail(currentId);
        });
    });

    loadList();
    renderStats();
    startPoll();
})(jQuery);
