<?php get_header();
    global $post, $wp_query;

    $post_id = $post->ID;
    $post_link = get_the_permalink($post_id);
    $post_title = get_the_title($post_id);

    if (has_post_thumbnail($post_id)) {
        $post_thumbnail = get_the_post_thumbnail($post_id, 'post-thumbnail', array( 'class' => 'sizes' ));
    } else {
        $post_thumbnail = '<img src="'.bloginfo('template_url').'/images/no_image.jpg" alt="" class="sizes">';
    }

    $post_key = get_the_terms($post_id, 'seminar_featured' )[0]->name;

    $seminar_date       = get_field( 'seminar_date' );
    $seminar_start_date = date_create( $seminar_date['seminar_start_date'], wp_timezone() );
    $seminar_close_date = date_create( $seminar_date['seminar_close_date'], wp_timezone() );
    $seminar_day_locale = gms_get_day_locale_en( (int) $seminar_start_date->format( 'w' ) );

    $seminar_date_apply = $seminar_start_date->format('Y年n月j日') . '(' . $seminar_day_locale . ')';

    $seminar_year_apply = $seminar_start_date->format('Y');
    $seminar_month_apply = $seminar_start_date->format('m');
    $seminar_day_apply = $seminar_start_date->format('d');

    $seminar_time_apply = $seminar_start_date->format('H:i') . '-' . $seminar_close_date->format('H:i');
    $report_seminar   = get_field( 'seminar_report' );
?>
<div id="breadcrumb-mobi" class="breadcrumb">
    <div class="breadcrumb-box">
    <div class ="home">
            <a href="<?php echo home_url(); ?>"><i class="fa-sharp fa-solid fa-house"></i>
        </div>
        <div class="page-other">
            <i class="fa-solid fa-chevron-right"></i>&nbsp;&nbsp;<a href="<?php bloginfo('url');?>/seminar">外国人採用に関するセミナー情報</a><br>
            <i class="fa-solid fa-chevron-right"></i>&nbsp;&nbsp;<span><?php echo $seminar_year_apply .'.'. $seminar_month_apply .'.'. $seminar_day_apply; ?></span>
          
        </div>
    </div>

