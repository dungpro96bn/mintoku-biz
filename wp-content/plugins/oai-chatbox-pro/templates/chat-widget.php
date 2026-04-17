<?php
if (!defined('ABSPATH')) {
    exit;
}
$online = oai_chatbox_pro()->is_online_now();
$translations = $settings['translations']['vi'] ?? [];
?>
<div id="oai-chatbox-root"
     class="oai-chatbox-root"
     data-online="<?php echo $online ? '1' : '0'; ?>"
     data-require-lead="<?php echo !empty($settings['require_lead_before_chat']) ? '1' : '0'; ?>">
    <button class="oai-chatbox-toggle" type="button" aria-expanded="false" aria-controls="oai-chatbox-panel">
        <span class="oai-chatbox-toggle-icon">💬</span>
        <span class="oai-chatbox-toggle-label"><?php echo esc_html($settings['button_label']); ?></span>
    </button>

    <section id="oai-chatbox-panel" class="oai-chatbox-panel" hidden>
        <header class="oai-chatbox-header">
            <div>
                <h3><?php echo esc_html($settings['title']); ?></h3>
                <p><?php echo esc_html($settings['subtitle']); ?></p>
            </div>
            <div class="oai-chatbox-status <?php echo $online ? 'is-online' : 'is-offline'; ?>">
                <span class="oai-chatbox-dot"></span>
                <span class="oai-chatbox-status-text"><?php echo esc_html($online ? ($translations['online'] ?? 'Online') : ($translations['offline'] ?? 'Offline')); ?></span>
            </div>
            <button type="button" class="oai-chatbox-close" aria-label="Close">×</button>
        </header>

        <div class="oai-chatbox-body">
            <div class="oai-chatbox-prechat">
                <div class="oai-chatbox-banner"><?php echo esc_html($online ? $settings['greeting_message'] : $settings['offline_message']); ?></div>
                <div class="oai-chatbox-faq">
                    <?php foreach (($settings['faq'] ?? []) as $faq): ?>
                        <button type="button" class="oai-chatbox-faq-item"><?php echo esc_html($faq); ?></button>
                    <?php endforeach; ?>
                </div>
                <div class="oai-chatbox-lead-fields">
                    <input type="text" class="oai-chatbox-name" required="required" placeholder="<?php echo esc_attr($translations['name'] ?? 'Name'); ?>">
                    <input type="email" class="oai-chatbox-email" placeholder="<?php echo esc_attr($translations['email'] ?? 'Email'); ?>">
                    <input type="text" class="oai-chatbox-phone" placeholder="<?php echo esc_attr($translations['phone'] ?? 'Phone'); ?>">
                    <button type="button" class="oai-chatbox-start"><?php echo esc_html($translations['start_chat'] ?? 'Start chat'); ?></button>
                </div>
            </div>

            <div class="oai-chatbox-messages-wrap" hidden>
                <div class="oai-chatbox-messages"></div>
                <div class="oai-chatbox-typing"></div>
            </div>
        </div>

        <footer class="oai-chatbox-footer" hidden>
            <div class="oai-chatbox-tools">
                <button type="button" class="oai-chatbox-emoji">😊</button>
                <label class="oai-chatbox-upload-label">
                    📎
                    <input type="file" class="oai-chatbox-upload" hidden>
                </label>
            </div>
            <div class="oai-chatbox-input-row">
                <textarea class="oai-chatbox-input" rows="1" placeholder="<?php echo esc_attr($settings['placeholder']); ?>"></textarea>
                <button type="button" class="oai-chatbox-send"><?php echo esc_html($translations['send'] ?? 'Send'); ?></button>
            </div>
            <div class="oai-chatbox-meta">
                <span class="oai-chatbox-worktime"><?php echo $online ? esc_html__('We are online now', 'oai-chatbox-pro') : esc_html__('Outside business hours', 'oai-chatbox-pro'); ?></span>
                <span class="oai-chatbox-delivery"></span>
            </div>
            <div class="oai-chatbox-rating" hidden>
                <strong><?php esc_html_e('Rate this chat', 'oai-chatbox-pro'); ?></strong>
                <div class="oai-chatbox-stars">
                    <?php for ($i = 1; $i <= 5; $i++): ?>
                        <button type="button" data-rating="<?php echo esc_attr($i); ?>">★</button>
                    <?php endfor; ?>
                </div>
                <textarea class="oai-chatbox-feedback" placeholder="Share your feedback"></textarea>
            </div>
        </footer>
    </section>
</div>
