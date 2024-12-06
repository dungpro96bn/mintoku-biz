<?php
/**
 * Template Name: serviceCloud
 * Template Post Type: page
 **/
?>
<?php get_header();?>

<style>

#cloud .cloud-main .list-tab .item-tab {
    margin-bottom: 50px;
}
#cloud .cloud-main .cam-cat {
    padding: 180px 0px 25px;
     background: none
}
#cloud .cloud-main .list-tab .item-tab:nth-child(1) {
    padding-right: 10px;
    padding-bottom: 5px;
}

#cloud .cloud-main .support-video.one {
    padding: 45px 0px 0px;
}
@media (max-width: 767px) {
    #cloud .cloud-main .cam-cat {
        padding: 30px 0px 45px;
        background: #F3F5F7;
    }
}

</style>
<div id="cloud">
    <div id="breadcrumb" class="breadcrumb">
        <ol>
            <li>
                <a href="<?php echo home_url(); ?>">トップページ</a>&nbsp;&nbsp;<i class="fa-solid fa-chevron-right"></i>
            </li>
            <li>
                <span>クラウドサービス</span>
            </li>
        </ol>
    </div>

    <div class="banner-service">
        <div class="inner-banner">
            <div class="top-banner">
                 <h1 class="message-banner destop">
						<span class="montserrat">TECH SUPPORT</span><br>クラウドサービス<br>
						<picture class="img-logo">
						 <source  srcset="<?php bloginfo('template_url');?>/images/home_logo_slider01.png">
						 <img class="sizes" src="<?php bloginfo('template_url');?>/images/home_logo_slider01.png" alt="">
					   </picture>
                </h1>
				 <h1 class="message-banner mobi">
                    <span class="montserrat">TECH SUPPORT</span><br>
                    <picture class="img-logo">
                        <source  srcset="<?php bloginfo('template_url');?>/images/home_logo_slider01.png">
                        <img class="sizes" src="<?php bloginfo('template_url');?>/images/home_logo_slider01.png" alt="">
                   </picture>
                   クラウドサービス
                </h1>
                <picture class="img-banner">
                    <source media="(max-width: 767px)"
                        srcset="<?php bloginfo('template_url');?>/images/top_banner_sld_02_sp.png 2x">
                    <source media="(min-width: 768px)"
                        srcset="<?php bloginfo('template_url');?>/images/top_banner_sld_02_pc.png 2x">
                    <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_banner_sld_02_pc.png" alt="">
                </picture>
            </div>
            <dl class="box-des">
                <dt class="dt-des">業務効率化に<br class="sp-br">最適なシステムを</dt>
                <dd class="dd-des">外国人の採用はとにかく書類が膨大で煩雑です。<br class="sp-br">また専門知識が必要なシーンも多くあります。<br>これまでアナログな作業現場にGMS Techサポートで業務効率化を実現しました。<br>単純にシステムを提供するだけでなく、伴走サービスも充実しています。 </dd>
            </dl>
        </div>
    </div>
    <div class="cloud-main">
        <section class="cam-cat js-fadein" id="p1">
            <ul class="list-tab flex">
                <li class="item-tab">
                    <a href="#p1" class="cloud-tab scroll">
                        <picture class="img-banner">
                            <source srcset="<?php bloginfo('template_url');?>/images/service/cloud_icon_01.svg">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/service/cloud_icon_01.svg"
                                alt="">
                        </picture>
                    </a>
                </li>
                <li class="item-tab">
                    <a href="#p2" class="cloud-tab scroll">
                        <picture class="img-banner">
                            <source srcset="<?php bloginfo('template_url');?>/images/service/cloud_icon_02.svg">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/service/cloud_icon_02.svg"
                                alt="">
                        </picture>
                    </a>
                </li>
                <li class="item-tab">
                    <a href="#p3" class="cloud-tab scroll">
                        <picture class="img-banner">
                            <source srcset="<?php bloginfo('template_url');?>/images/service/cloud_icon_03.svg">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/service/cloud_icon_03.svg"
                                alt="">
                        </picture>
                    </a>
                </li>
            </ul>
        </section>
        <section class="support-video one js-fadein" id="p1">
            <div class="inner">
                <div class="box-support flex box-comom">
                    <div class="text-support">
                        <picture class="img-box">
                            <source srcset="<?php bloginfo('template_url');?>/images/service/cloud_icon_01.svg">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/service/cloud_icon_01.svg"
                                alt="">
                        </picture>
                        <dl class="dl-text">
                            <dt class="dt-text">外国人雇用管理クラウドサービス</dt>
                            <dt class="img-support mobi">
                                <picture class="img-box">
                                    <source media="(max-width: 767px)"
                                        srcset="<?php bloginfo('template_url');?>/images/top_banner_sld_02_sp.png 2x">
                                    <source media="(min-width: 768px)"
                                        srcset="<?php bloginfo('template_url');?>/images/top_banner_sld_02_pc.png 2x">
                                    <img class="sizes"
                                        src="<?php bloginfo('template_url');?>/images/top_banner_sld_02_pc.png"
                                        alt="">
                                </picture>

                            </dt>
                            <dd class="dd-text">外国人雇用における煩雑な書類管理、クラウドサービスならではの情報共有とペーパーレス保管を実現。<dd>
