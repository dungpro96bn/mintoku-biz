<!DOCTYPE html>
<?php
    if(is_page('confirm_download')) {
        if (isset($_COOKIE['ids'])) {
            unset($_COOKIE['ids']);
            setcookie('ids', '', 1); // empty value and old timestamp
         }
    }
?>
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
    <link rel="icon" type="image/gif" href="<?php bloginfo('template_url');?>/images/common/favicon.ico">
    <link rel="apple-touch-icon" href="<?php bloginfo('template_url');?>/images/common/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url');?>/images/common/favicon.ico">
    <link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?ver=<?php echo rand(); ?>">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/all.min.css">
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/lity.min.css">
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/jquery.bxslider.min.css">
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/seminar.css">
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/service.css">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="outer">
    <header id="header-simple">
        <p class="header-logo">
            <a href="<?php bloginfo('url');?>">
                <picture>
                    <source id="changeMe01" srcset="<?php bloginfo('template_url');?>/images/common/Img_logo_download.svg">
                    <img class="sizes" id="changeMe" src="<?php bloginfo('template_url');?>/images/common/Img_logo_download.svg" alt="<?php bloginfo( 'name' ); ?>">
                </picture>
            </a>
        </p><!-- .header-logo -->
    </header><!-- #header-menu -->
    <main role="main">