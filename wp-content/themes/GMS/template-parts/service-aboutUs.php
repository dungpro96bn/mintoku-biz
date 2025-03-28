<?php
$page_id = get_the_ID();
$current_object = get_queried_object();
$slug = '';

if (is_page()) {
    $slug = $current_object->post_name;
} elseif (is_single()) {
    $slug = $current_object->post_name;
}

// Banner top page
$heading = get_field('heading', $page_id);
$sub_title = get_field('sub_title', $page_id);
$description = get_field('description', $page_id);
$image = get_field('banner_image', $page_id);

?>

<?php if( $heading || $sub_title || $description || $image ): ?>

    <div class="banner-top green <?php echo $slug; ?>">
        <div class="about-content">
            <div class="about-info">
                <h2 class="heading-block en">
                    <?php if ($slug == "translate"): ?>
                        <span class="uppercase pc-br"><?php echo $heading; ?></span>
                        <span class="uppercase sp-br">Translation<br/>&<br/>interpreta-<br/>tion support</span>
                    <?php else: ?>
                        <span class="uppercase"><?php echo $heading; ?></span>
                    <?php endif; ?>
                </h2>
                <h3 class="title"><?php echo $sub_title; ?></h3>
                <div class="info"><?php echo $description; ?></div>
            </div>
            <div class="about-image">
                <?php if( $image ): ?>
                    <picture class="image">
                        <source media="(max-width: 767px)" srcset="<?php echo esc_url($image['url']); ?>">
                        <source media="(min-width: 768px)" srcset="<?php echo esc_url($image['url']); ?>">
                        <img class="sizes" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </picture>
                <?php endif; ?>
            </div>
            <?php if($slug == "edpoke"):?>
                <div class="edpoke-contact">
                    <div class="btn-contact">
                        <a href="<?php echo home_url(); ?>/report_download/">資料請求もお問い合わせください<span>＞</span></a>
                    </div>
                    <div class="time">
                        <div class="icon-ttl">
                            <img width="39" src="<?php bloginfo('template_directory'); ?>/assets/images/top_icon_contact.png" alt="">
                            <p>お問合せフリーダイアル</p>
                        </div>
                        <p class="t2">営業時間:10時〜18時（月〜金）</p>
                    </div>
                    <p class="tel">0120-530-451</p>
                </div>
            <?php endif; ?>
        </div>
    </div>

<?php endif; ?>
