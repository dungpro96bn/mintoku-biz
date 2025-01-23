<?php
$current_object = get_queried_object();
$slug = '';

if (is_page()) {
    $slug = $current_object->post_name;
} elseif (is_single()) {
    $slug = $current_object->post_name;
}
?>

<div class="support <?php echo $slug; ?>">
    <div class="inner">
        <div class="reason-content">
            <div class="reason-info">
                <h2 class="heading-block">
                    <span>SUPPORT</span>
                </h2>
                <h3 class="title">導入後のサポート</h3>
                <p class="text">スムーズにご利用いただくために、<br/>
                    各種サポートをご用意しております</p>
                <div class="link-page">
                    <a href="#"><span>資料ダウンロード</span><span class="icon">＞</span></a>
                    <a href="#"><span>お問い合わせ</span><span class="icon">＞</span></a>
                </div>
            </div>
            <div class="reason-image">
                <picture class="image">
                    <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/service-cloud-support-img01.png 2x">
                    <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/service-cloud-support-img01.png 2x">
                    <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/service-cloud-support-img01.png" alt="">
                </picture>
            </div>
        </div>
    </div>
</div>
