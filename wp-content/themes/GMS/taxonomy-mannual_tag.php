<?php
   session_start();
    get_header('thanks');  
    global $post, $wp_query;
?>

<style>
    .qa-search-block {
        display: none;
    }
    #camcat .box-form {
		text-align: center;
		max-width: 400px;
		margin: 50px auto;
		padding: 0px 15px;
    }
    #camcat .box-form input {
        margin-top:10px
    }
    #camcat #test1 {
        margin-top:10px;
        color:red
    }

    #camcat .text-note {
        display: block;
        text-align: center;
    }
	#qa-archive .list-faq .item-faq {
		padding: 0px!important
	}
 #camcat .note-img img {
    height: 55px;
  }

</style>
<head>
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/homepage.css">
	  <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/seminar.css">
</head>
<div id="allSeminar" class="columns-container">
    <div id = "camcat">
		

    <div class="pageTitle complete-home" >
            <h2><span class="en montserrat">CAM CAT USER MANUAL</span></h2>
            <div class="note-img flex">
                <picture class="box-img">
                       <source srcset="<?php bloginfo('template_url');?>/images/cat+_logo.png">
                    <img class="sizes" src="<?php bloginfo('template_url');?>/images/cat+_logo.png" alt="">
                </picture>
                <p class="note">ユーザーマニュアル</p>
            </div>
	  

        </div>
        <!-- <div class="content" id="content-manual">
                <div class="inner">
                    <ul class="list-cam flex">
                        <li class="item-cat">
                            <a href="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/pdf01.pdf" target="_blank">
                                <picture class="box-img">
                                    <source srcset="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_01.svg">
                                    <img class="sizes" src="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_01.svg" alt="">
                                </picture>
                                <p class="text-cam">アラート</p>
                            </a>
                        </li>
                        <li class="item-cat">
                            <a href="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/pdf02.pdf" target="_blank">
                                <picture class="box-img">
                                    <source srcset="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_02.svg">
                                    <img class="sizes" src="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_02.svg" alt="">
                                </picture>
                                <p class="text-cam">アラート設定</p>
                            </a>
                        </li>
                        <li class="item-cat">
                            <a href="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/pdf03.pdf" target="_blank">
                                <picture class="box-img">
                                    <source srcset="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_03.svg">
                                    <img class="sizes" src="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_03.svg" alt="">
                                </picture>
                                <p class="text-cam">アラートチャート</p>
                            </a>
                        </li>
                        <li class="item-cat">
                            <a href="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/pdf04.pdf" target="_blank">
                                <picture class="box-img">
                                    <source srcset="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_04.png">
                                    <img class="sizes" style=" border: 1px solid #707070;" src="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_04.png" alt="">
                                </picture>
                                <p class="text-cam">在留資格管理</p> 
                            </a>
                        </li>
                        <li class="item-cat">
                            <a href="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/pdf05.pdf" target="_blank">
                                <picture class="box-img">
                                    <source srcset="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_05.svg">
                                    <img class="sizes" src="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_05.svg" alt="">
                                </picture>
                                <p class="text-cam">帳票作成</p>
                            </a>
                        </li>
                        <li class="item-cat">
                            <a href="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/pdf06.pdf" target="_blank">
                                <picture class="box-img">
                                    <source srcset="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_06.svg">
                                    <img class="sizes" src="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_06.svg" alt="">
                                </picture>
                                <p class="text-cam">勤務情報残業管理</p>
                            </a>
                        </li>
                        <li class="item-cat">
                            <a href="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/pdf07.pdf" target="_blank">
                                <picture class="box-img">
                                    <source srcset="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_07.svg">
                                    <img class="sizes" src="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_07.svg" alt="">
                                </picture>
                                <p class="text-cam">メール送信</p>
                            </a>
                        </li>
                        <li class="item-cat">
                            <a href="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/pdf08.pdf" target="_blank">
                                <picture class="box-img">
                                    <source srcset="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_08.svg">
                                    <img class="sizes" src="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_08.svg" alt="">
                                </picture>
                                <p class="text-cam">個人情報一括登録</p>
                            </a>
                        </li>
                        <li class="item-cat">
                            <a href="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/pdf09.pdf" target="_blank">
                                <picture class="box-img">
                                    <source srcset="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_09.svg">
                                    <img class="sizes" src="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_09.svg" alt="">
                                </picture>
                                <p class="text-cam">情報検索</p>
                            </a>
                        </li>
                        <li class="item-cat">
                            <a href="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/pdf10.pdf" target="_blank">
                                <picture class="box-img">
                                    <source srcset="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_10.svg">
                                    <img class="sizes" src="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_10.svg" alt="">
                                </picture>
                                <p class="text-cam">ログイン・ログアウト</p>
                            </a>
                        </li>
                        <li class="item-cat">
                            <a href="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/pdf11.pdf" target="_blank">
                                <picture class="box-img">
                                    <source srcset="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_11.svg">
                                    <img class="sizes" src="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_11.svg" alt="">
                                </picture>
                                <p class="text-cam">就労者追加・削除</p>
                            </a>
                        </li>
                        <li class="item-cat">
                            <a href="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/pdf12.pdf" target="_blank">
                                <picture class="box-img">
                                    <source srcset="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_12.svg">
                                    <img class="sizes" src="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_12.svg" alt="">
                                </picture>
                                <p class="text-cam">就労者情報管理</p>
                            </a>
                        </li>
                        <li class="item-cat">
                            <a href="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/pdf13.pdf" target="_blank">
                                <picture class="box-img">
                                    <source srcset="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_13.svg">
                                    <img class="sizes" src="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_13.svg" alt="">
                                </picture>
                                <p class="text-cam">勤務情報管理</p>
                            </a>
                        </li>
                        <li class="item-cat">
                            <a href="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/pdf14.pdf" target="_blank">
                                <picture class="box-img">
                                    <source srcset="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_14.svg">
                                    <img class="sizes" src="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_14.svg" alt="">
                                </picture>
                                <p class="text-cam">ユーザー管理（管理者）</p>
                            </a>
                        </li>
                        <li class="item-cat">
                            <a href="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/pdf15.pdf" target="_blank">
                                <picture class="box-img">
                                    <source srcset="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_15.svg">
                                    <img class="sizes" src="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_15.svg" alt="">
                                </picture>
                                <p class="text-cam">通知先管理（管理者）</p>
                            </a>
                        </li>
                        <li class="item-cat">
                            <a href="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/pdf16.pdf" target="_blank">
                                <picture class="box-img">
                                    <source srcset="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_16.svg">
                                    <img class="sizes" src="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_16.svg" alt="">
                                </picture>
                                <p class="text-cam">受け入れ企業管理（管理者）</p>
                            </a>
                        </li>
                        <li class="item-cat">
                            <a href="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/pdf17.pdf" target="_blank">
                                <picture class="box-img">
                                    <source srcset="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_17.svg">
                                    <img class="sizes" src="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_17.svg" alt="">
                                </picture>
                                <p class="text-cam">支援機関管理（管理者）</p>
                            </a>
                        </li>
                        <li class="item-cat">
                            <a href="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/pdf18.pdf" target="_blank">
                                <picture class="box-img">
                                    <source srcset="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_18.svg">
                                    <img class="sizes" src="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_18.svg" alt="">
                                </picture>
                                <p class="text-cam">支援担当者管理（管理者）</p>
                            </a>
                        </li>
                        <li class="item-cat">
                            <a href="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/pdf19.pdf" target="_blank">
                                <picture class="box-img">
                                    <source srcset="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_19.svg">
                                    <img class="sizes" src="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_19.svg" alt="">
                                </picture>
                                <p class="text-cam">各種コード一覧</p>
                            </a>
                        </li>
                        <li class="item-cat">
                            <a href="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/pdf20.pdf" target="_blank">
                                <picture class="box-img">
                                    <source srcset="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_20.svg">
                                    <img class="sizes" src="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_20.svg" alt="">
                                </picture>
                                <p class="text-cam">画面説明</p>
                            </a>
                        </li>
                        <li class="item-cat">
                            <a href="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/pdf21.pdf" target="_blank">
                                <picture class="box-img">
                                    <source srcset="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_21.svg"> <img class="sizes" src="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_21.svg" alt="">
                                </picture>
                                <p class="text-cam">就労者情報登録<br>（個人情報ページ）</p>
                            </a>
                        </li>
                        <li class="item-cat" id = "p1">
                            <a href="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/pdf22.pdf" target="_blank">
                                <picture class="box-img">
                                    <source srcset="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_22.svg">
                                    <img class="sizes" src="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/CAMCAT_Manual_Thum_22.svg" alt="">
                                </picture>
                                <p class="text-cam">就労者情報登録<br>（登録情報一覧ページ）</p>
                            </a>
                        </li>
                        <li class="item-cat"></li>
                        <li class="item-cat"></li>
                    </ul>
                </div>
        </div> -->
	</div>
    <section id="qa-archive">
        <div class="inner">
            <div class="content-main">
                <div class="block-main">
				<h3 class="title-seminar">Q&A CAMCAT MANNUAL</h3>
                </div>
                    <?php get_template_part('template-parts/qa-sidebarmanual'); ?>
                </div>
                <div class="containar-qa">
                        <div class="all-qa qa-tag">
                            <?php
                            function my_result_count() {
                                global $wp_query;
                                $paged = get_query_var('paged') - 1;
                                $ppp   = get_query_var('posts_per_page');
                                $count = $total = $wp_query->post_count;
                                $from  = 0;
                                if ( 0 < $ppp ) {
                                    $total = $wp_query->found_posts;
                                    if ( 0 < $paged )
                                        $from  = $paged * $ppp;
                                }
                                printf(
                                    '<span class="result-count-txt">全<span>%1$s</span>件<span>%2$s%3$s</span>件を表示中</span>',
                                    $total,
                                    ( 1 < $count ? ($from + 1 . '〜') : '' ),
                                    ($from + $count )
                                );
                            }

                            $obj = get_queried_object();

                            $tax_query[] = array(
                                'taxonomy' => 'mannual_tag',
                                'terms' => $obj->slug,
                                'field' => 'slug',
                            );

                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $args = array(
                                'post_type'=> 'manual_qa',
                                'post_status' => 'publish',
                                'order'    => 'DESC',
                                'paged'  => $paged,
                                'posts_per_page' => "5",
                                'tax_query' => $tax_query
                            );

                            $result = new WP_Query( $args );

                            echo '<h3 class="title-tag"><span class="icon-3">'.esc_html($obj->name).' に関するQ＆A一覧</span></h3>';
                            my_result_count();
                            ?>

                        

                            <div id="qa">
                                <ul class="list-faq">
                                    <?php if ( $result->have_posts() ) : while ( $result->have_posts() ) : $result->the_post();
                                        $qa_id = $post->ID;
                                        $qa_link = get_the_permalink($qa_id);
                                        $qa_title = get_the_title($qa_id);
                                        $qa_answer_ttl = get_field('qa-answer-ttl', $qa_id);
                                        $qa_answer_txt = get_field('qa-answer-txt', $qa_id);

                                        ?>
                                    <li class="item-faq">
                                            <h4 class="faq-title">
                                                <span class="q-es">Q</span>
                                                <?= esc_html( $qa_title ); ?>
                                            </h4>
                                            <dl class="dl-faq">
                                            <span class="a-es">A</span>
                                            <dt class="dt-faq"> <?= esc_html( $qa_answer_ttl ); ?></dt>
                                            <dd class="dd-faq">
                                            <?= esc_html( $qa_answer_txt); ?>
                                            </dd>                        
                                    </dl>
                                    
                                    </li>
                                    <?php endwhile; endif;
                                    wp_reset_postdata();
                                    ?>
                                </ul>
                           </div>
                            <?php
                            if (function_exists('wp_pagenavi')) {                    
                                wp_pagenavi( array( 'query' => $result ) );
                            }
                            ?>

                       </div>

            </div>
        </div>
    </section>

</div>
<?php get_footer(); ?>