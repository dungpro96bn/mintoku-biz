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

<div class="support <?php echo $slug; ?> <?php if($slug == "life-support" || $slug == "edpoke"){echo 'price-item02';} ?>">
    <div class="inner">
        <div class="reason-content">
            <div class="reason-info">
                <h2 class="heading-block">
                    <span>SUPPORT</span>
                </h2>
                <h3 class="title">導入後のサポート</h3>
                <p class="text">スムーズにご利用いただくために、<br/>各種サポートを<br class="sp-br"/>ご用意しております</p>
                <div class="link-page">
                    <a href="<?php echo home_url(); ?>/report_download/"><span>資料ダウンロード</span><span class="icon">＞</span></a>
                    <a href="<?php echo home_url(); ?>/contact/"><span>お問い合わせ</span><span class="icon">＞</span></a>
                </div>
            </div>
            <div class="reason-image">
                <?php if($slug == "life-support" || $slug == "edpoke" || $slug == "translate" || $slug == "consultation" || $slug == "camcat"): ?>
                    <picture class="image">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/support_image02_pc.png 2x">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/support_image02_pc.png 2x">
                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/support_image02_pc.png" alt="">
                    </picture>
                <?php else: ?>
                    <picture class="image">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image14_pc.png 2x">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image14_pc.png 2x">
                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/top_image14_pc.png" alt="">
                    </picture>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
