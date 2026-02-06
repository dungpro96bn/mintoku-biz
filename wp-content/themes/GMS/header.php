<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MGNP3866');</script>
    <!-- End Google Tag Manager -->

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php if (is_404()) { ?>
    <title>404 | Mintoku | 外国人労働者支援サービス</title>
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

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Oswald:wght@200..700&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/source-han-sans-jp.js"></script>
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

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MGNP3866"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <div class="outer">
        <header id="header-menu" class="header-menu">
            <div class="header-nav">
                <div class="header-inner">
                    <div class="header-logo">
                        <a class="link-logo" href="<?php echo home_url(); ?>">
                            <picture class="logo">
                                <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/logo_sp.svg">
                                <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/logo.svg">
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
                            <a class="download-btn" href="<?php echo home_url(); ?>/report_download/">資料<br class="sp-br"/>ダウンロード</a>
                        </div>
                        <div class="foreigners">
                            <a class="foreigners-btn" href="<?php echo home_url(); ?>/work">働きたい<br class="sp-br"/>外国人の方</a>
                        </div>
                        <div class="contact">
                            <a class="contact-btn" href="<?php echo home_url(); ?>/contact/">お問合せ</a>
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