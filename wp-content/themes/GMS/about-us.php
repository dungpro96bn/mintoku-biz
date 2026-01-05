
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
            <h2 class="heading en">ALL IN ONE SOLUTION</h2>
            <h4 class="ttl">すべてのフェーズで企業と<br class="sp-br"/>人材をサポートする<br class="sp-br"/>オールインワンソリューション</h4>
        </div>
        <div class="about-info">
            <div class="text-info">
                <p class="text">私たちの“ ALL IN ONE SOLUTION”は、<br class="pc-br"/>外<br class="sp-br"/>国人労働者の入国から帰国までの<br class="pc-br"/>すべてのプロセスを一元化し、<br class="pc-br"/>スムーズで効率的な手続きを実現する<br class="pc-br"/>包括的なサポートです。<br/>
                    ビザ申請から雇用契約、生活支援まで、<br class="pc-br"/>あらゆる課題を一貫して解決し、<br class="pc-br"/>安心と信頼を提供します。<br/>
                    これにより、企業が持つ<br class="pc-br"/>労働力不足の課題を解消し、<br class="pc-br"/>安定した成長をサポートします。</p>
            </div>
            <div class="about-image">
                <picture class="image">
                    <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image02_pc.png 2x">
                    <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/top_image02_pc.png" alt="">
                </picture>
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
</div>