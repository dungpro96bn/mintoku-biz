<?php
/**
 * Template Name: serviceMaetravr
 * Template Post Type: page
 **/
?>
<?php get_header();?>
<style>
	.c-wrapper {
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
		max-width: 1065px;
		margin: 0 auto;
		padding-right: 1rem;
		padding-left: 1rem;
		width: 100%;
		margin-bottom:30px
	}
</style>
<div id="maetra" class ="edpoke022">
    <div id="breadcrumb" class="breadcrumb edpokebre">
        <ol>
            <li>
                <a href="<?php echo home_url(); ?>">トップページ</a>&nbsp;&nbsp;<i class="fa-solid fa-chevron-right"></i>
            </li>
            <li>
            <a href="<?php bloginfo('url');?>/service/cloud/maetra/">前トレ動画サポート</a>&nbsp;&nbsp;<i
                        class="fa-solid fa-chevron-right"></i>
            </li>
            <li>前トレ with VR</li>
        </ol>
    </div>
    <div id="breadcrumb-service">
        <ol>
           <li>
              <a href="<?php echo home_url(); ?>"><i class="fa-sharp fa-solid fa-house"></i></a>&nbsp;&nbsp;<i class="fa-solid fa-chevron-right"></i>&nbsp;&nbsp;
            </li>
            <li>
            <a href="<?php bloginfo('url');?>/service/cloud/maetra/">前トレ動画サポート</a>&nbsp;&nbsp;<i
                        class="fa-solid fa-chevron-right"></i>
            </li>
            <li>前トレ with VR</li>
        </ol>
    </div>

    <div class="banner-service edpoke02">
        <div class="inner-banner">
            <div class="top-banner sub">
                <div class="message-banner">
                        <picture class="img-con">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_tittle_sp.svg">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_tittle_pc.svg">
                        <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_tittle_pc.svg" alt="">
                        </picture>
					<div class="box-number-vr">
                       <picture>
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_title_banner_sp.png">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_title_banner_pc.png">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_title_banner_pc.png" alt="">
                        </picture>
                        <p class="text-number">※自社実績による</p>
                    </div>
                    <p class="note-banner">前トレwithVRは<br class="sp-br">株式会社スペースリー様との共同販売事業です</p>
	
                </div>
                <picture class="img-banner">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_bannera_sp.png 2x">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_bannera_pc.png 2x">
                        <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_bannera_pc.png" alt="">
                </picture>
            </div>
            <dl class="box-des sub">
				 <dt class="dt-des">前トレ with VRが<br class="sp-br">事業者の業績UPに貢献</dt>
                <dd class="dd-des">空間データ活用プラットフォーム<br class="sp-br">「前トレ with VR」は、<br>360度VRコンテンツを、誰でも手軽に、<br class="sp-br">簡単に制作、編集ができる<br class="sp-br">クラウドソフトウェアです。
                </dd>


                <dd class="info-contact flex sub">
                <a href="<?php bloginfo('url');?>/#contact" target="_blank" class="title-contact">資料請求もお問い合わせください</a>
                        <div class="middle">
                            <div class="phone-left">
                                <picture">
                                    <source srcset="<?php bloginfo('template_url');?>/images/top_icon_contact.png">
                                    <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_icon_contact.png" alt="">
                                </picture>
                                <span class="text-phone">お問合せフリーダイアル</span>
                            </div>
                            <p class="time">営業時間:10時〜18時（月〜金）</p>
                        </div>
                         <p class="number-phone montserrat">0120-530-451</p>
               </dd>
            </dl>
        </div>
    </div>

    <div class="vr-main">
        <!-- <h3 class="title-page"><span class="es-maetra montserrat">SOLUTION</span><br>
                    Employabilityを見える化し、<br>向上する【LQプログラム】</h3>
 -->
       <section class="vr-solution"> 
            <div class="inner">
                <div class="logo-vr">
                    <picture class="logo-mobi">
                        <source srcset="<?php bloginfo('template_url');?>/images/service02/vr_logo.png">
                        <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_logo.png" alt="">
                    </picture>
                </div>
                <div class="content-solution-02">
                    <dl class="dl-01">
                        <dt class="dt-01 montserrat">SOLUTION</dt>
                        <dd class="dd-01">はじめての方でも<br>30分程度でVRコンテンツが<br>完成します。</dd>
                    </dl>
                    <picture class="img-solution">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_bannera_sp.png 2x">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_bannera_pc.png 2x">
                        <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_bannera_pc.png" alt="">
                   </picture>
                    <div class="box-link">
