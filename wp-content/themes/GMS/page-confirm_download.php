<?php
    /*
    * Template Name: confirmDownload
    * Template Post Type: page
    */
	get_header('thanks');
?>

<main class="main">
    <section id="download">
        <div class="inner">
	    <p class="header-logo">
            <a href="<?php bloginfo('url');?>">
                <picture>
                    <source id="changeMe01" srcset="<?php bloginfo('template_url');?>/images/common/Img_logo_download.svg">
                    <img class="sizes" id="changeMe" src="<?php bloginfo('template_url');?>/images/common/Img_logo_download.svg" alt="<?php bloginfo( 'name' ); ?>">
                </picture>
            </a>
        </p><!-- .header-logo -->
            <?php echo do_shortcode('[contact-form-7 id="2113" title="ダウンロード資料 Multiple Download"]'); ?>
            <div class="contact-download">
                <p class="text-01">上記のフォームから送信できない場合は、<a href="mailto:info_cg@cam-com.jp">info_cg@cam-com.jp</a>までメールをお送りください。<br>お電話でのお問い合わせも承っております。</p>
                <div class="dl-phone">
                    <div class="dt-phone flex">
                        <picture class="box-img">
                            <source srcset="<?php bloginfo('template_url');?>/images/top_icon_contact.png">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_icon_contact.png" alt="">
                        </picture>
                        <p class="text-phone">お問合せ</p>
                        <p class="number-phone montserrat">03-6738-9686</p>
                    </div>
                    <p class="time">営業:10時-18時（月-金）</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer('simple'); ?>


