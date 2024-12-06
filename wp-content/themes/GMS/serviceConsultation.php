<?php
/**
 * Template Name: consultation
 * Template Post Type: page
 **/
?>

<?php get_header();?>

<div id="consultation">
    <div id="breadcrumb" class="breadcrumb">
        <ol>
            <li>
                <a href="<?php echo home_url(); ?>">トップページ</a>&nbsp;&nbsp;<i class="fa-solid fa-chevron-right"></i>
            </li>
            <li>専門家無料相談サービス</li>
        </ol>
    </div>

    <div class="banner-service">
        <div class="inner-banner">
            <div class="top-banner">
               <h1 class="message-banner destop">
                    <span class="montserrat">LEGAL SUPPORT</span><br>
                    専門家無料相談<br>サービス<br>
                    <picture class="img-logo">
                        <source  srcset="<?php bloginfo('template_url');?>/images/home_logo_slider04.png">
                        <img class="sizes" src="<?php bloginfo('template_url');?>/images/home_logo_slider04.png" alt="">
                   </picture>
                </h1>
				 <h1 class="message-banner mobi">
                    <span class="montserrat">LEGAL SUPPORT</span><br>
                    <picture class="img-logo">
                        <source  srcset="<?php bloginfo('template_url');?>/images/home_logo_slider04.png">
                        <img class="sizes" src="<?php bloginfo('template_url');?>/images/home_logo_slider04.png" alt="">
                   </picture>
                     専門家無料相談サービス
                </h1>
                <picture class="img-banner">
                    <source media="(max-width: 767px)"
                        srcset="<?php bloginfo('template_url');?>/images/service/consultation_banner_sp.png 2x">
                    <source media="(min-width: 768px)"
                        srcset="<?php bloginfo('template_url');?>/images/service/consultation_banner_pc.png 2x">
                    <img class="sizes" src="<?php bloginfo('template_url');?>/images/service/consultation_banner_pc.png"
                        alt="">
                </picture>
            </div>
            <dl class="box-des">
                <dt class="dt-des">プロのアドバイスで、<br class="sp-br">外国人採用に安心と信頼を</dt>
                <dd class="dd-des">
                    外国人材を受け入れるには<br class="sp-br">どうしたらいい？などの基礎的な質問から、<br>業務に関するお悩み、法律やルール改正に<br
                        class="sp-br">伴う変更点など、<br class="pc-br">弊社所属の社労士・<br class="sp-br">行政書士が無料でお答えいたします。
                </dd>
            </dl>
        </div>
    </div>
    <div class="consultation-main">
        <div class="inner">
            <h3 class="title-page">こんな場面でお悩みの方</h3>
            <ul class="flex tab-maetra">
                <li class="tab-people">
                    <a href="#p1" class="scroll">外国人就労者から<br>質問がありました。<br>どう答えたら良いですか。</a>
                </li>
                <li class="tab-people">
                    <a href="#p2" class="scroll">特定技能外国人を<br>採用したいのだけど、<br>制度を教えてほしい</a>
                </li>
                <li class="tab-people">
                    <a href="#p3" class="scroll">外国人技能実習生を<br>募集・採用するときの<br>注意点を教えてほしい！</a>
                </li>
            </ul>
            <div class="box-arrow">
                <div class="arrow">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <section class="box-professionals flex js-fadein">
                <div class="left">
                    <p class="text01 montserrat">FREE PROFESSIONALS CONSULTATION</p>
                    <picture class="box-img">
                        <source media="(max-width: 767px)"
                            srcset="<?php bloginfo('template_url');?>/images/service/consultation_logo_sp.svg">
                        <source media="(min-width: 768px)"
                            srcset="<?php bloginfo('template_url');?>/images/service/consultation_logo_pc.svg">
                        <img class="sizes"
                            src="<?php bloginfo('template_url');?>/images/service/consultation_logo_pc.svg" alt="">
                    </picture>
                    <p class="text02">弊社専属の</p>
                    <p class="text03"><span style="color:#0B54F7">社労士・行政書士</span>が<br><span
                            style="color:#FF8D00">無料で</span>お答えします。</p>
                </div>
                <div class="right">
                    <dl class="dl-right">
                        <dt class="dt-right">法律上のルールを、<br class="sp-br">それぞれの現場に合う形で落とし込む仕事をサポート</dt>
                        <dd class="dd-right">
                            労働保険や社会保険の手続き代行、法定帳簿(労働者名簿・賃金台帳・出勤簿)の作成などの書類作成を行なったり人事労務関係の相談・指導、社員教育カリキュラムの検討、賃金・評価制度の構築など、はたらく環境の整備・改善をする仕事です。
                        </dd>
                        <span class="note-right">社労士</span>
                    </dl>
                    <dl class="dl-right">
                        <dt class="dt-right">「行政関係」の<br class="sp-br">官公署や役所に<br class="pc-br">提出する<br class="sp-br">書類を作成をサポート</dt>
                        <dd class="dd-right">
                        行政に関する書類や、法律的な権利義務・事実の証明に関する様々な書類の作成や手続を、企業様や個人に代わって行ったり、手続に関するアドバイスを行ったりするのが主な仕事です。
                        </dd>
                        <span class="note-right">行政書士</span>
                    </dl>
                </div>
            </section>

            <section class="box-info js-fadein">
                <h3 class="title-page">社労士・行政書士のご紹介</h3>
                <ul class="list-info flex">
                    <li class="item-li">
                        <picture class="box-img">
                            <source media="(max-width: 767px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/consultation_pic_04_sp.png 2x">
                            <source media="(min-width: 768px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/consultation_pic_04_pc.png 2x">
                            <img class="sizes"
                                src="<?php bloginfo('template_url');?>/images/service/consultation_pic_04_pc.png"
                                alt="">
                        </picture>
                        <dl class="dl-info">
                            <dt class="dt-info">小山 翔太<span class="name-es montserrat">Shota KOYAMA</span></dt><dd class="dd-info">JAPAN行政書士法人。<br>外国人材採用のご不安解消に、誠心誠意対応いたします。</dd>
                        </dl>
                    </li>