<!--                         <p class="text-link">
                        空間データ活用プラットフォーム「前トレ with VR」は、<br class="pc-br">
                        360度VRコンテンツを、誰でも手軽に、簡単に制作、<br class="pc-br">
                        編集ができるクラウドソフトウェアです。<br>
                        撮影したパノラマ写真や3D CGデータをクラウドにアップロードするだけで、<br class="pc-br">
                        滑らかに動く高品質のVRコンテンツを自動作成できます。
                        </p> -->
					 <p class="text-link">
					    安全研修 VR「スペースリー」<br class="pc-br">
						は、360° VR コンテンツを、誰で 
						も手軽に、簡単に制作、編集がで	<br class="pc-br">
						きるクラウドソフトウェアです。
						</p>										  
					   <p class="text-link">
					    パノラマ写真・動画を撮影し、<br class="pc-br">
						クラウドにアップロードするだけで、
						滑らかに動く高品質の VR コンテンツを作成できます。														  
						</p>													  
																			  
																			  
																			  
																			  
																			  
                        <div class="box-link-page flex">
<!--                             <a href="" class="link-page slotion">不動産VRの詳細はこちら</a>
                            <a href="" class="link-page slotion">住宅VRの詳細はこちら</a> -->
                        </div>
                    </div>
                </div>

            
            </div>
       </section>

       <section class="info-hottel-vr">
        <div class="inner-hottel">
             <h3 class="title-hottel">こんな方におすすめ</h3>
             <ul class="list-info-vr flex">
                <li class="item-vr-hottel">
                    <p class="title-vr-01">「自社オリジナル」を作成したい</p>
                    <picture class="img-box-br">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_01a_sp.png 2x">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_01a_pc.png 2x">
                        <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_pic_01a_pc.png" alt="">
                   </picture>
                   <p class="title-vr-02">IT 初心者の方でも、オリジナルの VR コンテンツが作成できます。自社で撮影した VR 動画をかんたんに編集ができますし、VR 動画に資料や文言の追加も可能です。さらに、定期的に VR コンテンツを増やしていくことも、もちろん可能です。</p>
                </li>

                <li class="item-vr-hottel">
                    <p class="title-vr-01">「実写型」でリアルにしたい</p>
                    <picture class="img-box-br">
                    <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_02a_sp.png 2x">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_02a_pc.png 2x">
                        <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_pic_02a_pc.png" alt="">
                   </picture>
                   <p class="title-vr-02">スペースリーの安全研修 VR なら、CG ではなく実写型の VR 空間で学習が可能です。VR 上で学習や研修体験をした後に、現場に出ると「VR で体験したまま」とのコメントもいただき、大幅な習熟度 UP に貢献します。</p>
                </li>

                <li class="item-vr-hottel">
                    <p class="title-vr-01">運用を「かんたんに」したい</p>
                    <picture class="img-box-br">
                    <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_03a_sp.png 2x">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_03a_pc.png 2x">
                        <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_pic_03a_pc.png" alt="">
                   </picture>
                   <p class="title-vr-02">はじめての方でも迷わず、かんたんに VR を閲覧・運用できるのが「スペースリー」の特徴です。多くの事業者様は、VR 操作がはじめてですが、補助がなくとも運用できています。アプリにログインをするとかんたんに閲覧できます。</p>
                </li>

                <li class="item-vr-hottel">
                    <p class="title-vr-01">様々なデバイスで閲覧したい</p>
                    <picture class="img-box-br">
                    <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_04a_sp.png 2x">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_04a_pc.png 2x">
                        <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_pic_04a_pc.png" alt="">
                   </picture>
                   <p class="title-vr-02">「スペースリー」なら安価で VR ゴーグルの台数を増やすことが可能です。PC やタブレット・スマホなど、VR ゴーグル以外のデバイスでも閲覧可能です。さらに、閲覧数に上限がないため、社内 HP 掲載することで、多くの社員が閲覧できます。</p>
                </li>

             </ul>
             <h3 class="title-hottel">高品質<br class="sp-br">360°パノラマVRを体験</h3>
             <div class="pic-ex">
