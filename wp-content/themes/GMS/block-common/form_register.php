<?php
define("SEMINAR_ID_CONFIRM", get_the_ID());
define("SEMINAR_ID_CONFIRM_URL", site_url("press-form"));
$seminar_zoom = get_field('seminar_url');
if ($seminar_date = get_field('seminar_date')) {
    date_default_timezone_set("Asia/Bangkok");
    $seminar_start_date = $seminar_date['seminar_start_date'];
    $seminar_close_date = $seminar_date['seminar_close_date'];

    if (time() - strtotime($seminar_close_date) > 0)
        $link_page_class = 'link-page disable';
    else
        $link_page_class = 'link-page';
}
?>
<style>

	#single-seminar .link-page.disable-url {
		background: #c3c4c7;
		pointer-events: none;
		border: 1px solid #c3c4c7;
		color: #f0f0f1;
		text-align: center;
		padding: 15px 40px;
	}
	
	#single-seminar .link-page.disable-url:after {
		display:none;
	}

</style>
<section id="contact">
    <div class="block-form" data-aos="fade-up">
        <div class="inner">
            <?php if (SEMINAR_ID_CONFIRM != 3415): ?>
                <?php if (!empty($seminar_zoom)) { ?>
                    <div class="box-link-page flex">
                        <a href="<?php echo esc_url($seminar_zoom); ?>" target="_blank" class="<?php echo $link_page_class; ?>">セミナーに申し込む</a>
                    </div>
                <?php } else { ?>
                    <div class="box-link-page flex">
                        <a href="" class="link-page disable-url">申し込み受付　準備中</a>
                    </div>
                <?php } ?>
            <?php else: ?>
                <div class="box-link-page flex">
                    <a href="<?php echo SEMINAR_ID_CONFIRM_URL; ?>" class="link-page confirm">資料をダウンロードする</a>
                </div>
            <?php endif; ?>
			
            <div class="info-contact flex">
                <p class="title-contact">お電話からの<br>お申し込みも可能です</p>
                <div class="middle">
                    <div class="phone-left">
                        <picture class="box-img">
                            <source srcset="<?php bloginfo('template_url'); ?>/images/top_icon_contact.png">
                            <img class="sizes" src="<?php bloginfo('template_url'); ?>/images/top_icon_contact.png"
                                alt="">
                        </picture>
                        <span class="text-phone">お問合せ</span>
                    </div>
                    <p class="time">営業:10時-18時（月-金）</p>
                </div>
                <p class="number-phone montserrat">03-6738-9686</p>
            </div>
            <div class="page-top">
                <a href="#" class="page-top-anchor">
                    <picture>
                        <source srcset="<?php bloginfo('template_url'); ?>/images/common/page-top-anchor_white.png">
                        <img class="sizes"
                            src="<?php bloginfo('template_url'); ?>/images/common/page-top-anchor_white.png" alt="">
                    </picture>
                </a>
            </div>
            <div class="page-top">
                <a href="#" class="page-top-anchor">
                    <picture>
                        <source srcset="<?php bloginfo('template_url'); ?>/images/common/page-top-anchor.png">
                        <img class="sizes" src="<?php bloginfo('template_url'); ?>/images/common/page-top-anchor.png"
                            alt="">
                    </picture>
                </a>
            </div>

        </div>
    </div>
</section>