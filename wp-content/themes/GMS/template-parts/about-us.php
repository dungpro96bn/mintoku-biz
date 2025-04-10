
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
        <div class="about-info">
            <h2 class="heading-block en">
                <span>ABOUT US</span>
            </h2>
            <h3 class="title">“ALL IN ONE SOLUTION”</h3>
            <h4 class="ttl">全てのフェーズで<br/>企業と人材をサポートする<br/>オールインワンシステム</h4>
            <p class="text">私たちの“ ALL IN ONE SOLUTION ”は、外国人労働者の入国から帰国までのすべてのプロセスを一元化し、スムーズで効率的な手続きを実現する包括的なサポートです。<br/>
                ビザ申請や雇用契約、生活サポートまで、あらゆる課題を一貫して解決し、安心と信頼を提供します。これにより、企業が持つ労働力不足の課題を解消し、企業成長をサポートします。</p>
        </div>
        <div class="about-image">
            <picture class="image">
                <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image02_pc.png 2x">
                <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image02_pc.png 2x">
                <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/top_image02_pc.png" alt="">
            </picture>
        </div>
    </div>
</div>