<!--                    <picture >
                    <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_05_sp.png 2x">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_05_pc.png 2x">
                        <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_pic_05_pc.png" alt="">
                   </picture> -->
					<div class="c-wrapper">
						<div class="c-inner c-inner--lg c-inner--vertical">
							<div class="pera1-editable" data-pera1-type="embed_html" data-pera1-embed_block_id="8629dc98-f52b-4097-b428-337da709038e"><iframe height="500px" width="100%" style="max-width:100%;" src="https://spacely.co.jp/spacely_sample/kanagatatejun_picture" frameborder="0" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe></div>
						</div>
					</div>																														   
																														   
																														   
                   <p class="note-vr">
                        不動産分野の賃貸管理、賃貸仲介、<br class="sp-br">売買仲介、新築分譲など<br class="pc-br">
                        利用者数7,200の<br class="sp-br">高品質VRを体験してみてください。
                   </p>
					<div class="video-container">
					  <iframe width="560" height="315" src="https://www.youtube.com/embed/lYvjBJnUWvM?si=gvh_MIbsIJTnqBKN" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>							   
												   
												   
												   
             </div>
<!--              <div class="box-link-page-vr flex one">
                <a href="" class="link-page slotion">パノラマVRを体験する</a>
            </div> -->
     
        </div>
       </section>

        <section class="block-widthvr">
         <div class="inner">
             <h3 class="title-hottel black">「前トレ with VR」のVR活用事例</h3>
             <ul class="list-widthvr flex">
               <li class="item-widthvr">
                   <picture class="img-box-widthvr">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_06a_sp.png 2x">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_06a_pc.png 2x">
                        <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_pic_06a_pc.png" alt="">
                   </picture>
                    <p class="title-vr-03">技能実習生の入社前研修の実地</p>
				    <p class="title-vr-05">入社前に研修を行いスキルチェックが行えるため、ミスマッチにもつながる</p>				  
<!-- 			         <p class="title-vr-03">賃貸仲介の売上1.89倍</p>				  
                    <p class="title-vr-04">株式会社エヌアセット</p>
                   <p class="title-vr-05">「前トレ with VR」活用により、管理物件の自社付け率は約40%から約60％に。VR導入前と比べる<br class="pc-br">と、売上は約1.89倍に。</p> -->
                </li>
                <li class="item-widthvr">
                   <picture class="img-box-widthvr">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_07a_sp.png 2x">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_07a_pc.png 2x">
                        <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_pic_07a_pc.png" alt="">
                   </picture>
				   <p class="title-vr-03">特定技能生の安全衛生教育にVRを活用</p>																							   
<!--                     <p class="title-vr-03">1人で月10件の専任媒介獲得</p>
                    <p class="title-vr-04">ViVI不動産株式会社</p> -->
                   <p class="title-vr-05">言葉に頼らない研修なので、多国籍に対して研修対応可能</p>
                </li>
<!--                 <li class="item-widthvr">
                   <picture class="img-box-widthvr">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_08_sp.png 2x">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_08_pc.png 2x">
                        <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_pic_08_pc.png" alt="">
                   </picture>
                    <p class="title-vr-03">資料請求からの来場率2倍</p>
                    <p class="title-vr-04">株式会社エヌアセット</p>
                   <p class="title-vr-05">分譲地住宅を販売しており、資料請求から住宅展示場の来場率は約25%だったが、追客資料にVR掲載すると来場率は2倍の50%に！</p>
                </li> -->


             </ul>

<!--              <div class="box-link-page-vr flex">
                <a href="" class="link-page slotion">すべての事例を見る</a>
            </div> -->
            

         </div>

        </section>


