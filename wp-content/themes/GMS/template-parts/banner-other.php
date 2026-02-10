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
$slugs = ["translate", "camcat", "life-support", "maetra", "videostep", "edpoke", "vr"];
?>

<div class="banner-other <?php echo $slug; ?>">
    <div class="inner">
        <div class="banner-list">
            <div class="banner-item">
                <div class="info">
                    <picture class="image">
                        <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/banner-orther-icon01.png 2x">
                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/banner-orther-icon01.png" alt="">
                    </picture>
                    <h4 class="title">お役立ち資料</h4>
                    <p>外国人材に関するサービス活用方法や、<br/>特定技能在留外国人推移などの資料が<br class="sp-br"/>無料でダウンロード可能</p>
                </div>
                <div class="link-page">
                    <a href="<?php echo home_url(); ?>/report_download/?category=white_paper">詳しく見る ＞</a>
                </div>
            </div>
            <div class="banner-item">
                <div class="info">
                    <picture class="image">
                        <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/banner-orther-icon02.png 2x">
                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/banner-orther-icon02.png" alt="">
                    </picture>
                    <h4 class="title">セミナー</h4>
                    <p>外国人採用に関するセミナーをさまざまなテーマで開催<br class="pc-br"/>過去セミナーの動画も無料でダウンロード可能</p>
                </div>
                <div class="link-page">
                    <a href="<?php echo home_url(); ?>/seminar/">詳しく見る ＞</a>
                </div>
            </div>
        </div>
    </div>
</div>
