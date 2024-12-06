<?php
    /*
    * Template Name: completeDownloadSeminarMovie
    * Template Post Type: page
    */
    get_header(); 
?>
<main class="main">
    <div class="pageTitle complete"></div>
    <section id="download-complete">
        <div class="inner">
            <div class="content-download">
                <dl class="download-heading">
                    <dt class="dt-complete">ありがとうございます。</dt>
                    <dd class="dd-des">以下よりダウンロードしてください。</dd>
                </dl>
                <div class="download-selected">
                    <ul class="selected-list">
                        <?php                   
                            $id = $_GET['id'];
                            $post = get_post($id); 
                            $post_title = $post->post_title;
                            $post_link = get_the_permalink($post->ID);
                            $post_movie_url = get_field('seminar_movie_url', $post_id);
                        ?> 
                       <?php while(have_rows('seminar_movie_url')) : the_row(); ?>
                            <?php $count ;?> 
                            <li class="selected-list-item">
                                    <a href="<?php echo get_sub_field('seminar_movie_item') ;?>" title="<?= esc_html( $post_title ); ?>" target="_blank">
                                        <span><?php echo '0'.($count = $count + 1) ?><?php echo ' ' ;?><?php echo $post_title ; ?></span>
                                    </a>
                            </li>
                        <?php endwhile;?>
                    </ul>
                </div>
            </div>
        </div>

        <div id="bock-sevice">
            <div class="contact-page">
                <div class="inner">
                    <h3 class="title-home" data-aos="fade-up">
                        <span class="text-es montserrat">CONTACT</span><br>
                        <span class="text-jp">サービスに関する<br class="sp-br">お問い合わせ・ご相談</span><br>
                        <span class="text-des">お気軽にご連絡ください。</span>
                    </h3>
                    <div class="box-contact <?php echo $classother; ?>" data-aos="fade-up">
                        <a href="" class="a-box flex">
                            <div class="left-contact">
                                <p class="text-01">外国人材採用のノウハウがわかる資料を、無料でご提供します。</p>
                                <p class="link-contact destop" target="_blank">まずは、お気軽にご相談・問い合わせください。</p>
                                <p class="link-contact mobi" target="_blank">まずはご相談・問い合わせ</p>
                                <div class="phone flex">
                                    <div class="phone-left">
                                        <div class="top">
                                            <picture class="box-img">
                                                <source srcset="<?php bloginfo('template_url');?>/images/top_icon_contact.png">
                                                <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_icon_contact.png" alt="">
                                            </picture>
                                            <span class="text-phone">お問合せフリーダイアル</span>
                                        </div>
                                        <p class="time">営業時間:10時〜18時（月〜金）</p>
                                    </div>
                                    <p class="number-phone montserrat">0120-530-451</p>
                                </div>
                            </div>
                            <div class="right-contact">
                                <picture class="box-img">
                                    <source srcset="<?php bloginfo('template_url');?>/images/service/service_concact02.png">
                                    <img class="sizes" src="<?php bloginfo('template_url');?>/images/service/service_concact02.png" alt="">
                                </picture>
                            </div>
                        </a>
                    </div>
                    <div class="info-contact flex" data-aos="fade-up">
                        <p class="title-contact">お電話からのご質問や<br>ご相談はこちらから</p>
                        <div class="middle">
                            <div class="phone-left">
                                <picture class="box-img">
                                    <source srcset="<?php bloginfo('template_url');?>/images/top_icon_contact.png">
                                    <img class="sizes"
                                        src="<?php bloginfo('template_url');?>/images/top_icon_contact.png" alt="">
                                </picture>
                                <span class="text-phone">お問合せフリーダイアル</span>
                            </div>
                            <p class="time">営業:10時-18時（月-金）</p>
                        </div>
                        <p class="number-phone montserrat">0120-530-451</p>
                    </div>
                    <div class="page-top">
                        <a href="#" class="page-top-anchor">
                            <picture>
                                <img src="<?php bloginfo('template_url');?>/images/common/page-top-anchor_white.png" alt="">
                            </picture>
                        </a>
                    </div>
                </div>
            </div>

            <div class="down">
                <div class="inner">
                    <div class="service-seminar" data-aos="fade-up">
                        <h3 class="title-home">
                            <span class="text-es montserrat">RECOMMEND SEMINAR</span><br>
                            <span class="text-jp">おすすめのセミナー</span>
                        </h3>
                        <div class="list-columns flex">
                            <?php
                        $args = array(
                            'post_type'=> 'seminar',
                            'post_status' => 'publish',
                            'order'    => 'DESC',
                            'posts_per_page' => "3",
                            'meta_query' => array(
                                array(
                                    'key' => 'seminar-tag-recommend',
                                    'value' => 'Yes',
                                    'compare' => 'LIKE'
                                )
                            )
                        );
                        $result = new WP_Query( $args );
                        if ( $result-> have_posts() ) :  while ( $result->have_posts() ) : $result->the_post(); ?>
                            <?php
                                $post_id = $post->ID;
                                $post_link = get_the_permalink();
                                $post_title = get_the_title();

                                if (has_post_thumbnail($post_id)) {
                                    $post_thumbnail = get_the_post_thumbnail($post_id, 'middle', array( 'class' => 'sizes' ));
                                } else {
                                    $post_thumbnail = '<img src="'.bloginfo('template_url').'/images/common/logo01.svg" alt="" class="sizes">';
                                }

                                $seminar_date       = get_field( 'seminar_date' );
                                $seminar_start_date = date_create( $seminar_date['seminar_start_date'], wp_timezone() );
                                $seminar_close_date = date_create( $seminar_date['seminar_close_date'], wp_timezone() );
                                $seminar_day_locale = gms_get_day_locale( (int) $seminar_start_date->format( 'w' ) );

                                $seminar_date_apply = $seminar_start_date->format('Y年n月j日') . '(' . $seminar_day_locale . ')';
                                $seminar_time_apply = $seminar_start_date->format('H:i') . '〜' . $seminar_close_date->format('H:i');

                                $post_cats = get_the_terms($post_id, 'seminar_tag' );
                                ob_start();
                                foreach ($post_cats as $cat) {
                                    $cat_link = get_category_link($cat->term_id);
                                    echo '<div class="item-tag-column"><a href="'.$cat_link.'" title="'.$cat->name.'">'.$cat->name.'</a></div>';
                                }
                                $cat_list = ob_get_contents();
                                ob_end_clean();
                            ?>
                            <div class="item-column">
                                <div class="col-content">
                                    <a class="item-link" href="<?= esc_html( $post_link ); ?>"
                                        title="<?= esc_html( $post_title ); ?>">
                                        <div class="box-img">
                                            <img src="<?= $post_thumbnail; ?>" alt="<?= esc_html( $post_title ); ?>">
                                        </div>
                                    </a>
                                    <div class="info-item">
                                        <p class="title"><?= esc_html( $post_title ); ?></p>
                                        <div class="date-time flex">
                                            <p class="date"><i class="fa-light fa-calendar-check"></i>
                                                <?= esc_html( $seminar_date_apply ); ?></p>
                                            <p class="time"><i class="fa-light fa-clock"></i>
                                                <?= esc_html( $seminar_time_apply ); ?></p>
                                        </div>
                                        <div class="list-tag-column flex">
                                            <?= $cat_list; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                            <?php endif;  wp_reset_postdata(); ?>                            
                        </div>
                        <div class="box-link">
                            <a href="<?php bloginfo('url');?>/seminar" class="link-page">ほかのセミナーを探す</a>
                        </div>
                    </div>

                    <div class="service-related" data-aos="fade-up">
                        <h3 class="title-home">
                            <span class="text-es montserrat">RECOMMEND CONTENTS</span><br>
                            <span class="text-jp">おすすめの関連サイト</span>
                        </h3>
                        <?php get_template_part('block-common/related'); ?>
                    </div>
                    <div class="page-top">
                        <a href="#" class="page-top-anchor">
                            <picture>
                                <img src="<?php bloginfo('template_url');?>/images/common/page-top-anchor.png" alt="">
                            </picture>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>