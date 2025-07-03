<?php get_header(); ?>

<div id="contact-form">

    <div class="banner-page">
        <div class="banner-main">
            <div class="inner">
                <div class="heading-banner">
                    <h1>お問い合わせ</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-main">

        <div class="contact-header">
            <div class="inner">
                <div class="header-entry">
                    <h2 class="heading-block center">
                        <span class="uppercase">CONTACT FORM</span>
                    </h2>
                    <p class="sub-ttl">お問い合わせ・お申し込み</p>
                    <p class="text">お気軽にご連絡ください。</p>
                </div>
            </div>
        </div>

        <div class="contactForm">
            <div class="inner">
                <div class="form-main">
                    <?php echo apply_shortcodes( '[contact-form-7 id="28e5c87" title="ダウンロード資料 Multiple Download Step 2"]' ); ?>
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

    </div>

    <?php get_template_part("template-parts/banner-other"); ?>

    <?php get_template_part("template-parts/support"); ?>

    <?php get_template_part("template-parts/line-up"); ?>

    <?php get_template_part("template-parts/contact-bottom"); ?>

</div>


<?php get_footer(); ?>
