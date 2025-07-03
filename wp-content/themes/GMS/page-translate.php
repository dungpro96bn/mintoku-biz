<?php get_header(); ?>
<div id="translate">

    <?php get_template_part("template-parts/service-aboutUs"); ?>

    <div class="translate-feature feature-allPage">
        <div class="inner">
            <div class="heading-feature">
                <h2 class="center">
                    <span class="ttl-ja">特徴</span>
                    <span class="ttl-en">FEATURE</span>
                </h2>
            </div>
            <div class="feature-content">
                <div class="feature-top">
                    <div class="box-number">
                        <p class="t1">Feature</p>
                        <p class="t2">01</p>
                    </div>
                    <div class="image-content">
                        <picture class="image">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/translate-feature-image-sp.png">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/translate-feature-image.png">
                            <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/translate-feature-image.png" alt="">
                        </picture>
                    </div>
                    <div class="info-content">
                        <h4 class="title">翻訳サービス</h4>
                        <p class="text">社内の掲示物、作業手順書から就労者との契約書類。<br/>
                            教育資料や各種契約書など。<br/>
                            ネイティブチェックが必要な場合は別途お問い合わせください。</p>
                        <div class="service-list">
                            <div class="service-item">
                                <p>中国語：9円/1文字</p>
                                <p>英語：10.5円/1文字</p>
                                <p>タイ語：13円/1文字</p>
                            </div>
                            <div class="service-item">
                                <p>ミャンマー語：15円/1文字</p>
                                <p>タガログ語：15.5円/1文字</p>
                                <p>ベトナム語：16.5円/1文字</p>
                            </div>
                            <div class="service-item">
                                <p>インドネシア語：16.5円/1文字</p>
                            </div>
                        </div>
                        <!--div class="link-page">
                            <a href="#">詳しく見る ＞</a>
                        </div-->
                    </div>
                </div>
                <div class="feature-bottom">
                    <div class="box-number">
                        <p class="t1">Feature</p>
                        <p class="t2">02</p>
                    </div>
                    <div class="info-content">
                        <h4 class="title">通訳派遣サービス</h4>
                        <p class="text">アテンド通訳などスポット対応もご相談ください。空港などのお迎えが必要な際もご利用できます。<br/>
                            そのほか社内研修での活用も好評です。</p>
                        <p class="t1">基本価格：3,000〜円/時間</p>
                    </div>
                    <div class="step">
                        <p class="ttl">通訳派遣までの流れ</p>
                        <ul class="step-list">
                            <li class="step-item">
                                <div class="box-num"><span>STEP.1</span></div>
                                <p class="text">打ち合わせ</p>
                            </li>
                            <li class="step-item">
                                <div class="box-num"><span>STEP.2</span></div>
                                <p class="text">見積もり</p>
                            </li>
                            <li class="step-item">
                                <div class="box-num"><span>STEP.3</span></div>
                                <p class="text">候補者選定</p>
                            </li>
                            <li class="step-item">
                                <div class="box-num"><span>STEP.4</span></div>
                                <p class="text">事前打ち合わせ</p>
                            </li>
                            <li class="step-item">
                                <div class="box-num"><span>STEP.5</span></div>
                                <p class="text">通訳実施</p>
                            </li>
                        </ul>
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