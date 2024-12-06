<?php
/**
 * Template Name: serviceAssistant
 * Template Post Type: page
 **/
?>
<?php get_header();?>

<div id="assistant">
    <div id="breadcrumb" class="breadcrumb">
        <ol>
            <li>
                <a href="<?php echo home_url(); ?>">トップページ</a>&nbsp;&nbsp;<i class="fa-solid fa-chevron-right"></i>
            </li>
            <li>
                <span>Jobサポート</span>
            </li>
        </ol>
    </div>

    <div class="banner-service">
        <div class="inner-banner">
            <div class="top-banner">
                 <h1 class="message-banner destop">
                    <span class="montserrat">JOB SUPPORT</span><br>
                    労務代行サービス<br>
                    <picture class="img-logo">
                        <source  srcset="<?php bloginfo('template_url');?>/images/home_logo_slider02.png">
                        <img class="sizes" src="<?php bloginfo('template_url');?>/images/home_logo_slider02.png" alt="">
                   </picture>
                </h1>
				  <h1 class="message-banner mobi">
                    <span class="montserrat">JOB SUPPORT</span><br>
                    <picture class="img-logo">
                        <source  srcset="<?php bloginfo('template_url');?>/images/home_logo_slider02.png">
                        <img class="sizes" src="<?php bloginfo('template_url');?>/images/home_logo_slider02.png" alt="">
                   </picture>
                   契約代行サービス
                </h1>
                <picture class="img-banner">
                    <source media="(max-width: 767px)"
                        srcset="<?php bloginfo('template_url');?>/images/top_banner_sld_03_sp.png 2x">
                    <source media="(min-width: 768px)"
                        srcset="<?php bloginfo('template_url');?>/images/top_banner_sld_03_pc.png 2x">
                    <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_banner_sld_03_pc.png" alt="">
                </picture>
            </div>
            <dl class="box-des">
                <dt class="dt-des">採用契約業務はプロに任せて<br class="sp-br">解放されよう</dt>
                <dd class="dd-des">
                    外国人採用に必要な契約に関する課題を<br class="sp-br">解決するサービスです。<br>貴社の採用業務の負担を減らし、<br class="sp-br">本来のコア業務に集中していただけます。<br>サービスを活用することにより、<br class="sp-br">業務レベルの向上にも貢献します。
                </dd>
            </dl>
        </div>
    </div>
    <div class="assistant-main">
        <div class="inner-box">
            <dl class="dl-title">
                <dt class="dt-title">私たちの労務代行<br class="sp-br">サービスとは</dt>

                <dd class="dd-title">
                    初めて外国人材を採用する担当者の方、<br class="sp-br">過去の採用経験でコア業務に<br class="sp-br">負担がかかった方など<br>外国人採用には様々な手続きや、<br class="sp-br">ケアなど一般の採用とは<br class="sp-br">異なるルールが存在します。<br>私たちは、外国人材採用に必要なサービスを<br class="sp-br">ご提供しスムーズに貴社へ外国人材を<br class="sp-br">送り届けます。<br>それが私たちが提供するJOBサポートです。</dd>
            </dl>
            <ul class="tab-service flex">
                <li class="item-tab"><a href="#p1" class="assistant-tab scroll">入管提出書類</a>
                </li>
                <li class="item-tab">
                    <a href="#p2" class="assistant-tab scroll">翻訳通訳サポート</a>
                </li>
                <li class="item-tab">
                    <a href="#p3" class="assistant-tab scroll">給与計算や<br class="pc-br">保険手続の代行</a>
                </li>
                <li class="item-tab">
                    <a href="#p4" class="assistant-tab scroll">出入国<br class="pc-br">お手続き代行</a>
                </li>
            </ul>

            <section class="block-assistant flex js-fadein" id="p1">
                <dl class="dl-block">
                    <dt class="dt-block">入管提出書類</dt>
                    <dt class="dt-block-sub">各行政提出書類作成への<br>相談も受け付けます</dt>
                    <dd class="dd-block">
                        技能実習や特定技能をはじめとして入管提出書類は複雑かつ多岐にわたります。専門のスタッフや提携の社労士・行政書士より無料相談や（一部有料の）添削などを受けることができます。お気軽にお問い合わせください！
                    </dd>
                    <a href="https://camt-gyousei.jp/" target="_blank" class="link-gyousei">
                        <picture class="img-box">
                            <source   srcset="<?php bloginfo('template_url');?>/images/service/service_pic_01a.svg">
                            <img class="sizes"
                                src="<?php bloginfo('template_url');?>/images/service/service_pic_01a.svg" alt="">
                        </picture>
                    </a>
                </dl>
                <div class="right-img">
                    <picture class="img-box">
                        <source media="(max-width: 767px)"
                            srcset="<?php bloginfo('template_url');?>/images/service/assistant_pic_01_sp.png 2x">
                        <source media="(min-width: 768px)"
                            srcset="<?php bloginfo('template_url');?>/images/service/assistant_pic_01_pc.png 2x">
                        <img class="sizes"
                            src="<?php bloginfo('template_url');?>/images/service/assistant_pic_01_pc.png" alt="">
                    </picture>
                </div>
                <p class="box-number"><span class="number montserrat">01</span></p>
            </section>
            
            <section class="block-assistant flex js-fadein" id="p2">
                <dl class="dl-block">
                    <dt class="dt-block">翻訳通訳サポート</dt>
                    <dt class="dt-block-sub">対応言語30ヵ国語以上！<br>通訳派遣もご相談ください</dt>
                    <dd class="dd-block">
                    外国人採用・受入の際、各種契約書や入社オリエンテーション資料・安全教育資料など、採用者の母国語併記義務もあります。外国人とのコミュニケーションに、必要最低限の業務指示書や作業マニュアルをご用意することが推奨されています。
                    </dd>
					<dd class="dd-link destop">
                        <a href="https://gms.ca-m.co.jp/translate" class="link-page support">詳しくみる</a>
                    </dd>
                </dl>
                <div class="right-img">
                    <picture class="img-box">
                        <source media="(max-width: 767px)"
                            srcset="<?php bloginfo('template_url');?>/images/service/assistant_pic_02_sp.png 2x">
                        <source media="(min-width: 768px)"
                            srcset="<?php bloginfo('template_url');?>/images/service/assistant_pic_02_pc.png 2x">
                        <img class="sizes"
                            src="<?php bloginfo('template_url');?>/images/service/assistant_pic_02_pc.png" alt="">
                    </picture>
                    
                </div>
				 <dd class="dd-link mobi">
                    <a href="https://gms.ca-m.co.jp/translate" class="link-page support">詳しくみる</a>
                </dd>

                <p class="box-number"><span class="number montserrat">02</span></p>
            </section>
            <section class="block-assistant flex js-fadein" id="p3">
                <dl class="dl-block">
                    <dt class="dt-block">給与計算や<br class="pc-br">保険手続の代行</dt>
                    <dt class="dt-block-sub">企業形態や課題に合わせた<br>ペイロールプラン提案</dt>
                    <dd class="dd-block">Saas型サービスの課題である既存組織への導入の難しさをカスタムサービスで解決し、企業の形態や要望・課題に応じて、最適プランをご提案。<br>
						勤怠管理・保険手続き・年末調整・人事管理・WEB給与明細・賞与支給・住民税特別徴収など。各種社労士業務もお気軽にご相談ください。
                    </dd>
                    <a href="https://biz.ca-m.co.jp/payroll" target="_blank" class="link-trex mobi">詳しく見る</a>
                </dl>
                <div class="right-img">
                    <picture class="img-box mb">
                        <source media="(max-width: 767px)"
                            srcset="<?php bloginfo('template_url');?>/images/service/assistant_pic_04_sp.png 2x">
                        <source media="(min-width: 768px)"
                            srcset="<?php bloginfo('template_url');?>/images/service/assistant_pic_04_pc.png 2x">
                        <img class="sizes"
                            src="<?php bloginfo('template_url');?>/images/service/assistant_pic_04_pc.png" alt="">
                    </picture>
                    <a href="https://biz.ca-m.co.jp/payroll" target="_blank" class="link-trex destop">詳しく見る</a>
                </div>

                <p class="box-number"><span class="number montserrat">03</span></p>
            </section>
            <section class="block-assistant flex js-fadein" id="p4">
                <dl class="dl-block">
                    <dt class="dt-block">出入国お手続き代行</dt>
                    <dt class="dt-block-sub">入国前から出国まで、<br>責任と安心を</dt>
                    <dd class="dd-link destop">
                        <a href="https://gms.ca-m.co.jp/service/immigration/" class="link-page support">詳しくみる</a>
                    </dd>
                </dl>
                <div class="right-img">
                    <picture class="img-box">
                        <source media="(max-width: 767px)"
                            srcset="<?php bloginfo('template_url');?>/images/service/assistant_pic_03_sp.png 2x">
                        <source media="(min-width: 768px)"
                            srcset="<?php bloginfo('template_url');?>/images/service/assistant_pic_03_pc.png 2x">
                        <img class="sizes"
                            src="<?php bloginfo('template_url');?>/images/service/assistant_pic_03_pc.png" alt="">
                    </picture>
                </div>
                <dd class="dd-link mobi">
                    <a href="https://gms.ca-m.co.jp/service/immigration/" class="link-page support">詳しくみる</a>
                </dd>
                <p class="box-number"><span class="number montserrat">04</span></p>
            </section>

            <div class="page-top">
                <a href="#" class="page-top-anchor">
                    <picture>
                        <img src="<?php bloginfo('template_url');?>/images/common/page-top-anchor.png"
                            alt="">
                    </picture>
                </a>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('block-service/block-last'); ?>
<?php get_footer(); ?>