<!--                     <li class="item-li">
                        <picture class="box-img">
                            <source media="(max-width: 767px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/consultation_pic_05_sp.png 2x">
                            <source media="(min-width: 768px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/consultation_pic_05_pc.png 2x">
                            <img class="sizes"
                                src="<?php bloginfo('template_url');?>/images/service/consultation_pic_05_pc.png"
                                alt="">
                        </picture>
                        <dl class="dl-info">
                            <dt class="dt-info">片平 勇介<span class="name-es montserrat">Yusuke KATAHIRA</span></dt>
                            <dd class="dd-info">国際行政書士片平法務経営事務所。ビザ申請と会社設立を13年の実績と高度なノウハウでサポート。</dd>
                        </dl>
                    </li> -->
<!--                     <li class="item-li">
                        <picture class="box-img">
                            <source media="(max-width: 767px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/consultation_pic_06_sp.png 2x">
                            <source media="(min-width: 768px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/consultation_pic_06_pc.png 2x">
                            <img class="sizes"
                                src="<?php bloginfo('template_url');?>/images/service/consultation_pic_06_pc.png"
                                alt="">
                        </picture>
                        <dl class="dl-info">
                            <dt class="dt-info">小野 民平<span class="name-es montserrat">Mimpei ONO</span></dt>
                            <dd class="dd-info">社会保険労務士法人みんなの社労士 代表。海外ビジネスのプロとして経験30年、訪問60か国。</dd>
                        </dl>
                    </li> -->
<!--                     <li class="item-li">
                        <picture class="box-img">
                            <source media="(max-width: 767px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/consultation_pic_07_sp.png 2x">
                            <source media="(min-width: 768px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/consultation_pic_07_pc.png 2x">
                            <img class="sizes"
                                src="<?php bloginfo('template_url');?>/images/service/consultation_pic_07_pc.png"
                                alt="">
                        </picture>
                        <dl class="dl-info">
                            <dt class="dt-info">宮島 陽子<span class="name-es montserrat">Youko MIYAJIMA</span></dt>
                            <dd class="dd-info">行政書士オフィスエム。<br>ビザ申請を通じ外国人の安心な暮らしをサポートします。</dd>
                        </dl>
                    </li>-->
                    <li class="item-li">
                        <picture class="box-img">
                            <source media="(max-width: 767px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/consultation_pic_08_sp.png 2x">
                            <source media="(min-width: 768px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/consultation_pic_08_pc.png 2x">
                            <img class="sizes"
                                src="<?php bloginfo('template_url');?>/images/service/consultation_pic_08_pc.png"
                                alt="">
                        </picture>
                        <dl class="dl-info">
                            <dt class="dt-info">長谷川 文彦<span class="name-es montserrat">Humihiko HASEGAWA</span></dt>
                            <dd class="dd-info">株式会社キャムテック。<br>法改正に伴う専門的な質問もお任せください！</dd>
                        </dl>
                    </li> 
				 <li class="item-li">
                        <picture class="box-img last">
                            <source media="(max-width: 767px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/consultation_pic_09_sp.png 2x">
                            <source media="(min-width: 768px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/consultation_pic_09_pc.png 2x">
                            <img class="sizes"
                                src="<?php bloginfo('template_url');?>/images/service/consultation_pic_09_pc.png"
                                alt="">
                        </picture>
                        <dl class="dl-info">
                            <dt class="dt-info">奥 祐也<span class="name-es montserrat">Yuya OKU</span></dt><dd class="dd-info">キャムテック行政書士事務所。<br>特定技能専門の行政書士事務所として、外国人採用をサポートします</dd>
                        </dl>
                    </li>
                </ul>
            </section>
            <div class="page-top">
                <a href="#" class="page-top-anchor">
                    <picture>
                        <img src="<?php bloginfo('template_url');?>/images/common/page-top-anchor.png" alt="">
                    </picture>
                </a>
           </div>
        </div>
<!--         <div id="breadcrumb-footer" class="breadcrumb">
            <ol>
                <li>
                    <a href="<?php echo home_url(); ?>">トップページ</a>&nbsp;&nbsp;<i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>専門家無料相談サービス</li>
            </ol>
        </div> -->
    </div>
</div>

<?php get_template_part('block-service/block-last'); ?>
<style>
#consultation .box-info .list-info .box-img.last {
    display: block;
    margin-bottom: 20px;
    border-radius: 10px;
    overflow: hidden;
    border: 1.5px solid #0B54F7;
    min-height: 286px;
}

#bock-sevice .box-contact .list-img .item-img {
    height: 270px !important;
}	
	
	
</style>
<?php get_footer(); ?>