<!--         <section class="block-commum">
            <div class="inner">
                  <h4 class="title-commum">
                    「前トレ with VR」は<br class="sp-br">不動産や住宅分野を中心に<br class="sp-br">7,000以上の利用者実績<br>
                    <span>製造現場や建設現場の安全衛生教育のシーン<br class="sp-br">で問い合わせが増えています。</span>
                  </h4>
                  <ul class="list-commum flex">
                    <li class="item-commum">
                        <picture class="img-box">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_09_sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_09_pc.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_pic_09_pc.png" alt="">
                        </picture>
                        <p class="note-commum">4つの活用方法や成功事例など紹介</p>
                        <a href="" class="link-commum">不動産VRを詳しく見る</a>
                    </li>
                    <li class="item-commum">
                        <picture class="img-box">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_10_sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_10_pc.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_pic_10_pc.png" alt="">
                        </picture>
                        <p class="note-commum">バーチャル展示場や成功事例など紹介</p>
                        <a href="" class="link-commum">住宅VRを詳しく見る</a>
                    </li>
                  </ul>
            </div>
        </section> -->
        

        <section class="vr-point">
            <div class="inner">
            <h3 class="title-page"><span class="es-maetra montserrat">POINT</span><br>
            「前トレ with VR」が<br class="sp-br">選ばれる理由</h3>
            
            <ul class="list-vr-point flex">
                <li class="item-vr-point">
                     <picture class="img-box">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_group_07a_sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_group_07a_pc.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_group_07a_pc.png" alt="">
                      </picture>
                      <dl class="dl-vr-point">
<!--                             <dt class="dt-vr-point">サポート満足度は <span class="number-vr">90</span><span class="number-vr02">%</span></dt>																										 <dd class="dd-vr-point">「前トレ with VR」導入時の支援だけでなく、「反響がUPするVRの撮影方法を知りたい」<br class="pc-br">
                                「VRを活用して売上を伸ばしたい」など、各社のご要望に特化した活用まで、<br class="pc-br">
                                カスタマーサクセスチームがしっかり支援いたします。
                            </dd>-->
						    <dt class="dt-vr-point">サポート満足度は 90%</dt>																					   
							 <dd class="dd-vr-point">																						   																						   サポート満足度 90%！専任の担当者が VR コンテンツの作成方法や他社の活用成功事例などを共有。貴社の研修効果を最大化できるよう徹底サポートいたします。
                  </dd>
																					 
														 
																					 
																					 
																					 
                      </dl>
                </li>

                <li class="item-vr-point">
                     <picture class="img-box">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_group_08a_sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_group_08a_pc.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_group_08a_pc.png" alt="">
                      </picture>
                      <dl class="dl-vr-point">
<!--                             <dt class="dt-vr-point">はじめての方でも<span class="number-vr"><br class="sp-br">30</span>分で作成できる！</dt> 
		                            <dd class="dd-vr-point">「前トレ with VR」の撮影アプリを使えば、ITの知識がない方でもほんの30分程度でVRコンテンツが作れてしまうほどのかんたんさ。<br>
初めての方でも、高品質VRコンテンツが作成できるのも選ばれる理由です。
                            </dd>																								  
																										  -->
							  <dt class="dt-vr-point">はじめての方も 30 分で作成</dt>																		 
														 <dd class="dd-vr-point">																						   																						  IT の知識がない方でもほんの 30 分程度で VR コンテンツが作れてしまうほどのかんたんさ。初めての方でも、高品質の 360° VR コンテンツが作成できるのも選ばれる理由です。
                  </dd>																		 

                      </dl>
<!--                       <a href="" class="link-page a-vr-point">撮影アプリの詳細はこちら</a> -->
                </li>

                <li class="item-vr-point">
                     <picture class="img-box">
                           <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_group_09a_sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_group_09a_pc.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_group_09a_pc.png" alt="">
                      </picture>
                      <dl class="dl-vr-point">
<!--                             <dt class="dt-vr-point">反響・来店・成約率が<span class="number-vr">2</span>倍！</dt>
																						                              <dd class="dd-vr-point">VRサービスが増える中で、「前トレ with VR」の特徴はセールスマーケティングにおける効果UPに強みがあります。VRの視線分析や独自の追客機能によって、ユーザーの興味関心度合をデータとして把握することができるため、見込み度の高い顧客を判別します。
                            </dd>-->
							<dt class="dt-vr-point">安心・安全のセキュリティ対策対策</dt>

												   
										 <dd class="dd-vr-point">																						   																						  パスワード設定機能・IP 制限機能・SSO（シングルサインオン）機能の利用も可能であり、「スペースリー」はセキュリティ対策にも力を入れています。
                  </dd>
                      </dl>