</div>
    <div id="single-seminar">
        <div id="breadcrumb" class="breadcrumb">
            <ol>
                <li>
                    <a href="<?php echo home_url(); ?>">トップページ</a>&nbsp;&nbsp;<i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                    <a href="<?php bloginfo('url');?>/seminar">外国人採用に関するセミナー情報</a>&nbsp;&nbsp;
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                    <span><?php echo $seminar_year_apply .'.'. $seminar_month_apply .'.'. $seminar_day_apply; ?></span>
                </li>
            </ol>
        </div>

        <div class="banner-entry">
            <div class="banner-inner">
                <?php if($post_thumbnail) : ?>
                    <picture class="img-feature">
                        <?php echo $post_thumbnail; ?>
                    </picture>
                <?php endif; ?>
                <dl class="info-post">
                    <?php if($post_key) : ?>
                    <dt class="ttl">【<?php echo $post_key ?>】</dt>
                    <?php endif; ?>
                    <dd class="sub-ttl">
                        <?php echo $post_title ?>
                    </dd>
                    <dd class="date-time">
                        <?php echo $seminar_year_apply ?>.<span class="month-day"><?php echo $seminar_month_apply .'.'. $seminar_day_apply ?></span>
                        <?php echo $seminar_day_locale ?><span class="time"><?php echo $seminar_time_apply ?></span>
                    </dd>
                </dl>
                <div class="logo-seminar">
                    <picture class="box-img">
                        <source srcset="<?php bloginfo('template_url');?>/images/common/Img_logo.svg">
                        <img class="sizes" src="<?php bloginfo('template_url');?>/images/common/Img_logo.svg" alt="">
                    </picture>
                </div>
            </div>
        </div>        
        
        <div class="box-bottom">
            <ul class="inner-box">
            <?php
                $movie_url = get_field('seminar_movie_url');
				 $first_row = $movie_url[0]['seminar_movie_item'];
                    if( $movie_url & ($first_row !='')): ?>
                <li class="item-bottom flex">
                    <div class="text">
                        <p class="text-title">アーカイブ動画を見る</p>
                        <div class="box-link-page flex">
                            <button id="link-movie" class="link-page link-01">動画視聴申込フォームへ</button>
                        </div>
                    </div>
                    <picture class="box-img">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/seminar_button_01_sp.png 2x">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/seminar_button_01_pc.png 2x">
                        <img class="sizes" src="<?php bloginfo('template_url');?>/images/seminar_button_01_pc.png" alt="">
                    </picture>

                </li>
                <?php endif; ?>
                <?php
                $file = get_field('seminar_report_pdf');
                if( $file ): ?>
                <li class="item-bottom flex">
                    <div class="text">
                        <p class="text-title">セミナーレポートを見る</p>
                        <div class="box-link-page flex">
                            <a class="link-page link-02" href="<?php echo $file['url']; ?>" target="_blank">資料PDFを別ウィンドウ表示</a>
                            <!-- <a class="link-page link-02" href="" target="_blank">資料PDFを別ウィンドウ表示</a> -->
                        </div>
                    </div>
                    <picture class="box-img">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/seminar_button_02_sp.png 2x">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/seminar_button_02_pc.png 2x">
                        <img class="sizes" src="<?php bloginfo('template_url');?>/images/seminar_button_02_pc.png" alt="">
                    </picture>

                </li>
                <?php endif; ?>
				
				 <?php if( $report_seminar ): ?>
                <li class="item-bottom flex">
                    <div class="text">
                        <p class="text-title">セミナーレポートを見る</p>
                        <div class="box-link-page flex box">
                            <p class="link-page link-03">資料別ウィンドウ表示</p>
                        </div>
                    </div>
                    <picture class="box-img">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/seminar_button_02_sp.png 2x">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/seminar_button_02_pc.png 2x">
                        <img class="sizes" src="<?php bloginfo('template_url');?>/images/seminar_button_02_pc.png" alt="">
                    </picture>
                </li>
                <?php endif; ?>
				
				
				
			    <?php
                $filedl = get_field('seminar_dl_file');
                if( $filedl ): ?>
                <li class="item-bottom flex">
                    <div class="text">
                        <p class="text-title"> セミナー資料を見る</p>
                        <div class="box-link-page flex">
                            <a class="link-page link-02" href="<?php echo $filedl['url']; ?>" target="_blank">資料PDFを別ウィンドウ表示</a>
                        </div>
                    </div>
                    <picture class="box-img">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/seminar_button_02_sp.png 2x">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/seminar_button_02_pc.png 2x">
                        <img class="sizes" src="<?php bloginfo('template_url');?>/images/seminar_button_02_pc.png" alt="">
                    </picture>
                </li>
                <?php endif; ?>	
				
				
				
            </ul>
        </div>
        
        <div class="post-content">
            <div class="post-inner">
                <div class="description">
                    <?php if($post_key) : ?>
                    <p class="ttl">【<?php echo $post_key ?>】</p>
                    <?php endif; ?>
                    <p class="sub-ttl"><?php echo $post_title ?></p>
                    <?php if ( get_field( 'seminar_lead' ) ) { ?>
                    <div class="text">
                        <?php the_field( 'seminar_lead' ); ?>
                    </div>
                    <?php } ?>
                </div>

                <?php if(have_posts()) : ?>
                <?php while ( have_posts() ) : the_post();
                    $now                = current_datetime();
                    $close_date_apply   = get_field( 'seminar_close_date_apply' );
                    $seminar_date       = get_field( 'seminar_date' );
                    $seminar_start_date = date_create( $seminar_date['seminar_start_date'], wp_timezone() );
                    $seminar_close_date = date_create( $seminar_date['seminar_close_date'], wp_timezone() );
                    $close_date_apply   = date_create( $close_date_apply, wp_timezone() );
                    $hasClosed          = ( $now > $seminar_close_date ); ?>

                <?php if ( have_rows( 'seminar_outline' ) ) : ?>
                <div class="add-point">
                    <?php if ( $seminar_point = get_field('seminar_point') ) { ?>
                        <div class="seminar-point-block">
                            <h3 class="heading-ponit">
                                <span class="ttl01">このセミナーで学べること</span>
                            </h3>
                            <ul class="seminar-point-list flex">                                
                                <li class="seminar-point-list-item">
                                    <picture class="box-img">
                                        <source srcset="<?php bloginfo('template_url');?>/images/seminar_ponit_02.svg">
                                        <img class="sizes" src="<?php bloginfo('template_url');?>/images/seminar_ponit_02.svg" alt="">
                                    </picture>                                        
                                    <dl class="seminar-point-txt">
                                        <dt class="dt-ponit"><?= $seminar_point['seminar_point_1']['seminar_point_1_ttl']; ?></dt>
                                        <dd class="dd-ponit"><?= $seminar_point['seminar_point_1']['seminar_point_1_txt']; ?></dd>
                                    </dl>
                                </li>                            
                                <li class="seminar-point-list-item">
                                   <picture class="box-img">
                                        <source srcset="<?php bloginfo('template_url');?>/images/seminar_ponit_01.svg">
                                        <img class="sizes" src="<?php bloginfo('template_url');?>/images/seminar_ponit_01.svg" alt="">
                                   </picture>
        
                                    <dl class="seminar-point-txt">
                                        <dt class="dt-ponit"><?= $seminar_point['seminar_point_2']['seminar_point_2_ttl']; ?></dt>
                                        <dd class="dd-ponit"><?= $seminar_point['seminar_point_2']['seminar_point_2_txt']; ?></dd>
                                    </dl>
                                </li>
                                <li class="seminar-point-list-item">
                                   <picture class="box-img">
                                        <source srcset="<?php bloginfo('template_url');?>/images/seminar_ponit_03.svg">
                                        <img class="sizes" src="<?php bloginfo('template_url');?>/images/seminar_ponit_03.svg" alt="">
                                   </picture>
             
                                    <dl class="seminar-point-txt">
                                        <dt class="dt-ponit"><?= $seminar_point['seminar_point_3']['seminar_point_3_ttl']; ?></dt>
                                        <dd class="dd-ponit"><?= $seminar_point['seminar_point_3']['seminar_point_3_txt']; ?></dd>
                                    </dl>
                                </li>
                            </ul>
                        </div>
                    <?php } ?>

                    <ul class="list-point">
                        <h3 class="heading-block">
                            <span class="ttl02">開催概要</span>
                        </h3>
                        <?php while ( have_rows( 'seminar_outline' ) ) : the_row(); ?>
                        <li class="item-point">
                            <div class="title">
                                <p class=""><?= esc_html( get_sub_field( 'seminar_outline_field_label' ) ); ?></p>
                            </div>
                            <div class="info">
                                <p class="text">
                                    <?= nl2br( esc_html( get_sub_field( 'seminar_outline_field_detail' ) ) ); ?>
                                </p>
                            </div>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
                <?php endif; ?>

                <?php
                    $program = get_field( 'seminar_program_new' );
                    if ( $program ) { ?>
                <div class="program">
                    <h3 class="heading-block">
                        <span class="ttl02">プログラム</span>
                    </h3>
                    <ul class="list-point">
                        <?php while ( have_rows( 'seminar_program_new' ) ) : the_row(); ?>
                        <?php
                            $seminar_program_label = get_sub_field( 'seminar_program_field_label' );
                            $seminar_program_detail = get_sub_field( 'seminar_program_field_detail' );
                        ?>
                        <li class="item-point">
                            <div class="title">
                                <p class=""><?= esc_html( $seminar_program_label ); ?></p>
                            </div>
                            <div class="info">
                                <p class="text"><?= nl2br(esc_html( $seminar_program_detail )); ?></p>
                            </div>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
                <?php } ?>

                <?php if ( have_rows('seminar_instructors') ) : $index = 1; ?>
                <div class="speaker-introduction">
                    <h3 class="heading-block">
                        <span class="ttl02">登壇者紹介</span>
                    </h3>
                    <ul class="list-speaker">
                        <?php while (have_rows('seminar_instructors')) : the_row(); ?>
                        <li class="item-speaker">
                            <div class="avt-speaker">
                                <picture class="img-avt">
                                    <?php if ( $photo = get_sub_field('seminar_instructor_photo') ) { ?>
                                    <img src="<?= esc_url( $photo['url'] ); ?>" alt="<?= esc_html( $photo['caption'] ); ?>">
                                    <?php } else { ?>
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/images/no_image.jpg" width="180" alt="">
                                    <?php } ?>
                                </picture>
                            </div>
                            <div class="info-speaker">
                                <p class="name"><?= nl2br(esc_html(get_sub_field('seminar_instructor_name'))); ?></p>
                                <div class="text"><?= get_sub_field('seminar_instructor_desc'); ?></div>
                            </div>
                        </li>
                        <?php $index++;
                        endwhile; ?>
                    </ul>
                </div>
                <?php endif; ?>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

		
		 <div id="modal01" class="modal" >
         					 <span class="close">×&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <div class="modal-content">
				  
                <div id="box-report" >

                        <div class="inner">
                            <h3>セミナー開催後レポート</h3>
                            <?php echo  $report_seminar  ?>
                        </div>
                    </div>
            </div>
        </div>
<!-- 		 <div class="home-form">
			  <div class="inner">
                <?php echo apply_shortcodes( '[contact-form-7 id="2338" title="seminarForm"]' ); ?>
				 </div>
         </div> -->
		
        <?php get_template_part('block-common/form_register'); ?>
		
        <div id="breadcrumb-footer" class="breadcrumb">
            <ol>
                <li>
                    <a href="<?php echo home_url(); ?>">トップページ</a>&nbsp;&nbsp;<i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                    <a href="<?php bloginfo('url');?>/seminar">外国人採用に関するセミナー情報</a>&nbsp;&nbsp;
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                    <span><?php echo $seminar_year_apply ?>.<?php echo $seminar_month_apply ?>.<?php echo $seminar_day_apply ?></span>
                </li>
            </ol>
        </div>
    </div>
    <?php get_footer(); ?>