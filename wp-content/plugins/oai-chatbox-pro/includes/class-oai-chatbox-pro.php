<?php
if (!defined('ABSPATH')) {
    exit;
}

class OAI_Chatbox_Pro {
    private static $instance = null;
    public $db;
    public $table_conversations;
    public $table_messages;
    public $table_notes;
    public $settings_key = 'oai_chatbox_pro_settings';

    public static function instance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function __construct() {
        global $wpdb;
        $this->db = $wpdb;
        $this->table_conversations = $wpdb->prefix . 'oai_chat_conversations';
        $this->table_messages = $wpdb->prefix . 'oai_chat_messages';
        $this->table_notes = $wpdb->prefix . 'oai_chat_notes';

        add_action('init', [$this, 'load_textdomain']);
        add_action('init', [$this, 'register_post_statuses']);
        add_action('wp_enqueue_scripts', [$this, 'enqueue_frontend_assets']);
        add_action('admin_enqueue_scripts', [$this, 'enqueue_admin_assets']);
        add_action('admin_menu', [$this, 'register_admin_menu']);
        add_action('admin_init', [$this, 'register_settings']);
        add_action('wp_footer', [$this, 'render_chat_widget']);
        add_filter('plugin_action_links_' . plugin_basename(OAI_CHATBOX_PRO_FILE), [$this, 'plugin_action_links']);
        add_filter('admin_title', [$this, 'maybe_set_admin_title'], 10, 2);

        add_action('wp_ajax_oai_chat_start_conversation', [$this, 'ajax_start_conversation']);
        add_action('wp_ajax_nopriv_oai_chat_start_conversation', [$this, 'ajax_start_conversation']);
        add_action('wp_ajax_oai_chat_send_message', [$this, 'ajax_send_message']);
        add_action('wp_ajax_nopriv_oai_chat_send_message', [$this, 'ajax_send_message']);
        add_action('wp_ajax_oai_chat_fetch_messages', [$this, 'ajax_fetch_messages']);
        add_action('wp_ajax_nopriv_oai_chat_fetch_messages', [$this, 'ajax_fetch_messages']);
        add_action('wp_ajax_oai_chat_mark_seen', [$this, 'ajax_mark_seen']);
        add_action('wp_ajax_nopriv_oai_chat_mark_seen', [$this, 'ajax_mark_seen']);
        add_action('wp_ajax_oai_chat_typing', [$this, 'ajax_typing']);
        add_action('wp_ajax_nopriv_oai_chat_typing', [$this, 'ajax_typing']);
        add_action('wp_ajax_oai_chat_leave_offline_message', [$this, 'ajax_leave_offline_message']);
        add_action('wp_ajax_nopriv_oai_chat_leave_offline_message', [$this, 'ajax_leave_offline_message']);
        add_action('wp_ajax_oai_chat_rate_conversation', [$this, 'ajax_rate_conversation']);
        add_action('wp_ajax_nopriv_oai_chat_rate_conversation', [$this, 'ajax_rate_conversation']);

        add_action('wp_ajax_oai_admin_chat_list', [$this, 'ajax_admin_chat_list']);
        add_action('wp_ajax_oai_admin_chat_detail', [$this, 'ajax_admin_chat_detail']);
        add_action('wp_ajax_oai_admin_send_reply', [$this, 'ajax_admin_send_reply']);
        add_action('wp_ajax_oai_admin_update_conversation', [$this, 'ajax_admin_update_conversation']);
        add_action('wp_ajax_oai_admin_add_note', [$this, 'ajax_admin_add_note']);
        add_action('wp_ajax_oai_admin_export_csv', [$this, 'ajax_admin_export_csv']);
        add_action('wp_ajax_oai_admin_stats', [$this, 'ajax_admin_stats']);

        add_action('rest_api_init', [$this, 'register_rest_routes']);
        add_action('oai_chatbox_cleanup', [$this, 'cleanup_presence']);
        add_filter('cron_schedules', [$this, 'register_cron_schedules']);

        if (!wp_next_scheduled('oai_chatbox_cleanup')) {
            wp_schedule_event(time() + 300, 'five_minutes', 'oai_chatbox_cleanup');
        }
    }

    public static function activate() {
        global $wpdb;
        require_once ABSPATH . 'wp-admin/includes/upgrade.php';
        $charset_collate = $wpdb->get_charset_collate();

        $table_conversations = $wpdb->prefix . 'oai_chat_conversations';
        $table_messages = $wpdb->prefix . 'oai_chat_messages';
        $table_notes = $wpdb->prefix . 'oai_chat_notes';

        $sql1 = "CREATE TABLE $table_conversations (
            id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
            conversation_token VARCHAR(100) NOT NULL,
            visitor_name VARCHAR(190) NULL,
            visitor_email VARCHAR(190) NULL,
            visitor_phone VARCHAR(60) NULL,
            status VARCHAR(30) NOT NULL DEFAULT 'new',
            tag VARCHAR(50) NOT NULL DEFAULT 'support',
            assigned_user_id BIGINT UNSIGNED NULL,
            source_url TEXT NULL,
            source_ref VARCHAR(190) NULL,
            visitor_ip VARCHAR(100) NULL,
            user_agent TEXT NULL,
            language_code VARCHAR(20) NULL,
            last_seen_at DATETIME NULL,
            last_message_at DATETIME NULL,
            customer_unread INT NOT NULL DEFAULT 0,
            admin_unread INT NOT NULL DEFAULT 0,
            customer_typing_until DATETIME NULL,
            admin_typing_until DATETIME NULL,
            is_online TINYINT(1) NOT NULL DEFAULT 1,
            rating TINYINT NULL,
            feedback TEXT NULL,
            meta LONGTEXT NULL,
            created_at DATETIME NOT NULL,
            updated_at DATETIME NOT NULL,
            PRIMARY KEY (id),
            UNIQUE KEY conversation_token (conversation_token),
            KEY status (status),
            KEY visitor_email (visitor_email(100)),
            KEY assigned_user_id (assigned_user_id),
            KEY last_message_at (last_message_at)
        ) $charset_collate;";