<!--                       <a href="" class="link-page a-vr-point">事例はこちら</a> -->
                </li>


            </ul>


            </div>
       </section>


       <section class="case-study">
           <div class="inner">
              <h3 class="title-page vr-left"><span class="es-maetra montserrat mobi-case">CASE STUDY</span><br>
               360°パノラマVR<br class="sp-br">「前トレ with VR」を活用して<br class="pc-br">反響・来店・成約率2倍などの<br class="pc-br">成功事例も紹介</h3>
                
               <picture class="img-case-vr">
                           <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_11more_sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_11more_pc.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_pic_11more_sp.png" alt="">
              </picture>
<!-- 
              <a href="" class="link-commum all">資料をダウンロードする（無料）</a><br>
              <a href="" class="link-page a-vr-point mobicase">無料トライアルはこちら</a> -->
           </div>
       </section>


 <!--       <section class="block-function">
          <div class="inner">
              <h3 class="title-page vr-white"><span class="es-maetra montserrat">FUNCTION</span><br>
              「前トレ with VR」<br class="sp-br">サービスの独自機能</h3>
               <ul class="list-funciton flex">
                    <li class="item-function">
                        <picture class="img-box">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_12_sp.png 2x">
                                <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_12_pc.png 2x">
                                <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_pic_12_pc.png" alt="">
                        </picture>
                        <dl class="dl-funciton">
                            <dt class="dt-function">バーチャルホームステージング</dt>
                            <dd class="dd-function">VRコンテンツ上にお好きなCG家具や、インテリアを配置できます。AI による自動配置も実現。</dd>
                        </dl>
                        <a href="" class="link-page a-vr-funtion">事例はこちら</a>
                    </li>
                    <li class="item-function">
                        <picture class="img-box">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_13_sp.png 2x">
                                <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_13_pc.png 2x">
                                <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_pic_13_pc.png" alt="">
                        </picture>
                        <dl class="dl-funciton">
                            <dt class="dt-function">AIサイズ推定</dt>
                            <dd class="dd-function">パノラマVR上の操作で床や壁の幅や高さのサイズを測ることができます。現地物件に行き、測定する必要がありません。</dd>
                        </dl>
                        <a href="" class="link-page a-vr-funtion">事例はこちら</a>
                    </li>
                    <li class="item-function">
                        <picture class="img-box">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_14_sp.png 2x">
                                <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_14_pc.png 2x">
                                <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_pic_14_pc.png" alt="">
                        </picture>
                        <dl class="dl-funciton">
                            <dt class="dt-function">追客URL・分析機能</dt>
                            <dd class="dd-function">VRのURLを共有したお客様が、いつ、どの場所を、どのくらい見たかを把握できます。</dd>
                        </dl>
                        <a href="" class="link-page a-vr-funtion">事例はこちら</a>
                    </li>
                    <li class="item-function">
                        <picture class="img-box">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_15_sp.png 2x">
                                <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_15_pc.png 2x">
                                <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_pic_15_pc.png" alt="">
                        </picture>
                        <dl class="dl-funciton">
                            <dt class="dt-function">VRウェブ会議</dt>
                            <dd class="dd-function">VR化した物件を事業者とユーザーの双方向の端末（PCとスマホなど）で同期しながらウェブで接客できます。</dd>
                        </dl>
                        <a href="" class="link-page a-vr-funtion">事例はこちら</a>
                    </li>
                    <li class="item-function">
                        <picture class="img-box">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_16_sp.png 2x">
                                <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_16_pc.png 2x">
                                <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_pic_16_pc.png" alt="">
                        </picture>
                        <dl class="dl-funciton">
                            <dt class="dt-function">AI自動画像補正／<br class="sp-br">自動画像切り出し</dt>
                            <dd class="dd-function">AIがパノラマVR上の明るさ調整・車のナンバーぼかしなどを認識して自動補正します。</dd>
                        </dl>
                        <a href="" class="link-page a-vr-funtion">事例はこちら</a>
                    </li>
                    <li class="item-function">
                        <picture class="img-box">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_17_sp.png 2x">
                                <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_17_pc.png 2x">
                                <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_pic_17_pc.png" alt="">
                        </picture>
                        <dl class="dl-funciton">
                            <dt class="dt-function">VR撮影・制作代行</dt>
                            <dd class="dd-function">前トレ with VRでは撮影代行3,500円から（エリアによって異なる）、CG制作代行45,000円からと圧倒的な低価格を実現。</dd>
                        </dl>
                        <a href="" class="link-page a-vr-funtion">事例はこちら</a>
                    </li>
               </ul>
               <div class="box-link-page-vr flex">
                    <a href="" class="link-page mobifunciton">すべての事例を見る</a>
              </div>

        
          </div>
         </section>-->



