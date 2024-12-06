<!DOCTYPE html>
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
        wp_title( '|', true, '' );       
        bloginfo( 'name' );        
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description";        
        if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Page %s', '' ), max( $paged, $page ) );
        ?>
    </title>
    <?php } ?>
<!--     <link rel="icon" type="image/gif" href="<?php bloginfo('template_url');?>/images/common/favicon.ico">
    <link rel="apple-touch-icon" href="<?php bloginfo('template_url');?>/images/common/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url');?>/images/common/favicon.ico">
    <link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?ver=<?php echo rand(); ?>">  
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">      
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/slick.min.css"> -->
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/lp.css"> 
<!-- 	<script type="text/javascript">
			window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
			ga('create', "UA-65685899-10", 'auto');
			ga('send', 'pageview');
		</script> -->
  
</head>

<body <?php body_class(); ?>>
    <div class="outer">
        
        <header id="header-menu" class="header-menu lp">
            <div class="header-nav">
                <div class="inner-header">
                <div class="bg-nav">
                        <p class="header-logo">
                            <a href="<?php bloginfo('url');?>">
								<picture>
									<source srcset="/wp/wp-content/uploads/2023/03/lp_logo_header.png 2x">
									<img class="sizes" src="/wp/wp-content/uploads/2023/03/lp_logo_header.png" alt="">
                                </picture>
                            </a>
                        </p><!-- .header-logo -->
                        <div class="header-megamenu">

                        </div>
                    </div>
					<div class="contact-lp-link destop two" style="
						width: 390px;
						font-size: 14px;
						background: #fc6e02;
					">
											<a href="https://gms.ca-m.co.jp/report_download/"  style="
						padding: 15px 0px 15px 10px;
					">外国人採用に関する<br>資料ダウンロード</a>
					</div>
                    <div class="contact-lp-link destop">
                        <a href="#lp-contact" class="scroll">お問い合わせ</a>
                    </div>
                </div>

                <div class="btn-openMenu">
                    <div class="toggle-btn">
                        <span></span>
                    </div>
                </div>
            </div><!-- .header-nav -->
        </header><!-- #header-menu -->
        
        <main role="main">