<?php
    /*
    * Template Name: confirmDownload
    * Template Post Type: page
    */
	get_header();

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

    <div id="download-form">

        <div class="banner-page">
            <div class="banner-main">
                <div class="inner">
                    <div class="heading-banner">
                        <h1>お役立ち資料</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="contactForm <?php echo $slug; ?>">
            <div class="inner">
                <div class="form-main">

                    <?php
                    if(isset($_POST['download-mutil'])){
                        $ids = $_POST['download'];
                        foreach ($ids as $id) {
                            $acf_file = get_field('file', $id);
                            echo $acf_file['url'];
                        }
                    }
                    ?>

                    <script src="https://js.hsforms.net/forms/embed/50394137.js" defer></script>
                    <div class="hs-form-frame" data-region="na1" data-form-id="fdd58338-3b04-493f-91f3-e754027a24b0" data-portal-id="50394137"></div>

<!--                    --><?php //echo do_shortcode('[contact-form-7 id="3b67e72" title="ダウンロード資料 Multiple Download Step 1"]'); ?>
                </div>
            </div>
        </div>

        <div class="contact-banner">
            <div class="inner">
                <div class="info-banner">
                    <p class="title">お電話からの<br/>ご質問・ご相談はこちら</p>
                    <div class="mid-content">
                        <p class="t1"><img class="sizes" width="33" src="<?php bloginfo('template_directory'); ?>/assets/images/top_icon_contact.png" alt=""><span>お問合せ</span></p>
                        <p class="text">営業:10時-18時（月-金)</p>
                    </div>
                    <div class="tel-info">
                        <p>03-6738-9686</p>
                    </div>
                </div>
            </div>
        </div>

        <?php get_template_part("template-parts/banner-other"); ?>

        <?php get_template_part("template-parts/support"); ?>

        <?php get_template_part("template-parts/line-up"); ?>

        <?php get_template_part("template-parts/contact-bottom"); ?>

    </div>

<?php get_footer(); ?>


