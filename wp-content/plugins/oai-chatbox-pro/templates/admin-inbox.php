<?php if (!defined('ABSPATH')) exit; ?>
<div class="wrap oai-chat-admin">
    <div class="oai-page-head">
        <div>
            <h1>OAI Chatbox Pro</h1>
            <p>Manage conversations, reply faster, and keep the inbox clean.</p>
        </div>
    </div>

    <div class="oai-admin-stats">
        <div class="oai-stat-card"><span>Total conversations</span><strong data-stat="total">0</strong></div>
        <div class="oai-stat-card"><span>New</span><strong data-stat="new">0</strong></div>
        <div class="oai-stat-card"><span>Open</span><strong data-stat="open">0</strong></div>
        <div class="oai-stat-card"><span>Closed</span><strong data-stat="closed">0</strong></div>
        <div class="oai-stat-card"><span>Unread</span><strong data-stat="unread">0</strong></div>
        <div class="oai-stat-card"><span>Avg rating</span><strong data-stat="avg_rating">0</strong></div>
    </div>

    <div class="oai-admin-layout">
        <aside class="oai-admin-sidebar oai-card">
            <div class="toolbar">
                <input type="search" id="oai-chat-search" placeholder="Search by name, email, token">
                <select id="oai-chat-status-filter">
                    <option value="">All statuses</option>
                    <option value="new">New</option>
                    <option value="open">Open</option>
                    <option value="closed">Closed</option>
                    <option value="spam">Spam</option>
                </select>
                <button class="button button-secondary" id="oai-chat-refresh">Refresh</button>
                <a class="button button-secondary" href="<?php echo esc_url(wp_nonce_url(admin_url('admin-ajax.php?action=oai_admin_export_csv'), 'oai_chat_admin_nonce', 'nonce')); ?>">Export CSV</a>
            </div>
            <div id="oai-chat-conversations" class="oai-chat-conversations"></div>
        </aside>

        <main class="oai-admin-main oai-card">
            <div id="oai-chat-detail-empty" class="oai-chat-empty">Select a conversation to view messages.</div>
            <div id="oai-chat-detail" class="oai-chat-detail" hidden>
                <header class="oai-chat-detail-header">
                    <div>
                        <h2 class="detail-title">Conversation</h2>
                        <div class="detail-meta"></div>
                    </div>
                    <div class="detail-actions">
                        <select id="oai-detail-status">
                            <option value="new">New</option>
                            <option value="open">Open</option>
                            <option value="closed">Closed</option>
                            <option value="spam">Spam</option>
                        </select>
                        <select id="oai-detail-tag">
                            <option value="support">Support</option>
                            <option value="sales">Sales</option>
                            <option value="urgent">Urgent</option>
                        </select>
                        <select id="oai-detail-assigned">
                            <option value="0">Unassigned</option>
                            <?php foreach (get_users(['role__in' => ['administrator', 'editor', 'author']]) as $user): ?>
                                <option value="<?php echo esc_attr($user->ID); ?>"><?php echo esc_html($user->display_name); ?></option>
                            <?php endforeach; ?>
                        </select>
                        <button class="button button-primary" id="oai-detail-save">Save</button>
                    </div>
                </header>
                <div class="oai-chat-detail-grid">
                    <section class="messages-panel">
                        <div id="oai-admin-messages" class="oai-admin-messages"></div>
                        <div class="oai-admin-reply-box">
                            <textarea id="oai-admin-reply" rows="3" placeholder="Reply to customer..."></textarea>
                            <button class="button button-primary" id="oai-admin-reply-send">Send reply</button>
                        </div>
                    </section>
                    <aside class="info-panel">
                        <div class="card-section">
                            <h3>Visitor details</h3>
                            <div id="oai-visitor-info"></div>
                        </div>
                        <div class="card-section">
                            <h3>Internal notes</h3>
                            <div id="oai-notes-list"></div>
                            <textarea id="oai-note-input" rows="3" placeholder="Add internal note..."></textarea>
                            <button class="button" id="oai-note-save">Add note</button>
                        </div>
                        <div class="card-section">
                            <h3>Previous chats</h3>
                            <div id="oai-history-list"></div>
                        </div>
                    </aside>
                </div>
            </div>
        </main>
    </div>
</div>
