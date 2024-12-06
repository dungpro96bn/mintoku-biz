<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, user-scalable=yes, minimum-scale=0.5">
    <?php if (is_home() || is_front_page()) { ?>
    <meta name="description" content="【外国人雇用の課題をまとめて解決】技能実習生・特定技能の活用に携わる企業・監理団体のご担当者様。 ＧＭＳ外国人材マネジメントサービスは外国人雇用の課題をまとめてサポート。外国人材の採用・入国・生活までを全面で支援いたします。">
    <?php }else if (is_404()) { ?>
    <meta name="description" content="">
    <?php }else{ ?>
    <meta name="description" content="<?php if(get_field('ff_description')){ the_field('ff_description');} ?>">
    <?php } ?>
    <meta name="keywords" content="GMS,外国人材,外国人材マネジメントサービス">
    <?php if (is_404()) { ?>
    <title>ページが見つかりません | 外国人材マネジメントサービスGMS</title>
    <?php }else{ ?>
    <title>
        <?php			
        global $page, $paged;
        wp_title( '|', true, 'right' );			
        bloginfo( 'name' );			
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description";
                        
        if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Page %s', '' ), max( $paged, $page ) );
        ?>
    </title>
    <?php } ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="icon" type="image/gif" href="<?php bloginfo('template_url');?>/images/common/favicon.ico">
    <link rel="apple-touch-icon" href="<?php bloginfo('template_url');?>/images/common/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url');?>/images/common/favicon.ico">
    <link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?ver=<?php echo rand(); ?>">  
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">      
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/homepage.css">
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/seminar.css">
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/service.css">
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/slick.min.css">
	<link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/all.min.css">
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/lity.min.css">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>> 
    <div class="outer">
        <header id="header-menu" class="header-menu">
            <div class="header-nav">
                <div class="inner-header">
                    <div class="bg-nav">
                        <p class="header-logo">
                            <a href="<?php bloginfo('url');?>">
                                <picture>
                                    <source id="changeMe01"
                                        srcset="<?php bloginfo('template_url');?>/images/common/Img_logo.svg">
                                    <img class="sizes" id="changeMe"
                                        src="<?php bloginfo('template_url');?>/images/common/Img_logo.svg"
                                        alt="<?php bloginfo( 'name' ); ?>">
                                </picture>
                            </a>
                        </p><!-- .header-logo -->
                        <div class="header-megamenu">
                            <div class="main-menu">
                                <nav class="nav-items modal-menu modal-off">
                                    <div class="nav-item-list">
                                        <div
                                            class="nav-itemMenu one nav-listMenu nav-item<?php if ( is_page( array('service/cloud','service/cloud/maetra/','service/assistant/','service/immigration/','service/life-support/','service/consultation/') ) ) : echo ' current'; endif; ?>">
                                            <a href="" class="sub-main"><span>サービス紹介</span></a>
                                            <div class="site-nav-dropdown megamenu">
                                                <div class="nav-subMenu">
                                                    <ul class="nav-list-subMenu">
                                                                          <li class="subNav-item-subMenu hover-two">
                                                            <a class=""href="<?php bloginfo('url');?>/service/cloud/">
                                                                <span class="sub-txtLink">Techサポート</span> 
                                                            </a> 
                                                            
                                                            <div class="nav-subMenu two">
                                                                <ul class="nav-list-subMenu">
                                                                    <li class="subNav-item-subMenu">
                                                                        <a href="<?php bloginfo('url');?>/service/cloud/maetra/videoStep">
                                                                            <span class="sub-txtLink">前トレ with VideoStep</span> 
                                                                        </a>  
                                                                    </li>                                                       
                                                                    <li class="subNav-item-subMenu">
                                                                        <a href="<?php bloginfo('url');?>/service/cloud/maetra/edpoke">
                                                                            <span class="sub-txtLink">前トレ with 日本語</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="subNav-item-subMenu">
                                                                        <a href="<?php bloginfo('url');?>/service/cloud/maetra/vr">
                                                                            <span class="sub-txtLink">前トレ with VR</span>
                                                                        </a>
                                                                    </li>                                                        
                                                                </ul>
                                                            </div>

                                                        </li>                                                       
                                                        <li class="subNav-item-subMenu">
                                                            <a href="<?php bloginfo('url');?>/service/assistant/">
                                                                <span class="sub-txtLink">Jobサポート</span>
                                                            </a>
                                                        </li>
                                                        <li class="subNav-item-subMenu">
                                                            <a href="<?php bloginfo('url');?>/service/life-support/">

                                                                <span class="sub-txtLink">Lifeサポート</span>
                                                            </a>
                                                        </li>                                                       
                                                        <li class="subNav-item-subMenu">
                                                            <a href="<?php bloginfo('url');?>/service/consultation/">
                                                                <span class="sub-txtLink">Legalサポート</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="other-page">
                                            <li class="nav-itemMenu nav-item<?php if ( is_page('case_study') ) : echo ' current'; endif; ?>">
                                                <a href="<?php bloginfo('url');?>/case_study">導入事例一覧</a>
                                            </li>
                                            
                                            <li class="nav-itemMenu nav-item<?php if ( is_post_type_archive( 'qa_detail') || is_singular('qa_detail')) : echo ' current'; endif; ?>">
                                                <a href="<?php bloginfo('url');?>/qa">外国人材Q&A</a>
                                            </li>
                                            <li class="nav-itemMenu nav-item<?php if ( is_post_type_archive( 'seminar') || is_singular('seminar') ) : echo ' current'; endif; ?>">
                                                <a href="<?php bloginfo('url');?>/seminar">セミナー情報</a>
                                            </li>
                                            <li class="nav-itemMenu nav-item<?php if (is_page('news')|| is_singular('news') ) : echo ' current'; endif; ?>">
                                                <a href="<?php bloginfo('url');?>/news">お知らせ</a>
                                            </li>
                                            <li class="nav-itemMenu nav-item<?php if ( is_post_type_archive( 'download') ) : echo ' current'; endif; ?>">
                                                <a href="<?php bloginfo('url');?>/report_download">資料ダウンロード</a>
                                            </li>
                                        </ul>
										<!-- .add menu -->
										
										
								     <div
                                            class="nav-itemMenu one nav-listMenu nav-item<?php if ( is_page( array('') ) ) : echo ' current'; endif; ?>">
                                            <a href="" class="sub-main"><span>オンライン展示会</span></a>
                                            <div class="site-nav-dropdown megamenu">
                                                <div class="nav-subMenu">
                                                    <ul class="nav-list-subMenu">
                                                        <li class="subNav-item-subMenu">
                                                            <a href="<?php bloginfo('url');?>/lp-cam-messe-in-vietnam2024/">
                                                                <span class="sub-txtLink">MINTOKU MESSE in VIETNAM 2024</span> 
                                                            </a>  
                                                        </li> 
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>	
										
										
										
										
                                    </div><!-- .nav-item-list -->
                                </nav><!-- .nav-items -->
                                <div class="mobi-display mobi">
                                    <div class="investigation">
                                        <a href="<?php bloginfo('url');?>/#contact" class="scroll btn-contact-mb"><span>お問い合わせ</span></a>
                                    </div>
                                    <a href="<?php bloginfo('url');?>/" class="operating-company item03"><span>運営会社</span></a>
                                    <a href="<?php bloginfo('url');?>/privacy"
                                        class="policy item02"><span>プライバシーポリシー</span></a>
                                    <a href="<?php bloginfo('url');?>" class="item01">
                                        <picture>
                                            <source media="(max-width: 959px)"
                                                srcset="<?php bloginfo('template_url');?>/images/common/Img_logo_footer_sp@2x.png 2x">
                                            <source media="(min-width: 960px)"
                                                srcset="<?php bloginfo('template_url');?>/images/common/Img_logo_footer_pc@2x.png 2x">
                                            <img class="sizes"
                                                src="<?php bloginfo('template_url');?>/images/common/Img_logo_footer_pc@2x.png"
                                                alt="<?php bloginfo( 'name' ); ?>">
                                        </picture>
                                    </a>
                                    <p class="copyright">© CAMTECH INC. All Rights Reserved.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="investigation  destop">
                        <a href="<?php bloginfo('url');?>/#contact">お問い合わせ</a> 
                    </div>
                </div>

                <div class="btn-openMenu">
                    <div class="toggle-btn">
                        <span></span>
                    </div>
                </div>
                <div class="btn-openMenu-pc">
                    <div class="toggle-btn">
                        <span></span>
                    </div>
                </div>
                <div class="menu-pc">
                    <a href="<?php bloginfo('url');?>">
                        <picture class="box-img">
                            <source srcset="<?php bloginfo('template_url');?>/images/logo_menupc.svg">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/logo_menupc.svg" alt="">
                        </picture>
                    </a>
                    <p class="text-menu montserrat">MENU</p>
                    <ul class="list-service">
                        <h4 class="title-service">サービス紹介</h4>
                        <li class="item-subMenupc">
                            <a href="<?php bloginfo('url');?>/service/cloud/"><span class="sub-txtLink">Techサポート</span></a>
                        </li>
                        <li class="item-subMenupc">
                            <a href="<?php bloginfo('url');?>/service/assistant/"><span class="sub-txtLink">Jobサポート</span></a>
                        </li>
                        <li class="item-subMenupc">
                            <a href="<?php bloginfo('url');?>/service/life-support/"><span class="sub-txtLink">Lifeサポート</span></a>
                        </li>
                        <li class="item-subMenupc">
                            <a href="<?php bloginfo('url');?>/service/consultation/"><span class="sub-txtLink">Legalサポート</span></a>
                        </li>
                    </ul>

                    <ul class="list-page">
                        <li class="item-subMenupc">
                            <a href="<?php bloginfo('url');?>/case_study">導入事例一覧</a>
                        </li>
                        <li class="item-subMenupc">
                            <a href="<?php bloginfo('url');?>/qa">外国人材Q&A</a>
                        </li>
                        <li class="item-subMenupc">
                            <a href="<?php bloginfo('url');?>/seminar">セミナー情報</a>
                        </li>
                        <li class="item-subMenupc">
                            <a href="<?php bloginfo('url');?>/news">お知らせ</a>
                        </li>
                        <li class="item-subMenupc">
                            <a href="<?php bloginfo('url');?>/report_download">資料ダウンロード</a>
                        </li>
                    </ul>
					<!-- .add menu -->
					
                    <ul class="list-service">
                        <h4 class="title-service">オンライン展示会</h4>
                        <li class="item-subMenupc">
                            <a href="<?php bloginfo('url');?>/lp-cam-messe-in-vietnam2023/"><span class="sub-txtLink">CAM MESSE in VIETNAM 2023</span></a>
                        </li>

                    </ul>					
					
					
					
				
					
                    <div class="investigation destop">
                        <a href="<?php bloginfo('url');?>/#contact">お問い合わせ・ご相談はこちら</a>
                    </div>
                    <div class="info-pc">
                        <p class="freecall">
                            <picture>
                                <source srcset="<?php bloginfo('template_url');?>/images/common/call_footer.png">
                                <img class="sizes" src="<?php bloginfo('template_url');?>/images/common/call_footer.png"
                                    alt="">
                            </picture>お問合せ
                        </p>
                        <p class="tel montserrat">03-6738-9686</p>
                        <p class="time-work">営業:10時-18時（月-金）</p>
                    </div>
                    <div class="fooer-menu flex">
                        <span>プライバシーポリシー</span>
                        <span>運営会社</span>
                        <span>© CAM GLOBAL INC.All Rights Reserved</span>
                    </div>
                </div>
            </div><!-- .header-nav -->
        </header><!-- #header-menu -->
        <main role="main">