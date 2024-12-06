<?php
    global $post, $pid;
    $parent = get_page($post->post_parent);
    $parent_slug = $parent->post_name;

    if ($parent_slug == 'service' && (stripos($_SERVER['REQUEST_URI'], 'cloud' ) !== false)) {
        $service_other_01_img = get_bloginfo('template_url') . '/images/service/service_other_01.png';
        $title_other01 = '労務代行サービス';
        $link_other01 = get_bloginfo('url') . '/service/assistant/';
        $service_other_02_img = get_bloginfo('template_url') . '/images/service/service_other_02.png';
        $title_other02 = '外国人生活支援サービス';
        $link_other02 = get_bloginfo('url') . '/service/life-support/';
        $service_contact = get_bloginfo('template_url') . '/images/service/service_concact01.png';
        $link_other03 = get_bloginfo('url') . '/service/consultation/';
    }
    if ($parent_slug == 'cloud' && (stripos($_SERVER['REQUEST_URI'], 'maetra' ) !== false)) {
        $service_other_01_img = get_bloginfo('template_url') . '/images/service/service_other_03.png';
        $title_other01 = 'クラウドサービス';
        $link_other01 = get_bloginfo('url') . '/service/cloud/';
        $service_other_02_img = get_bloginfo('template_url') . '/images/service/service_other_01.png';
        
        $title_other02 = '外国人生活支援サービス';
        $link_other02 = get_bloginfo('url') . '/service/life-support/';
        $service_contact = get_bloginfo('template_url') . '/images/service/service_concact04.png';
        $link_other03 = get_bloginfo('url') . '/service/consultation/';
    }






    if ($parent_slug == 'service' && (stripos($_SERVER['REQUEST_URI'], 'assistant' ) !== false)) {
        $service_other_01_img = get_bloginfo('template_url') . '/images/service/service_other_03.png';
        $title_other01 = 'クラウドサービス';
        $link_other01 =get_bloginfo('url') . '/service/cloud/';
        $service_other_02_img = get_bloginfo('template_url') . '/images/service/service_other_02.png';
        $title_other02 = '労務代行サービス';
        $link_other02 =get_bloginfo('url') . '/service/assistant/';
        $service_contact = get_bloginfo('template_url') . '/images/service/service_concact02.png';
        $link_other03 = get_bloginfo('url') . '/service/consultation/';
    }
    if ($parent_slug == 'service' && (stripos($_SERVER['REQUEST_URI'], 'immigration' ) !== false)) {
        $service_other_01_img = get_bloginfo('template_url') . '/images/service/service_other_03.png';
        $title_other01 = 'クラウドサービス';
        $link_other01 = get_bloginfo('url') . '/service/cloud/';
        $service_other_02_img = get_bloginfo('template_url') . '/images/service/service_other_01.png';
        $title_other02 = '労務代行サービス';
        $link_other02 = get_bloginfo('url') . '/service/assistant/';
        $service_contact = get_bloginfo('template_url') . '/images/service/service_concact02.png';
        $link_other03 = get_bloginfo('url') . '/service/consultation/';
    }
    if ($parent_slug == 'service' && (stripos($_SERVER['REQUEST_URI'], 'life-support' ) !== false)) {
        $service_other_01_img = get_bloginfo('template_url') . '/images/service/service_other_03.png';
        $title_other01 = 'クラウドサービス';
        $link_other01 =get_bloginfo('url') . '/service/cloud/';
        $service_other_02_img = get_bloginfo('template_url') . '/images/service/service_other_01.png';
        $title_other02 = '労務代行サービス';
        $link_other02 =get_bloginfo('url') . '/service/assistant/';
        $service_contact = get_bloginfo('template_url') . '/images/service/service_concact03.png';
        $link_other03 = get_bloginfo('url') . '/service/consultation/';
    }
    if ($parent_slug == 'service' && (stripos($_SERVER['REQUEST_URI'], 'consultation' ) !== false)) {
        $service_other_01_img = get_bloginfo('template_url') . '/images/service/service_other_03.png';
        $title_other01 = 'クラウドサービス';
        $link_other01 =get_bloginfo('url') . '/service/cloud/';
        $service_other_02_img = get_bloginfo('template_url') . '/images/service/service_other_01.png';
        $title_other02 = '労務代行サービス';
        $link_other02 = get_bloginfo('url') . '/service/assistant/';
        $classother="last-other";
        $service_other_03_img = get_bloginfo('template_url') . '/images/service/service_other_02.png';
        $title_other03 = '外国人生活支援サービス';
        $link_other03 = get_bloginfo('url') . '/service/life-support/';
        $service_contact = get_bloginfo('template_url') . '/images/service/service_concact01.png';
    }
    if ($parent_slug == 'case_study') {
        $nocasestudy = "nocastudy";
        $service_contact = get_bloginfo('template_url') . '/images/service/service_concact03.png';
    }
    if ($parent_slug == 'complete_download') {
        $nocasestudy = "nocastudy";
        $service_contact = get_bloginfo('template_url') . '/images/service/service_concact01.png';
    }
    if ($parent_slug == 'cloud' && (stripos($_SERVER['REQUEST_URI'], 'camcat' ) !== false)) {
        $service_other_01_img = get_bloginfo('template_url') . '/images/service/service_other_03.png';
        $title_other01 = 'クラウドサービス';
        $link_other01 = get_bloginfo('url') . '/service/cloud/';
        $service_other_02_img = get_bloginfo('template_url') . '/images/service/service_other_01.png';
        $title_other02 = '外国人生活支援サービス';
        $link_other02 = get_bloginfo('url') . '/service/life-support/';
        $service_contact = get_bloginfo('template_url') . '/images/service/service_concact04.png';
        $link_other03 = get_bloginfo('url') . '/service/consultation/';

    }
    if ($parent_slug == 'translate') {
        $service_other_01_img = get_bloginfo('template_url') . '/images/service/service_other_03.png';
        $title_other01 = 'クラウドサービス';
        $link_other01 =get_bloginfo('url') . '/service/cloud/';
        $service_other_02_img = get_bloginfo('template_url') . '/images/service/service_other_02.png';
        $title_other02 = '労務代行サービス';
        $link_other02 =get_bloginfo('url') . '/service/assistant/';
        $service_contact = get_bloginfo('template_url') . '/images/service/service_concact02.png';
        $link_other03 = get_bloginfo('url') . '/service/consultation/';
    }



    if  ($parent_slug == 'cloud' && (stripos($_SERVER['REQUEST_URI'], 'maetra' ) !== false))  {
        $service_other_01_img = get_bloginfo('template_url') . '/images/service/service_other_03.png';
        $title_other01 = 'TECHサポート';
        $link_other01 =get_bloginfo('url') . '/service/cloud/';
        $service_other_02_img = get_bloginfo('template_url') . '/images/service/service_other_01.png';
        $title_other02 = 'JOBサポート';
        $link_other02 =get_bloginfo('url') . '/service/assistant/';
        $service_contact = get_bloginfo('template_url') . '/images/service/service_concact01.png';
        $title_other03 = 'Jリーガルサポート';

    }

    if ($parent_slug == 'maetra' && (stripos($_SERVER['REQUEST_URI'], 'edpoke' ) !== false)) {
        $service_other_01_img = get_bloginfo('template_url') . '/images/service/service_other_03.png';
        $title_other01 = 'TECHサポート';
        $link_other01 =get_bloginfo('url') . '/service/cloud/';
        $service_other_02_img = get_bloginfo('template_url') . '/images/service/service_other_01.png';
        $title_other02 = 'JOBサポート';
        $link_other02 =get_bloginfo('url') . '/service/assistant/';
        $service_contact = get_bloginfo('template_url') . '/images/service/service_concact04.png';
        $title_other03 = '労務・雇用契約相談サービス';
    }
    if ($parent_slug == 'maetra' && (stripos($_SERVER['REQUEST_URI'], 'vr' ) !== false)) {
        $service_other_01_img = get_bloginfo('template_url') . '/images/service/service_other_03.png';
            $title_other01 = 'TECHサポート';
            $link_other01 =get_bloginfo('url') . '/service/cloud/';
        $service_other_02_img = get_bloginfo('template_url') . '/images/service/service_other_01.png';
            $title_other02 = 'JOBサポート';
            $link_other02 =get_bloginfo('url') . '/service/assistant/';
        $service_contact = get_bloginfo('template_url') . '/images/service/service_concact04.png';
        $title_other03 = '労務・雇用契約相談サービス';
    }
    if ($parent_slug == 'maetra' && (stripos($_SERVER['REQUEST_URI'], 'videostep' ) !== false)) {
        $service_other_01_img = get_bloginfo('template_url') . '/images/service/service_other_03.png';
            $title_other01 = 'TECHサポート';
            $link_other01 =get_bloginfo('url') . '/service/cloud/';
        $service_other_02_img = get_bloginfo('template_url') . '/images/service/service_other_01.png';
            $title_other02 = 'JOBサポート';
            $link_other02 =get_bloginfo('url') . '/service/assistant/';
        $service_contact = get_bloginfo('template_url') . '/images/service/service_concact04.png';
        $title_other03 = '労務・雇用契約相談サービス';
    }

