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

<div class="banner-other <?php echo $slug; ?>">
    <div class="inner">
        <div class="banner-list">
            <div class="banner-item">
                <div class="image-banner">
                    <picture class="image">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image15_pc.png">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image15_pc.png">
                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/top_image15_pc.png" alt="">
                    </picture>
                </div>
                <div class="info">
                    <h4 class="title"><span>お役立ち資料</span></h4>
                    <p>外国人材に関するサービス活用方法や、<br/>特定技能在留外国人推移などの資料が無料でダウンロード可能。</p>
                </div>
                <div class="link-page">
                    <a href="#">詳しく見る ＞</a>
                </div>
            </div>
            <div class="banner-item">
                <div class="image-banner">
                    <picture class="image">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image16_pc.png">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image16_pc.png">
                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/top_image16_pc.png" alt="">
                    </picture>
                </div>
                <div class="info">
                    <h4 class="title"><span>セミナー</span></h4>
                    <p>外国人採用に関するセミナーを<br/>
                        様々なテーマで開催<br/>
                        過去セミナーの動画もダウンロード可能</p>
                </div>
                <div class="link-page">
                    <a href="#">詳しく見る ＞</a>
                </div>
            </div>
        </div>
    </div>
</div>