<!--          <section class="block-commum">
            <div class="inner">
            <h4 class="title-commum">
                    「前トレ with VR」は<br class="sp-br">不動産や住宅分野を中心に<br class="sp-br">7,000以上の利用者実績<br>
                  </h4>
                  <ul class="list-commum flex">
                    <li class="item-commum">
                        <picture class="img-box">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_09_sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_09_pc.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_pic_09_pc.png" alt="">
                        </picture>
                        <p class="note-commum">4つの活用方法や成功事例など紹介</p>
                        <a href="" class="link-commum">不動産VRを詳しく見る</a>
                    </li>
                    <li class="item-commum">
                        <picture class="img-box">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_10_sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_10_pc.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_pic_10_pc.png" alt="">
                        </picture>
                        <p class="note-commum">バーチャル展示場や成功事例など紹介</p>
                        <a href="" class="link-commum">住宅VRを詳しく見る</a>
                    </li>
                  </ul>
            </div>
        </section> -->

													  
	        <section class="vr-point">
            <div class="inner">
             <h3 class="title-page">
            継続率 99%！研修 VR 導入事例</h3>
            
            <ul class="list-vr-point flex">
                <li class="item-vr-point">
                     <picture class="img-box">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_add_01_sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_add_01_pc.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_add_01_pc.png" alt="">
                      </picture>
                      <dl class="dl-vr-point">
                            <dt class="dt-vr-point">株式会社クボタ</dt>
                            <dd class="dd-vr-point">簡単に制作できてデバイス問わず閲覧できる VR コンテンツに魅力を感じて導入。農業機械の VR 研修コンテンツを国内販売会社 5,000 名へ配信。現場サイドも好評！
                            </dd>
                      </dl>
                </li>
                <li class="item-vr-point">
                     <picture class="img-box">
                     <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_add_02_sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_add_02_pc.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_add_02_pc.png" alt="">
                      </picture>
                      <dl class="dl-vr-point">
                            <dt class="dt-vr-point">株式会社小糸製作所</dt>
                            <dd class="dd-vr-point">自動車のテールランプ検査業務や測定機器の操作方法などの VR コンテンツを活用。技術承継が難しい業務の新人研修で活用し、研修時間が 1/3 に大幅削減！
                            </dd>
                      </dl>
                </li>

                <li class="item-vr-point">
                     <picture class="img-box">
                     <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_add_03_sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_add_03_pc.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_add_03_pc.png" alt="">
                      </picture>
                      <dl class="dl-vr-point">
                            <dt class="dt-vr-point">大同メタル工業株式会社</dt>
                            <dd class="dd-vr-point">自動車向けエンジン軸受世界トップシェアの同社が VR 研修の現場実証を行い、習熟度 43 %アップや研修 33 %効率化を実現！新人の定着率向上にも有効と実感。
                            </dd>
                      </dl>
                </li>

            </ul>
            </div>
       </section>												  
													  
													  
													  


        <section class="step-commum">

            <div class="inner">
                <h3 class="title-page vr"><span class="es-maetra montserrat">STEP</span><br>
                即日から利用できる！<br class="sp-br">撮影・編集・活用までの<br class="sp-br">3ステップ</h3>
                <ul class="list-commum-step flex">
                    <li class="item-commum-step">
                        <p class="text-step-01">STEP<span>1</span></p>
                        <p class="text-step-02">企画・撮影</p>
                        <picture class="img-box">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_group_01a_sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_group_01a_pc.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_group_01a_pc.png" alt="">
                        </picture>
                        <p class="text-step-03">目的に応じたコンテンツ企画とシーンを 360° カメラで撮影。静止画 / 動画を「スペースリー」の管理画面へアップロード。</p>
                    </li>

                    <li class="item-commum-step">
                        <p class="text-step-01">STEP<span>2</span></p>
                        <p class="text-step-02">制作・編集</p>
                        <picture class="img-box">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_group_02a_sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_group_02a_pc.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_group_02a_pc.png" alt="">
                        </picture>
                        <p class="text-step-03">どこでもかんたん研修 VR 編集ソフト「スペースリー」で、研修のタイプ選択。チェックポイント埋め込み。
