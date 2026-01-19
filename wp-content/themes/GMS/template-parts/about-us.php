
<?php
$current_object = get_queried_object();
$slug = '';

if (is_page()) {
    $slug = $current_object->post_name;
} elseif (is_single()) {
    $slug = $current_object->post_name;
}
?>

<div class="about-us <?php echo $slug; ?>">
    <div class="about-content">
        <div class="about-header">
            <p class="title-box">ミントクの一括サポート</p>
        </div>
        <div class="about-info">
            <div class="about-image">
                <picture class="image">
                    <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image02_pc.png 2x">
                    <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/top_image02_pc.png" alt="">
                </picture>
            </div>
            <div class="text-info">
                <p class="text">外国人労働者の入国から帰国まで、<br/>
                    ビザ申請・雇用契約・生活支援を<br/>
                    一括サポートできます。</p>
                <p class="text">企業の労働力不足を解消し、<br/>
                    安心と効率を提供します。</p>
            </div>
            <div class="about-item item01">
                <picture class="image">
                    <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image03_sp.png 2x">
                    <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image03_pc.png 2x">
                    <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/top_image03_pc.png" alt="">
                </picture>
                <div class="info">
                    <p class="t1">採用効率を</p>
                    <p class="t2">最大化</p>
                </div>
            </div>
            <div class="about-item item02">
                <picture class="image">
                    <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image04_sp.png 2x">
                    <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image04_pc.png 2x">
                    <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/top_image04_pc.png" alt="">
                </picture>
                <div class="info">
                    <p class="t1">一元化により</p>
                    <p class="t2">中間労務コストを<br/>カット</p>
                </div>
            </div>
            <div class="about-item item03">
                <picture class="image">
                    <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image05_sp.png 2x">
                    <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image05_pc.png 2x">
                    <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/top_image05_pc.png" alt="">
                </picture>
                <div class="info">
                    <p class="t1">作業効率・</p>
                    <p class="t2">生産性をUP</p>
                </div>
            </div>
        </div>
    </div>

    <picture class="icon-pos image-icon06">
        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/main/yellow.png 2x">
        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/main/orange.png 2x">
        <img class="sizes" data-aos="fade-up-left" src="<?php bloginfo('template_directory'); ?>/assets/images/main/orange.png" alt="">
    </picture>
    <div class="icon-pos image-icon07">
        <picture class="image">
            <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/main/green_b.png 2x">
            <img class="sizes" data-aos="fade-up-left" src="<?php bloginfo('template_directory'); ?>/assets/images/main/green_b.png" alt="">
        </picture>
    </div>
    <picture class="icon-pos image-icon08">
        <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/main/pink_b.png 2x">
        <img class="sizes" data-aos="fade-right" src="<?php bloginfo('template_directory'); ?>/assets/images/main/pink_b.png" alt="">
    </picture>

</div>