?>





<div id="bock-sevice">
    <div class="contact-page">
        <div class="inner">
            <h3 class="title-home" data-aos="fade-up">
                <span class="text-es montserrat">CONTACT</span><br>
                <span class="text-jp">サービスに関する<br class="sp-br">お問い合わせ・ご相談</span><br>
                <span class="text-des">お気軽にご連絡ください。</span>
            </h3>
            <div class="box-contact <?php echo  $classother; ?>" data-aos="fade-up">
                <a href="<?php bloginfo('url');?>/#contact" class="a-box flex">
                    <div class="left-contact">
                        <p class="text-01">海外人材採用のノウハウがわかる資料を、無料でご提供します。</p>
                        <p class="link-contact destop" target="_blank">まずは、お気軽にご相談・問い合わせください。</p>
                        <p class="link-contact mobi" target="_blank">まずはご相談・問い合わせ</p>
                        <div class="phone flex">
                            <div class="phone-left">
                                <div class="top">
                                    <picture class="box-img">
                                        <source srcset="<?php bloginfo('template_url');?>/images/top_icon_contact.png">
                                        <img class="sizes"
                                            src="<?php bloginfo('template_url');?>/images/top_icon_contact.png" alt="">
                                    </picture>
                                    <span class="text-phone">お問合せ</span>
                                </div>
                                <p class="time">営業時間:10時〜18時（月〜金）</p>
                            </div>
                            <p class="number-phone montserrat">03-6738-9686</p>
                        </div>
                    </div>
                    <div class="right-contact">
                        <picture class="box-img">
                            <source srcset="<?php echo  $service_contact; ?>">
                            <img class="sizes" src="<?php echo  $service_contact; ?>" alt="">
                        </picture>
                    </div>

                    <div class="right-contact full">
                    <ul class="list-img flex">
                        <li class="item-img text setheight">些細な疑問や、<br>小さなことでも<br>お答えします。</li>
                        <li class="item-img setheight">
                            <picture class="box-img">
                                <source srcset="<?php bloginfo('template_url');?>/images/top_case_people_01.png">
                                 <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_case_people_01.png" alt="">
                            </picture>
                        </li>
                        <li class="item-img setheight">
                            <picture class="box-img">
                                <source srcset="<?php bloginfo('template_url');?>/images/top_case_people_05.png">
                                 <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_case_people_05.png" alt="">
                            </picture>
                        </li>
                        <li class="item-img setheight">
                            <picture class="box-img">
                                <source srcset="<?php bloginfo('template_url');?>/images/top_case_people_04.png">
                                 <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_case_people_04.png" alt="">
                            </picture>
                        </li>
                        <li class="item-img setheight">
                            <picture class="box-img">
                                <source srcset="<?php bloginfo('template_url');?>/images/top_case_people_04.png">
                                 <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_case_people_04.png" alt="">
                            </picture>
                        </li>
                        <li class="item-img setheight">
                            <picture class="box-img">
                                <source srcset="<?php bloginfo('template_url');?>/images/top_case_people_04.png">
                                 <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_case_people_04.png" alt="">
                            </picture>
                        </li>
                    </ul>

                </div>


                </a>
            </div>
            <div class="info-contact flex" data-aos="fade-up">
                <p class="title-contact">お電話からのご質問や<br>ご相談はこちらから</p>
                <div class="middle">
                    <div class="phone-left">
                        <picture class="box-img">
                            <source srcset="<?php bloginfo('template_url');?>/images/top_icon_contact.png">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_icon_contact.png" alt="">
                        </picture>
                        <span class="text-phone">お問合せ</span>
                    </div>
                    <p class="time">営業:10時-18時（月-金）</p>
                </div>
                <p class="number-phone montserrat">03-6738-9686</p>
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



    <div class="other-service <?php echo  $nocasestudy; ?>">
        <div class="inner">
            <h3 class="title-home" data-aos="fade-up">
                <span class="text-es montserrat">OTHER SERVICE</span><br>
                <span class="text-jp">その他の<br class="sp-br">サービスご紹介</span><br>
                <span class="text-des">併用して、外国人採用をサポートする<br class="sp-br">サービスもご用意しております。
                    <br class="sp-br">ご検討ください。
                </span>
            </h3>
            <ul class="list-other flex  <?php echo $classother; ?>" data-aos="fade-up">
                <li class="item-other">
                    <a href= "<?php echo   $link_other01; ?>">
                        <p class="title-other"><?php echo  $title_other01; ?></p>
                        <picture class="box-img">
                            <source srcset="<?php echo $service_other_01_img; ?>">
                            <img class="sizes" src="<?php echo $service_other_01_img; ?>" alt="">
                        </picture>
                    </a>
                </li>
                <li class="item-other">
                   <a href="<?php echo   $link_other02; ?>">
                        <p class="title-other"><?php echo  $title_other02; ?></p>
                        <picture class="box-img">
                            <source srcset="<?php echo $service_other_02_img; ?>">
                            <img class="sizes" src="<?php echo $service_other_02_img; ?>" alt="">
                        </picture>
                    </a>
                </li>
                <li class="item-other four">
                   <a href="<?php echo   $link_other03; ?>">
                        <p class="title-other"><?php echo  $title_other03; ?></p>
                        <picture class="box-img">
                            <source srcset="<?php echo $service_other_03_img; ?>">
                            <img class="sizes" src="<?php echo $service_other_03_img; ?>" alt="">
                        </picture>
                    </a>
                </li>
                <li class="item-other three">
                    <a href="<?php echo   $link_other03; ?>">
                        <p class="title-other"><?php echo  $title_other03; ?></p>
                        <ul class="list-img flex">
                        <li class="item-img text setheight">些細な疑問や、<br>小さなことでも<br>お答えします。</li>
                        <li class="item-img setheight">
                            <picture class="box-img">
                                <source srcset="<?php bloginfo('template_url');?>/images/top_case_people_01.png">
                                 <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_case_people_01.png" alt="">
                            </picture>
                        </li>
                         <li class="item-img setheight">
                            <picture class="box-img">
                                <source srcset="<?php bloginfo('template_url');?>/images/top_case_people_05.png">
                                 <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_case_people_05.png" alt="">
                            </picture>
                        </li>
                        <li class="item-img setheight">
                            <picture class="box-img">
                                <source srcset="<?php bloginfo('template_url');?>/images/top_case_people_04.png">
                                 <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_case_people_04.png" alt="">
                            </picture>
                        </li>
                        <li class="item-img setheight">
                            <picture class="box-img">
                                <source srcset="<?php bloginfo('template_url');?>/images/top_case_people_04.png">
                                 <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_case_people_04.png" alt="">
                            </picture>
                        </li>
                        <li class="item-img setheight">
                            <picture class="box-img">
                                <source srcset="<?php bloginfo('template_url');?>/images/top_case_people_04.png">
                                 <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_case_people_04.png" alt="">
                            </picture>
                        </li> 
                        </ul>
                    </a>
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
                                    <a class="item-link" href="<?= esc_html( $post_link ); ?>" title="<?= esc_html( $post_title ); ?>">
                                        <div class="box-img">
                                            <img src="<?= $post_thumbnail; ?>" alt="<?= esc_html( $post_title ); ?>">
                                        </div>
                                    </a>
                                    <div class="info-item">
                                        <p class="title"><?= esc_html( $post_title ); ?></p>
                                        <div class="date-time flex">
                                            <p class="date"><i class="fa-light fa-calendar-check"></i> <?= esc_html( $seminar_date_apply ); ?></p>
                                            <p class="time"><i class="fa-light fa-clock"></i> <?= esc_html( $seminar_time_apply ); ?></p>
                                        </div>
                                        <div class="list-tag-column flex">
                                            <?= $cat_list; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php endif;  wp_reset_postdata();
                    ?>
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