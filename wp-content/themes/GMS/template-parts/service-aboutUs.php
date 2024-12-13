<?php
$page_id = get_the_ID();
$post = get_post();
$slug = $post->post_name;

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
                    <span class="uppercase"><?php echo $heading; ?></span>
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
        </div>
    </div>

<?php endif; ?>
