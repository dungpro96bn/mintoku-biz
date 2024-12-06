<?php
/**
 * Template Name:camcat
 * Template Post Type: page
 **/
?>


<?php get_header();?>



        <!-- ///newpoit -->
        <style>
        #cloud .cloud-main .item-function .dd-item {
            font-size: 16px;
            line-height: 30px;
            width: calc(100% - 280px);
            padding-left: 20px;
        }

        #cloud .cloud-main .item-function {
            margin-bottom: 30px;
            width: calc(100%/3);
            display: flex;
            flex-direction: column;
        }
        #cloud .cloud-main .list-function {
            display: flex;
            flex-wrap: wrap;
            padding: 0px 0px 0px 47px;
        }
        #cloud .cloud-main .item-function .right {
            width: 100%;
            padding-left: 50px;
            position: relative;
        }
        #cloud .cloud-main .item-function .title-item::after {
            display: none;
        }
        #cloud .cloud-main .item-function .right::after {
            height: calc(100% - 28px);
            left: 25px;
            top: -49px;
        }
        #cloud .cloud-main .item-function .left {
            margin-bottom: 40px;
        }
        #cloud .cloud-main .item-function .dl-item {
            margin-bottom: 50px;
        }
        #cloud .cloud-main .list-ponit {
            margin-bottom: 80px;
        }
        #cloud .item-service .box-img {
            display: block;
            margin-bottom: 37px
        }
        #cloud .cloud-main .list-ponit .item-ponit {
            width: calc(50% - 20px);
            background: white;
            border-radius: 5px;
            position: relative;
            padding: 60px 0px 45px;
            text-align: center;
        }
        #cloud .cloud-main .list-ponit .item-ponit .title-ponit {
            background: #0B54F7;
            color: white;
            font-size: 24px;
            text-align: center;
            border-radius: 30px;
            width: 162px;
            height: 44px;
            line-height: 44px;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            top: -10px;
        }
        #cloud .cloud-main .list-ponit .dt-ponit {
            font-size: 30px;
            line-height: 45px;
            font-weight: 600;
            min-height: 90px;
            margin-bottom: 25px;
            color: #0B54F7;
        }
        #cloud .cloud-main .list-ponit .dt-ponit.two {
            padding-top: 20px;
        }
        #cloud .cloud-main .list-ponit .dd-ponit {
            font-size: 16px;
            line-height: 30px;

        }
  

        #cloud .cloud-main .title-cam.two {
            display: flex;
            font-size: 40px;
            margin-bottom: 100px;
            padding: 0px;
            background: #FFF8E8;
        }

        #cloud .cloud-main .title-cam.two p {
            width: 90%;
        }
        #cloud .cloud-main .title-cam.two .logo-ponit {
            width: 45%;
            text-align: left;
           padding-left: 15px;
        }
        #cloud .cloud-main .title-cam.two img {
            height: 49px;
             vertical-align: text-top;
        }
        #cloud .cloud-main .title-cam.two  .logo-ponit {
            width: 45%;
        }
        #cloud .cloud-main .title-cam {
            font-weight: 500;
            padding: 0px 50px;
        }
        #cloud .cloud-main .box-title::after {
                height: 6px;
                background: #0B54F7;
                top: 35px;
                width: 100%;
        }
			#cloud .cloud-main .box-title.one::after {
				 top: 55px;
			}
        #cloud  .title-block-ponit {
            text-align: center;
            margin-bottom: 45px;
            font-size: 20px;
            line-height: 40px;
        }
        #cloud  .item-service {
            width: calc(100%/3 - 10px);
            background: white;
            color: white;
            text-align: center;
            border-radius: 10px;
            margin-bottom: 47px;
            padding: 30px 0px 40px;
         }
         #cloud  .text-p {
            font-size: 20px;
            color: black;
            font-weight: 600;
         }
         #cloud  .list-new {
            justify-content: center;
            max-width: 630px;
            margin: auto;
         
            
         }
         #cloud .list-new .item-new:nth-child(5) {
              margin-left: 0px
         }
         #cloud .list-new .item-new:nth-child(1) {
              margin-left: 0px
         }
         #cloud .block-list {
            margin-bottom:115px
         }
         #cloud .cloud-main .img-cam {
            margin-bottom: 92px;
         }
         #cloud .cloud-main .cam-cat {
            padding: 199px 0px 145px;
        }
         #cloud .cloud-main .box-title {
            margin-bottom: 20px;
        }
        #cloud .box-new {
            max-width: 1100px;
            margin: auto;
            position: relative;
            height: 690px;
        }

        #cloud .box-new .box-text {
            position: absolute;
            top:49%;
            left: 50%;
           transform: translate(-50%, -50%);
           width: 100%;
        }

        #cloud  .list-service {
            margin-bottom: 0px;
        }
        #cloud .title-block-ponit.two {
            font-size:40px;
          
        }
        #cloud .cloud-main .title-cam.one {
            display: block;
        }
        #cloud .box-add {
            background: #FFF8E8;
            padding: 100px 0px 0px
        }
        #cloud .title-add {
            background: #FD8D02;
            color: white;
            font-size:32px;
            text-align: center;
            border-radius: 30px;
            width: 620px;
            margin:auto;
            height: 56px;
            line-height: 50px;
            position: relative;
            margin-bottom: 40px;
        }
        #cloud .sp_br {
            display:none
        }
        #cloud .add-samll {font-weight: 400;
            padding-right: 75px;
        }

        #cloud .img-pc {
            padding: 50px 0px 50px
        }
        #cloud .img-pc .title-pc {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 30px;
            position: relative;
            padding-left:25px;
        }
        #cloud .img-pc .title-pc:after {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            background: #0A52F3;
            left: 0px;
            top: 9px;
            border-radius: 50%;
        }

        @media (max-width: 768px) {
            #cloud .title-add {
                font-size:18px;
                width: 320px;
                margin-bottom: 20px;
            }

		    #cloud .sp_br {
				display:block
			}
            #cloud .box-new .box-text {
                top: 37%;
            }
            #cloud .tile-new {
                font-size: 12px;
                margin-bottom: 13px;
            }
            #cloud .box-new {
                max-width: 335px;
                height: 280px;
            }
             #cloud .item-new {
                font-size: 7px;
                text-align: center;
                border-radius: 20px;
                line-height: 20px;
                margin-left: 4px;
                margin-bottom: 7px;
                padding: 0px 10px;
            }
            #cloud .list-new {
                justify-content: center;
                width: 235px;
                margin: auto;
            }
            #cloud .cloud-main .cam-cat {
                padding: 45px 0px 145px;
            }
            #cloud .cloud-main .title-cam {
                padding: 0px
            }
            #cloud .block-list {
                margin-bottom: 40px;
            }
            #cloud .cloud-main .img-cam {
                margin-bottom: 40px;
            }
            #cloud .title-block-ponit {
                text-align: center;
                margin-bottom: 45px;
                font-size: 16px;
                line-height: 30px;
            }
            #cloud .title-block-ponit.two {
                font-size: 30px;
            }
            #cloud .cloud-main .item-function, #cloud .cloud-main .title-cam.two p, #cloud .cloud-main .title-cam.two .logo-ponit  {
               width: 100%
            }
            #cloud .cloud-main .item-function {
                margin-bottom: 10px;
            }
            #cloud .cloud-main .title-cam.two {
                display: flex;
                flex-direction: column;
                margin-bottom: 50px;
            }
            #cloud .cloud-main .title-cam.two img {
                height: 49px;
                vertical-align: bottom;
            }
            #cloud  .item-service {
                width: calc(50% - 5px);
            }
            #cloud .cloud-main .list-ponit .item-ponit .title-ponit {
                    font-size: 20px;
                    width: 162px;
                    height: 40px;
                    line-height: 39px;
            }
            #cloud .cloud-main .list-ponit {
                margin-bottom: 10px;
            }
            #cloud .list-service {
                margin-bottom: 0px;
            }
            #cloud .cloud-main .title-cam.two {
                font-size: 22px;
            }
            #cloud .cloud-main .list-ponit .dt-ponit {
                font-size: 18px;
                line-height: 30px;
                font-weight: 600;
                min-height: auto;
                margin-bottom: 10px;
                color: #0B54F7;
            }
            #cloud .cloud-main .list-ponit .item-ponit {
                width: 100%;
                padding: 60px 15px 45px;
                margin-bottom: 40px;
            }
            #cloud .item-service .box-img img {
                width: 80px;
            }
            #cloud .cloud-main .list-function {
                padding: 0px
            }
            #cloud .cloud-main .item-function .left {
                margin-bottom: 10px;
            }
            #cloud .cloud-main .item-function .dl-item {
                margin-bottom: 0px;
            }
            #cloud .cloud-main .item-function .right {
                    padding-left: 0px;
            }
			#cloud .price-block .list-item .item-price .note-price {
				font-size: 16px;
			}
			#cloud .price-block .list-item .item-price .text-samll {
				font-size: 22px;
			}
			#cloud .price-block .list-item .item-price .dd-price {
				font-size: 60px;
				margin-bottom: 30px;
			}
			#cloud .add-samll {
				padding-right: 0px;
			}
        }
			
			
		    .link-page {
				display: inline-block;
				position: relative;
				color: white;
				font-size: 16px;
				font-weight: 400;
                 padding: 0px 50px 0px 50px;
		     border: none; 
				border-radius: 30px;
				background: #FF8D00;
			   height: 46px;
               line-height: 46px;
			}
			 .link-page:hover {
/* 				background: #FF8D07;
				color: white; */
				opacity: 0.7;
				background: #FF8D00;
			}
			.link-app {
				display: flex;
				justify-content: center;
				margin: 60px 0px 0px;
			}
	
			.link-page::after {
				display:none !important
			}
			.price-block  .link-page {
				display: inline-block;
				color: white;
				font-size: 32px;
				font-weight: 400;
				padding: 0px 90px 0px 90px;
				border: none;
				height: 55px;
				line-height: 55px;
			}
			  @media (max-width: 768px) {
				.price-block  .link-page {
					font-size: 20px;
				  }
			}
       </style>




