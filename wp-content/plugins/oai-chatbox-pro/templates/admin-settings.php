<?php if (!defined('ABSPATH')) exit; ?>
<div class="wrap oai-chat-settings-wrap">
    <div class="oai-page-head">
        <div>
            <h1>OAI Chatbox Pro Settings</h1>
            <p>Control the widget, conversation behavior, and security options.</p>
        </div>
    </div>

    <form method="post" action="options.php" class="oai-settings-form">
        <?php settings_fields('oai_chatbox_pro_group'); ?>
        <div class="oai-settings-grid">
            <div class="oai-card">
                <h2>General</h2>
                <table class="form-table" role="presentation">
                    <tr><th>Enable widget</th><td><label><input type="checkbox" name="<?php echo esc_attr(oai_chatbox_pro()->settings_key); ?>[enabled]" value="1" <?php checked(!empty($settings['enabled'])); ?>> Active</label></td></tr>
                    <tr><th>Widget title</th><td><input class="regular-text" type="text" name="<?php echo esc_attr(oai_chatbox_pro()->settings_key); ?>[title]" value="<?php echo esc_attr($settings['title']); ?>"></td></tr>
                    <tr><th>Subtitle</th><td><input class="regular-text" type="text" name="<?php echo esc_attr(oai_chatbox_pro()->settings_key); ?>[subtitle]" value="<?php echo esc_attr($settings['subtitle']); ?>"></td></tr>
                    <tr><th>Button label</th><td><input class="regular-text" type="text" name="<?php echo esc_attr(oai_chatbox_pro()->settings_key); ?>[button_label]" value="<?php echo esc_attr($settings['button_label']); ?>"></td></tr>
                    <tr><th>Input placeholder</th><td><input class="regular-text" type="text" name="<?php echo esc_attr(oai_chatbox_pro()->settings_key); ?>[placeholder]" value="<?php echo esc_attr($settings['placeholder']); ?>"></td></tr>
                    <tr><th>Greeting message</th><td><textarea class="large-text" rows="3" name="<?php echo esc_attr(oai_chatbox_pro()->settings_key); ?>[greeting_message]"><?php echo esc_textarea($settings['greeting_message']); ?></textarea></td></tr>
                    <tr><th>First auto reply</th><td><textarea class="large-text" rows="3" name="<?php echo esc_attr(oai_chatbox_pro()->settings_key); ?>[first_auto_reply]"><?php echo esc_textarea($settings['first_auto_reply']); ?></textarea></td></tr>
                    <tr><th>Offline message</th><td><textarea class="large-text" rows="3" name="<?php echo esc_attr(oai_chatbox_pro()->settings_key); ?>[offline_message]"><?php echo esc_textarea($settings['offline_message']); ?></textarea></td></tr>
                </table>
            </div>
            <div class="oai-card">
                <h2>Features &amp; Security</h2>
                <table class="form-table" role="presentation">
                    <tr><th>Require name/email before chat</th><td><label><input type="checkbox" name="<?php echo esc_attr(oai_chatbox_pro()->settings_key); ?>[require_lead_before_chat]" value="1" <?php checked(!empty($settings['require_lead_before_chat'])); ?>> Required</label></td></tr>
                    <tr><th>Enable file upload</th><td><label><input type="checkbox" name="<?php echo esc_attr(oai_chatbox_pro()->settings_key); ?>[enable_file_upload]" value="1" <?php checked(!empty($settings['enable_file_upload'])); ?>> Allowed</label></td></tr>
                    <tr><th>Enable emoji button</th><td><label><input type="checkbox" name="<?php echo esc_attr(oai_chatbox_pro()->settings_key); ?>[enable_emoji]" value="1" <?php checked(!empty($settings['enable_emoji'])); ?>> Enabled</label></td></tr>
                    <tr><th>Enable notification sounds</th><td><label><input type="checkbox" name="<?php echo esc_attr(oai_chatbox_pro()->settings_key); ?>[enable_notifications]" value="1" <?php checked(!empty($settings['enable_notifications'])); ?>> Enabled</label></td></tr>
                    <tr><th>Enable rating after chat</th><td><label><input type="checkbox" name="<?php echo esc_attr(oai_chatbox_pro()->settings_key); ?>[enable_rating]" value="1" <?php checked(!empty($settings['enable_rating'])); ?>> Enabled</label></td></tr>
                    <tr><th>Allowed file types</th><td><input class="regular-text" type="text" name="<?php echo esc_attr(oai_chatbox_pro()->settings_key); ?>[allowed_file_types]" value="<?php echo esc_attr($settings['allowed_file_types']); ?>"><p class="description">Comma separated extensions</p></td></tr>
                    <tr><th>Max file size (MB)</th><td><input class="small-text" type="number" min="1" name="<?php echo esc_attr(oai_chatbox_pro()->settings_key); ?>[max_file_size_mb]" value="<?php echo esc_attr($settings['max_file_size_mb']); ?>"></td></tr>
                    <tr><th>Rate limit per minute</th><td><input class="small-text" type="number" min="1" name="<?php echo esc_attr(oai_chatbox_pro()->settings_key); ?>[rate_limit_per_minute]" value="<?php echo esc_attr($settings['rate_limit_per_minute']); ?>"></td></tr>
                    <tr><th>Sound volume</th><td><input class="small-text" step="0.05" min="0" max="1" type="number" name="<?php echo esc_attr(oai_chatbox_pro()->settings_key); ?>[sound_volume]" value="<?php echo esc_attr($settings['sound_volume']); ?>"></td></tr>
                    <tr><th>Timezone</th><td><input class="regular-text" type="text" name="<?php echo esc_attr(oai_chatbox_pro()->settings_key); ?>[timezone]" value="<?php echo esc_attr($settings['timezone']); ?>"></td></tr>
                </table>
            </div>
        </div>
        <?php submit_button('Save settings'); ?>
    </form>
</div>
