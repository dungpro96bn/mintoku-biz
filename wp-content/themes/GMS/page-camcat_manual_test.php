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
	#camcat .list-video .video-manual .img-video{
		cursor: pointer;
		position: relative
	}
	#camcat .list-video .video-manual .img-video:after {
		position: absolute;
		content: "";
		background-image: url(https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/camcat_play02.png);
		background-position: center;
		background-size: cover;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
		z-index: 99;
		height: 50px;
		width: 50px;
		transition: 0.5s;
	}
	#camcat .list-video {
		margin-bottom:100px
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
    max-width: 1100px;
    margin:auto;
    margin-top: 50px;
    margin-bottom: 0px;
  }

  #camcat .list-tab .item-tab {
    width: calc(100%/3- 10px);
     padding: 35px 30px;
    color: rgba(255,255,255,.5);
    background: #868686;
    text-align: center;
    cursor: pointer;
    transition: all 0.2s ease 0s;
    font-size: 20px;
    border-radius: 10px;
    min-width: 345px;
	position: relative;

	    border: 2px solid #5F5F5F;
  }
	.box-arrow {
		position: absolute;
	}
/*    #camcat .list-tab .item-tab:after {
    position: absolute;
    content: "";
    background: url(https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/icon_camcat_01.png);
    height: 45px;
    width: 48px;
    left: 30px;
    top: 30px;
   } */
	
   #camcat .list-tab .item-tab:after {
		position: absolute;
		content: "";
		background: url(https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/icon_camcat_01a.png);
		height: 92px;
		width: 98px;
		left: 30px;
		top: 5px;
   }
	#camcat .list-tab .item-tab:nth-child(1):after {
			transform:scale(0.5);
	}
	 #camcat .list-tab .item-tab:nth-child(2):after {
	   position: absolute;
	   content:"";
	   background:url(https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/icon_camcat_02.svg);
      height: 55px;
      width: 64px;
	    left: 30px;
     top: 22px;
   }
   #camcat .list-tab .item-tab:nth-child(3):after {
	   position: absolute;
	   content:"";
	   background:url(https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/icon_camcat_03.svg);
   height: 50.5px;
    width: 57px;
	    left: 30px;
    top: 22px;
   }
	   #camcat .list-tab .item-tab:before {
	   position: absolute;
	   content:"";
	   background:url(https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/icon_camcat_arrow01.png);
      height: 32px;
      width: 32px;
		right: 25px;
		top: 34px;
   }
	#camcat .list-tab .item-tab.active:before {
	  position: absolute;
	   content:"";
	   background:url(https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/icon_camcat_arrow02.png);
	}
  #camcat .list-tab .item-tab.active {
    background: #0B54F7;
    color: #fff;
	 	 border: 2px solid #0010B1;
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
    overflow: hidden;
    border-radius: 15px;
    transition: 1s;
  } 
  #camcat .title-video {
    text-align: center;
    font-size: 20px;
    margin-bottom:20px
  }

	.link-qa {
		padding: 15px 30px;
		color: white;
		background: #0B54F7;
		text-align: center;
		cursor: pointer;
		transition: all 0.2s ease 0s;
		font-size: 20px;
		border-radius: 30px;
		width: 200px;
		margin:auto;
		display:block;
		margin-bottom:30px
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
.link-page {
    display: block;
    position: relative;
    color: #0B54F7;
    font-size: 20px;
    font-weight: 600;
    padding: 15px 100px 15px 20px;
    border: 1px solid #0B54F7;
    border-radius: 30px;
    background: white;
    margin: auto;
	max-width:285px
}
.link-page::after {
    content: "";
    position: absolute;
    background-image: url(https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/arrow_home.png);
    right: 40px;
    width: 38px;
    height: 38px;
    top: 11px;
    transition: 0.5s;
}	
.link-page:hover {
    background: #0B54F7;
    color: white;
    opacity: 1;
}	
 .link-page:hover:after {
    right: 15px;
    background-image: url(https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/arrow_hover_home.png);
}	
	
.item-cat .link-block .cat-box{
        position: relative;
}
.item-cat .link-block .cat-box .title-center {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    font-size: 22px;
    color: #0000E8;
    width: 80%;
    text-align: center;
}	

.number-pdf {
    position: absolute;
    font-size: 30px;
    color: white;
    left: 20px;
    top: 5px;
}
.list-cam {
  justify-content: start;
}	
.list-cam .item-cat {
    margin-right: 10px;
}
#camcat .content-pdf,#camcat .content-pdf-one {
    display: none;
}
#camcat .content-pdf.active,#camcat .content-pdf-one.active {
    display: flex;
}
#camcat .list-tab-pdf,#camcat .list-tab-pdf-one {
    max-width: 800px;
    margin:0px 0px 50px
}
#camcat .list-tab-pdf .item-tab-pdf,#camcat .list-tab-pdf-one .item-tab-pdf-one {
    width: calc(100%/3- 10px);
    padding: 10px 10px;
    color: rgba(255,255,255,.5);
    background: #868686;
    text-align: center;
    cursor: pointer;
    transition: all 0.2s ease 0s;
    font-size: 20px;
    border-radius: 10px;
    min-width: 200px;
    position: relative;
    border: 2px solid #5F5F5F;
}
#camcat .list-tab-pdf .item-tab-pdf.active,#camcat .list-tab-pdf-one .item-tab-pdf-one.active {
    background: #0B54F7;
    color: #fff;
    border: 2px solid #0010B1;
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
                    <source srcset="<?php bloginfo('template_url');?>/images/lp/cloudsystem_camcat_title.svg">
                    <img class="sizes" src="<?php bloginfo('template_url');?>/images/lp/cloudsystem_camcat_title.svg" alt="">
                </picture>
                <p class="note">ユーザーマニュアル</p>
            </div>
        </div>
        <ul class="list-tab flex">
			    <li class="item-tab active">CAMCAT</li>
                <li class="item-tab">CAT+ </li>
                <li class="item-tab">動画レクチャー </li>
        </ul>
   

        <div class="contet-tab">
            <div class="content active" id="content-manual">
                 <div class="inner">
                    <ul class="list-tab-pdf-one flex">
                            <li class="item-tab-pdf-one active">ALL</li>
                            <li class="item-tab-pdf-one">動画</li>
                            <li class="item-tab-pdf-one">クチャー</li>
                    </ul>
                   <!-- //ALL-01 -->
                    <ul class="list-cam flex content-pdf-one active">
                        <?php
                            $args = array(
                                'post_type' => 'camcat_pdf',
                                'post_status' => 'publish',
                                'posts_per_page' => -1,
                                'order' => 'ASC',
                            );
                            $posts = new WP_Query( $args );
                            if ( $posts-> have_posts() ) : ?><?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                            <?php
                                    $file = get_field('camcat_pdf');  
                                    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                                    $pdf_title = get_the_title();
                            ?>
                                <li class="item-cat">
                                    <a class="link-block" href="<?php echo $file['url']; ?>" target="_blank">
                                        <div class="cat-box">
                                            <picture class="box-img">
                                                <source srcset="<?php bloginfo('template_url');?>/images/CAMCAT_Manual_Thum_main.png">
                                                <img class="sizes" src="<?php bloginfo('template_url');?>/images/CAMCAT_Manual_Thum_main.png" alt="">
                                            </picture>
                                            <p class="title-center"><?php echo  $pdf_title; ?></p>
                                        </div> 
                                    </a>
                                </li>

                            <?php endwhile; ?>
                            <?php endif; wp_reset_postdata();?>
                     </ul>
                      <!-- //ONE-01 -->
                      <ul class="list-cam flex content-pdf-one">
                        <?php
                            $args = array(
                                'post_type' => 'camcat_pdf',
                                'post_status' => 'publish',
                                'posts_per_page' => -1,
                                'order' => 'ASC',
                                'meta_query' => array(
                                    array(
                                        'key'     => 'choice_pdf',
                                        'value'   => 'one',
                                        'compare' => 'LIKE'
                                    )
                                )
                            );
                            $posts = new WP_Query( $args );
                            if ( $posts-> have_posts() ) : ?><?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                            <?php
                                    $file = get_field('camcat_pdf');  
                                    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                                    $pdf_title = get_the_title();
                            ?>
                                <li class="item-cat">
                                    <a class="link-block" href="<?php echo $file['url']; ?>" target="_blank">
                                        <div class="cat-box">
                                            <picture class="box-img">
                                                <source srcset="<?php bloginfo('template_url');?>/images/CAMCAT_Manual_Thum_main.png">
                                                <img class="sizes" src="<?php bloginfo('template_url');?>/images/CAMCAT_Manual_Thum_main.png" alt="">
                                            </picture>
                                            <p class="title-center"><?php echo  $pdf_title; ?></p>
                                        </div> 
                                    </a>
                                </li>

                            <?php endwhile; ?>
                            <?php endif; wp_reset_postdata();?>
                     </ul>

                      <!-- //TWO-02 -->
                      <ul class="list-cam flex content-pdf-one">
                        <?php
                            $args = array(
                                'post_type' => 'camcat_pdf',
                                'post_status' => 'publish',
                                'posts_per_page' => -1,
                                'order' => 'ASC',
                                'meta_query' => array(
                                    array(
                                        'key'     => 'choice_pdf',
                                        'value'   => 'two',
                                        'compare' => 'LIKE'
                                    )
                                )
                            );
                            $posts = new WP_Query( $args );
                            if ( $posts-> have_posts() ) : ?><?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                            <?php
                                    $file = get_field('camcat_pdf');  
                                    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                                    $pdf_title = get_the_title();
                            ?>
                                <li class="item-cat">
                                    <a class="link-block" href="<?php echo $file['url']; ?>" target="_blank">
                                        <div class="cat-box">
                                            <picture class="box-img">
                                                <source srcset="<?php bloginfo('template_url');?>/images/CAMCAT_Manual_Thum_main.png">
                                                <img class="sizes" src="<?php bloginfo('template_url');?>/images/CAMCAT_Manual_Thum_main.png" alt="">
                                            </picture>
                                            <p class="title-center"><?php echo $pdf_title; ?></p>
                                        </div> 
                                    </a>
                                </li>

                            <?php endwhile; ?>
                            <?php endif; wp_reset_postdata();?>
                     </ul>


                </div>

            </div>
              <!-- //content-02 -->
            <div class="content" id="content-02">
                <div class="inner">
                        
                <ul class="list-tab-pdf flex">
                        <li class="item-tab-pdf active">ALL</li>
                        <li class="item-tab-pdf">ONE</li>
                        <li class="item-tab-pdf">TWO </li>
                </ul>
                <ul class="list-cam flex active content-pdf">
                    <?php
                    $args = array(
                        'post_type' => 'cat_pdf',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'order' => 'ASC',
                    );
                    $posts = new WP_Query( $args );

                    if ( $posts-> have_posts() ) : ?><?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                    <?php
                            $file02 = get_field('cat_pdf');
                            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                            $pdf_title = get_the_title();     
                    ?>
                        <li class="item-cat">
                            <a class="link-block" href="<?php echo $file02['url']; ?>" target="_blank">
                                <div class="cat-box">
                                    <!-- <span class="number-pdf"><?php echo ($number02 = $number02 + 1); ?></span> -->
                                <picture class="box-img">
                                        <source srcset="<?php bloginfo('template_url');?>/images/CAMCAT_Manual_Thum_main.png">
                                        <img class="sizes" src="<?php bloginfo('template_url');?>/images/CAMCAT_Manual_Thum_main.png>" alt="">
                                    </picture>
                                    <p class="title-center"><?php echo $pdf_title; ?></p>
                                </div> 
                            </a>
                        </li>

                    <?php endwhile; ?>
                    <?php endif; wp_reset_postdata();?>

                    </ul>


                    <ul class="list-cam flex one content-pdf">
                    <?php
                    $args = array(
                        'post_type' => 'cat_pdf',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'order' => 'ASC',
                        'meta_query' => array(
                            array(
                                'key'     => 'choice_pdf',
                                'value'   => 'one',
                                'compare' => 'LIKE'
                            )
                        )
                    );
                    $posts = new WP_Query( $args );

                    if ( $posts-> have_posts() ) : ?><?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                    <?php
                            $file02 = get_field('cat_pdf'); 
                            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                            $pdf_title = get_the_title();     
                    ?>
                        <li class="item-cat">
                            <a class="link-block" href="<?php echo $file02['url']; ?>" target="_blank">
                                <div class="cat-box">
                                <picture class="box-img">
                                        <source srcset="<?php bloginfo('template_url');?>/images/CAMCAT_Manual_Thum_main.png">
                                        <img class="sizes" src="<?php bloginfo('template_url');?>/images/CAMCAT_Manual_Thum_main.png" alt="">
                                    </picture>
                                    <p class="title-center"><?php echo $pdf_title; ?></p>
                                </div> 
                            </a>
                        </li>

                    <?php endwhile; ?>
                    <?php endif; wp_reset_postdata();?>
                    </ul>

                    
                <ul class="list-cam flex two content-pdf">
                    <?php
                    $args = array(
                        'post_type' => 'cat_pdf',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'order' => 'ASC',
                        'meta_query' => array(
                            array(
                                'key'     => 'choice_pdf',
                                'value'   => 'two',
                                'compare' => 'LIKE'
                            )
                        )
                    );
                    $posts = new WP_Query( $args );

                    if ( $posts-> have_posts() ) : ?><?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                    <?php
                            $file02 = get_field('cat_pdf');
                            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                            $pdf_title = get_the_title();      
                    ?>
                        <li class="item-cat">
                            <a class="link-block" href="<?php echo $file02['url']; ?>" target="_blank">
                                <div class="cat-box">
                                    <!-- <span class="number-pdf"><?php echo ($number02 = $number02 + 1); ?></span> -->
                                <picture class="box-img">
                                        <source srcset="<?php bloginfo('template_url');?>/images/CAMCAT_Manual_Thum_main.png">
                                        <img class="sizes" src="<?php bloginfo('template_url');?>/images/CAMCAT_Manual_Thum_main.png>" alt="">
                                    </picture>
                                    <p class="title-center"><?php echo  $pdf_title; ?></p>
                                </div> 
                            </a>
                        </li>

                    <?php endwhile; ?>
                    <?php endif; wp_reset_postdata();?>


                    </ul>


                        </div>
                    </div>




               <!-- //content-03 video -->  
                <div class="content" id="video-camcat">
                    <div class="inner">
                      <ul class="list-video flex">
                        <?php
                                $args = array(
                                    'post_type' => 'manual_video',
                                    'post_status' => 'publish',
                                    'posts_per_page' => -1,
                                    'order' => 'DESC',
                                );
                                $posts = new WP_Query( $args );

                                if ( $posts-> have_posts() ) : ?><?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                                <?php
                                        $post_id = $post->ID;
                                        $post_link = get_the_permalink($post_id);
                                        $post_title = get_the_title($post_id);
                                        $video_link  = get_field( 'link-video' );
                                        $img_video  =  get_field( '_img-video' );
						                $file_video = get_field('video_camcat_pdf');
                                ?>
                                <li class="video-manual">
									  <div class="img-video">
                                        <picture class="box-img">
                                            <source srcset="<?php the_field('_img-video'); ?>">
                                            <img class="sizes" src="<?php the_field('_img-video'); ?>" alt="">
                                        </picture>
                                    </div>
                                    <p class="title-video"><?php echo $post_title ?></p>
                                    <div class="modal01">
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <div id="video-container">
                                                   <?php echo $video_link ?>
                                                </div>
                                            </div>
                                      </div>
									
									<a href="<?php echo $file_video['url']; ?>" class="link-page camlink"  target="_blank">資料ダウンロード</a>
                                </li>
                                <?php endwhile; ?>
                                <?php endif; wp_reset_postdata();?>
                      </ul>
                    </div>
                </div>
        </div>
        <a href="<?php bloginfo('url');?>/manual_qa/" target="_blank" class="link-qa">
                <p class="item-tab">Q&A</p>
        </a>

        <div class="inner">
                <div id="breadcrumb-footer" class="breadcrumb">
                    <ol>
                        <li>
                            <a href="http://localhost/gms">トップページ</a>&nbsp;&nbsp;<i class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>
                            <span>CAM CATユーザーマニュアル</span>
                        </li>
                    </ol>
                </div>
        </div>
    </div>



<script type="text/javascript">  
	function addMetaTag() {
	  var meta = document.createElement('meta');
	  meta.name = 'robots';
	  meta.content = 'nofollow';
	  document.getElementsByTagName('head')[0].appendChild(meta);
	}
	addMetaTag();

	function addMetaTag2() {
	  var meta = document.createElement('meta');
	  meta.name = 'robots';
	  meta.content = 'noindex';
	  document.getElementsByTagName('head')[0].appendChild(meta);
	}
	addMetaTag2();

 </script>


<?php get_footer(); ?>