<div id="cloud">
    <div id="breadcrumb" class="breadcrumb">
        <ol>
            <li>
                <a href="<?php echo home_url(); ?>">トップページ</a>&nbsp;&nbsp;<i class="fa-solid fa-chevron-right"></i>
            </li>
            <li>
            <a href="<?php bloginfo('url');?>/service/cloud/">クラウドサービス</a>&nbsp;&nbsp;<i class="fa-solid fa-chevron-right"></i>
            </li>
            <li>
                <span>CAMCAT外国人雇用管理サービス</span>
            </li>
        </ol>
    </div>

    <div class="banner-service">
        <div class="inner-banner">
            <div class="top-banner">
                <div class="message-banner">
                    <span class="montserrat">FOREIGN HR MANAGMENT SERVICE</span>
                    <h1 style="margin-top:-20px;"><span class="small-banner">クラウドサービス</span><br>CAMCAT外国人<br>雇用管理サービス</h1>
					<div class ="link-app-top">
						<a href="https://gms.ca-m.co.jp/service/cloud/camcat/apply/" class="link-page app" target="_self">お申し込み</a>
					</div>
                </div>
                <picture class="img-banner">
                    <source media="(max-width: 767px)"
                        srcset="<?php bloginfo('template_url');?>/images/top_banner_sld_02_sp.png 2x">
                    <source media="(min-width: 768px)"
                        srcset="<?php bloginfo('template_url');?>/images/top_banner_sld_02_pc.png 2x">
                    <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_banner_sld_02_pc.png" alt="">
                </picture>
            </div>
            <dl class="box-des">
                <dt class="dt-des">業務効率化に<br class="sp-br">最適なシステムを</dt>
                <dd class="dd-des">
                    雇用する外国人の在留資格に応じた<br class="sp-br">必要書類・データを共有するとともに、<br>各書類の期限管理を行い、管理業務の効率化<br
                        class="sp-br">のみならず、コンプライアンス強化を実現。<br>受入企業様と管理・支援側をリアルタイムに<br class="sp-br">つなぐことで、これまで以上の<br
                        class="sp-br">業務効率化を実現します。      
                </dd>
            </dl>
        </div>
    </div>
    <div class="cloud-main">
        <section class="cam-cat" id="p1">
            <div class="inner">
             <!-- ///newpoit -->
               <div class="box-title js-fadein">
                    <h3 class="title-cam one">
                        <picture class="box-img destop">
                            <source srcset="<?php bloginfo('template_url');?>/images/service/cloud_icon_04.svg">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/service/cloud_icon_04.svg"
                                alt="">
                        </picture><br>
                        <p class="text-h3">オールイン<br class="sp_br">ワンシステム</p>
                        
                    </h3>
                </div>
                

                <div class="block-list">
                    <h3 class="title-block-ponit">外国人雇用における多くの登場人物を<br>ひとつのプラットフォームでつなげる<br class="sp_br">オールインワンシステム</h3>
                    <div class="box-new">

    
                        <picture class="box-img">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/camcat_sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/camcat_pc.png 2x">
                                <img class="sizes" src="<?php bloginfo('template_url');?>/images/camcat_pc.png" alt="">
                        </picture>


                    </div>
                </div>
                <div class="box-title js-fadein">
                    <h3 class="title-cam">
                        <picture class="box-img destop">
                            <source srcset="<?php bloginfo('template_url');?>/images/service/cloud_icon_04.svg">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/service/cloud_icon_04.svg"
                                alt="">
                        </picture>
                        クラウドサービスご説明
                    </h3>
                </div>
                <div class="img-cam js-fadein">
                    <picture class="box-img">
                        <source media="(max-width: 767px)"
                            srcset="<?php bloginfo('template_url');?>/images/service/cloud_bg_camcat_sp.svg">
                        <source media="(min-width: 768px)"
                            srcset="<?php bloginfo('template_url');?>/images/service/cloud_bg_camcat_pc.svg">
                        <img class="sizes" src="<?php bloginfo('template_url');?>/images/service/cloud_bg_camcat_pc.svg"
                            alt="">
                    </picture>
                </div>


               <div class="box-ponit">
                    <h3 class="title-block-ponit two">特徴</h3>
                    <ul class="list-ponit flex">
                        <li class="item-ponit">
                            <p class="title-ponit">Point 1</p>
                            <dl class="dl-ponit">
                                <dt class="dt-ponit">シンプル機能最小<br>アクション最大シェア</dt>
                                <dt class="dd-ponit">オーバースペックにならないように機能をシンプルに制作。<br>誰でも簡単に使えるように設計しました。</dt>
                            </dl>
                        </li>
                        <li class="item-ponit">
                            <p class="title-ponit">Point 2</p>
                            <dl class="dl-ponit">
                                <dt class="dt-ponit two">携帯端末からもアクセス可能に</dt>
                                <dt class="dd-ponit">現場でコトがおきる「あるある」を前提にデスクワークでは<br>できないアクション機能を実装しました。</dt>
                            </dl>
                        </li>
           
                    </ul>
                    <h3 class="title-block-ponit two">機能</h3>

                    <ul class="list-service flex">
                        <li class="item-service">
                            <picture class="box-img">
                                <source srcset="<?php bloginfo('template_url');?>/images/new_icon_01.svg">
                                <img class="sizes" src="<?php bloginfo('template_url');?>/images/images/new_icon_01.svg" alt="">
                            </picture>
                            <p class="text-p">共通管理</p>
                        </li>
                        <li class="item-service">
                            <picture class="box-img">
                                <source srcset="<?php bloginfo('template_url');?>/images/new_icon_02.svg">
                                <img class="sizes" src="<?php bloginfo('template_url');?>/images/images/new_icon_02.svg" alt="">
                            </picture>
                            <p class="text-p">チャット</p>
                        </li>
                        <li class="item-service">
                            <picture class="box-img">
                                <source srcset="<?php bloginfo('template_url');?>/images/new_icon_03.svg">
                                <img class="sizes" src="<?php bloginfo('template_url');?>/images/images/new_icon_03.svg" alt="">
                            </picture>
                            <p class="text-p">各種アプリ</p>
                        </li>
                        <li class="item-service">
                            <picture class="box-img">
                                <source srcset="<?php bloginfo('template_url');?>/images/new_icon_04.svg">
                                <img class="sizes" src="<?php bloginfo('template_url');?>/images/images/new_icon_04.svg" alt="">
                            </picture>
                            <p class="text-p">タスク管理</p>
                        </li>
                        <li class="item-service">
                            <picture class="box-img">
                                <source srcset="<?php bloginfo('template_url');?>/images/new_icon_05.svg">
                                <img class="sizes" src="<?php bloginfo('template_url');?>/images/images/new_icon_05.svg" alt="">
                            </picture>
                            <p class="text-p">ストレージ</p>
                            <li class="item-service">
                            <picture class="box-img">
                                <source srcset="<?php bloginfo('template_url');?>/images/new_icon_06.svg">
                                <img class="sizes" src="<?php bloginfo('template_url');?>/images/images/new_icon_06.svg" alt="">
                            </picture>
                            <p class="text-p">お知らせ</p>
                        </li>

                    </ul>

               </div>
               </div>


               <div class="img-pc">
                    <div class="inner">
                            <h4 class="title-pc">画面イメージ</h4>
                                <picture class="img-box">
                                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/camcat_add_sp.png 2x">
                                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/camcat_add_pc.png 2x">
                                        <img class="sizes" src="<?php bloginfo('template_url');?>/images/camcat_add_pc.png" alt="">
                            </picture>

                    </div>
               </div>


               <div class="box-add">
                 <div class="inner">
                            <h4 class="title-add">さらに、充実なストレージ機能で、</h4>
                       <div class="title-cam two">
                            <p>外国人採用はペーパーレス・<br class="sp-br">情報管理等の</p>
                            <div class="logo-ponit">
                                <picture class="box-img">
                                    <source srcset="<?php bloginfo('template_url');?>/images/cat+_logo.png">
                                    <img class="sizes" src="<?php bloginfo('template_url');?>images/cat+_logo.png"
                                        alt="">
                                </picture>
                                で解決
                            </div>
                        </div>

                        <ul class="list-function js-fadein">
                            <li class="item-function">
                                <div class="left">
                                    <p class="title-item destop">情報管理機能</p>
                                    <div class="toggle-item-btn title-item mobi">情報管理機能
                                        <div class="box-check">
                                            <span class="check"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="right content-toggle">
                                    <dl class="dl-item">
                                        <dt class="dt-item">外国人就労者の情報管理</dt>
                    
                                    </dl>
                                    <dl class="dl-item">
                                        <dt class="dt-item">帳票作成支援機能</dt>
                    
                                    </dl>
                                    <dl class="dl-item">
                                        <dt class="dt-item">勤務管理</dt>
                                    
                                    </dl>
                                </div>
                            </li>
                            <li class="item-function">
                                <div class="left">
                                    <p class="title-item destop">アラート機能</p>
                                    <div class="toggle-item-btn title-item mobi">アラート機能
                                        <div class="box-check">
                                            <span class="check"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="right content-toggle">
                                    <dl class="dl-item">
                                        <dt class="dt-item">期限管理アラート</dt>
                                    
                                    </dl>
                                    <dl class="dl-item">
                                        <dt class="dt-item">残業時間アラート</dt>
                                    
                                    </dl>
                                    <dl class="dl-item">
                                        <dt class="dt-item">最低賃金アラート</dt>
                                    
                                    </dl>
                                    <dl class="dl-item">
                                        <dt class="dt-item">アラートチャート</dt>
                                    
                                    </dl>
                                    <dl class="dl-item">
                                        <dt class="dt-item">アラートメール</dt>
                            
                                    </dl>
                                </div>
                            </li>
                            <li class="item-function ">
                                <div class="left">
                                    <p class="title-item destop">メール機能</p>
                                    <div class="toggle-item-btn title-item mobi">メール機能
                                        <div class="box-check">
                                            <span class="check"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="right content-toggle">
                                    <dl class="dl-item">
                                        <dt class="dt-item">一括メール送信</dt>
                                    
                                    </dl>
                                </div>
                            </li>
                        </ul>
                        </div>
               </div>
               <div class="inner">

           
                <h3 class="title-cam three">無駄の無い、<br class="sp-br">就労者数に合わせた料金設定</h3>
                <div class="price-block">
                    <ul class="list-item flex">

                        <li class="item-price left">
                            <dl class="dl-price">
                                <dt class="dt-price">1アカウントあたり/月額費用</dt>
                                <dd class="dd-price"><span class="montserrat">2,000</span><span class="text-samll">円(税抜)</span></dd>
                                 <dd class="note-price">貴社専用アカウントの発行を致します。<br><p class="add-samll">※アカウント追加は＋2,000円/人</p></dd>
                            </dl>
                        </li>
                        <li class="item-price right">
                            <dl class="dl-price">
                                <dt class="dt-price">1名あたり/月額費用</dt><dd class="dd-price"><span class="montserrat">2,000</span><span class="text-samll">円(税抜)</span></dd><dd class="note-price">※100名以上ご利用の場合は費用のご相談を承ります。</dd> 
                            </dl>
                        </li>
                    </ul>
                    <p class="info-note">
                            ※導入にあたっての注意事項<br>・在籍人数カウント:毎月15日（15日が休日の場合は直前の営業日）午前10時時点の利用実績<br>
                            ・毎月末日までに請求書を発行し、請求書受領日の翌月末日までに指定口座に振り込む方法により支払うものとします。<br>
                        ・この際の振込手数料は御社様のご負担となります。
                    </p>
					<div class ="link-app">
						<a href="https://gms.ca-m.co.jp/service/cloud/camcat/apply/" class="link-page app" target="_self">お申し込み</a>
					</div>
					
					
                </div>
                </div>
                <div class="page-top">
                    <a href="#" class="page-top-anchor">
                        <picture>
                            <img src="<?php bloginfo('template_url');?>/images/common/page-top-anchor.png"
                                alt="">
                        </picture>
                    </a>
                </div>
          
        </section>
    </div>
</div>

<?php get_template_part('block-service/block-last'); ?>
<?php get_footer(); ?>