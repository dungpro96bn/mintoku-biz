<?php get_header(); ?>


    <div id="homepage">

        <div class="homepageBanner-bg">
            <div class="homepage-banner">
                <div class="banner-content">
                    <div class="image-content">
                        <picture class="image">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/main/main_sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/main/main.png 2x">
                            <img class="sizes" data-aos="zoom-in" src="<?php bloginfo('template_directory'); ?>/assets/images/main/main.png" alt="">
                        </picture>
                    </div>
                    <div class="banner-info">
                        <h1 class="t1">外国人採用、迷ったら</h1>
                        <h2>ミントク。</h2>
                        <div class="text-box">
                            <p class="text-box01">採用・教育・現場支援まで、</p>
                            <p class="text-box02">ミントクで解決。</p>
                        </div>
                        <div class="description-list">
                            <div class="description-item">
                                <p class="ttl">支援実績</p>
                                <div class="inner-sp">
                                    <p class="number">13,000<span>名以上</span></p>
                                    <p class="note">（2025年／6月時点）</p>
                                </div>
                            </div>
                            <div class="description-item">
                                <p class="ttl">ライフサポート</p>
                                <div class="inner-sp">
                                    <p class="number">6,000<span>名以上</span></p>
                                    <p class="note">（2025年／7月時点）</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <picture class="icon-pos image-icon01">
                <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/main/pink_a.png 2x">
                <img class="sizes" data-aos="fade-up-right" src="<?php bloginfo('template_directory'); ?>/assets/images/main/pink_a.png" alt="">
            </picture>
            <picture class="icon-pos image-icon02">
                <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/main/yellow.png 2x">
                <img class="sizes" data-aos="fade-left" src="<?php bloginfo('template_directory'); ?>/assets/images/main/yellow.png" alt="">
            </picture>
            <picture class="icon-pos image-icon03">
                <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/main/green_a.png 2x">
                <img class="sizes" data-aos="fade-up-right" src="<?php bloginfo('template_directory'); ?>/assets/images/main/green_a.png" alt="">
            </picture>
            <picture class="icon-pos image-icon04">
                <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/main/blue.png 2x">
                <img class="sizes" data-aos="fade-down-right" src="<?php bloginfo('template_directory'); ?>/assets/images/main/blue.png" alt="">
            </picture>
            <picture class="icon-pos image-icon05">
                <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/main/perple.png 2x">
                <img class="sizes" data-aos="fade-down-left" src="<?php bloginfo('template_directory'); ?>/assets/images/main/perple.png" alt="">
            </picture>
            <picture class="icon-pos image-icon06-new">
                <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/main/yellow.png 2x">
                <img class="sizes" data-aos="fade-left" src="<?php bloginfo('template_directory'); ?>/assets/images/main/yellow.png" alt="">
            </picture>

            <picture class="icon-pos hide-pc image-icon06">
                <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/main/yellow.png 2x">
                <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/main/orange.png 2x">
                <img class="sizes" data-aos="fade-up-left" src="<?php bloginfo('template_directory'); ?>/assets/images/main/orange.png" alt="">
            </picture>
            <div class="icon-pos hide-pc image-icon07">
                <picture class="image">
                    <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/main/green_b.png 2x">
                    <img class="sizes" data-aos="fade-up-left" src="<?php bloginfo('template_directory'); ?>/assets/images/main/green_b.png" alt="">
                </picture>
            </div>
            <picture class="icon-pos hide-pc image-icon08">
                <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/main/pink_b.png 2x">
                <img class="sizes" data-aos="fade-right" src="<?php bloginfo('template_directory'); ?>/assets/images/main/pink_b.png" alt="">
            </picture>

            <div class="what-is-mintoku">
                <div class="text-content">
                    <div class="title">
                        <picture>
                            <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/homepage/image-01.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/homepage/image-01.png" alt="">
                        </picture>
                        <p class="ttl">「ミントク」とは？</p>
                    </div>
                    <p class="text">日本の現場は、もはや日本人だけでは<br class="pc-br"/>回らない時代に突入しています。<br/>
                        しかし、文化や制度の違いから、外国人採用に<br class="pc-br"/>不安を感じる企業も少なくありません。<br/>
                        採用だけ、教育だけといった部分的な支援では、<br class="pc-br"/>真の戦力化は難しいのが現実です。<br/>
                        Mintokuは、採用から定着、教育、業務設計まで<br class="pc-br"/>包括的にサポートし、<br class="pc-br"/>企業と外国人双方が安心して働ける環境づくりを<br class="pc-br"/>お手伝いします。</p>
                </div>
                <div class="image-content">
                    <picture>
                        <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/homepage/image-02.png 2x">
                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/homepage/image-02.png" alt="">
                    </picture>
                </div>
            </div>
        </div>

        <div class="service">
            <div class="inner">
                <div class="title-box">
                    <p>サービス</p>
                </div>
                <div class="serviceList">
                    <a href="<?php echo home_url(); ?>/service/recuit-support/" class="serviceItem full">
                        <div class="title blue">
                            <p class="ttl">採用サポート</p>
                        </div>
                        <div class="image">
                            <picture>
                                <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/homepage/image-03-sp.jpg 2x">
                                <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/homepage/image-03.jpg 2x">
                                <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/homepage/image-03.jpg" alt="">
                            </picture>
                            <div class="text">
                                <p>外国人採用をもっと気軽に</p><br/>
                                <p><span>初期費用0円</span>でスタート</p>
                            </div>
                        </div>
                    </a>
                    <a href="<?php echo home_url(); ?>/service/administrative-support/" class="serviceItem">
                        <div class="title green">
                            <p class="ttl">管理サポート</p>
                            <ul>
                                <li>手続・申請</li>
                                <li>通訳</li>
                                <li>生活支援</li>
                            </ul>
                        </div>
                        <div class="image">
                            <picture>
                                <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/homepage/image-04-sp.jpg 2x">
                                <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/homepage/image-04.jpg 2x">
                                <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/homepage/image-04.jpg" alt="">
                            </picture>
                        </div>
                    </a>
                    <a href="<?php echo home_url(); ?>/study/" class="serviceItem">
                        <div class="title yellow">
                            <p class="ttl">教育サポート</p>
                            <ul>
                                <li>研修</li>
                                <li>動画</li>
                                <li>マニュアル</li>
                            </ul>
                        </div>
                        <div class="image">
                            <picture>
                                <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/homepage/image-05-sp.jpg 2x">
                                <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/homepage/image-05.jpg 2x">
                                <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/homepage/image-05.jpg" alt="">
                            </picture>
                        </div>
                    </a>
                </div>
                <div class="btn-contact">
                    <a href="<?php echo home_url(); ?>/contact/"><span>お問合せ</span></a>
                </div>
            </div>
        </div>

        <div class="recruitment-support">
            <div class="inner">
                <div class="title-box">
                    <p>職種別採用支援</p>
                </div>
                <div class="recruitment-support-list">
                   <div class="recruitment-support-item">
                       <picture>
                           <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/homepage/image-06-sp.png 2x">
                           <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/homepage/image-06.png 2x">
                           <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/homepage/image-06.png" alt="">
                       </picture>
                   </div>
                    <div class="recruitment-support-item">
                        <picture>
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/homepage/image-07-sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/homepage/image-07.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/homepage/image-07.png" alt="">
                        </picture>
                    </div>
                    <div class="recruitment-support-item">
                        <picture>
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/homepage/image-08-sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/homepage/image-08.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/homepage/image-08.png" alt="">
                        </picture>
                    </div>
                    <div class="recruitment-support-item">
                        <picture>
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/homepage/image-09-sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/homepage/image-09.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/homepage/image-09.png" alt="">
                        </picture>
                    </div>
                    <div class="recruitment-support-item">
                        <picture>
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/homepage/image-10-sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/homepage/image-10.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/homepage/image-10.png" alt="">
                        </picture>
                    </div>
                    <div class="recruitment-support-item">
                        <picture>
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/homepage/image-11-sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/homepage/image-11.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/homepage/image-11.png" alt="">
                        </picture>
                    </div>
                </div>
                <div class="see-more">
                    <a href="#">
                        <span>もっと見る</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15.903" height="9.366" viewBox="0 0 15.903 9.366">
                            <path id="Path_1260" data-name="Path 1260" d="M155.7,364.725l7.244,7.244-7.244,7.244" transform="translate(379.921 -154.994) rotate(90)" fill="none" stroke="#173c49" stroke-miterlimit="10" stroke-width="2"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <?php get_template_part("template-parts/about-us"); ?>

        <div class="reason">
            <div class="inner">
                <div class="reason-content">
                    <div class="reason-info">
                        <h2 class="heading-block">
                            <span>REASON</span>
                        </h2>
                        <h3 class="title">選ばれる理由</h3>
                        <p class="text">大企業から中小企業まで、さまざまな<br/>業種の企業にご活用いただいています。</p>
                        <div class="link-page">
                            <a href="<?php echo home_url(); ?>/report_download/"><span>資料ダウンロード</span><span class="icon">＞</span></a>
                            <a href="<?php echo home_url(); ?>/contact/"><span>お問合せ</span><span class="icon">＞</span></a>
                        </div>
                    </div>
                    <div class="reason-image">
                        <div class="reasonInfo-list">
                            <div class="reasonInfo-item">
                                <div class="title">
                                    <p class="t1 icon">導入社数</p>
                                    <p class="note">※2025年2月時点</p>
                                </div>
                                <div class="number-info">
                                    <p class="text"><span class="number">2,000</span>社</p>
                                    <p class="note sp-br">※2025年2月時点</p>
                                </div>
                            </div>
                            <div class="reasonInfo-item">
                                <div class="title">
                                    <p class="t1">事務対応時間</p>
                                </div>
                                <div class="number-info">
                                    <p class="text"><span class="number">55</span>%削減</p>
                                </div>
                            </div>
                            <div class="reasonInfo-item">
                                <div class="title">
                                    <p class="t1">対応可能言語数</p>
                                </div>
                                <div class="number-info">
                                    <p class="text"><span class="number">24</span>言語</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="reference-qa">
            <div class="inner">
                <div class="heading-entry">
                    <h2 class="heading-block">
                        <span class="text-ja">外国人材 Q&A</span>
                    </h2>
                </div>
                <div class="qa-content">
                    <ul class="qa-list">
                        <?php
                        $args = array(
                            'taxonomy' => 'rankinqa',
                            'hide_empty' => false,
                            'parent' => 0,
                            'posts_per_page' => "5",
                        );
                        $cats = get_categories($args);
                        ?>
                        <?php foreach ($cats as $cat) :
                            $nameRanking = $cat->name;
                            $id = $cat->slug;
                            $nameRankingchoice = substr($nameRanking, 3);
                            $idRanking = $cat->slug;
                            $qa_answer_ttl = get_field('qa-answer-ttl', $id);
                            ?>
                            <li class="qa-item">
                                <div class="qa-question">
                                    <div class="title">
                                        <p class="ttl"><span class="en">Q.</span><?= esc_html($nameRankingchoice); ?></p>
                                        <span class="icon-toggle">
                                        <svg id="Group_22" data-name="Group 22" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
                                            <line id="Line_3" data-name="Line 3" x2="30" transform="translate(0 15)" fill="none" stroke="#0f3745" stroke-width="3"/>
                                            <line id="Line_4" data-name="Line 4" x2="30" transform="translate(15) rotate(90)" fill="none" stroke="#0f3745" stroke-width="3"/>
                                        </svg>
                                    </span>
                                    </div>
                                </div>
                                <div class="answer-content">
                                    <div class="qa-answer">
                                        <span class="en">A.</span>
                                        <div class="info">
                                            <div class="text"><?php echo $qa_answer_ttl; ?></div>
                                        </div>
                                    </div>
                                    <div class="link-page">
                                        <a href="<?php bloginfo('url'); ?>/qa_detail/<?= esc_html($idRanking); ?>">詳しく見る ＞</a>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="link-page">
                        <a href="<?php echo home_url(); ?>/qa/">Q&A一覧を見る<span class="icon-arrow">＞</span></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-block">
            <div class="inner">
                <div class="banner-list">
                    <div class="banner-item">
                        <a target="_blank" href="https://kjtimes.jp/">
                            <picture class="image">
                                <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image13_sp.png 2x">
                                <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image13_pc.png 2x">
                                <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/top_image13_pc.png" alt="">
                            </picture>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <?php get_template_part("template-parts/banner-other"); ?>

        <?php get_template_part("template-parts/contact-bottom"); ?>

    </div>

<script type="text/javascript">
    $(document).ready(function (){
        $(".qa-item .qa-question .title").click(function (){
            $(this).toggleClass("is-active");
            $(this).parents(".qa-item").find(".answer-content").toggleClass("is-active");
        });
    })
</script>

<?php get_footer(); ?>