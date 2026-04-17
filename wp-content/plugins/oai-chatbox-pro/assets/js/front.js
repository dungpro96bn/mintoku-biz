(function ($) {
    const root = document.getElementById('oai-chatbox-root');
    if (!root) return;

    const panel = root.querySelector('.oai-chatbox-panel');
    const toggle = root.querySelector('.oai-chatbox-toggle');
    const closeBtn = root.querySelector('.oai-chatbox-close');
    const startBtn = root.querySelector('.oai-chatbox-start');
    const prechat = root.querySelector('.oai-chatbox-prechat');
    const messagesWrap = root.querySelector('.oai-chatbox-messages-wrap');
    const messagesFooter = root.querySelector('.oai-chatbox-footer');
    const messagesBox = root.querySelector('.oai-chatbox-messages');
    const sendBtn = root.querySelector('.oai-chatbox-send');
    const input = root.querySelector('.oai-chatbox-input');
    const typing = root.querySelector('.oai-chatbox-typing');
    const delivery = root.querySelector('.oai-chatbox-delivery');
    const statusText = root.querySelector('.oai-chatbox-status-text');
    const statusWrap = root.querySelector('.oai-chatbox-status');
    const uploadInput = root.querySelector('.oai-chatbox-upload');
    const emojiBtn = root.querySelector('.oai-chatbox-emoji');
    const faqItems = root.querySelectorAll('.oai-chatbox-faq-item');
    const ratingBox = root.querySelector('.oai-chatbox-rating');
    const feedbackInput = root.querySelector('.oai-chatbox-feedback');
    const ratingButtons = root.querySelectorAll('.oai-chatbox-stars button');

    if (
        !panel ||
        !toggle ||
        !closeBtn ||
        !startBtn ||
        !prechat ||
        !messagesWrap ||
        !messagesBox ||
        !sendBtn ||
        !input ||
        !typing ||
        !delivery ||
        !statusText ||
        !statusWrap ||
        !uploadInput ||
        !emojiBtn ||
        !feedbackInput
    ) {
        return;
    }

    let token = localStorage.getItem('oai_chatbox_token') || '';
    let pollTimer = null;
    let lastMessageCount = 0;
    let initialLoaded = false;

    function playBeep() {
        if (!oaiChatboxPro.settings.enable_notifications) return;

        try {
            const ctx = new (window.AudioContext || window.webkitAudioContext)();
            const o = ctx.createOscillator();
            const g = ctx.createGain();

            o.connect(g);
            g.connect(ctx.destination);

            o.type = 'sine';
            o.frequency.value = 880;
            g.gain.value = Number(oaiChatboxPro.settings.sound_volume || 0.15);

            o.start();

            setTimeout(() => {
                o.stop();
                ctx.close();
            }, 90);
        } catch (e) {}
    }

    function setOnlineState(online) {
        statusWrap.classList.toggle('is-online', !!online);
        statusWrap.classList.toggle('is-offline', !online);
        statusText.textContent = online ? 'Online' : 'Offline';
        root.dataset.online = online ? '1' : '0';
    }

    function autoScroll() {
        messagesBox.scrollTop = messagesBox.scrollHeight;
    }

    function escapeHtml(str) {
        const div = document.createElement('div');
        div.textContent = str || '';
        return div.innerHTML;
    }

    function clearFieldErrors() {
        const fields = [
            root.querySelector('.oai-chatbox-name'),
            root.querySelector('.oai-chatbox-email'),
            root.querySelector('.oai-chatbox-phone')
        ];

        fields.forEach((el) => {
            if (el) el.classList.remove('oai-field-error');
        });
    }

    function validatePrechat() {
        const nameEl = root.querySelector('.oai-chatbox-name');
        const emailEl = root.querySelector('.oai-chatbox-email');
        const phoneEl = root.querySelector('.oai-chatbox-phone');

        const name = nameEl ? nameEl.value.trim() : '';
        const email = emailEl ? emailEl.value.trim() : '';
        const phone = phoneEl ? phoneEl.value.trim() : '';

        let hasError = false;

        clearFieldErrors();

        if (!name) {
            hasError = true;
            if (nameEl) nameEl.classList.add('oai-field-error');
        }

        if (!email) {
            hasError = true;
            if (emailEl) emailEl.classList.add('oai-field-error');
        }

        if (!phone) {
            hasError = true;
            if (phoneEl) phoneEl.classList.add('oai-field-error');
        }

        if (hasError) {
            // alert('Please enter your name, email, and phone number.');
            return false;
        }

        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            if (emailEl) emailEl.classList.add('oai-field-error');
            alert('Email is not valid.');
            return false;
        }

        const phoneRegex = /^[0-9+\s().-]{8,20}$/;
        if (!phoneRegex.test(phone)) {
            if (phoneEl) phoneEl.classList.add('oai-field-error');
            alert('Phone number is not valid.');
            return false;
        }

        return {
            name,
            email,
            phone
        };
    }

    function renderMessages(messages) {
        messagesBox.innerHTML = '';
        let shouldBeep = false;

        messages.forEach((msg) => {
            const item = document.createElement('div');
            item.className = 'oai-msg oai-msg-' + msg.sender_type;

            const attachment = msg.attachment_url
                ? (
                    msg.message_type === 'image'
                        ? `<a href="${msg.attachment_url}" target="_blank" rel="noopener"><img src="${msg.attachment_url}" alt="${escapeHtml(msg.attachment_name || '')}"></a>`
                        : `<a href="${msg.attachment_url}" target="_blank" rel="noopener">📄 ${escapeHtml(msg.attachment_name || 'Attachment')}</a>`
                )
                : '';

            if (initialLoaded && msg.sender_type !== 'visitor') {
                shouldBeep = true;
            }

            item.innerHTML = `
                <div class="oai-msg-bubble">
                    <div class="oai-msg-top">
                        <strong>${escapeHtml(msg.sender_name)}</strong>
                        <span>${escapeHtml(msg.time_human)}</span>
                    </div>
                    ${msg.message_text ? `<div class="oai-msg-text">${msg.message_text}</div>` : ''}
                    ${attachment ? `<div class="oai-msg-attachment">${attachment}</div>` : ''}
                    <div class="oai-msg-status">${escapeHtml(msg.status || '')}</div>
                </div>
            `;

            messagesBox.appendChild(item);
        });

        if (messages.length > lastMessageCount && shouldBeep) {
            playBeep();
        }

        lastMessageCount = messages.length;
        autoScroll();
    }

    function fetchMessages(markSeen = true) {
        if (!token) return;

        $.post(oaiChatboxPro.ajaxUrl, {
            action: 'oai_chat_fetch_messages',
            nonce: oaiChatboxPro.nonce,
            conversation_token: token
        }).done((res) => {
            if (!res.success) return;

            renderMessages(res.data.messages || []);
            typing.textContent = res.data.typing || '';
            setOnlineState(res.data.online);
            messagesWrap.hidden = false;
            prechat.hidden = true;

            if (markSeen) {
                $.post(oaiChatboxPro.ajaxUrl, {
                    action: 'oai_chat_mark_seen',
                    nonce: oaiChatboxPro.nonce,
                    conversation_token: token
                });
            }

            initialLoaded = true;
        });
    }

    function startPolling() {
        clearInterval(pollTimer);
        pollTimer = setInterval(fetchMessages, 3500);
    }

    function stopPolling() {
        clearInterval(pollTimer);
        pollTimer = null;
    }

    function openPanel() {
        panel.hidden = false;
        toggle.setAttribute('aria-expanded', 'true');
        root.classList.add('is-open');

        if (token) {
            fetchMessages();
            startPolling();
        }
    }

    function closePanel() {
        panel.hidden = true;
        toggle.setAttribute('aria-expanded', 'false');
        root.classList.remove('is-open');
        stopPolling();
    }

    function togglePanel() {
        if (panel.hidden) {
            openPanel();
        } else {
            closePanel();
        }
    }

    function startConversation() {
        const lead = validatePrechat();
        if (!lead) {
            return $.Deferred().reject().promise();
        }

        return $.post(oaiChatboxPro.ajaxUrl, {
            action: 'oai_chat_start_conversation',
            nonce: oaiChatboxPro.nonce,
            conversation_token: token,
            name: lead.name,
            email: lead.email,
            phone: lead.phone,
            source_url: window.location.href,
            source_ref: document.referrer,
            language_code: document.documentElement.lang || oaiChatboxPro.locale || 'en'
        }).done((res) => {
            if (!res.success) {
                alert(res.data && res.data.message ? res.data.message : 'Could not start chat.');
                return;
            }

            token = res.data.conversation_token;
            localStorage.setItem('oai_chatbox_token', token);
            renderMessages(res.data.messages || []);
            prechat.hidden = true;
            messagesWrap.hidden = false;
            messagesFooter.hidden = false;
            setOnlineState(res.data.online);
            startPolling();
            input.focus();
            initialLoaded = true;
        }).fail((xhr) => {
            const message =
                xhr.responseJSON &&
                xhr.responseJSON.data &&
                xhr.responseJSON.data.message
                    ? xhr.responseJSON.data.message
                    : 'Could not start chat.';

            alert(message);
        });
    }

    function sendMessage() {
        const text = input.value.trim();
        const file = uploadInput.files[0];

        if (!text && !file) return;

        delivery.textContent = 'Sending…';

        if (!token) {
            startConversation().done(() => {
                sendMessage();
            });
            return;
        }

        const formData = new FormData();
        formData.append('action', 'oai_chat_send_message');
        formData.append('nonce', oaiChatboxPro.nonce);
        formData.append('conversation_token', token);
        formData.append('message', text);
        formData.append('source_url', window.location.href);
        formData.append('source_ref', document.referrer);
        formData.append('language_code', document.documentElement.lang || oaiChatboxPro.locale || 'en');

        if (file) {
            formData.append('attachment', file);
        }

        $.ajax({
            url: oaiChatboxPro.ajaxUrl,
            method: 'POST',
            processData: false,
            contentType: false,
            data: formData
        }).done((res) => {
            if (!res.success) {
                alert(res.data && res.data.message ? res.data.message : 'Could not send message.');
                return;
            }

            input.value = '';
            input.style.height = '48px';
            uploadInput.value = '';
            delivery.textContent = 'Delivered';

            renderMessages(res.data.messages || []);
            setOnlineState(res.data.online);

            if (res.data && res.data.conversation_token) {
                token = res.data.conversation_token;
                localStorage.setItem('oai_chatbox_token', token);
            }

            startPolling();
        }).fail((xhr) => {
            const message =
                xhr.responseJSON &&
                xhr.responseJSON.data &&
                xhr.responseJSON.data.message
                    ? xhr.responseJSON.data.message
                    : 'Could not send message.';

            alert(message);
        });
    }

    toggle.addEventListener('click', function (e) {
        e.preventDefault();
        togglePanel();
    });

    closeBtn.addEventListener('click', function (e) {
        e.preventDefault();
        closePanel();
    });

    startBtn.addEventListener('click', function (e) {
        e.preventDefault();
        startConversation();
    });

    sendBtn.addEventListener('click', function (e) {
        e.preventDefault();
        sendMessage();
    });

    document.addEventListener('click', function (e) {
        if (panel.hidden) return;
        if (!root.contains(e.target)) {
            closePanel();
        }
    });

    input.addEventListener('keydown', function (e) {
        if (e.key === 'Enter' && !e.shiftKey) {
            e.preventDefault();
            sendMessage();
        }
    });

    input.addEventListener('input', function () {
        this.style.height = 'auto';
        this.style.height = Math.min(this.scrollHeight, 120) + 'px';

        if (token) {
            $.post(oaiChatboxPro.ajaxUrl, {
                action: 'oai_chat_typing',
                nonce: oaiChatboxPro.nonce,
                conversation_token: token,
                who: 'visitor'
            });
        }
    });

    emojiBtn.addEventListener('click', function () {
        input.value += '😊';
        input.focus();
    });

    faqItems.forEach((btn) => {
        btn.addEventListener('click', function () {
            input.value = this.textContent;
            input.focus();
            openPanel();
        });
    });

    ratingButtons.forEach((btn) => {
        btn.addEventListener('click', function () {
            const rating = this.dataset.rating;
            if (!token) return;

            $.post(oaiChatboxPro.ajaxUrl, {
                action: 'oai_chat_rate_conversation',
                nonce: oaiChatboxPro.nonce,
                conversation_token: token,
                rating,
                feedback: feedbackInput.value || ''
            }).done(() => {
                ratingBox.hidden = true;
                alert('Thanks for your feedback!');
            });
        });
    });

    if (token) {
        fetchMessages(false);
        startPolling();
    }
})(jQuery);