（制作時間 約 10 分）</p>
                    </li>

                    <li class="item-commum-step">
                        <p class="text-step-01">STEP<span>3</span></p>
                        <p class="text-step-02">管理・運用</p>
                        <picture class="img-box">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_group_03a_sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_group_03a_pc.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_group_03a_pc.png" alt="">
                        </picture>
                        <p class="text-step-03">研修者毎にアカウントを発行し、VR コンテンツを配信。スペースリーの Oculus アプリを活用してインターネットがなくても VR 体験可能！</p>
                    </li>
            
                </ul>

            </div>

        </section>



<!--         <section class="step-commum two">

            <div class="inner">
                <h3 class="title-page vr"><span class="es-maetra montserrat">TRIAL</span><br>
                無料トライアルの<br class="sp-br">始め方</h3>
                <ul class="list-commum-step flex">
                    <li class="item-commum-step">
                        <picture class="img-box">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_group_04_sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_group_04_pc.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_group_04_pc.png" alt="">
                        </picture>
                        <p class="text-step-04">無料トライアルに申し込み</p>
                        <p class="text-step-03 two">会社やお名前、メールアドレスなどの<br class="pc-br">情報入力でかんたんに１分で登録完了。</p>
                    </li>

                    <li class="item-commum-step">
              
                        <picture class="img-box">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_group_05_sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_group_05_pc.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_group_05_pc.png" alt="">
                        </picture>
                        <p class="text-step-04">プロジェクトの作成</p>
                        <p class="text-step-03 two">送られてくるメールに従って<br class="pc-br">プロジェクトを作成。お電話でのサポートも<br class="pc-br">行なっているので安心です。</p>
                    </li>

                    <li class="item-commum-step">
                        <picture class="img-box">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_group_06_sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_group_06_pc.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_group_06_pc.png" alt="">
                        </picture>
                        <p class="text-step-04">様々なデバイスで再生</p>
                        <p class="text-step-03 two">Web コンテンツなので自社サイトに<br class="pc-br">埋め込み公開や店舗でVR接客など<br class="pc-br">様々なシーンで利用できます。</p>
                    </li>
            
                </ul>

                <div class="box-link-page-vr flex">
                    <a href="" class="link-commum">無料トライアルを申し込む</a>
              </div>

            </div>

        </section> -->

 <!--         <section class="case-study">
           <div class="inner"> 
              <h3 class="title-page vr-left"><span class="es-maetra montserrat mobi-case">CASE STUDY</span><br>
               360°パノラマVR<br class="sp-br">「前トレ with VR」を活用して<br class="pc-br">反響・来店・成約率2倍などの<br class="pc-br">成功事例も紹介</h3>
                
               <picture class="img-case-vr">
                           <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_11more_sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_11more_pc.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_pic_11more_sp.png" alt="">
              </picture>

             <a href="" class="link-commum all">資料をダウンロードする（無料）</a><br>
              <a href="" class="link-page a-vr-point mobicase">無料トライアルはこちら</a> 
           </div>
       </section>-->


