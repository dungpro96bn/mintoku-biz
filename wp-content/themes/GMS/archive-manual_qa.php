<?php
    session_start();
   	get_header('thanks');  
	global $post, $wp_query;
//     if (isset($_POST['submit']))  {
//         $_SESSION['pass-manual'] = $_POST['pass-manual'];
//    }
?>


<style>
	#allSeminar .content-main {
      padding-top: 0px
	}
    .title-seminar {
        text-align: center;
    }
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


    #clicksumbit {
        font-size: 20px;
        border-radius: 10px;
        width: 220px;
    }



    .containar-qa {
        padding-bottom: 100px;
    }
   .open_link {
        text-align: center;
        cursor: pointer;

   }



    .list_toggle {
        display: none;
    }

    .open_link:before {
        content: "リストをもっと見る ▼";
    }

     .open_link.close_link:before {
        content: "リストを閉じる ▲";
    }




    .list_toggle .list-faq .item-faq:nth-child(1),
    .list_toggle .list-faq .item-faq:nth-child(2),
    .list_toggle .list-faq .item-faq:nth-child(3),
    .list_toggle .list-faq .item-faq:nth-child(4),
    .list_toggle .list-faq .item-faq:nth-child(5)
    {
        display: none;
    }
  
  .コーポレート {
    color: red;
  }

  #camcat .note-img img {
    height: 55px;
  }


  /* // add css 2023 (ca phan js dong 180)*/





  #camcat .list-tab {
    max-width: 800px;
    margin:auto;
    margin-top: 50px;
    margin-bottom: 0px;
  }

  #camcat .list-tab .item-tab {
    width: calc(100%/3- 10px);
    padding: 15px 30px;
    color: rgba(255,255,255,.5);
    background: #868686;
    text-align: center;
    cursor: pointer;
    transition: all 0.2s ease 0s;
    font-size: 20px;
    border-radius: 30px;
    min-width: 200px;
  }
  #camcat .list-tab .item-tab.active {
    background: #0B54F7;
    color: #fff;
  }

   #camcat .content.active {
    display: block;
  }

  #camcat .content {
    display: none;
  }
 #breadcrumb-footer {
    position: relative !important;
  }

  #camcat  .list-video  {
    flex-wrap: wrap;
    justify-content: space-around;
  }
  #camcat  .list-video .video-manual {
    width: calc(100%/3 - 20px);
    max-height: 339px;
    overflow: hidden;
    border-radius: 15px;
    transition: 1s;
  } 
  #camcat .title-video {
    text-align: center;
    font-size: 20px;
    margin-bottom:20px
  }



/* Hiển thị modal */
.modal01 {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.4);
}

/* Nội dung modal */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  max-width: 720px;
  position: relative;
}

/* Nút đóng modal */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
  position: relative;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
	
	#allSeminar .title-seminar {
		margin-top:40px
	}
		
	#allSeminar .sub-listMenu {
    justify-content: start;
}
@media (max-width: 768px) {
    #camcat .list-video .video-manual {
        width: 100%;
    }
    #camcat .list-tab {
        justify-content: center;
    }
    #camcat .list-tab .item-tab {
	    margin-bottom: 10px;
		min-width: 132px;
		font-size: 16px;
		padding: 5px 15px;
		margin-left: 5px;
    }
    #camcat .list-cam .item-cat {
        margin: auto;
        margin-bottom: 20px;
        text-align: center;
   }
}
</style>



<head>
      <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/homepage.css">
	  <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/seminar.css">
</head>




<div id="camcat">
        <div class="pageTitle complete-home">
            <h2><span class="en montserrat">CAM CAT USER MANUAL</span></h2>
            <div class="note-img flex">
                <picture class="box-img">
                    <source srcset="<?php bloginfo('template_url');?>/images/cat+_logo.png">
                    <img class="sizes" src="<?php bloginfo('template_url');?>/images/cat+_logo.png" alt="">
                </picture>
                <p class="note">ユーザーマニュアル</p>
            </div>
        </div>
        

    

        <div class="contet-tab">
               
          
                    <div id="allSeminar" class="columns-container">

                        <div class="inner">
                            <h3 class="title-seminar">Q&A CAMCAT MANNUAL</h3>
                            <?php get_template_part('template-parts/qa-sidebarmanual'); ?>


                                <div class="contents-block qa-search-block">
                                    <form id="qa-search" action="<?php bloginfo('url');?>/manual_qa">
                                        <div class="search-box">
                                            <?php                    
                                                $keyword = '';
                                                if(isset($_GET) && $_GET['s']) :                            
                                                    $keyword = $_GET['s'];                        
                                                endif;
                                            ?>
                                            <input class="search-txt" type="text" name="s" value="<?php echo $keyword; ?>" placeholder="フリー検索">
                                            <label for="search-btn-qa"><i class="fa-regular fa-magnifying-glass"></i>
                                                <input id="search-btn-qa" class="search-btn" type="submit">
                                            </label>
                                        </div>
                                    </form>
                                </div>
                                <div class="containar-qa">        
                                    <div class="all-qa showmore_list">
                                    
                                        <?php
                                        
                                            if($_GET['s']) {                   
                                                $s = $_GET['s'];                      
                                                function my_result_count() {
                                                    global $wp_query;
                                                    $paged = get_query_var( 'paged' ) - 1;
                                                    $ppp   = get_query_var( 'posts_per_page' );
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

                                                echo '<h3 class="ttl ryo qa-ttl"><span class="icon-3">'.esc_html($s).' に関するQ＆A一覧</span></h3>';
                                                my_result_count();
                                            }
                                            else {
                                                $s = '';
                                            }
                                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                            $args = array(
                                                'post_type'=> 'manual_qa',
                                                'post_status' => 'publish',
                                                'order'    => 'DESC',                  
                                                'paged'  => $paged,
                                                'posts_per_page' => 5,
                                                's' => $s,                                
                                            );
                                            $result = new WP_Query( $args );
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
                                    </div>
                                    <h4 class="open_link"></h4>
                                    <div class="all-qa list_toggle">
                            
                                    <?php
                                    
                                        if($_GET['s']) {                   
                                            $s = $_GET['s'];                      
                                            function my_result_count() {
                                                global $wp_query;
                                                $paged = get_query_var( 'paged' ) - 1;
                                                $ppp   = get_query_var( 'posts_per_page' );
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

                                            echo '<h3 class="ttl ryo qa-ttl"><span class="icon-3">'.esc_html($s).' に関するQ＆A一覧</span></h3>';
                                            my_result_count();
                                        }
                                        else {
                                            $s = '';
                                        }
                                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                        $args = array(
                                            'post_type'=> 'manual_qa',
                                            'post_status' => 'publish',
                                            'order'    => 'DESC',                  
                                            'paged'  => $paged,
                                            'posts_per_page' => 100,
                                            's' => $s,                                
                                        );
                                        $result = new WP_Query( $args );
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
                                    
                                </div>
                                    
                                </div>
                        </div>
                   </div>
                
             



        </div>


        <div class="inner">
                <div id="breadcrumb-footer" class="breadcrumb">
                    <ol>
                        <li>
                            <a href="http://localhost/gms">トップページ</a>&nbsp;&nbsp;<i
                                class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>
                            <span>CAM CATユーザーマニュアル</span>
                        </li>
                    </ol>
                </div>
        </div>
    </div>



<script >


</script>


<?php get_footer(); ?>