<p class="note">技能実習や特定技能にとどまらず、全てのビザに対応！！無制限のストレージ機能とチャート式のスケジュール管理が魅力です！</p>
                        </dl>
                        
                        <a href="<?php bloginfo('url');?>/service/cloud/camcat/" class="link-page support">詳しくみる</a>
                    </div>
                    <div class="img-support destop">
                    <picture class="img-box">
                                    <source media="(max-width: 767px)"
                                        srcset="<?php bloginfo('template_url');?>/images/top_banner_sld_02_sp.png 2x">
                                    <source media="(min-width: 768px)"
                                        srcset="<?php bloginfo('template_url');?>/images/top_banner_sld_02_pc.png 2x">
                                    <img class="sizes"
                                        src="<?php bloginfo('template_url');?>/images/top_banner_sld_02_pc.png"
                                        alt="">
                    </picture>
                    </div>
                </div>
            </div>
        </section>
        <section class="t-rex js-fadein" id="p2">
            <div class="inner">
                <div class="box-t-rex flex box-comom">
                    <div class="text-trex">
                        <picture class="img-box">
                            <source srcset="<?php bloginfo('template_url');?>/images/service/cloud_icon_02.svg">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/service/cloud_icon_02.svg"
                                alt="">
                        </picture>
                        <dl class="dl-text">
                            <dt class="dt-text">WEB勤怠管理システム </dt>
                            <picture class="img-box mobi">
                                <source media="(max-width: 767px)"
                                    srcset="<?php bloginfo('template_url');?>/images/service/cloud_pic_04_sp.svg 2x">
                                <source media="(min-width: 768px)"
                                    srcset="<?php bloginfo('template_url');?>/images/service/cloud_pic_04_pc.svg 2x">
                                <img class="sizes"
                                    src="<?php bloginfo('template_url');?>/images/service/cloud_pic_04_pc.svg" alt="">
                            </picture>
                            <dd class="dd-text">プロパー・派遣関係なく、<br>クラウドでの勤怠管理が<br class="sp-br">可能です </dd>
                        </dl>
                        <p class="note">
                            パソコン・携帯・カードリーダー企業様環境に合わせてデジタルでの勤怠報告が可能。<br class="pc-br">管理者様は日別・月間での勤務状況の確認が可能。超過残業者の一覧・勤務実績一覧等の抽出を行うことで働き方改革のリスクヘッジ・工数削減にも繋がります。
                        </p>
                    </div>
                    <div class="img-trex">
                        <picture class="img-box destop">
                            <source media="(max-width: 767px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/cloud_pic_04_sp.svg 2x">
                            <source media="(min-width: 768px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/cloud_pic_04_pc.svg 2x">
                            <img class="sizes"
                                src="<?php bloginfo('template_url');?>/images/service/cloud_pic_04_pc.svg" alt="">
                        </picture>
                        <a href=" https://biz.ca-m.co.jp/hr/t-rex " target="_blank" class="link-trex">T-REXを詳しく見る</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="support-video js-fadein" id="p3">
            <div class="inner">
                <div class="box-support flex box-comom">
                    <div class="text-support">
                        <picture class="img-box">
                            <source srcset="<?php bloginfo('template_url');?>/images/service/cloud_icon_03.svg">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/service/cloud_icon_03.svg"
                                alt="">
                        </picture>
                        <dl class="dl-text">
                            <dt class="dt-text">前トレテックサポート</dt>
                            <dt class="img-support mobi">
                                <picture class="img-box">
                                    <source media="(max-width: 767px)"
                                        srcset="<?php bloginfo('template_url');?>/images/service/cloud_pic_05_sp.svg 2x">
                                    <source media="(min-width: 768px)"
                                        srcset="<?php bloginfo('template_url');?>/images/service/cloud_pic_05_pc.svg 2x">
                                    <img class="sizes"
                                        src="<?php bloginfo('template_url');?>/images/service/cloud_pic_05_pc.svg"
                                        alt="">
                                </picture>

                            </dt>
                            <dd class="dd-text">動画やVRで、“伝える”から“伝わる”へ</dd>
                        </dl>
                        
                        <a href="<?php bloginfo('url');?>/service/cloud/maetra/" class="link-page support">詳しくみる</a>
                    </div>
                    <div class="img-support destop">
                        <picture class="img-box">
                            <source media="(max-width: 767px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/cloud_pic_05_sp.svg 2x">
                            <source media="(min-width: 768px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/cloud_pic_05_pc.svg 2x">
                            <img class="sizes"
                                src="<?php bloginfo('template_url');?>/images/service/cloud_pic_05_pc.svg" alt="">
                        </picture>

                    </div>
                </div>
                <div class="page-top">
                    <a href="#" class="page-top-anchor">
                        <picture>
                            <img src="<?php bloginfo('template_url');?>/images/common/page-top-anchor.png"
                                alt="">
                        </picture>
                    </a>
                </div>
            </div>
        </section>
    </div>
</div>

<?php get_template_part('block-service/block-last'); ?>
<?php get_footer(); ?>