<!-- 
       <section class="step-commum news">

            <div class="inner">
                <h3 class="title-page vr"><span class="es-maetra montserrat">NEWS</span><br>
                お知らせ</h3>
                <ul class="list-commum-step flex">
                    <li class="item-commum-step last">
                        <picture class="img-box">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_19_sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_19_pc.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_pic_19_pc.png" alt="">
                        </picture>
                        <p class="date-news">2023-11-02</p>
                        <p class="text-step-03">　空間データ活用プラットフォーム「スペースリー」を提供する株式会社スペースリー（本社：東京都渋谷区、代表取締役：森田 博和、以下：当社 ）は、2023年11月2日でサービス開始から7周年を迎えました。 　管理戸数ランキン […]</p>
                        <a href="" class="link-page noboder">詳細はこちら</a>
                    </li>

                    <li class="item-commum-step last">
            
                    <picture class="img-box">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_18_sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_18_pc.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_pic_18_pc.png" alt="">
                        </picture>
                    
                        <p class="date-news">2023-10-12</p>
                        <p class="text-step-03">空間データ活用プラットフォーム「スペースリー」を提供する株式会社スペースリー（本社：東京都渋谷区渋谷3-6-2 第2矢木ビル3F、代表取締役：森田博和、以下「当社」）は、360度パノラマ画像を使用して、1LDK/2LD […]詳細はこちら</p>
                        <a href="" class="link-page noboder">詳細はこちら</a>
                    </li>

                    <li class="item-commum-step last">
                    <picture class="img-box">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_20_sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_20_pc.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_pic_20_pc.png" alt="">
                        </picture>
                        <p class="date-news">2023-09-19</p>
                        <p class="text-step-03">　◎本調査における「DX」は不動産テックサービスなどを活用して業務改善を行うことと定義。 ◆ 不動産業界のDX推進状況調査サマリー ・DXに「取り組んでいる」「取り組む予定」の企業は管理⼾数3,000⼾以上5,000⼾未満 […]</p>
                        <a href="" class="link-page noboder">詳細はこちら</a>
                    </li>

                </ul>

                <div class="box-link-page-vr flex">
                    <a href="" class="link-page newsa">お知らせ一覧</a>
            </div>

            </div>
         </section>


        <section class="block-commum">
            <div class="inner">
            <h4 class="title-commum">
                    「前トレ with VR」は<br class="sp-br">不動産や住宅分野を中心に<br class="sp-br">7,000以上の利用者実績<br>
                 
                  </h4>
                  <ul class="list-commum flex">
                    <li class="item-commum">
                        <picture class="img-box">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_09_sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_09_pc.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_pic_09_pc.png" alt="">
                        </picture>
                        <p class="note-commum">4つの活用方法や成功事例など紹介</p>
                        <a href="" class="link-commum">不動産VRを詳しく見る</a>
                    </li>
                    <li class="item-commum">
                        <picture class="img-box">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_10_sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_10_pc.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_pic_10_pc.png" alt="">
                        </picture>
                        <p class="note-commum">バーチャル展示場や成功事例など紹介</p>
                        <a href="" class="link-commum">住宅VRを詳しく見る</a>
                    </li>
                  </ul>
            </div>
        </section> 



        <section class="block-document">
            <div class="inner">
                <h3 class="title-page all"><span class="es-maetra montserrat">DOCUMENT</span><br>お役立ち資料</h3>
                  <ul class="list-documment flex">
                    <li class="item-documment">
                        <p class="text-doc-01">360度カメラの</p>
                        <p class="text-doc-02">選び方と効果的な撮影方法</p>
                        <p class="text-doc-03">360°カメラの特徴や人気の機種22選<br>
                            さらに、効果的な撮影方法や<br>
                            静止画VRと動画VRの<br>
                            違いなども解説
                        </p>
                        <picture class="img-doc one">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_doc_01_sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_doc_01_pc.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_doc_01_pc.png" alt="">
                        </picture>
                        <div class="box-link-page-vr flex">
                           <a href="" class="link-commum">動画を視聴する（無料）</a>
                        </div>
                      

                    </li>
                    <li class="item-documment">
                        <p class="text-doc-01 two">オンライン内見ガイド</p>
                        <p class="text-doc-03">オンライン内見の<br>
                            メリットやデメリット、<br>
                            実施の流れ、<br>
                            さらに成功事例や<br>
                            失敗例もご紹介
                        </p>
                        <picture class="img-doc two">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_doc_02_sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_doc_02_pc.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_doc_02_pc.png" alt="">
                        </picture>
                        <div class="box-link-page-vr flex">
                        <a href="" class="link-commum">資料をダウンロードする（無料）</a>
                        </div>
                       
                    </li>
                  </ul>
            </div>
        </section>
        
 <!--        <section class="case-study">
           <div class="inner">
              <h3 class="title-page vr-left"><span class="es-maetra montserrat mobi-case">CASE STUDY</span><br>
               360°パノラマVR<br class="sp-br">「前トレ with VR」を活用して<br class="pc-br">反響・来店・成約率2倍などの<br class="pc-br">成功事例も紹介</h3>
                
               <picture class="img-case-vr">
                           <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_11more_sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/service02/vr_pic_11more_pc.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/service02/vr_pic_11more_sp.png" alt="">
              </picture>

              <a href="" class="link-commum all">資料をダウンロードする（無料）</a><br>
              <a href="" class="link-page a-vr-point mobicase">無料トライアルはこちら</a> 
           </div>
       </section> -->


    </div>
</div>

<?php get_template_part('block-service/block-last02'); ?>
<?php get_footer(); ?>




