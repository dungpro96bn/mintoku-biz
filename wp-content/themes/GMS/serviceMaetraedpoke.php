<?php
/**
 * Template Name: serviceMaetraedpoke
 * Template Post Type: page
 **/
?>

<?php
$post = get_post();
$slug = $post->post_name;
?>

<?php get_header();?>

<div id="maetra" class ="edpoke">

    <div class="banner-service <?php if($slug == "life-support" || $slug == "edpoke"){echo 'banner-item02';} ?>">
        <div class="image-content">
            <picture class="image">
                <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/life_support_image01_pc.png">
                <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/life_support_image01_pc.png">
                <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/life_support_image01_pc.png" alt="">
            </picture>
        </div>
        <div class="banner-info">
            <div class="banner-inner">
                <h3 class="sub-title">日本語教育</h3>
                <picture class="logo-job-support">
                    <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/logo-life-support.svg">
                    <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/logo-life-support.svg">
                    <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/logo-life-support.svg" alt="">
                </picture>
                <h2 class="heading">新たな外国人雇用の生活に、<br/>充実とバランスを</h2>
            </div>
        </div>
    </div>

    <?php get_template_part("template-parts/partners"); ?>

    <?php get_template_part("template-parts/service-aboutUs"); ?>

    <div class="life-support-feature <?php echo $slug; ?>">
        <div class="inner">
            <div class="heading-entry">
                <h2 class="heading-block center">
                    <span>FEATURE</span>
                </h2>
                <p class="sub-ttl">特徴</p>
            </div>
            <div class="feature-content">
                <div class="feature-list">
                    <div class="feature-item">
                        <div class="box-number">
                            <p class="t1">Feature</p>
                            <p class="t2">01</p>
                        </div>
                        <div class="feature-top">
                            <div class="info-content">
                                <h4 class="title">インフラ代行プラン</h4>
                                <h3 class="sub-title">生活インフラの<br/>契約・支払い一本化</h3>
                                <p class="text">配属前に必要な社宅や生活備品、インターネット環境などの準備、契約代行を弊社が行うことで支払先の一本化が可能になり、経理工数の削減ができるプランとなっています。</p>
                            </div>
                            <div class="image-content">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/life_support_image03_sp.png">
                                    <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/life_support_image03_pc.png">
                                    <img class="sizes img-radius" src="<?php bloginfo('template_directory'); ?>/assets/images/life_support_image03_pc.png" alt="">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="box-number">
                            <p class="t1">Feature</p>
                            <p class="t2">02</p>
                        </div>
                        <div class="feature-top">
                            <div class="info-content">
                                <h4 class="title">教育プラン</h4>
                                <h3 class="sub-title">日本語能力・生産性をレベルアップ</h3>
                                <p class="text">日本で生活する外国人材の方の日本語力強化、個々の行動レベル向上・意識改革が可能です。リモート学習教材には大手教育会社の日本語教育コンテンツ、資質向上のため「LQプログラム」を取り入れフィードバックも充実。きちんとした教育が可能です。</p>
                                <p class="note">サービス提供社；綜合キャリアオプション<br/>販売代行；キャムグローバル</p>
                                <div class="see-more">
                                    <p>詳しく見る<span class="icon">＞</span></p>
                                </div>
                            </div>
                            <div class="image-content">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/life_support_image04_sp.png">
                                    <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/life_support_image04_pc.png">
                                    <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/life_support_image04_pc.png" alt="">
                                </picture>
                            </div>
                        </div>
                        <div class="feature-details">
                            <div class="details-content">
                                <p class="title"><span>カリキュラム内容</span></p>
                                <ul class="details-list">
                                    <li class="details-item">
                                        <div class="details-title">
                                            <p>日本語動画研修</p>
                                        </div>
                                        <div class="details-info">
                                            <p>業務に必要な日本語学習や試験対策等の動画教材を提供<br/>
                                                □ JLPT対策コース：N5 ～ N1   □ BJC(基礎日本語コミュニケーション学習）：ゼロ初級、Ns</p>
                                        </div>
                                    </li>
                                    <li class="details-item">
                                        <div class="details-title">
                                            <p>LQプログラム</p>
                                        </div>
                                        <div class="details-info">
                                            <p>「職場において必要とされる基本的な知識を習得すること」「仕事の心構え」「マナー」「仕事のつながり（工程）」等の基本を学習することで、「ただ仕事をする」ではなく、働く人としての資質を高め全体の生産性もたかめていきます。 【Employability（雇用可能力、雇用されうる力）】を向上するプログラムを提供<br/>
                                                □LQ検定：基礎、安全衛生、品質管理、ビジネスマナー、KYT etc<br/>
                                                □愛される社員になる動画：挨拶と声掛け、感謝etc</p>
                                        </div>
                                    </li>
                                    <li class="details-item">
                                        <div class="details-title">
                                            <p>試験対策動画</p>
                                        </div>
                                        <div class="details-info">
                                            <p>技能実習生向け基礎級試験の勉強や特定技能試験対策動画などの配信も行っております。</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="link-page">
                                    <a href="#">edupoke global ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="box-number">
                            <p class="t1">Feature</p>
                            <p class="t2">03</p>
                        </div>
                        <div class="feature-top">
                            <div class="info-content">
                                <h4 class="title">24時間対応<br/>コンシェルプラン</h4>
                                <h3 class="sub-title">多言語で24時間対応できる<br/>
                                    コールセンターに帰国までの<br/>
                                    生活サポートはおまかせ</h3>
                                <p class="text">24時間＋多言語対応、困った時にいつでも頼れる存在として外国人材の方をしっかりサポートが可能。日常生活から災害時・緊急時まで丁寧に対応し、安心した暮らしをお約束します。監理団体様や登録支援機関様での対応とは別のサービスになります。</p>
                                <div class="see-more">
                                    <p>詳しく見る<span class="icon">＞</span></p>
                                </div>
                            </div>
                            <div class="image-content">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/life_support_image05_sp.png">
                                    <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/life_support_image05_pc.png">
                                    <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/life_support_image05_pc.png" alt="">
                                </picture>
                            </div>
                        </div>
                        <div class="feature-details">
                            <div class="details-content">
                                <p class="title"><span>24時間コンシェルプラン内容</span></p>
                                <p class="sub-ttl">必要に応じて専任担当が 対応させて頂きます。</p>
                                <ul class="details-list">
                                    <li class="details-item">
                                        <div class="details-title">
                                            <p>多言語コンシェルセンター</p>
                                        </div>
                                        <div class="details-info">
                                            <p>外国人材からの生活・仕事に関するお問い合わせ・メンタルヘルス相談に対して、24時間365日、多言語で対応いたします。電話だけでなくSNS対応も可能です。また自然災害時、感染症流行時などにはコンシェルセンターから注意喚起や確認事項などをSNSで一斉送信することもできます。</p>
                                        </div>
                                    </li>
                                    <li class="details-item">
                                        <div class="details-title">
                                            <p>コンシェル駆けつけ対応</p>
                                        </div>
                                        <div class="details-info">
                                            <p>緊急的なトラブル対応など、コンシェルセンターで解決できないことがあれば、現地専任担当が直接駆けつけ、問題・トラブルを解決サポートします。</p>
                                        </div>
                                    </li>
                                    <li class="details-item">
                                        <div class="details-title">
                                            <p>その他にも充実対応</p>
                                        </div>
                                        <div class="details-info">
                                            <div class="info-list">
                                                <div class="info-item">
                                                    <p>□ 入国時の送迎対応</p>
                                                    <p>□ 社宅設備説明/オリエンテーション</p>
                                                    <p>□ 通勤経路/近隣施設案内</p>
                                                    <p>□ 近隣住人/警察挨拶</p>
                                                    <p>□ 生活指導/個別面談/教育/支援</p>
                                                </div>
                                                <div class="info-item">
                                                    <p>□ 病気/怪我/災害時の通院対応</p>
                                                    <p>□ 近隣トラブル、失踪時の対応</p>
                                                    <p>□ 社宅設備不具合時のフォロー</p>
                                                    <p>□ 電気/ガス/水道不具合時のフォロー</p>
                                                    <p>□ 必要時通訳手配</p>
                                                </div>
                                                <div class="info-item">
                                                    <p>□ 一時帰国に関する相談/支援</p>
                                                    <p>□ 帰国時の社宅室内確認</p>
                                                    <p>□ 帰国時の送迎対応</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="box-number">
                            <p class="t1">Feature</p>
                            <p class="t2">04</p>
                        </div>
                        <div class="feature-top">
                            <div class="info-content">
                                <h4 class="title">フルパッケージプラン</h4>
                                <h3 class="sub-title">初めての外国人材採用も安心と充実</h3>
                                <p class="text">外国人材活用に必要なあらゆる業務をお引き受けし、<br class="pc-br"/>日本で生活する全ての外国人材の安全な生活をサポート。</p>
                            </div>
                            <div class="image-content">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/life_support_image06_sp.png">
                                    <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/life_support_image06_pc.png">
                                    <img class="sizes img-radius" src="<?php bloginfo('template_directory'); ?>/assets/images/life_support_image06_pc.png" alt="">
                                </picture>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="plan-price <?php if($slug == "life-support" || $slug == "edpoke"){echo 'price-item02';} ?>">
        <div class="inner">
            <div class="header-entry">
                <h2 class="heading-block center">
                    <span class="uppercase">Plan & Price</span>
                </h2>
                <p class="sub-ttl">プランと月額料金</p>
            </div>
            <div class="price-table">
                <div class="price-list">
                    <picture class="image">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/life_support_image07_sp.png">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/life_support_image07_pc.png">
                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/life_support_image07_pc.png" alt="">
                    </picture>
                </div>
            </div>
            <div class="description">
                <p class="t1">プランの組み合わせは<br class="sp-br"/>自由にカスタマイズ可能です。</p>
                <p class="t2">※契約機関に応じて、料金体系が変わります。表記されている金額は3年契約の場合です。</p>
            </div>
        </div>
    </div>

    <?php get_template_part("template-parts/banner-other"); ?>

    <?php get_template_part("template-parts/support"); ?>

    <?php get_template_part("template-parts/line-up"); ?>

    <?php get_template_part("template-parts/contact-bottom"); ?>

</div>

<?php get_footer(); ?>