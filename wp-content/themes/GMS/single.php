<?php get_header();
	global $post, $wp_query;
?>
<style>
    #singNews .pageTitle {
        min-height: 150px;
    } 
    #singNews .pageTitle .h2-single {
        display: none;
    }
    @media screen and (max-width: 768px) {
    #singNews .pageTitle {
        min-height: 130px;
         padding: 35px 0px;
     } 
     #singNews .pageTitle .h2-single {
        display: block
     }
    }
     
</style>
<div id="singNews" class="columns-container">
    <div class="pageTitle">
        <h2 class="h2-single"><span class="en montserrat">NEWS</span>お知らせ一覧</h2>
    </div>
    <div id="breadcrumb" class="breadcrumb">
        <ol>
            <li>
                <a href="<?php echo home_url(); ?>">トップページ</a>&nbsp;&nbsp;<i class="fa-solid fa-chevron-right"></i>
            </li>
            <li>
                <span>お知らせ一覧</span>&nbsp;&nbsp;<i
                        class="fa-solid fa-chevron-right"></i>
            </li>
            <li>
              <?php
                    $category = get_the_category();
                    $cat      = $category[0];
                ?>
                   <span><?php echo $cat->name; ?>&nbsp;<?php echo get_the_date('Y.m.d'); ?></span>
            </li>
        </ol>
    </div>
    <div id="breadcrumb-news" class="breadcrumb">
         <ol>
            <li>
              <a href="<?php echo home_url(); ?>"><i class="fa-sharp fa-solid fa-house"></i></a>&nbsp;&nbsp;<i class="fa-solid fa-chevron-right"></i>
            </li>
            <li>
                <span>お知らせ一覧</span>&nbsp;&nbsp;<i
                        class="fa-solid fa-chevron-right"></i>
            </li>
            <li>
              <?php
                    $category = get_the_category();
                    $cat      = $category[0];
                ?>
                   <span><?php echo $cat->name; ?>&nbsp;<?php echo get_the_date('Y.m.d'); ?></span>
            </li>
        </ol>
        </div>
    <section id="news">
        <div class="inner">
            <div class="content-news">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php
                    $category = get_the_category();
                    $cat      = $category[0];
                ?>

                <div class="single-content">
                    <div class="top-content flex">
                        <p class="date"><?php echo get_the_date('Y.m.d'); ?></p>
                        <p class="cat"><?php echo $cat->name; ?></p>
                        <h1 class="title"><?php the_title(); ?></h1>
                    </div>
                    <div class="eye">
                        <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('large');
                            }
                        ?>
                    </div>
                    <div class="content">
                        <?php the_content(); ?>

                        <?php
                        $program = get_field( 'seminar_info' );
                        if ( $program ) { ?>
                        <div class="seminar-info flex">
                            <h3 class="heading-block">
                                <span class="ttl02">セミナー<br>開催情報</span>
                            </h3>
                            <ul class="list-point">
                                <?php while ( have_rows( 'seminar_info' ) ) : the_row(); ?>
                                <?php
                                        $seminar_info_date = get_sub_field( 'date' );
                                        $seminar_info_venue = get_sub_field( 'venue' );
                                        $seminar_info_capacity = get_sub_field( 'capacity' );
                                        $seminar_info_fee = get_sub_field( 'fee' );
                                        $seminar_info_url = get_sub_field( 'url' );
                                        ?>
                                <?php if($seminar_info_date) : ?>
                                <li class="item-point flex">
                                    <div class="title">
                                        <p class="">開催日時</p>
                                    </div>
                                    <div class="info">
                                        <p class="text"><?= esc_html( $seminar_info_date ); ?></p>
                                    </div>
                                </li>
                                <?php endif; ?>
                                <?php if($seminar_info_venue) : ?>
                                <li class="item-point flex">
                                    <div class="title">
                                        <p class="">会場</p>
                                    </div>
                                    <div class="info">
                                        <p class="text"><?= esc_html( $seminar_info_venue ); ?></p>
                                    </div>
                                </li>
                                <?php endif; ?>
                                <?php if($seminar_info_capacity) : ?>
                                <li class="item-point flex">
                                    <div class="title">
                                        <p class="">定員</p>
                                    </div>
                                    <div class="info">
                                        <p class="text"><?= esc_html( $seminar_info_capacity ); ?></p>
                                    </div>
                                </li>
                                <?php endif; ?>
                                <?php if($seminar_info_fee) : ?>
                                <li class="item-point flex">
                                    <div class="title">
                                        <p class="">参加費用</p>
                                    </div>
                                    <div class="info">
                                        <p class="text"><?= esc_html( $seminar_info_fee ); ?></p>
                                    </div>
                                </li>
                                <?php endif; ?>
                                <?php if($seminar_info_url) : ?>
                                <li class="item-point flex">
                                    <div class="title">
                                        <p class="">詳細内容</p>
                                    </div>
                                    <div class="info">
                                        <p class="text"><a href="<?= esc_url( $seminar_info_url ); ?>"
                                                title="こちらからご確認ください。">こちらからご確認ください。</a></p>
                                    </div>
                                </li>
                                <?php endif; ?>
                                <?php endwhile; wp_reset_postdata(); ?>
                            </ul>
                        </div>
                        <?php } ?>
                    </div>
                </div>

                <?php endwhile; ?>
                <!-- <div class="single-nav">
                    <div class="nav">
                        <?php previous_post_link(); ?>
                    </div>
                    <div class="nav">
                        <?php next_post_link(); ?>
                    </div>
                </div> -->
            </div>
            <?php endif; ?>
            <div class="back-link">
                <a href="<?php bloginfo('url');?>/news">一覧へ戻る</a>
            </div>
        </div>
        <div id="breadcrumb-footer" class="breadcrumb">  
           
            <ol>
                <li>
                    <a href="<?php echo home_url(); ?>">トップページ</a>&nbsp;&nbsp;<i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                    <a href="<?php bloginfo('url');?>/seminar">お知らせ一覧</a>&nbsp;&nbsp;<i
                        class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                   <span><?php echo $cat->name; ?>&nbsp;<?php echo get_the_date('Y.m.d'); ?></span>
                </li>
            </ol>
       </div>
    </section>

</div>
<?php get_footer(); ?>