        $sql2 = "CREATE TABLE $table_messages (
            id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
            conversation_id BIGINT UNSIGNED NOT NULL,
            sender_type VARCHAR(20) NOT NULL,
            sender_user_id BIGINT UNSIGNED NULL,
            message_type VARCHAR(20) NOT NULL DEFAULT 'text',
            message_text LONGTEXT NULL,
            attachment_url TEXT NULL,
            attachment_name VARCHAR(255) NULL,
            attachment_mime VARCHAR(120) NULL,
            status VARCHAR(20) NOT NULL DEFAULT 'sent',
            seen_at DATETIME NULL,
            created_at DATETIME NOT NULL,
            PRIMARY KEY (id),
            KEY conversation_id (conversation_id),
            KEY sender_type (sender_type),
            KEY created_at (created_at)
        ) $charset_collate;";

        $sql3 = "CREATE TABLE $table_notes (
            id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
            conversation_id BIGINT UNSIGNED NOT NULL,
            user_id BIGINT UNSIGNED NOT NULL,
            note_text LONGTEXT NOT NULL,
            created_at DATETIME NOT NULL,
            PRIMARY KEY (id),
            KEY conversation_id (conversation_id)
        ) $charset_collate;";

        dbDelta($sql1);
        dbDelta($sql2);
        dbDelta($sql3);

        add_option('oai_chatbox_pro_installed_at', current_time('mysql'));

        if (!get_option('oai_chatbox_pro_settings')) {
            add_option('oai_chatbox_pro_settings', self::default_settings());
        }
    }

    public static function deactivate() {
        wp_clear_scheduled_hook('oai_chatbox_cleanup');
    }

    public function load_textdomain() {
        load_plugin_textdomain('oai-chatbox-pro', false, dirname(plugin_basename(OAI_CHATBOX_PRO_FILE)) . '/languages');
    }

    public function register_post_statuses() {}

    public function register_cron_schedules($schedules) {
        $schedules['five_minutes'] = [
            'interval' => 300,
            'display'  => __('Every Five Minutes', 'oai-chatbox-pro'),
        ];
        return $schedules;
    }

    public static function default_settings() {
        return [
            'enabled' => 1,
            'title' => 'Chat with us',
            'subtitle' => 'We usually reply in a few minutes.',
            'greeting_message' => 'Hi there 👋 How can we help you today?',
            'first_auto_reply' => 'Thanks for your message. Our team will reply as soon as possible.',
            'offline_message' => 'We are currently offline. Please leave your message and we will get back to you.',
            'placeholder' => 'Type your message…',
            'button_label' => 'Chat',
            'require_lead_before_chat' => 0,
            'enable_file_upload' => 1,
            'enable_emoji' => 1,
            'enable_notifications' => 1,
            'enable_rating' => 1,
            'enable_transcript' => 1,
            'business_hours' => [
                'monday' => ['enabled' => 1, 'start' => '09:00', 'end' => '18:00'],
                'tuesday' => ['enabled' => 1, 'start' => '09:00', 'end' => '18:00'],
                'wednesday' => ['enabled' => 1, 'start' => '09:00', 'end' => '18:00'],
                'thursday' => ['enabled' => 1, 'start' => '09:00', 'end' => '18:00'],
                'friday' => ['enabled' => 1, 'start' => '09:00', 'end' => '18:00'],
                'saturday' => ['enabled' => 0, 'start' => '09:00', 'end' => '18:00'],
                'sunday' => ['enabled' => 0, 'start' => '09:00', 'end' => '18:00'],
            ],
            'timezone' => wp_timezone_string() ?: 'UTC',
            'allowed_file_types' => 'jpg,jpeg,png,gif,pdf,doc,docx,txt,webp',
            'max_file_size_mb' => 5,
            'rate_limit_per_minute' => 10,
            'sound_volume' => 0.15,
            'translations' => [
                'en' => [
                    'offline' => 'Offline',
                    'online' => 'Online',
                    'leave_message' => 'Leave a message',
                    'start_chat' => 'Start chat',
                    'name' => 'Name',
                    'email' => 'Email',
                    'phone' => 'Phone',
                    'send' => 'Send',
                ],
                'vi' => [
                    'offline' => 'Ngoại tuyến',
                    'online' => 'Đang online',
                    'leave_message' => 'Để lại lời nhắn',
                    'start_chat' => 'Bắt đầu chat',
                    'name' => 'Tên',
                    'email' => 'Email',
                    'phone' => 'Số điện thoại',
                    'send' => 'Gửi',
                ],
            ],
            'faq' => [
                'What are your working hours?',
                'Can I get a quotation?',
                'How long does support take?',
            ],
        ];
    }

    public function get_settings() {
        return wp_parse_args(get_option($this->settings_key, []), self::default_settings());
    }

    public function plugin_action_links($links) {
        array_unshift($links, '<a href="' . esc_url(admin_url('admin.php?page=oai-chatbox-pro-settings')) . '">' . esc_html__('Settings', 'oai-chatbox-pro') . '</a>');
        return $links;
    }

    public function enqueue_frontend_assets() {
        $settings = $this->get_settings();
        if (empty($settings['enabled'])) {
            return;
        }

        wp_enqueue_style('oai-chatbox-pro-front', OAI_CHATBOX_PRO_URL . 'assets/css/front.css', [], OAI_CHATBOX_PRO_VERSION);
        wp_enqueue_script('oai-chatbox-pro-front', OAI_CHATBOX_PRO_URL . 'assets/js/front.js', ['jquery'], OAI_CHATBOX_PRO_VERSION, true);

        wp_localize_script('oai-chatbox-pro-front', 'oaiChatboxPro', [
            'ajaxUrl' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('oai_chat_front_nonce'),
            'settings' => $settings,
            'pageTitle' => wp_get_document_title(),
            'pageUrl' => home_url(add_query_arg([], $GLOBALS['wp']->request ?? '')),
            'locale' => determine_locale(),
            'isLoggedIn' => is_user_logged_in(),
            'currentUser' => is_user_logged_in() ? wp_get_current_user()->display_name : '',
        ]);
    }

    public function enqueue_admin_assets($hook) {
        if (strpos($hook, 'oai-chatbox-pro') === false) {
            return;
        }
        wp_enqueue_style('oai-chatbox-pro-admin', OAI_CHATBOX_PRO_URL . 'assets/css/admin.css', [], OAI_CHATBOX_PRO_VERSION);
        wp_enqueue_script('oai-chatbox-pro-admin', OAI_CHATBOX_PRO_URL . 'assets/js/admin.js', ['jquery'], OAI_CHATBOX_PRO_VERSION, true);
        wp_localize_script('oai-chatbox-pro-admin', 'oaiChatboxAdmin', [
            'ajaxUrl' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('oai_chat_admin_nonce'),
            'currentUserId' => get_current_user_id(),
        ]);
    }

    public function register_admin_menu() {
        $unread = (int) $this->db->get_var("SELECT SUM(admin_unread) FROM {$this->table_conversations}");
        $menu_title = 'Chat Inbox';
        if ($unread > 0) {
            $menu_title .= ' <span class="awaiting-mod count-' . $unread . '"><span class="pending-count">' . $unread . '</span></span>';
        }
        add_menu_page(
            __('Chat Inbox', 'oai-chatbox-pro'),
            $menu_title,
            'edit_posts',
            'oai-chatbox-pro',
            [$this, 'render_admin_inbox_page'],
            'dashicons-format-chat',
            26
        );

        add_submenu_page('oai-chatbox-pro', __('Inbox', 'oai-chatbox-pro'), __('Inbox', 'oai-chatbox-pro'), 'edit_posts', 'oai-chatbox-pro', [$this, 'render_admin_inbox_page']);
        add_submenu_page('oai-chatbox-pro', __('Settings', 'oai-chatbox-pro'), __('Settings', 'oai-chatbox-pro'), 'manage_options', 'oai-chatbox-pro-settings', [$this, 'render_settings_page']);
    }

    public function maybe_set_admin_title($admin_title, $title) {
        return $admin_title;
    }

    public function register_settings() {
        register_setting('oai_chatbox_pro_group', $this->settings_key, [$this, 'sanitize_settings']);
    }

    public function sanitize_settings($input) {
        $defaults = self::default_settings();
        $output = wp_parse_args((array) $input, $defaults);
        $output['enabled'] = !empty($input['enabled']) ? 1 : 0;
        $output['require_lead_before_chat'] = !empty($input['require_lead_before_chat']) ? 1 : 0;
        $output['enable_file_upload'] = !empty($input['enable_file_upload']) ? 1 : 0;
        $output['enable_emoji'] = !empty($input['enable_emoji']) ? 1 : 0;
        $output['enable_notifications'] = !empty($input['enable_notifications']) ? 1 : 0;
        $output['enable_rating'] = !empty($input['enable_rating']) ? 1 : 0;
        $output['enable_transcript'] = !empty($input['enable_transcript']) ? 1 : 0;

        foreach (['title','subtitle','greeting_message','first_auto_reply','offline_message','placeholder','button_label','allowed_file_types','timezone'] as $field) {
            $output[$field] = sanitize_text_field($output[$field] ?? '');
        }
        $output['max_file_size_mb'] = max(1, (int) ($output['max_file_size_mb'] ?? 5));
        $output['rate_limit_per_minute'] = max(1, (int) ($output['rate_limit_per_minute'] ?? 10));
        $output['sound_volume'] = min(1, max(0, (float) ($output['sound_volume'] ?? 0.15)));
        return $output;
    }

    public function render_chat_widget() {
        $settings = $this->get_settings();
        if (empty($settings['enabled'])) {
            return;
        }
        include OAI_CHATBOX_PRO_PATH . 'templates/chat-widget.php';
    }

    public function render_admin_inbox_page() {
        if (!current_user_can('edit_posts')) {
            wp_die(__('You do not have permission to access this page.', 'oai-chatbox-pro'));
        }
        include OAI_CHATBOX_PRO_PATH . 'templates/admin-inbox.php';
    }

    public function render_settings_page() {
        if (!current_user_can('manage_options')) {
            wp_die(__('You do not have permission to access this page.', 'oai-chatbox-pro'));
        }
        $settings = $this->get_settings();
        include OAI_CHATBOX_PRO_PATH . 'templates/admin-settings.php';
    }

    private function verify_front_nonce() {
        check_ajax_referer('oai_chat_front_nonce', 'nonce');
    }

    private function verify_admin_nonce() {
        check_ajax_referer('oai_chat_admin_nonce', 'nonce');
        if (!current_user_can('edit_posts')) {
            wp_send_json_error(['message' => __('Permission denied.', 'oai-chatbox-pro')], 403);
        }
    }

    private function get_client_ip() {
        foreach (['HTTP_CF_CONNECTING_IP', 'HTTP_X_FORWARDED_FOR', 'REMOTE_ADDR'] as $key) {
            if (!empty($_SERVER[$key])) {
                return sanitize_text_field(explode(',', $_SERVER[$key])[0]);
            }
        }
        return '';
    }

    public function is_online_now() {
        $settings = $this->get_settings();
        $timezone = !empty($settings['timezone']) ? new DateTimeZone($settings['timezone']) : wp_timezone();
        $now = new DateTime('now', $timezone);
        $day = strtolower($now->format('l'));
        $hours = $settings['business_hours'][$day] ?? null;
        if (!$hours || empty($hours['enabled'])) {
            return false;
        }
        $current = $now->format('H:i');
        return ($current >= $hours['start'] && $current <= $hours['end']);
    }

    private function can_send_more_messages($token) {
        $settings = $this->get_settings();
        $rate_limit = max(1, (int) $settings['rate_limit_per_minute']);
        $conversation = $this->get_conversation_by_token($token);
        if (!$conversation) {
            return true;
        }
        $since = gmdate('Y-m-d H:i:s', time() - 60);
        $count = (int) $this->db->get_var($this->db->prepare(
            "SELECT COUNT(*) FROM {$this->table_messages} WHERE conversation_id = %d AND sender_type = 'visitor' AND created_at >= %s",
            $conversation['id'],
            $since
        ));
        return $count < $rate_limit;
    }

    private function get_or_create_token() {
        $token = isset($_REQUEST['conversation_token']) ? sanitize_text_field(wp_unslash($_REQUEST['conversation_token'])) : '';
        if (!$token) {
            $token = wp_generate_uuid4();
        }
        return $token;
    }

    public function get_conversation_by_token($token) {
        return $this->db->get_row($this->db->prepare("SELECT * FROM {$this->table_conversations} WHERE conversation_token = %s", $token), ARRAY_A);
    }

    private function normalize_meta($meta) {
        if (is_string($meta)) {
            $decoded = json_decode($meta, true);
            return is_array($decoded) ? $decoded : [];
        }
        return is_array($meta) ? $meta : [];
    }

    private function create_conversation($token, $payload = []) {
        $now = current_time('mysql');
        $meta = [
            'referrer' => esc_url_raw($payload['source_ref'] ?? wp_get_referer()),
            'device' => sanitize_text_field($_SERVER['HTTP_USER_AGENT'] ?? ''),
        ];
        $this->db->insert($this->table_conversations, [
            'conversation_token' => $token,
            'visitor_name' => sanitize_text_field($payload['name'] ?? ''),
            'visitor_email' => sanitize_email($payload['email'] ?? ''),
            'visitor_phone' => sanitize_text_field($payload['phone'] ?? ''),
            'status' => 'new',
            'tag' => 'support',
            'source_url' => esc_url_raw($payload['source_url'] ?? ''),
            'source_ref' => esc_url_raw($payload['source_ref'] ?? ''),
            'visitor_ip' => $this->get_client_ip(),
            'user_agent' => sanitize_textarea_field($_SERVER['HTTP_USER_AGENT'] ?? ''),
            'language_code' => sanitize_text_field($payload['language_code'] ?? determine_locale()),
            'last_seen_at' => $now,
            'last_message_at' => $now,
            'is_online' => $this->is_online_now() ? 1 : 0,
            'meta' => wp_json_encode($meta),
            'created_at' => $now,
            'updated_at' => $now,
        ]);
        return $this->get_conversation_by_token($token);
    }

    private function touch_conversation($conversation_id, $data = []) {
        $data['updated_at'] = current_time('mysql');
        $this->db->update($this->table_conversations, $data, ['id' => $conversation_id]);
    }

    private function insert_message($conversation_id, $sender_type, $message_text = '', $args = []) {
        $now = current_time('mysql');
        $status = $args['status'] ?? 'sent';
        $message_type = $args['message_type'] ?? 'text';
        $inserted = $this->db->insert($this->table_messages, [
            'conversation_id' => $conversation_id,
            'sender_type' => $sender_type,
            'sender_user_id' => isset($args['sender_user_id']) ? (int) $args['sender_user_id'] : null,
            'message_type' => $message_type,
            'message_text' => wp_kses_post($message_text),
            'attachment_url' => esc_url_raw($args['attachment_url'] ?? ''),
            'attachment_name' => sanitize_file_name($args['attachment_name'] ?? ''),
            'attachment_mime' => sanitize_text_field($args['attachment_mime'] ?? ''),
            'status' => sanitize_text_field($status),
            'created_at' => $now,
        ]);

        if ($inserted) {
            $message_id = $this->db->insert_id;
            $unread_field = $sender_type === 'visitor' ? 'admin_unread' : 'customer_unread';
            $conversation = $this->db->get_row($this->db->prepare("SELECT $unread_field FROM {$this->table_conversations} WHERE id = %d", $conversation_id), ARRAY_A);
            $this->touch_conversation($conversation_id, [
                'last_message_at' => $now,
                $unread_field => (int)($conversation[$unread_field] ?? 0) + 1,
                'status' => $sender_type === 'visitor' ? 'new' : 'open',
                'is_online' => $this->is_online_now() ? 1 : 0,
            ]);
            return $message_id;
        }

        return 0;
    }

    private function maybe_send_auto_messages($conversation) {
        $settings = $this->get_settings();
        $count = (int) $this->db->get_var($this->db->prepare("SELECT COUNT(*) FROM {$this->table_messages} WHERE conversation_id = %d", $conversation['id']));
        if ($count === 0 && !empty($settings['greeting_message'])) {
            $this->insert_message($conversation['id'], 'system', $settings['greeting_message'], ['status' => 'seen']);
        }
    }

    private function maybe_first_reply($conversation_id) {
        $settings = $this->get_settings();
        $visitor_count = (int) $this->db->get_var($this->db->prepare("SELECT COUNT(*) FROM {$this->table_messages} WHERE conversation_id = %d AND sender_type = 'visitor'", $conversation_id));
        $admin_count = (int) $this->db->get_var($this->db->prepare("SELECT COUNT(*) FROM {$this->table_messages} WHERE conversation_id = %d AND sender_type IN ('admin','system')", $conversation_id));
        if ($visitor_count === 1 && $admin_count <= 1 && !empty($settings['first_auto_reply'])) {
            $this->insert_message($conversation_id, 'system', $settings['first_auto_reply'], ['status' => 'seen']);
            $this->maybe_send_admin_email_alert($conversation_id);
        }
    }

    private function maybe_send_admin_email_alert($conversation_id) {
        $conversation = $this->db->get_row($this->db->prepare("SELECT * FROM {$this->table_conversations} WHERE id = %d", $conversation_id), ARRAY_A);
        if (!$conversation) {
            return;
        }
        $admin_email = get_option('admin_email');
        $subject = sprintf('[%s] New chat from %s', get_bloginfo('name'), $conversation['visitor_name'] ?: 'Visitor');
        $body = "A new chat needs attention.\n\n"
            . 'Name: ' . ($conversation['visitor_name'] ?: 'Visitor') . "\n"
            . 'Email: ' . ($conversation['visitor_email'] ?: '-') . "\n"
            . 'Page: ' . ($conversation['source_url'] ?: '-') . "\n"
            . 'Inbox: ' . admin_url('admin.php?page=oai-chatbox-pro');
        wp_mail($admin_email, $subject, $body);
    }

    private function handle_upload($file_key) {
        $settings = $this->get_settings();
        if (empty($settings['enable_file_upload']) || empty($_FILES[$file_key])) {
            return [];
        }
        $file = $_FILES[$file_key];
        if (!empty($file['error'])) {
            wp_send_json_error(['message' => __('Upload failed.', 'oai-chatbox-pro')], 400);
        }
        $allowed = array_map('trim', explode(',', strtolower($settings['allowed_file_types'])));
        $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        if (!in_array($ext, $allowed, true)) {
            wp_send_json_error(['message' => __('File type not allowed.', 'oai-chatbox-pro')], 400);
        }
        $max_size = ((int) $settings['max_file_size_mb']) * 1024 * 1024;
        if ($file['size'] > $max_size) {
            wp_send_json_error(['message' => __('File too large.', 'oai-chatbox-pro')], 400);
        }
        require_once ABSPATH . 'wp-admin/includes/file.php';
        $upload = wp_handle_upload($file, ['test_form' => false]);
        if (!empty($upload['error'])) {
            wp_send_json_error(['message' => $upload['error']], 400);
        }
        return [
            'attachment_url' => esc_url_raw($upload['url']),
            'attachment_name' => sanitize_file_name(basename($upload['file'])),
            'attachment_mime' => sanitize_text_field($upload['type']),
            'message_type' => str_starts_with($upload['type'], 'image/') ? 'image' : 'file',
        ];
    }

    private function get_messages($conversation_id, $limit = 100) {
        $rows = $this->db->get_results($this->db->prepare(
            "SELECT * FROM {$this->table_messages} WHERE conversation_id = %d ORDER BY id ASC LIMIT %d",
            $conversation_id,
            $limit
        ), ARRAY_A);

        return array_map(function($row) {
            $sender_name = 'Support';
            $avatar = '';
            if ($row['sender_type'] === 'visitor') {
                $sender_name = 'You';
                $avatar = 'https://www.gravatar.com/avatar/?d=mp&s=80';
            } elseif ($row['sender_type'] === 'admin') {
                $user = get_user_by('id', $row['sender_user_id']);
                $sender_name = $user ? $user->display_name : 'Agent';
                $avatar = get_avatar_url($row['sender_user_id']);
            } elseif ($row['sender_type'] === 'system') {
                $sender_name = 'Bot';
            }
            $row['sender_name'] = $sender_name;
            $row['avatar'] = $avatar;
            $row['time_human'] = mysql2date(get_option('time_format'), $row['created_at']);
            return $row;
        }, $rows);
    }

    public function ajax_start_conversation() {
        $this->verify_front_nonce();
        $token = $this->get_or_create_token();
        $conversation = $this->get_conversation_by_token($token);

        if (!$conversation) {
            $conversation = $this->create_conversation($token, [
                'name' => sanitize_text_field($_POST['name'] ?? ''),
                'email' => sanitize_email($_POST['email'] ?? ''),
                'phone' => sanitize_text_field($_POST['phone'] ?? ''),
                'source_url' => esc_url_raw($_POST['source_url'] ?? ''),
                'source_ref' => esc_url_raw($_POST['source_ref'] ?? ''),
                'language_code' => sanitize_text_field($_POST['language_code'] ?? determine_locale()),
            ]);
        } else {
            $this->touch_conversation($conversation['id'], ['last_seen_at' => current_time('mysql')]);
        }

        $this->maybe_send_auto_messages($conversation);
        $conversation = $this->get_conversation_by_token($token);

        wp_send_json_success([
            'conversation_token' => $token,
            'conversation' => $conversation,
            'messages' => $this->get_messages($conversation['id']),
            'online' => $this->is_online_now(),
        ]);
    }

    public function ajax_send_message() {
        $this->verify_front_nonce();
        $token = $this->get_or_create_token();
        if (!$this->can_send_more_messages($token)) {
            wp_send_json_error(['message' => __('You are sending messages too quickly. Please wait a moment.', 'oai-chatbox-pro')], 429);
        }
        $conversation = $this->get_conversation_by_token($token);
        if (!$conversation) {
            $conversation = $this->create_conversation($token, [
                'name' => sanitize_text_field($_POST['name'] ?? ''),
                'email' => sanitize_email($_POST['email'] ?? ''),
                'phone' => sanitize_text_field($_POST['phone'] ?? ''),
                'source_url' => esc_url_raw($_POST['source_url'] ?? ''),
                'source_ref' => esc_url_raw($_POST['source_ref'] ?? ''),
                'language_code' => sanitize_text_field($_POST['language_code'] ?? determine_locale()),
            ]);
            $this->maybe_send_auto_messages($conversation);
        }

        $message = isset($_POST['message']) ? wp_kses_post(wp_unslash($_POST['message'])) : '';
        $upload = $this->handle_upload('attachment');
        if ($message === '' && empty($upload)) {
            wp_send_json_error(['message' => __('Message cannot be empty.', 'oai-chatbox-pro')], 400);
        }

        $id = $this->insert_message($conversation['id'], 'visitor', $message, array_merge(['status' => 'sent'], $upload));
        $this->touch_conversation($conversation['id'], ['last_seen_at' => current_time('mysql')]);
        $this->maybe_first_reply($conversation['id']);

        wp_send_json_success([
            'message_id' => $id,
            'conversation_token' => $token,
            'messages' => $this->get_messages($conversation['id']),
            'online' => $this->is_online_now(),
        ]);
    }

    public function ajax_fetch_messages() {
        $this->verify_front_nonce();
        $token = $this->get_or_create_token();
        $conversation = $this->get_conversation_by_token($token);
        if (!$conversation) {
            wp_send_json_success([
                'messages' => [],
                'conversation' => null,
                'typing' => null,
                'online' => $this->is_online_now(),
            ]);
        }

        $this->touch_conversation($conversation['id'], ['last_seen_at' => current_time('mysql')]);
        $conversation = $this->get_conversation_by_token($token);
        $typing = !empty($conversation['admin_typing_until']) && strtotime($conversation['admin_typing_until']) > time();

        wp_send_json_success([
            'messages' => $this->get_messages($conversation['id']),
            'conversation' => $conversation,
            'typing' => $typing ? 'Agent is typing…' : '',
            'online' => $this->is_online_now(),
        ]);
    }

    public function ajax_mark_seen() {
        $this->verify_front_nonce();
        $token = $this->get_or_create_token();
        $conversation = $this->get_conversation_by_token($token);
        if (!$conversation) {
            wp_send_json_success();
        }
        $now = current_time('mysql');
        $this->db->query($this->db->prepare(
            "UPDATE {$this->table_messages} SET status = 'seen', seen_at = %s WHERE conversation_id = %d AND sender_type IN ('admin','system') AND status != 'seen'",
            $now,
            $conversation['id']
        ));
        $this->touch_conversation($conversation['id'], ['customer_unread' => 0]);
        wp_send_json_success();
    }

    public function ajax_typing() {
        $this->verify_front_nonce();
        $token = $this->get_or_create_token();
        $conversation = $this->get_conversation_by_token($token);
        if (!$conversation) {
            wp_send_json_success();
        }
        $field = (!empty($_POST['who']) && $_POST['who'] === 'admin' && current_user_can('edit_posts')) ? 'admin_typing_until' : 'customer_typing_until';
        $until = gmdate('Y-m-d H:i:s', time() + 8);
        $this->touch_conversation($conversation['id'], [$field => $until]);
        wp_send_json_success();
    }

    public function ajax_leave_offline_message() {
        $this->verify_front_nonce();
        $token = $this->get_or_create_token();
        $conversation = $this->get_conversation_by_token($token);
        if (!$conversation) {
            $conversation = $this->create_conversation($token, [
                'name' => sanitize_text_field($_POST['name'] ?? ''),
                'email' => sanitize_email($_POST['email'] ?? ''),
                'phone' => sanitize_text_field($_POST['phone'] ?? ''),
                'source_url' => esc_url_raw($_POST['source_url'] ?? ''),
                'source_ref' => esc_url_raw($_POST['source_ref'] ?? ''),
            ]);
        }
        $message = isset($_POST['message']) ? sanitize_textarea_field(wp_unslash($_POST['message'])) : '';
        if ($message === '') {
            wp_send_json_error(['message' => __('Please enter a message.', 'oai-chatbox-pro')], 400);
        }
        $this->insert_message($conversation['id'], 'visitor', $message, ['status' => 'sent']);
        $this->touch_conversation($conversation['id'], ['status' => 'new', 'is_online' => 0]);
        $this->maybe_send_admin_email_alert($conversation['id']);
        wp_send_json_success(['message' => __('Your message has been received.', 'oai-chatbox-pro')]);
    }

    public function ajax_rate_conversation() {
        $this->verify_front_nonce();
        $token = $this->get_or_create_token();
        $conversation = $this->get_conversation_by_token($token);
        if (!$conversation) {
            wp_send_json_error(['message' => __('Conversation not found.', 'oai-chatbox-pro')], 404);
        }
        $rating = max(1, min(5, (int) ($_POST['rating'] ?? 5)));
        $feedback = sanitize_textarea_field(wp_unslash($_POST['feedback'] ?? ''));
        $this->touch_conversation($conversation['id'], [
            'rating' => $rating,
            'feedback' => $feedback,
            'status' => 'closed',
        ]);
        wp_send_json_success(['message' => __('Thanks for your feedback!', 'oai-chatbox-pro')]);
    }

    public function ajax_admin_chat_list() {
        $this->verify_admin_nonce();
        $search = sanitize_text_field($_GET['s'] ?? '');
        $status = sanitize_text_field($_GET['status'] ?? '');
        $where = '1=1';
        $params = [];
        if ($search) {
            $where .= " AND (visitor_name LIKE %s OR visitor_email LIKE %s OR conversation_token LIKE %s)";
            $like = '%' . $this->db->esc_like($search) . '%';
            $params[] = $like;
            $params[] = $like;
            $params[] = $like;
        }
        if ($status) {
            $where .= " AND status = %s";
            $params[] = $status;
        }
        $sql = "SELECT * FROM {$this->table_conversations} WHERE $where ORDER BY last_message_at DESC LIMIT 100";
        $prepared = !empty($params) ? $this->db->prepare($sql, $params) : $sql;
        $items = $this->db->get_results($prepared, ARRAY_A);
        foreach ($items as &$item) {
            $item['last_message_preview'] = $this->db->get_var($this->db->prepare(
                "SELECT message_text FROM {$this->table_messages} WHERE conversation_id = %d ORDER BY id DESC LIMIT 1",
                $item['id']
            ));
        }
        wp_send_json_success(['items' => $items]);
    }

    public function ajax_admin_chat_detail() {
        $this->verify_admin_nonce();
        $id = (int) ($_GET['conversation_id'] ?? 0);
        $conversation = $this->db->get_row($this->db->prepare("SELECT * FROM {$this->table_conversations} WHERE id = %d", $id), ARRAY_A);
        if (!$conversation) {
            wp_send_json_error(['message' => __('Conversation not found.', 'oai-chatbox-pro')], 404);
        }
        $notes = $this->db->get_results($this->db->prepare(
            "SELECT n.*, u.display_name FROM {$this->table_notes} n LEFT JOIN {$this->db->users} u ON u.ID = n.user_id WHERE conversation_id = %d ORDER BY id DESC",
            $id
        ), ARRAY_A);
        $history = [];
        if (!empty($conversation['visitor_email'])) {
            $history = $this->db->get_results($this->db->prepare(
                "SELECT id, status, created_at, last_message_at FROM {$this->table_conversations} WHERE visitor_email = %s AND id != %d ORDER BY id DESC LIMIT 10",
                $conversation['visitor_email'],
                $id
            ), ARRAY_A);
        }
        $this->touch_conversation($id, ['admin_unread' => 0]);
        $this->db->query($this->db->prepare(
            "UPDATE {$this->table_messages} SET status = 'seen', seen_at = %s WHERE conversation_id = %d AND sender_type = 'visitor' AND status != 'seen'",
            current_time('mysql'),
            $id
        ));
        wp_send_json_success([
            'conversation' => $conversation,
            'messages' => $this->get_messages($id, 300),
            'notes' => $notes,
            'history' => $history,
        ]);
    }

    public function ajax_admin_send_reply() {
        $this->verify_admin_nonce();
        $conversation_id = (int) ($_POST['conversation_id'] ?? 0);
        $message = wp_kses_post(wp_unslash($_POST['message'] ?? ''));
        if (!$conversation_id || $message === '') {
            wp_send_json_error(['message' => __('Message is required.', 'oai-chatbox-pro')], 400);
        }
        $this->insert_message($conversation_id, 'admin', $message, [
            'sender_user_id' => get_current_user_id(),
            'status' => 'sent',
        ]);
        $this->touch_conversation($conversation_id, ['status' => 'open', 'assigned_user_id' => get_current_user_id()]);
        wp_send_json_success(['messages' => $this->get_messages($conversation_id, 300)]);
    }

    public function ajax_admin_update_conversation() {
        $this->verify_admin_nonce();
        $conversation_id = (int) ($_POST['conversation_id'] ?? 0);
        $data = [];
        foreach (['status','tag'] as $field) {
            if (isset($_POST[$field])) {
                $data[$field] = sanitize_text_field(wp_unslash($_POST[$field]));
            }
        }
        if (isset($_POST['assigned_user_id'])) {
            $data['assigned_user_id'] = (int) $_POST['assigned_user_id'];
        }
        if (!$conversation_id || empty($data)) {
            wp_send_json_error(['message' => __('Nothing to update.', 'oai-chatbox-pro')], 400);
        }
        $this->touch_conversation($conversation_id, $data);
        wp_send_json_success(['message' => __('Conversation updated.', 'oai-chatbox-pro')]);
    }

    public function ajax_admin_add_note() {
        $this->verify_admin_nonce();
        $conversation_id = (int) ($_POST['conversation_id'] ?? 0);
        $note = sanitize_textarea_field(wp_unslash($_POST['note'] ?? ''));
        if (!$conversation_id || $note === '') {
            wp_send_json_error(['message' => __('Note is required.', 'oai-chatbox-pro')], 400);
        }
        $this->db->insert($this->table_notes, [
            'conversation_id' => $conversation_id,
            'user_id' => get_current_user_id(),
            'note_text' => $note,
            'created_at' => current_time('mysql'),
        ]);
        wp_send_json_success(['message' => __('Note added.', 'oai-chatbox-pro')]);
    }

    public function ajax_admin_export_csv() {
        $this->verify_admin_nonce();
        $rows = $this->db->get_results("SELECT * FROM {$this->table_conversations} ORDER BY id DESC LIMIT 1000", ARRAY_A);
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="oai-chat-export-' . gmdate('Ymd-His') . '.csv"');
        $out = fopen('php://output', 'w');
        fputcsv($out, ['ID', 'Visitor', 'Email', 'Phone', 'Status', 'Tag', 'Assigned User', 'Rating', 'Last Message', 'Created']);
        foreach ($rows as $row) {
            fputcsv($out, [
                $row['id'],
                $row['visitor_name'],
                $row['visitor_email'],
                $row['visitor_phone'],
                $row['status'],
                $row['tag'],
                $row['assigned_user_id'],
                $row['rating'],
                $row['last_message_at'],
                $row['created_at'],
            ]);
        }
        fclose($out);
        exit;
    }

    public function ajax_admin_stats() {
        $this->verify_admin_nonce();
        $stats = [
            'total' => (int) $this->db->get_var("SELECT COUNT(*) FROM {$this->table_conversations}"),
            'new' => (int) $this->db->get_var("SELECT COUNT(*) FROM {$this->table_conversations} WHERE status = 'new'"),
            'open' => (int) $this->db->get_var("SELECT COUNT(*) FROM {$this->table_conversations} WHERE status = 'open'"),
            'closed' => (int) $this->db->get_var("SELECT COUNT(*) FROM {$this->table_conversations} WHERE status = 'closed'"),
            'unread' => (int) $this->db->get_var("SELECT COALESCE(SUM(admin_unread), 0) FROM {$this->table_conversations}"),
            'avg_rating' => (float) $this->db->get_var("SELECT COALESCE(AVG(rating), 0) FROM {$this->table_conversations} WHERE rating IS NOT NULL"),
        ];
        wp_send_json_success($stats);
    }

    public function register_rest_routes() {
        register_rest_route('oai-chatbox/v1', '/presence/(?P<token>[a-zA-Z0-9\-]+)', [
            'methods' => 'GET',
            'callback' => function($request) {
                $conversation = $this->get_conversation_by_token($request['token']);
                if (!$conversation) {
                    return rest_ensure_response(['online' => $this->is_online_now()]);
                }
                return rest_ensure_response([
                    'online' => $this->is_online_now(),
                    'customerTyping' => !empty($conversation['customer_typing_until']) && strtotime($conversation['customer_typing_until']) > time(),
                    'adminTyping' => !empty($conversation['admin_typing_until']) && strtotime($conversation['admin_typing_until']) > time(),
                ]);
            },
            'permission_callback' => '__return_true',
        ]);
    }

    public function cleanup_presence() {
        $threshold = gmdate('Y-m-d H:i:s', time() - 120);
        $this->db->query($this->db->prepare(
            "UPDATE {$this->table_conversations} SET customer_typing_until = NULL WHERE customer_typing_until < %s",
            $threshold
        ));
        $this->db->query($this->db->prepare(
            "UPDATE {$this->table_conversations} SET admin_typing_until = NULL WHERE admin_typing_until < %s",
            $threshold
        ));
    }
}
