<?php
/**
 * Template Name: consultation
 * Template Post Type: page
 **/
?>

<?php
$post = get_post();
$slug = $post->post_name;
?>

<?php get_header();?>

<div id="consultation">

    <div class="banner-service">
        <div class="image-content">
            <picture class="image">
                <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/consultation_mainImg_pc.png">
                <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/consultation_mainImg_pc.png">
                <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/consultation_mainImg_pc.png" alt="">
            </picture>
        </div>
        <div class="banner-info">
            <div class="banner-inner">
                <h3 class="sub-title">専門家無料相談サービス</h3>
                <h2 class="heading">プロのアドバイスで、<br/>外国人採用に安心と信頼を</h2>
            </div>
        </div>
    </div>

    <?php get_template_part("template-parts/partners"); ?>

    <div class="banner-top green <?php echo $slug; ?>">
        <div class="about-content">
            <div class="about-info">
                <h2 class="heading-block en">
                    <span class="uppercase">Frequently asked questions</span>
                </h2>
                <h3 class="title">よくあるお悩み</h3>
            </div>
            <div class="image-list">
                <picture class="image">
                    <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/consultation_about_image01_pc.png">
                    <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/consultation_about_image01_pc.png">
                    <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/consultation_about_image01_pc.png" alt="">
                </picture>
                <picture class="image">
                    <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/consultation_about_image02_pc.png">
                    <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/consultation_about_image02_pc.png">
                    <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/consultation_about_image02_pc.png" alt="">
                </picture>
                <picture class="image">
                    <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/consultation_about_image03_pc.png">
                    <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/consultation_about_image03_pc.png">
                    <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/consultation_about_image03_pc.png" alt="">
                </picture>
            </div>
        </div>
    </div>

    <div class="solution">
        <div class="inner">
            <div class="heading-entry">
                <h2 class="heading-block">
                    <span class="uppercase">SOLUTION</span>
                </h2>
                <p class="sub-ttl">弊社専属の社労士・行政書士が無料でお答えします。</p>
            </div>
            <div class="solution-content">
                <div class="solution-list">
                    <div class="solution-item">
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
                            <h4 class="title">社労士</h4>
                            <p class="t1">法律上のルールを、<br/>
                                それぞれの現場に合う形で<br/>
                                落とし込む仕事をサポート</p>
                            <p class="text">労働保険や社会保険の手続き代行、法定帳簿(労働者名簿・賃金台帳・出勤簿)の作成などの書類作成を行なったり人事労務関係の相談・指導、社員教育カリキュラムの検討、賃金・評価制度の構築など、はたらく環境の整備・改善をする仕事です。</p>
                        </div>
                    </div>
                    <div class="solution-item">
                        <div class="box-number">
                            <p class="t1">Feature</p>
                            <p class="t2">02</p>
                        </div>
                        <div class="image-content">
                            <picture class="image">
                                <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/translate-feature-image-sp.png">
                                <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/translate-feature-image.png">
                                <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/translate-feature-image.png" alt="">
                            </picture>
                        </div>
                        <div class="info-content">
                            <h4 class="title">行政書士</h4>
                            <p class="t1">「行政関係」の官公署や役所に<br/>提出する書類を作成をサポート</p>
                            <p class="text">行政に関する書類や、法律的な権利義務・事実の証明に関する様々な書類の作成や手続を、企業様や個人に代わって行ったり、手続に関するアドバイスを行ったりするのが主な仕事です。</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="introduction">
        <div class="inner">
            <div class="heading-entry">
                <h2 class="heading-block">
                    <span class="uppercase ">Introduction</span>
                </h2>
                <p class="sub-ttl">社労士・行政書士のご紹介</p>
            </div>
            <div class="introduction-content">
                <div class="introduction-list">
                    <div class="introduction-item">
                        <picture class="image">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/consultation_pic_04_pc.png">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/consultation_pic_04_pc.png">
                            <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/consultation_pic_04_pc.png" alt="">
                        </picture>
                        <div class="info">
                            <div class="name">
                                <p class="name-ja">小山 翔太</p>
                                <p class="name-en">Shota KOYAMA</p>
                            </div>
                            <p class="text">JAPAN行政書士法人。<br/>外国人材採用のご不安解消に、誠心誠意対応いたします。</p>
                        </div>
                    </div>
                    <div class="introduction-item">
                        <picture class="image">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/consultation_pic_08_pc.png">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/consultation_pic_08_pc.png">
                            <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/consultation_pic_08_pc.png" alt="">
                        </picture>
                        <div class="info">
                            <div class="name">
                                <p class="name-ja">長谷川 文彦</p>
                                <p class="name-en">Humihiko HASEGAWA</p>
                            </div>
                            <p class="text">株式会社キャムテック。<br/>法改正に伴う専門的な質問もお任せください！</p>
                        </div>
                    </div>
                    <div class="introduction-item">
                        <picture class="image">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/consultation_pic_09_pc.png">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/consultation_pic_09_pc.png">
                            <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/consultation_pic_09_pc.png" alt="">
                        </picture>
                        <div class="info">
                            <div class="name">
                                <p class="name-ja">奥 祐也</p>
                                <p class="name-en">Yuya OKU</p>
                            </div>
                            <p class="text">キャムテック行政書士事務所。<br/>特定技能専門の行政書士事務所として、外国人採用をサポートします</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php get_template_part("template-parts/support"); ?>

    <?php get_template_part("template-parts/line-up"); ?>

    <?php get_template_part("template-parts/contact-bottom"); ?>

</div>

<?php get_footer(); ?>