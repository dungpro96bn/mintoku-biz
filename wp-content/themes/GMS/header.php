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

    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

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

<div id="loading-spinner">
    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIHN0eWxlPSItLWFuaW1hdGlvbi1zdGF0ZTogcnVubmluZzsiPgogICAgICA8c3R5bGU+CiAgICAgICAgOnJvb3QgewogICAgICAgICAgLS1hbmltYXRpb24tc3RhdGU6IHBhdXNlZDsKICAgICAgICB9CgogICAgICAgIC8qIHVzZXIgcGlja2VkIGEgdGhlbWUgd2hlcmUgdGhlICJyZWd1bGFyIiBzY2hlbWUgaXMgZGFyayAqLwogICAgICAgIC8qIHVzZXIgcGlja2VkIGEgdGhlbWUgYSBsaWdodCBzY2hlbWUgYW5kIGFsc28gZW5hYmxlZCBhIGRhcmsgc2NoZW1lICovCgogICAgICAgIC8qIGRlYWwgd2l0aCBsaWdodCBzY2hlbWUgZmlyc3QgKi8KICAgICAgICBAbWVkaWEgKHByZWZlcnMtY29sb3Itc2NoZW1lOiBsaWdodCkgewogICAgICAgICAgOnJvb3QgewogICAgICAgICAgICAtLXByaW1hcnk6ICMyMjIyMjI7CiAgICAgICAgICAgIC0tc2Vjb25kYXJ5OiAjZmZmZmZmOwogICAgICAgICAgICAtLXRlcnRpYXJ5OiAjMDA4OGNjOwogICAgICAgICAgICAtLXF1YXRlcm5hcnk6ICNlNDU3MzU7CiAgICAgICAgICAgIC0taGlnaGxpZ2h0OiAjZmZmZjRkOwogICAgICAgICAgICAtLXN1Y2Nlc3M6ICMwMDk5MDA7CiAgICAgICAgICB9CiAgICAgICAgfQoKICAgICAgICAvKiB0aGVuIGRlYWwgd2l0aCBkYXJrIHNjaGVtZSAqLwogICAgICAgIEBtZWRpYSAocHJlZmVycy1jb2xvci1zY2hlbWU6IGRhcmspIHsKICAgICAgICAgIDpyb290IHsKICAgICAgICAgICAgLS1wcmltYXJ5OiAjMjIyMjIyOwogICAgICAgICAgICAtLXNlY29uZGFyeTogI2ZmZmZmZjsKICAgICAgICAgICAgLS10ZXJ0aWFyeTogIzAwODhjYzsKICAgICAgICAgICAgLS1xdWF0ZXJuYXJ5OiAjZTQ1NzM1OwogICAgICAgICAgICAtLWhpZ2hsaWdodDogI2ZmZmY0ZDsKICAgICAgICAgICAgLS1zdWNjZXNzOiAjMDA5OTAwOwogICAgICAgICAgfQogICAgICAgIH0KCiAgICAgICAgLyogdGhlc2Ugc3R5bGVzIG5lZWQgdG8gbGl2ZSBoZXJlIGJlY2F1c2UgdGhlIFNWRyBoYXMgYSBkaWZmZXJlbnQgc2NvcGUgKi8KICAgICAgICAuZG90cyB7CiAgICAgICAgICBhbmltYXRpb24tbmFtZTogbG9hZGVyOwogICAgICAgICAgYW5pbWF0aW9uLXRpbWluZy1mdW5jdGlvbjogZWFzZS1pbi1vdXQ7CiAgICAgICAgICBhbmltYXRpb24tZHVyYXRpb246IDNzOwogICAgICAgICAgYW5pbWF0aW9uLWl0ZXJhdGlvbi1jb3VudDogaW5maW5pdGU7CiAgICAgICAgICBhbmltYXRpb24tcGxheS1zdGF0ZTogdmFyKC0tYW5pbWF0aW9uLXN0YXRlKTsKICAgICAgICAgIHN0cm9rZTogI2ZmZjsKICAgICAgICAgIHN0cm9rZS13aWR0aDogMC41cHg7CiAgICAgICAgICB0cmFuc2Zvcm0tb3JpZ2luOiBjZW50ZXI7CiAgICAgICAgICBvcGFjaXR5OiAwOwogICAgICAgICAgcjogbWF4KDF2dywgMTFweCk7CiAgICAgICAgICBjeTogNTAlOwogICAgICAgICAgZmlsdGVyOiBzYXR1cmF0ZSgyKSBvcGFjaXR5KDAuODUpOwogICAgICAgIH0KCiAgICAgICAgLmRvdHM6Zmlyc3QtY2hpbGQgewogICAgICAgICAgZmlsbDogdmFyKC0tcXVhdGVybmFyeSk7CiAgICAgICAgfQoKICAgICAgICAuZG90czpudGgtY2hpbGQoMikgewogICAgICAgICAgZmlsbDogdmFyKC0tcXVhdGVybmFyeSk7CiAgICAgICAgICBhbmltYXRpb24tZGVsYXk6IDAuMTVzOwogICAgICAgIH0KCiAgICAgICAgLmRvdHM6bnRoLWNoaWxkKDMpIHsKICAgICAgICAgIGZpbGw6IHZhcigtLWhpZ2hsaWdodCk7CiAgICAgICAgICBhbmltYXRpb24tZGVsYXk6IDAuM3M7CiAgICAgICAgfQoKICAgICAgICAuZG90czpudGgtY2hpbGQoNCkgewogICAgICAgICAgZmlsbDogdmFyKC0tdGVydGlhcnkpOwogICAgICAgICAgYW5pbWF0aW9uLWRlbGF5OiAwLjQ1czsKICAgICAgICB9CgogICAgICAgIC5kb3RzOm50aC1jaGlsZCg1KSB7CiAgICAgICAgICBmaWxsOiB2YXIoLS10ZXJ0aWFyeSk7CiAgICAgICAgICBhbmltYXRpb24tZGVsYXk6IDAuNnM7CiAgICAgICAgfQoKICAgICAgICBAa2V5ZnJhbWVzIGxvYWRlciB7CiAgICAgICAgICAwJSB7CiAgICAgICAgICAgIG9wYWNpdHk6IDA7CiAgICAgICAgICAgIHRyYW5zZm9ybTogc2NhbGUoMSk7CiAgICAgICAgICB9CiAgICAgICAgICA0NSUgewogICAgICAgICAgICBvcGFjaXR5OiAxOwogICAgICAgICAgICB0cmFuc2Zvcm06IHNjYWxlKDAuNyk7CiAgICAgICAgICB9CiAgICAgICAgICA2NSUgewogICAgICAgICAgICBvcGFjaXR5OiAxOwogICAgICAgICAgICB0cmFuc2Zvcm06IHNjYWxlKDAuNyk7CiAgICAgICAgICB9CiAgICAgICAgICAxMDAlIHsKICAgICAgICAgICAgb3BhY2l0eTogMDsKICAgICAgICAgICAgdHJhbnNmb3JtOiBzY2FsZSgxKTsKICAgICAgICAgIH0KICAgICAgICB9CiAgICAgIDwvc3R5bGU+CgogICAgICA8ZyBjbGFzcz0iY29udGFpbmVyIj4KICAgICAgICA8Y2lyY2xlIGNsYXNzPSJkb3RzIiBjeD0iMzB2dyIvPgogICAgICAgIDxjaXJjbGUgY2xhc3M9ImRvdHMiIGN4PSI0MHZ3Ii8+CiAgICAgICAgPGNpcmNsZSBjbGFzcz0iZG90cyIgY3g9IjUwdnciLz4KICAgICAgICA8Y2lyY2xlIGNsYXNzPSJkb3RzIiBjeD0iNjB2dyIvPgogICAgICAgIDxjaXJjbGUgY2xhc3M9ImRvdHMiIGN4PSI3MHZ3Ii8+CiAgICAgIDwvZz4KICAgIDwvc3ZnPg==" alt="">
</div>

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
                            <a class="download-btn" href="#">資料ダウンロード</a>
                        </div>
                        <div class="contact">
                            <a class="contact-btn" href="#">お問い合わせ</a>
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