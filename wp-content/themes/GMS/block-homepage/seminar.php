<section id="seminar">
    <div class="inner">
        <h3 class="title-home">
            <span class="text-es montserrat">SEMINAR INFORMATION</span>
            <span class="text-jp">外国人採用に関する<br class="sp-br">セミナー情報</span>
            <span class="text-des">外国人採用・活用に関するこれからの<br class="sp-br">注意点や、考え方など学べるセミナーに<br class="sp-br">ぜひご参加ください。</span>
        </h3>
        <ul class="post-seminar flex">
            <?php
			$today = date('Y-m-d H:i');
            $args = array(
                'post_type' => 'seminar',
                'post_status' => 'publish',
                'posts_per_page' => 3,
                'meta_key' => 'seminar_close_date_apply',
                'orderby' => 'meta_value',
                'order' => 'DESC',
                'cache_results'          => true,
                'update_post_meta_cache' => true,
                'update_post_term_cache' => true,
				'meta_query' => array(
                    array(
                        'key' => 'seminar_date_seminar_close_date',
                        'value' => $today,
                        'compare' => '>=',
                        'type' => 'date',
                    )
                )
            );

            $the_query = new WP_Query($args);

            while ( $the_query->have_posts() ) : $the_query->the_post();
                $post_id = $post->ID;
                $post_link = get_the_permalink();
                $post_title = get_the_title();
                $post_key = get_the_terms($post_id, 'seminar_featured' )[0]->name;

                $seminar_date       = get_field( 'seminar_date' );
                $seminar_start_date = date_create( $seminar_date['seminar_start_date'], wp_timezone() );
                $seminar_close_date = date_create( $seminar_date['seminar_close_date'], wp_timezone() );
                $seminar_day_locale = gms_get_day_locale( (int) $seminar_start_date->format( 'w' ) );

                $seminar_date_apply = $seminar_start_date->format('Y年n月j日')
                    . '(' . $seminar_day_locale . ')';

                $seminar_time_apply = $seminar_start_date->format('H:i')
                    . '〜' . $seminar_close_date->format('H:i');

                if (has_post_thumbnail($post_id)) {
                    $post_thumbnail = get_the_post_thumbnail($post_id, 'middle', array( 'class' => 'sizes' ));
                } else {
                    $post_thumbnail = '<img src="'.bloginfo('template_url').'/images/common/logo01.svg" alt="" class="sizes">';
                }
                $post_cats = get_the_terms($post_id, 'seminar_tag' );
                ob_start();
                foreach ($post_cats as $cat) {
                    $cat_link = get_category_link($cat->term_id);
                    echo '<li class="item-cate"><a href="'.$cat_link.'" title="'.$cat->name.'">'.$cat->name.'</a></li>';
                }
                $cat_list = ob_get_contents();
                ob_end_clean();

                ?>
                <li class="item-post-seminar js-fadein">
                    <div class="box-title flex">
                        <span class="title-seminar"><?= esc_html( $post_key ); ?></span>
                    </div>
                    <div class="post-new">
                        <picture class="box-img">
                            <?= $post_thumbnail; ?>
                        </picture>
                        <div class="content-post">
                            <p class="title-post"><a href="<?= esc_url( $post_link ); ?>" title="<?= esc_html( $post_title ); ?>" target="_blank"><?php echo $post_title; ?></a></p>
                            <div class="box-time flex">
                                <p class="date-post"><i class="fa-light fa-calendar-check"></i><?= esc_html( $seminar_date_apply ); ?></p>
                                <p class="time-post"><i class="fa-light fa-clock"></i><?= esc_html( $seminar_time_apply ); ?></p>
                            </div>
                            <ul class="list-cate flex">
                                <?= $cat_list; ?>
                            </ul>
                        </div>
                    </div>
                </li>
            <?php
            wp_reset_postdata();
            endwhile;
            ?>
        </ul>
        <div class="box-link-page flex js-fadein">
                <a href="<?php bloginfo('url');?>/seminar" class="link-page">ほかのセミナーを探す</a>
            </div>
        <div class="box-contact">
          <a href="<?php bloginfo('url');?>/#contact" class="a-box flex">
            <div class="left-contact">
                <p class="text-01">海外人材採用の注意点や、トラブルなど<br class="pc-br">学べるセミナーをご視聴できます。</p>
                <p class="link-contact destop" target="_blank">詳細はこちら</p>
                <p class="link-contact mobi" target="_blank">詳細はこちら</p>
                <div class="phone flex">
                    <div class="phone-left">
                        <div class="top">
                            <picture class="box-img">
                                <source srcset="<?php bloginfo('template_url');?>/images/top_icon_contact.png">
                                <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_icon_contact.png"
                                    alt="">
                            </picture>
                            <span class="text-phone">お問合せ</span>
                        </div>
                        <p class="time">営業時間:10時〜18時（月〜金）</p>
                    </div>
                    <p class="number-phone montserrat">03-6738-9686</p>
                </div>
            </div>
            <div class="right-contact">
                <p class="title">外国人の雇用方法や<br class="sp-br">注意点が学べるセミナー</p>
                <picture class="box-img">
                    <source srcset="<?php bloginfo('template_url');?>/images/top_seminar_04.png">
                    <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_seminar_04.png" alt="">
                </picture>
            </div>
          </a>
        </div>
        <div class="page-top">
            <a href="#" class="page-top-anchor">
                <picture>
                    <img src="<?php bloginfo('template_url');?>/images/common/page-top-anchor.png" alt="">
                </picture>
            </a>
       </div>
    </div>
</section>