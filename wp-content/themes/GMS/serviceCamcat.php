<?php
/**
 * Template Name:camcat
 * Template Post Type: page
 **/
?>

<?php
$post = get_post();
$slug = $post->post_name;
?>

<?php get_header();?>

<div id="cloud">

    <div class="banner-service banner-cloud">
        <div class="image-content">
            <picture class="image">
                <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/camcat_mainImg_pc.png">
                <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/camcat_mainImg_pc.png">
                <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/camcat_mainImg_pc.png" alt="">
            </picture>
        </div>
        <div class="banner-info">
            <div class="banner-inner">
                <picture class="logo-job-support">
                    <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/logo_cam_cat.png 2x">
                    <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/logo_cam_cat.png" alt="">
                </picture>
                <h3 class="sub-title">専門家無料相談サービス</h3>
                <h2 class="heading">CAMCAT外国人<br/>雇用管理サービス</h2>
            </div>
        </div>
    </div>



    <?php get_template_part("template-parts/service-aboutUs"); ?>

    <div class="camCat-feature">
        <div class="heading-entry">
            <h2 class="heading-block center">
                <span>FEATURE</span>
            </h2>
            <p class="sub-ttl">特徴</p>
        </div>
        <div class="feature-service">
            <div class="inner">
                <div class="logo-top">
                    <picture class="image">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_image01_pc.png">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_image01_pc.png">
                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_image01_pc.png" alt="">
                    </picture>
                    <p class="subTtl-logo">オールインワンシステム</p>
                </div>
                <p class="description">外国人雇用における多くの登場人物を<br/>ひとつのプラットフォームでつなげるオールインワンシステム</p>
                <div class="map-camcat">
                    <picture class="image">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_image02_pc.png">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_image02_pc.png">
                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_image02_pc.png" alt="">
                    </picture>
                </div>
                <div class="cloud-service">
                    <div class="cloud-service-logo">
                        <picture class="image">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_image01_pc.png">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_image01_pc.png">
                            <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_image01_pc.png" alt="">
                        </picture>
                        <p class="subTtl-logo">クラウドサービスご説明</p>
                    </div>
                    <div class="cloud-map">
                        <picture class="image">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_image03_pc.png">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_image03_pc.png">
                            <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_image03_pc.png" alt="">
                        </picture>
                    </div>
                </div>
            </div>
        </div>

        <div class="feature-content">
            <div class="feature-list">
                <div class="feature-item">
                    <div class="box-number">
                        <p class="t1">Feature</p>
                        <p class="t2">01</p>
                    </div>
                    <div class="image-content">
                        <picture class="image">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_image04_pc.png">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_image04_pc.png">
                            <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_image04_pc.png" alt="">
                        </picture>
                    </div>
                    <div class="info-content">
                        <h4 class="title">シンプル機能最小<br/>
                            アクション最大シェア</h4>
                        <p class="text">オーバースペックにならないように機能をシンプルに制作。<br/>誰でも簡単に使えるように設計しました。</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="box-number">
                        <p class="t1">Feature</p>
                        <p class="t2">02</p>
                    </div>
                    <div class="image-content">
                        <picture class="image">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_image05_pc.png">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_image05_pc.png">
                            <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_image05_pc.png" alt="">
                        </picture>
                    </div>
                    <div class="info-content">
                        <h4 class="title">携帯端末からも<br/>アクセス可能に</h4>
                        <p class="text">現場でコトがおきる「あるある」を前提にデスクワークではできないアクション機能を実装しました。</p>
                    </div>
                </div>
                <div class="feature-item feature-functions">
                    <div class="box-number">
                        <p class="t1">Feature</p>
                        <p class="t2">03</p>
                    </div>
                    <h4 class="title">様々な機能を追加</h4>
                    <div class="functions-list">
                        <div class="functions-item">
                            <picture class="image">
                                <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_07_01.png 2x">
                                <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_07_01.png 2x">
                                <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_07_01.png" alt="">
                            </picture>
                        </div>
                        <div class="functions-item">
                            <picture class="image">
                                <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_07_02.png 2x">
                                <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_07_02.png 2x">
                                <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_07_02.png" alt="">
                            </picture>
                        </div>
                        <div class="functions-item">
                            <picture class="image">
                                <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_07_03.png 2x">
                                <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_07_03.png 2x">
                                <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_07_03.png" alt="">
                            </picture>
                        </div>
                        <div class="functions-item">
                            <picture class="image">
                                <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_07_04.png 2x">
                                <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_07_04.png 2x">
                                <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_07_04.png" alt="">
                            </picture>
                        </div>
                        <div class="functions-item">
                            <picture class="image">
                                <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_07_05.png 2x">
                                <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_07_05.png 2x">
                                <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_07_05.png" alt="">
                            </picture>
                        </div>
                        <div class="functions-item">
                            <picture class="image">
                                <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_07_06.png 2x">
                                <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_07_06.png 2x">
                                <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_07_06.png" alt="">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="plan-price <?php echo $slug; ?>">
        <div class="inner">
            <div class="header-entry">
                <h2 class="heading-block center">
                    <span class="uppercase">Plan & Price</span>
                </h2>
                <p class="sub-ttl">プランと月額料金</p>
                <p class="description">無駄の無い、就労者数に合わせた料金設定</p>
            </div>
            <div class="price-table">
                <div class="price-list">
                    <picture class="image">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_image06_sp.png">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_image06_pc.png">
                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/cam_cat_image06_pc.png" alt="">
                    </picture>
                </div>
                <p class="note">※導入にあたっての注意事項<br/>
                    ・在籍人数カウント:毎月15日（15日が休日の場合は直前の営業日）午前10時時点の利用実績<br/>
                    ・毎月末日までに請求書を発行し、請求書受領日の翌月末日までに指定口座に振り込む方法により支払うものとします。<br/>
                    ・この際の振込手数料は御社様のご負担となります。</p>
            </div>
        </div>

    </div>

    <?php get_template_part("template-parts/banner-other"); ?>

    <?php get_template_part("template-parts/support"); ?>

    <?php get_template_part("template-parts/line-up"); ?>

    <?php get_template_part("template-parts/contact-bottom"); ?>

</div>

<?php get_footer(); ?>