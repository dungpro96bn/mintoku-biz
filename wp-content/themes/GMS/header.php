<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php if (is_home() || is_front_page()) { ?>
    <meta name="description" content="mintoku for biz は外国人労働者外の雇用にまつわる課題をまとめてサポート。外国人労働者や特定技能実習生の採用・入国・生活までを全面で支援いたします。">
    <?php }else if (is_404()) { ?>
    <meta name="description" content="mintoku for biz は外国人労働者外の雇用にまつわる課題をまとめてサポート。外国人労働者や特定技能実習生の採用・入国・生活までを全面で支援いたします。">
    <?php }else{ ?>
    <meta name="description" content="mintoku for biz は外国人労働者外の雇用にまつわる課題をまとめてサポート。外国人労働者や特定技能実習生の採用・入国・生活までを全面で支援いたします。">
    <?php } ?>
    <meta name="keywords" content="mintoku for biz,外国人材,外国人材マネジメントサービス">
    <?php if (is_404()) { ?>
    <title>404 | mintoku for biz | 外国人労働者支援サービス</title>
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

    <script>
      (function(d) {
        var config = {
          kitId: 'szz1wun',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>

    <!-- css file-->
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/all.min.css">
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/aos.css" rel="stylesheet">
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/slick.css">
    <link rel="stylesheet" media="all" href="<?php bloginfo('stylesheet_url'); ?>?ver=<?php echo rand(); ?>">
       <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <script src="<?php bloginfo('template_directory'); ?>/assets/js/pro.js" crossorigin="anonymous"></script>

    <?php
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', array(), '2.2.4');
        wp_head();
    ?>

     <!--file js-->
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/aos.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/slick.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/main-old.js?ver=<?php echo rand(); ?>"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js?ver=<?php echo rand(); ?>"></script>

    <?php if (is_admin_bar_showing()): ?>
        <style type="text/css" media="screen">
            #header-menu{
                top: 32px;
            }
            #header-menu .header-nav.scroll-header {
                top: 32px !important;
            }

            @media screen and (max-width: 782px) {
                #header-menu{
                    top: 46px;
                }
                #header-menu .header-nav.scroll-header {
                    top: 46px !important;
                }
            }
        </style>
    <?php endif; ?>

    <style>
        #loading-spinner {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: white;
            opacity: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        #loading-spinner i {
            font-size: 60px;
            color: #000000;
        }
    </style>

</head>

<body <?php body_class(); ?>>

    <div class="outer">
        <header id="header-menu" class="header-menu">
            <div class="header-nav">
                <div class="header-inner">
                    <div class="header-logo">
                        <a class="link-logo" href="<?php echo home_url(); ?>">
                            <picture class="logo">
                                <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/logo.svg">
                                <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/logo.svg" alt="<?php bloginfo('name'); ?>">
                            </picture>
                        </a>
                    </div><!-- .header-logo -->
                    <div class="right-header header-megamenu">
                        <?php wp_nav_menu(
                            array(
                                'menu_class' => 'navMenu',
                                'menu_id' => 'navList-menu',
                                'container' => 'div',
                                'container_id' => 'nav-container'
                            )
                        ); ?>
                    </div>
                    <div class="header-action-right">
                        <div class="download">
                            <a class="download-btn" href="<?php echo home_url(); ?>/report_download/">資料ダウンロード</a>
                        </div>
                        <div class="contact">
                            <a class="contact-btn" href="<?php echo home_url(); ?>/contact/">お問い合わせ</a>
                        </div>
                    </div>
                </div>
                <div class="toggle-menu">
                    <div class="icon">
                        <span></span>
                    </div>
                </div>
            </div><!-- .header-nav -->
        </header><!-- #header-menu -->
        <main role="main">