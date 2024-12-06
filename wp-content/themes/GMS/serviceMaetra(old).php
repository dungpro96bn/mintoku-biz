<?php
/**
 * Template Name: maetra
 * Template Post Type: page
 **/
?>
<?php get_header();?>
<div id="maetra">
    <div id="breadcrumb" class="breadcrumb">
        <ol>
            <li>
                <a href="<?php echo home_url(); ?>">トップページ</a>&nbsp;&nbsp;<i class="fa-solid fa-chevron-right"></i>
            </li>
            <li>
                <a href="<?php bloginfo('url');?>/service/cloud/">クラウドサービス</a>&nbsp;&nbsp;<i
                    class="fa-solid fa-chevron-right"></i>
            </li>
            <li>前トレ動画サポート</li>
        </ol>
    </div>
    <div id="breadcrumb-service">
        <ol>
           <li>
              <a href="<?php echo home_url(); ?>"><i class="fa-sharp fa-solid fa-house"></i></a>&nbsp;&nbsp;<i class="fa-solid fa-chevron-right"></i>&nbsp;&nbsp;
            </li>
            <li>
                <a href="<?php bloginfo('url');?>/service/cloud/">クラウドサービス</a>&nbsp;&nbsp;<i
                    class="fa-solid fa-chevron-right"></i>&nbsp;&nbsp;
            </li>
            <li>前トレ動画サポート</li>
        </ol>
    </div>

    <div class="banner-service">
        <div class="inner-banner">
            <div class="top-banner">
                <div class="message-banner">
                    <p class="montserrat">TRAINING VIDEO SERVICE</p>
					    <h1><span class="small-banner">クラウドサービス</span><br>
                        <picture class="img-con">
                            <source srcset="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/service/cloud_icon_03.svg">
                            <img class="sizes" src="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/images/service/cloud_icon_03.svg" alt="">
                        </picture>
					</h1> 
	
                </div>
                <picture class="img-banner">
                    <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service/maetra_banner_sp.png 2x">
                    <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service/maetra_banner_pc.png 2x">
                    <img class="sizes" src="<?php bloginfo('template_url');?>/images/service/maetra_banner_pc.png" alt="">
                </picture>
            </div>
            <dl class="box-des">
				 <dt class="dt-des">【動画とAI翻訳で外国人との<br>コミュニケーションをカンタンに！】</dt>
                <dd class="dd-des">多言語に対応した動画マニュアルが誰でもカンタンに作成でき、都度発生する修正も驚くほどスピーディーに編集できます。外国人とのコミュニケーションが驚くほど改善されます！<br>またベテラン社員のノウハウも若手社員に財産として伝えることができます！
                </dd>
            </dl>
        </div>
    </div>
    <div class="maetra-main">
        <div class="inner">
            <h3 class="title-page">こんな場面でお悩みの方</h3>
            <ul class="flex tab-maetra">
                <li class="tab-people">
                    <a href="#p1" class="scroll">外国人教育に<br>言葉の壁を感じる</a>
                </li>
                <li class="tab-people">
                    <a href="#p2" class="scroll">作業のコツを<br>うまく伝えられない</a>
                </li>
                <li class="tab-people">
                    <a href="#p3" class="scroll">ヒトによってく<br>教えることが違う</a>
                </li>
                <li class="tab-people">
                    <a href="#p4" class="scroll">何度も同じ説明を<br>繰り返している</a>
                </li>
            </ul>
            <div class="box-arrow">
                <div class="arrow">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <section class="block-maetra js-fadein">
                <h3 class="title-page"><span class="es-maetra montserrat">SOLUTION</span><br>
                    現場作業の動画や入社前後の教育動画を<br class="pc-br">いつでもどこでも母国語で説明できるサービス</h3>

                <ul class="list-solution flex">
                    <li class="li-solution">
                        <h4 class="title-slt">現場での説明は<br>トレーニング動画にお任せ</h4>
                        <div class="content-slt flex">
                            <picture class="box-img">
                                <source media="(max-width: 767px)"
                                    srcset="<?php bloginfo('template_url');?>/images/service/maetra_pic_05_sp.png">
                                <source media="(min-width: 768px)"
                                    srcset="<?php bloginfo('template_url');?>/images/service/maetra_pic_05_pc.png">
                                <img class="sizes"
                                    src="<?php bloginfo('template_url');?>/images/service/maetra_pic_05_pc.png" alt="">
                            </picture>
                            <div class="box-text">
                                <p class="text">本来の<br class="pc-br">自分の業務に<br>集中できます。</p>
                                <a href="https://app.videostep.io/manuals/dc736019-07dd-4e7b-95db-ebbe3f8f4735/" target="_blank" class="link-maetra destop">サンプル動画をみる</a>

                            </div>
                        </div>
                        <a href="https://app.videostep.io/manuals/dc736019-07dd-4e7b-95db-ebbe3f8f4735/" class="link-maetra mobi">サンプル動画をみる</a>
                    </li>
                    <li class="li-solution two">
                        <h4 class="title-slt">会社の説明は<br>パソコンで事前学習で</h4>
                        <div class="content-slt flex">
                            <picture class="box-img">
                                <source media="(max-width: 767px)"
                                    srcset="<?php bloginfo('template_url');?>/images/service/maetra_pic_06_sp.png">
                                <source media="(min-width: 768px)"
                                    srcset="<?php bloginfo('template_url');?>/images/service/maetra_pic_06_pc.png">
                                <img class="sizes"
                                    src="<?php bloginfo('template_url');?>/images/service/maetra_pic_06_pc.png" alt="">
                            </picture>
                            <div class="box-text">
                                <p class="text">分からないことは<br class="pc-br">何度でも確認。<br>だから安心。</p>
                                <a href="https://app.videostep.io/manuals/88724ac5-3823-40a6-b1b4-ba1ce1aa0ebb/" target="_blank" class="link-maetra destop">サンプル動画をみる</a>
                            </div>
                        </div>
                        <a href="https://app.videostep.io/manuals/88724ac5-3823-40a6-b1b4-ba1ce1aa0ebb/" class="link-maetra mobi">サンプル動画をみる</a>
                    </li>
                </ul>
                <div class="page-top">
                <a href="#" class="page-top-anchor">
                    <picture>
                        <img src="<?php bloginfo('template_url');?>/images/common/page-top-anchor.png" alt="">
                    </picture>
                </a>
           </div>
            </section>

            <section class="block-maetra js-fadein">
                <h3 class="title-page"><span class="es-maetra montserrat">STRONG POINT</span><br>
                    前トレ動画でできること</h3>

                <ul class="list-ponit flex">
                    <li class="li-ponit">
                        <picture class="box-img">
                            <source media="(max-width: 767px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/maetra_pic_07_sp.png">
                            <source media="(min-width: 768px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/maetra_pic_07_pc.png">
                            <img class="sizes"
                                src="<?php bloginfo('template_url');?>/images/service/maetra_pic_07_pc.png" alt="">
                        </picture>
                        <dl class="dl-ponit">
                            <dt class="dt-ponit">多言語対応で<br class="pc-br">世界各国の方も<br class="sp-br">受け入れOK!</dt>
                            <dd class="dd-ponit">
                                英語/中国語(簡体)/中国語(繁体)/<br>韓国語/ポルトガル語／ベトナム語/<br>インドネシア語/タガログ語／モンゴル語/<br>スペイン語/マレー語/タイ語</dd>
                        </dl>
                        <span class="note-ponit">多言語<br>対応</span>
                    </li>
                    <li class="li-ponit">
                        <picture class="box-img">
                            <source media="(max-width: 767px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/maetra_pic_08_sp.png">
                            <source media="(min-width: 768px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/maetra_pic_08_pc.png">
                            <img class="sizes"
                                src="<?php bloginfo('template_url');?>/images/service/maetra_pic_08_pc.png" alt="">
                        </picture>
                        <dl class="dl-ponit">
                            <dt class="dt-ponit">現場で動画が確認可能！<br>場所を選びません。</dt>
                            <dd class="dd-ponit">動画はQRコードで見れるので、<br>現場で動画確認可能！<br>説明のための会議や、場所を用意する<br>必要はありません。</dd>
                        </dl>
                        <span class="note-ponit">いつでも<br>携帯で</span>
                    </li>
                    <li class="li-ponit">
                        <picture class="box-img">
                            <source media="(max-width: 767px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/maetra_pic_09_sp.png">
                            <source media="(min-width: 768px)"
                                srcset="<?php bloginfo('template_url');?>/images/service/maetra_pic_09_pc.png">
                            <img class="sizes"
                                src="<?php bloginfo('template_url');?>/images/service/maetra_pic_09_pc.png" alt="">
                        </picture>
                        <dl class="dl-ponit">
                            <dt class="dt-ponit">閲覧履歴で進捗確認も可能！<br>何度でも繰り返し学べます。</dt>
                            <dd class="dd-ponit">
                                PC等で使用する場合は閲覧履歴も見れるので<br>それぞれの進捗状況も確認できます！<br>自宅でも閲覧できるので、<br>就業前に学習してもらうことができます。</dd>
                        </dl>
                        <span class="note-ponit">繰り返し<br>何度でも</span>
                    </li>
                </ul>
            </section>

            <section class="block-maetra js-fadein">
                <h3 class="title-page"><span class="es-maetra montserrat">USE SCENES</span><br>
                    ご利用シーン</h3>
                <ul class="list-scenes flex">
                    <li class="li-scenes">入社必要書類</li>
                    <li class="li-scenes">挨拶</li>
                    <li class="li-scenes">会社のルール</li>
                    <li class="li-scenes">身だしなみ</li>
                    <li class="li-scenes">施設案内</li>
                    <li class="li-scenes">就業規則</li>
                    <li class="li-scenes">勤怠</li>
                    <li class="li-scenes">守衛手続き</li>
                    <li class="li-scenes">安全衛生教育</li>
                    <li class="li-scenes">業務説明</li>
                    <li class="li-scenes">工程説明</li>
                </ul>
            </section>

            <section class="block-maetra last js-fadein">
                <h3 class="title-page"><span class="es-maetra montserrat">3STEP EASY ORDER</span><br>
                    依頼は簡単、3ステップで作成します。</h3>
                <ul class="list-step flex">
                    <li class="li-step">
                        <div class="title-mobi">
                            <p class="title-step montserrat">STEP 1</p>
                            <p class="text mobi">現場で撮影</p>
                        </div>

                        <div class="box-boder">
                            <picture class="box-img">
                                <source media="(max-width: 767px)"
                                    srcset="<?php bloginfo('template_url');?>/images/service/maetra_pic_10_sp.png">
                                <source media="(min-width: 768px)"
                                    srcset="<?php bloginfo('template_url');?>/images/service/maetra_pic_10_pc.png">
                                <img class="sizes"
                                    src="<?php bloginfo('template_url');?>/images/service/maetra_pic_10_pc.png" alt="">
                            </picture>
                            <p class="text destop">現場で撮影</p>
                        </div>
                    </li>
                    <li class="li-step">
                        <div class="title-mobi">
                            <p class="title-step montserrat">STEP 2</p>
                            <p class="text mobi">当社に撮影した<br>動画を送信</p>
                        </div>
                        <div class="box-boder">
                            <picture class="box-img">
                                <source media="(max-width: 767px)"
                                    srcset="<?php bloginfo('template_url');?>/images/service/maetra_pic_11_sp.png">
                                <source media="(min-width: 768px)"
                                    srcset="<?php bloginfo('template_url');?>/images/service/maetra_pic_11_pc.png">
                                <img class="sizes"
                                    src="<?php bloginfo('template_url');?>/images/service/maetra_pic_11_pc.png" alt="">
                            </picture>
                            <p class="text destop">当社に撮影した<br>動画を送信</p>
                        </div>
                    </li>
                    <li class="li-step">
                        <div class="title-mobi">
                            <p class="title-step montserrat">STEP 3</p>
                            <p class="text mobi">前トレ動画に<br>してお返し！</p>
                            <span class="note-step mobi">修正依頼は即対応</span>
                        </div>
                        <div class="box-boder">
                            <picture class="box-img">
                                <source media="(max-width: 767px)"
                                    srcset="<?php bloginfo('template_url');?>/images/service/maetra_pic_12_sp.png">
                                <source media="(min-width: 768px)"
                                    srcset="<?php bloginfo('template_url');?>/images/service/maetra_pic_12_pc.png">
                                <img class="sizes"
                                    src="<?php bloginfo('template_url');?>/images/service/maetra_pic_12_pc.png" alt="">
                            </picture>
                            <p class="text destop">前トレ動画に<br>してお返し！</p>
                            <span class="note-step destop">修正依頼は<br>即対応！</span>
                        </div>
                    </li>
                </ul>
                <div class="page-top">
                    <a href="#" class="page-top-anchor">
                        <picture>
                            <img src="<?php bloginfo('template_url');?>/images/common/page-top-anchor.png" alt="">
                        </picture>
                    </a>
              </div>
            </section>
        </div>
        
        <div id="breadcrumb-footer" class="breadcrumb">
            <ol>
                <li>
                    <a href="<?php echo home_url(); ?>">トップページ</a>&nbsp;&nbsp;<i
                        class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                    <a href="<?php bloginfo('url');?>/service/cloud/">クラウドサービス</a>&nbsp;&nbsp;<i
                        class="fa-solid fa-chevron-right"></i>
                </li>
                <li>前トレ動画サポート</li>
            </ol>
        </div>
    </div>
</div>

<?php get_template_part('block-service/block-last'); ?>
<?php get_footer(); ?>