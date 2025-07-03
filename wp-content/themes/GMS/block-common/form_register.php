<?php
define("SEMINAR_ID_CONFIRM", get_the_ID());
define("SEMINAR_ID_CONFIRM_URL", site_url("press-form"));

$seminar_zoom = get_field('seminar_url');
$link_page_class = 'link-page disable';

$show_seminar_button = false;

if ($seminar_date = get_field('seminar_date')) {
    date_default_timezone_set("Asia/Bangkok");
    $seminar_start_date = $seminar_date['seminar_start_date'];
    $seminar_close_date = $seminar_date['seminar_close_date'];

    if (strtotime($seminar_close_date) > time()) {
        $link_page_class = 'link-page';
        if ($seminar_zoom) {
            $show_seminar_button = true;
        }
    }
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
	
	.seminar-link-contact{
		padding: 20px 0;
	}
	.seminar-link-contact .box-link-page a{
		display: flex;
		width: 100%;
		max-width: 300px;
		height: 60px;
		align-items: center;
		justify-content: center;
		background: #0F3745;
		border-radius: 40px;
		margin: auto;
		font-size: 18px;
		line-height: 30px;
		font-weight: 600;
		color: #fff;
		position: relative;
		border: 1px solid #0F3745;
		transition: 0.3s;
	}
	.seminar-link-contact .box-link-page a:hover{
		background: transparent;
		color: #0F3745;
	}
	.seminar-link-contact .box-link-page a span{
		margin-left: 20px;
		position: relative;
		transition: 0.3s;
	}
	.seminar-link-contact .box-link-page a:hover span{
		transform: translateX(15px);
	}
	.seminar-link-contact .box-link-page a.disable-url{
		background: #c3c4c7;
		pointer-events: none;
		border-color: #c3c4c7
	}

</style>
<div class="seminar-link-contact">
    <div class="block-form" data-aos="fade-up">
        <div class="inner">
            <?php if ($show_seminar_button): ?>
                <div class="box-link-page flex">
                    <a href="<?php echo esc_url($seminar_zoom); ?>" target="_blank" class="<?php echo $link_page_class; ?>">セミナーに申し込む<span class="icon-arrow">＞</span></a>
                </div>
            <?php else: ?>
                <div class="box-link-page flex">
                    <a class="link-page disable-url">申し込み受付　準備中</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>