<?php
/**
 * Template Name: immigration
 * Template Post Type: page
 **/
?>
<?php get_header();?>
<div id="immigration">
    <div id="breadcrumb" class="breadcrumb">
        <ol>
            <li>
                <a href="<?php echo home_url(); ?>">トップページ</a>&nbsp;&nbsp;<i class="fa-solid fa-chevron-right"></i>
            </li>
            <li>
                <a href="<?php bloginfo('url');?>/service/cloud/">労務代行サービス</a>&nbsp;&nbsp;<i class="fa-solid fa-chevron-right"></i>
            </li>
            <li>出入国サポート</li>
        </ol>
    </div>
    <div id="breadcrumb-service">
        <ol>
           <li>
              <a href="<?php echo home_url(); ?>"><i class="fa-sharp fa-solid fa-house"></i></a>&nbsp;&nbsp;<i class="fa-solid fa-chevron-right"></i>&nbsp;&nbsp;
            </li>
            <li>
                <a href="<?php bloginfo('url');?>/service/cloud/">労務代行サービス</a>&nbsp;&nbsp;<i
                    class="fa-solid fa-chevron-right"></i>&nbsp;&nbsp;
            </li>
            <li>出入国サポート</li>
        </ol>
    </div>

    <div class="banner-service">
        <div class="inner-banner">
            <div class="top-banner">
                <div class="message-banner">
                    <p class="montserrat">IMMIGRATION<br class="pc-br">SUPPORT SERVICE</p>
                    <h1>
                        <span class="small-banner">労務代行サービス</span><br>
                        出入国サポート
                    </h1>

                </div>
                <picture class="img-banner">
                    <source media="(max-width: 767px)"
                        srcset="<?php bloginfo('template_url');?>/images/service/immigration_banner_sp.png 2x">
                    <source media="(min-width: 768px)"
                        srcset="<?php bloginfo('template_url');?>/images/service/immigration_banner_pc.png 2x">
                    <img class="sizes" src="<?php bloginfo('template_url');?>/images/service/immigration_banner_pc.png"
                        alt="">
                </picture>
            </div>
            <dl class="box-des">
                <dt class="dt-des">入国前から出国まで、<br class="sp-br">責任と安心を</dt>
                <dd class="dd-des">
                    海外での出国時斡旋、 国内での空港斡旋までを一貫してサポートし、<br>外国人が初めての出入国であっても、安心・安全に入国して頂けるプランをご用意しました。
                </dd>
            </dl>
        </div>
    </div>
    <div class="immigration-main">
        <div class="inner">
            <h3 class="title-page">2つのプランご説明</h3>
            <ul class="flex tab-service">
                <li class="item-tab">
                    <a href="#p1" class="scroll">国内空港斡旋</a>
                </li>
                <li class="item-tab">
                    <a href="#p2" class="scroll">海外出国斡旋</a>
                </li>
                <li class="item-tab">
                    <a href="#p3" class="scroll">料金案内</a>
                </li>
            </ul>

            <section class="block-tab js-fadein" id="p1">
                <div class="block-immigration flex">
                    <dl class="dl-block">
                        <dt class="dt-block">国内空港斡旋</dt>
                        <dd class="dd-block">
                            到着空港でのお出迎えから<br>交通手段の斡旋を<br>お手伝いいたします。
                        </dd>
                    </dl>
                    <picture class="img-banner">
                        <source media="(max-width: 767px)"
                            srcset="<?php bloginfo('template_url');?>/images/service/immigration_ttl_01_sp.png 2x">
                        <source media="(min-width: 768px)"
                            srcset="<?php bloginfo('template_url');?>/images/service/immigration_ttl_01_pc.png 2x">
                        <img class="sizes"
                            src="<?php bloginfo('template_url');?>/images/service/immigration_ttl_01_pc.png" alt="">
                    </picture>

                    <p class="box-number"><span class="number montserrat">01</span></p>
                </div>

                <ul class="list-img flex">
                    <li class="li-img">
                        <picture class="box-img">
                            <source media="(max-width: 767px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/immigration_pic_01_sp.png 2x">
                            <source media="(min-width: 768px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/immigration_pic_01_pc.png 2x">
                            <img class="sizes"
                                src="<?php bloginfo('template_url');?>/images/service/immigration_pic_01_pc.png" alt="">
                        </picture>
                        <dl class="dl-img">
                            <dt class="dt-img">入国時PCR検査・お出迎え</dt>
                            <dd class="dd-img">入国時の検査の<br class="pc-br">案内補助をおこないます。</dd>
                        </dl>
                    </li>
                    <li class="li-img">
                        <picture class="box-img">
                            <source media="(max-width: 767px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/immigration_pic_02_sp.png 2x">
                            <source media="(min-width: 768px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/immigration_pic_02_pc.png 2x">
                            <img class="sizes"
                                src="<?php bloginfo('template_url');?>/images/service/immigration_pic_02_pc.png" alt="">
                        </picture>
                        <dl class="dl-img">
                            <dt class="dt-img">入国時PCR検査・お出迎え</dt>
                            <dd class="dd-img">入国時の検査の<br>案内補助をおこないます。</dd>
                        </dl>
                    </li>
                    <li class="li-img">
                        <picture class="box-img">
                            <source media="(max-width: 767px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/immigration_pic_03_sp.png 2x">
                            <source media="(min-width: 768px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/immigration_pic_03_pc.png 2x">
                            <img class="sizes"
                                src="<?php bloginfo('template_url');?>/images/service/immigration_pic_03_pc.png" alt="">
                        </picture>
                        <dl class="dl-img">
                            <dt class="dt-img">交通手段の斡旋</dt>
                            <dd class="dd-img">入国時の検査の<br>案内補助をおこないます。</dd>
                        </dl>
                    </li>
                    <p class="text">※深夜、早朝の対応は追加で料金がかかります 。※新型コロナ感染拡大状況により、斡旋プラン料金に追加の料金が発生する場合がございます 。</p>
                </ul>

                <div class="learn-content">
                    <div class="box-title flex">
                        <p class="left">サポートするGMSの強み</p>
                    </div>
                    <ul class="list-learn">
                        <li class="li-learn flex">
                            <p class="title-li">トラブルに強い</p>
                            <div class="right-li">
                                <p class="text">到着便の遅延・急なフライト変更・到着後の急な行き先変更等、イレギュラー発生時も柔軟に対応いたします。</p>
                            </div>
                        </li>
                        <li class="li-learn flex">
                            <p class="title-li">交通手段の斡旋</p>
                            <div class="right-li">
                                <p class="text">タクシー・ハイヤー・バス会社、各ホテルと連携 をし、目的地まで安心安全にお送りいたします。</p>
                            </div>
                        </li>
                        <li class="li-learn flex">
                            <p class="title-li">外国語対応</p>
                            <div class="right-li">
                                <p class="text">英語での対応や、各言語で作成したご案内書の配布等によるサポートが可能です。</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="page-top">
                    <a href="#" class="page-top-anchor">
                        <picture>
                            <img src="<?php bloginfo('template_url');?>/images/common/page-top-anchor.png" alt="">
                        </picture>
                    </a>
              </div>
            </section>

            <section class="block-tab two js-fadein" id="p2">
                <div class="block-immigration flex">
                    <dl class="dl-block">
                        <dt class="dt-block">海外出国斡旋</dt>
                        <dd class="dd-block">
                            出発空港でのお出迎えから<br>出発までのサポート
                        </dd>
                    </dl>
                    <picture class="img-banner">
                        <source media="(max-width: 767px)"
                            srcset="<?php bloginfo('template_url');?>/images/service/immigration_ttl_02_sp.png 2x">
                        <source media="(min-width: 768px)"
                            srcset="<?php bloginfo('template_url');?>/images/service/immigration_ttl_02_pc.png 2x">
                        <img class="sizes"
                            src="<?php bloginfo('template_url');?>/images/service/immigration_ttl_02_pc.png" alt="">
                    </picture>
                    <p class="box-number"><span class="number montserrat">02</span></p>
                </div>

                <ul class="list-img flex">
                    <li class="li-img two">
                        <picture class="box-img">
                            <source media="(max-width: 767px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/immigration_pic_04_sp.png 2x">
                            <source media="(min-width: 768px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/immigration_pic_04_pc.png 2x">
                            <img class="sizes"
                                src="<?php bloginfo('template_url');?>/images/service/immigration_pic_04_pc.png" alt="">
                        </picture>
                        <dl class="dl-img">
                            <dt class="dt-img">渡航前のご案内</dt>
                            <dd class="dd-img">当日の集合時間・集合場所・フラ<br>イト情報等をご案内いたします。</dd>
                        </dl>
                    </li>
                    <li class="li-img two">
                        <picture class="box-img">
                            <source media="(max-width: 767px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/immigration_pic_05_sp.png 2x">
                            <source media="(min-width: 768px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/immigration_pic_05_pc.png 2x">
                            <img class="sizes"
                                src="<?php bloginfo('template_url');?>/images/service/immigration_pic_05_pc.png" alt="">
                        </picture>
                        <dl class="dl-img">
                            <dt class="dt-img">空港出発場所にてお出迎え</dt>
                            <dd class="dd-img">出発ロビーにてご出国者様を<br>お出迎えいたします。</dd>
                        </dl>
                    </li>
                    <li class="li-img two">
                        <picture class="box-img">
                            <source media="(max-width: 767px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/immigration_pic_06_sp.png 2x">
                            <source media="(min-width: 768px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/immigration_pic_06_pc.png 2x">
                            <img class="sizes"
                                src="<?php bloginfo('template_url');?>/images/service/immigration_pic_06_pc.png" alt="">
                        </picture>
                        <dl class="dl-img">
                            <dt class="dt-img">事前チェックイン</dt>
                            <dd class="dd-img">機内の座席指定や受託荷物の預け<br>入れをサポートいたします。</dd>
                        </dl>
                    </li>
                    <li class="li-img two">
                        <picture class="box-img">
                            <source media="(max-width: 767px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/immigration_pic_07_sp.png 2x">
                            <source media="(min-width: 768px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/immigration_pic_07_pc.png 2x">
                            <img class="sizes"
                                src="<?php bloginfo('template_url');?>/images/service/immigration_pic_07_pc.png" alt="">
                        </picture>
                        <dl class="dl-img">
                            <dt class="dt-img">ご出発までのご案内</dt>
                            <dd class="dd-img">出発までの流れや空港内について<br>ご出国者様にご案内いたします。</dd>
                        </dl>
                    </li>
                </ul>

                <div class="learn-content">
                    <div class="box-title flex">
                        <p class="left">サポートするGMSの強み</p>
                    </div>
                    <ul class="list-learn">
                        <li class="li-learn flex">
                            <p class="title-li">現地スタッフサポート</p>
                            <div class="right-li">
                                <p class="text">ご出国時のご不安に対して、海外のパートナー会社の各拠点から直接ご出国者様をサポートさせて頂きます。</p>
                            </div>
                        </li>
                        <li class="li-learn flex">
                            <p class="title-li">航空会社との繋がり</p>
                            <div class="right-li">
                                <p class="text">航空会社との強い連携により、当日の欠航や遅延等の急なトラブルにも対応させて頂きます。</p>
                            </div>
                        </li>
                        <li class="li-learn flex">
                            <p class="title-li">海外・国内の連携体制</p>
                            <div class="right-li">
                                <p class="text">“これまでの経験により培った国内外の連携により、安心安全のサポートをさせて頂きます。</p>
                                <p class="note">※出国時の日本への連絡や、トラブルの共有等”</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="page-top">
                    <a href="#" class="page-top-anchor">
                        <picture>
                            <img src="<?php bloginfo('template_url');?>/images/common/page-top-anchor.png" alt="">
                        </picture>
                    </a>
              </div>
            </section>

        </div>
    </div>
    <div class="pack-month js-fadein" id="p3">
        <div class="inner">
            <h3 class="title-page">プランと月額料金（例）</h3>
            <ul class="list-pack flex">
                <li class="item-pack">
                    <div class="info flex">
                        <dl class="dl-info">
                            <dt class="dt-number montserrat">PLAN 01</dt>
                            <dt class="dt-info">国内空港斡旋</dt>
                            <dd class="dd-info">到着空港での<br class="sp-br">お出迎えから<br>交通手段の斡旋</dd>
                        </dl>
                        <picture class="img-box">
                            <source media="(max-width: 767px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/immigration_thum_01_sp.png 2x">
                            <source media="(min-width: 768px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/immigration_thum_01_pc.png 2x">
                            <img class="sizes"
                                src="<?php bloginfo('template_url');?>/images/service/immigration_thum_01_pc.png"
                                alt="">
                        </picture>
                    </div>
                    <div class="detail-price">
                        <p class="text-01"><span class="sp-t">月額</span><br class="sp-br"><span
                                class="number montserrat">15,000〜30,000</span>円／人</p>
                        <p class="note-small">
                            ※深夜、早朝の対応は追加で料金がかかります 。<br>※新型コロナ感染拡大状況により、<br>斡旋プラン料金に追加の料金が発生する場合がございます 。
                        </p>
                        <dl class="dl-buy">
                            <dt class="dt-buy">オプション</dt>
                            <dt class="dt-buy02">希望言語による</dt>
                            <dd class="dd-buy">入国時案内資料 作成・配布</dd>
                        </dl>

                        <p class="text-01"><span class="sp-t">月額</span><br class="sp-br"><span
                                class="number montserrat">5,000</span>円／10名様まで</p>
                        <p class="note-small">
                            ※11名様以上は応相談になります。
                        </p>
                    </div>
                </li>
                <li class="item-pack">
                    <div class="info flex">
                        <dl class="dl-info">
                            <dt class="dt-number montserrat">PLAN 02</dt>
                            <dt class="dt-info">海外出国斡旋</dt>
                            <dd class="dd-info">出発空港での<br class="sp-br">お出迎えから<br>出発までのサポート</dd>
                        </dl>
                        <picture class="img-box">
                            <source media="(max-width: 767px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/immigration_thum_02_sp.png 2x">
                            <source media="(min-width: 768px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/immigration_thum_02_pc.png 2x">
                            <img class="sizes"
                                src="<?php bloginfo('template_url');?>/images/service/immigration_thum_02_pc.png"
                                alt="">
                        </picture>
                    </div>
                    <div class="detail-price">
                        <div class="item-contry flex one">
                            <div class="left">
                                <picture class="img-banner">
                                    <source
                                        srcset="<?php bloginfo('template_url');?>/images/service/immigration_icon_01.png">
                                    <img class="sizes"
                                        src="<?php bloginfo('template_url');?>/images/service/immigration_icon_01.png"
                                        alt="">
                                </picture>
                            </div>
                            <div class="right">
                                <p class="title-right">インドネシア・フィリピン</p>
                            </div>
                        </div>
                        <div class="item-contry flex two">
                            <div class="left">
                                <picture class="img-banner">
                                    <source
                                        srcset="<?php bloginfo('template_url');?>/images/service/immigration_icon_02.png">
                                    <img class="sizes"
                                        src="<?php bloginfo('template_url');?>/images/service/immigration_icon_02.png"
                                        alt="">
                                </picture>
                            </div>
                            <div class="right">
                                <p class="text-01"><span class="sp-t">月額</span><span
                                        class="number montserrat">12,000〜</span>円／人</p>
                            </div>
                        </div>
                        <div class="item-contry flex">
                            <div class="left">
                                <picture class="img-banner">
                                    <source
                                        srcset="<?php bloginfo('template_url');?>/images/service/immigration_icon_03.png">
                                    <img class="sizes"
                                        src="<?php bloginfo('template_url');?>/images/service/immigration_icon_03.png"
                                        alt="">
                                </picture>
                            </div>
                            <div class="right">
                                <p class="title-right">ミャンマー</p>
                                <p class="text-01"><span class="sp-t">月額</span><span
                                        class="number montserrat">14,000〜</span>円／人</p>
                            </div>
                        </div>
                        <div class="item-contry flex">
                            <div class="left">
                                <picture class="img-banner">
                                    <source
                                        srcset="<?php bloginfo('template_url');?>/images/service/immigration_icon_04.png">
                                    <img class="sizes"
                                        src="<?php bloginfo('template_url');?>/images/service/immigration_icon_04.png"
                                        alt="">
                                </picture>
                            </div>
                            <div class="right">
                                <p class="title-right">ベトナム</p>
                                <p class="text-01"><span class="sp-t">月額</span><span
                                        class="number montserrat">23,000〜</span>円／人</p>
                            </div>
                        </div>
                        <p class="note-small">
                            ※2021年3 月25日時点での料金であり、<br
                                class="pc-br">為替変動等により料金が変動する可能性がございます。<br>※新型コロナ感染拡大状況により、斡旋停止や不可の国もございます
                        </p>
                    </div>
                </li>
            </ul>
            <div class="page-top">
                    <a href="#" class="page-top-anchor">
                        <picture>
                            <img src="<?php bloginfo('template_url');?>/images/common/page-top-anchor.png" alt="">
                        </picture>
                    </a>
              </div>
        </div>
        <div id="breadcrumb-footer" class="breadcrumb">
            <ol>
                <li>
                    <a href="<?php echo home_url(); ?>">トップページ</a>&nbsp;&nbsp;<i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                    <a href="<?php bloginfo('url');?>/service/cloud/">労務代行サービス</a>&nbsp;&nbsp;<i class="fa-solid fa-chevron-right"></i>
                </li>
                <li> 出入国サポート</li>
            </ol>
        </div>
    </div>
</div>

<?php get_template_part('block-service/block-last'); ?>
<?php get_footer(); ?>