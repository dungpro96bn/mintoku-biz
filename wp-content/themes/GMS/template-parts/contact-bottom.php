<?php
$current_object = get_queried_object();
$slug = '';

if (is_page() || is_single()) {
    $slug = $current_object->post_name;
} elseif (is_category() || is_tag() || is_tax()) {
    $slug = $current_object->slug;
} elseif (is_post_type_archive()) {
    $slug = get_query_var('post_type');
} elseif (is_author()) {
    $slug = $current_object->user_nicename;
} elseif (is_date()) {
    $slug = get_query_var('year') . '-' . get_query_var('monthnum') . '-' . get_query_var('day');
}
?>

<div class="contact-bottom <?php echo $slug; ?>">
    <div class="contact-info">
        <div class="info-inner">
            <div class="info-text">
                <p>お悩み・課題に合わせて<br/>
                    活用方法をご案内いたします。<br/>
                    お気軽にお問い合わせください。</p>
            </div>
            <p class="tel">03-6738-9686</p>
            <p class="time">（平日：10時〜18時）</p>
        </div>
    </div>
    <div class="box-btn">
        <a href="/report_download/">
            <picture class="image">
                <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image17_pc.png">
                <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image17_pc.png">
                <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/top_image17_pc.png" alt="">
            </picture>
            <h4 class="title"><span class="orange">資料ダウンロード</span></h4>
        </a>
    </div>
    <div class="box-btn">
        <a href="/contact/"><picture class="image">
                <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image18_pc.png">
                <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image18_pc.png">
                <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/top_image18_pc.png" alt="">
            </picture>
            <h4 class="title"><span class="blue">お問い合わせ</span></h4>
        </a>
    </div>
</div>
