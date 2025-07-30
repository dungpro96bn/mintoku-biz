<?php
/**
 * Template Name: serviceAssistant
 * Template Post Type: page
 **/
?>
<?php get_header();?>

<div id="assistant">

    <?php get_template_part("template-parts/service-aboutUs"); ?>

    <div class="assistant-feature">
        <div class="inner">
            <div class="heading-feature">
                <h2 class="center">
                    <span class="ttl-ja">特徴</span>
                    <span class="ttl-en">FEATURE</span>
                </h2>
            </div>
            <div class="feature-list">
                <div class="feature-item">
                    <div class="box-number">
                        <p class="t1">Feature</p>
                        <p class="t2">01</p>
                    </div>
                    <h3 class="title">入管提出書類</h3>
                    <h4 class="sub-ttl">各行政提出書類作成への相談も<br class="sp-br"/>受け付けます</h4>
                    <picture class="image">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/assistant_image01_pc.png">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/assistant_image01_pc.png">
                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/assistant_image01_pc.png" alt="">
                    </picture>
                    <div class="info">
                        <p>技能実習や特定技能をはじめ、入管提出書類は複雑かつ多岐にわたります。専門のスタッフや提携の社労士・行政書士による無料相談や、添削（一部有料）などのサポートを用意していますので、お気軽にお問い合わせください。</p>
                    </div>
                    <div class="link-page">
                        <a href="https://camt-gyousei.jp/" target="_blank">詳しく見る
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="19.028" height="17.897" viewBox="0 0 19.028 17.897">
                              <defs>
                                <clipPath id="clip-path">
                                  <rect id="Rectangle_189" data-name="Rectangle 189" width="19.028" height="17.897" fill="#28893e"/>
                                </clipPath>
                              </defs>
                              <g id="Group_457" data-name="Group 457" clip-path="url(#clip-path)">
                                <path id="Path_192" data-name="Path 192" d="M11.478,52.968H2.444A2.446,2.446,0,0,1,0,50.525V41.491a2.446,2.446,0,0,1,2.444-2.444h9.034a2.446,2.446,0,0,1,2.444,2.444v9.034a2.446,2.446,0,0,1-2.444,2.444M2.444,40.88a.612.612,0,0,0-.611.611v9.034a.612.612,0,0,0,.611.611h9.034a.612.612,0,0,0,.611-.611V41.491a.612.612,0,0,0-.611-.611Z" transform="translate(0 -35.071)" fill="#28893e"/>
                                <path id="Path_193" data-name="Path 193" d="M60.282,11.852a.916.916,0,0,1-.613-1.6l9.373-8.422H65.857a.916.916,0,0,1,0-1.833h5.576a.916.916,0,0,1,.612,1.6L60.894,11.617a.913.913,0,0,1-.612.235" transform="translate(-53.321 0.001)" fill="#28893e"/>
                                <path id="Path_194" data-name="Path 194" d="M169.805,6.843a.916.916,0,0,1-.916-.916V.916a.916.916,0,1,1,1.833,0v5.01a.916.916,0,0,1-.916.916" transform="translate(-151.693)" fill="#28893e"/>
                              </g>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="box-number">
                        <p class="t1">Feature</p>
                        <p class="t2">02</p>
                    </div>
                    <h3 class="title">翻訳通訳サポート</h3>
                    <h4 class="sub-ttl">対応言語30ヵ国語以上！ <br class="sp-br"/>通訳派遣もご相談ください</h4>
                    <picture class="image">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/assistant_image02_pc.png">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/assistant_image02_pc.png">
                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/assistant_image02_pc.png" alt="">
                    </picture>
                    <div class="info">
                        <p>外国人採用・受入の際、各種契約書や入社オリエンテーション資料・安全教育資料など、採用者には母国語併記義務があります。この他、業務指示書や作業マニュアルの作成など、外国人とのコミュニケーションをお手伝いします。</p>
                    </div>
                    <div class="link-page">
                        <a href="<?php echo home_url(); ?>/translate/">詳しく見る ＞</a>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="box-number">
                        <p class="t1">Feature</p>
                        <p class="t2">03</p>
                    </div>
                    <h3 class="title">給与計算や保険手続の代行</h3>
                    <h4 class="sub-ttl">企業形態や課題に合わせ<br class="sp-br"/>たペイロールプラン提案</h4>
                    <picture class="image">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/assistant_image03_pc.png">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/assistant_image03_pc.png">
                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/assistant_image03_pc.png" alt="">
                    </picture>
                    <div class="info">
                        <p>Saas型サービスの課題である既存組織への導入の難しさを、きめ細かいカスタマイズによって解決し、企業の形態や要望・課題に応じて、最適プランをご提案。<br/>
                            勤怠管理、保険手続き、年末調整、人事管理、WEB給与明細、賞与支給、住民税特別徴収の他、各種社労士業務もお気軽にご相談ください。</p>
                    </div>
                    <div class="link-page">
                        <a href="https://biz.ca-m.co.jp/payroll" target="_blank">詳しく見る
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="19.028" height="17.897" viewBox="0 0 19.028 17.897">
                              <defs>
                                <clipPath id="clip-path">
                                  <rect id="Rectangle_189" data-name="Rectangle 189" width="19.028" height="17.897" fill="#28893e"/>
                                </clipPath>
                              </defs>
                              <g id="Group_457" data-name="Group 457" clip-path="url(#clip-path)">
                                <path id="Path_192" data-name="Path 192" d="M11.478,52.968H2.444A2.446,2.446,0,0,1,0,50.525V41.491a2.446,2.446,0,0,1,2.444-2.444h9.034a2.446,2.446,0,0,1,2.444,2.444v9.034a2.446,2.446,0,0,1-2.444,2.444M2.444,40.88a.612.612,0,0,0-.611.611v9.034a.612.612,0,0,0,.611.611h9.034a.612.612,0,0,0,.611-.611V41.491a.612.612,0,0,0-.611-.611Z" transform="translate(0 -35.071)" fill="#28893e"/>
                                <path id="Path_193" data-name="Path 193" d="M60.282,11.852a.916.916,0,0,1-.613-1.6l9.373-8.422H65.857a.916.916,0,0,1,0-1.833h5.576a.916.916,0,0,1,.612,1.6L60.894,11.617a.913.913,0,0,1-.612.235" transform="translate(-53.321 0.001)" fill="#28893e"/>
                                <path id="Path_194" data-name="Path 194" d="M169.805,6.843a.916.916,0,0,1-.916-.916V.916a.916.916,0,1,1,1.833,0v5.01a.916.916,0,0,1-.916.916" transform="translate(-151.693)" fill="#28893e"/>
                              </g>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="box-number">
                        <p class="t1">Feature</p>
                        <p class="t2">04</p>
                    </div>
                    <h3 class="title">出入国お手続き代行</h3>
                    <h4 class="sub-ttl">入国前から出国まで、責任と安心</h4>
                    <picture class="image">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/assistant_image04_pc.png">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/assistant_image04_pc.png">
                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/assistant_image04_pc.png" alt="">
                    </picture>
                    <div class="info">
                        <p>海外での出国時斡旋、 国内での空港斡旋までを一貫してサポートし、外国人が初めての出入国であっても、安心・安全に入国していただけるプランをご用意しました。</p>
                    </div>
                    <div class="link-page">
                        <a href="<?php echo home_url(); ?>/service/immigration/">詳しく見る ＞</a>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="box-number">
                        <p class="t1">Feature</p>
                        <p class="t2">05</p>
                    </div>
                    <h3 class="title">専門家無料相談サービス</h3>
                    <h4 class="sub-ttl">プロのアドバイスで、<br class="sp-br"/>外国人採用に安心と信頼を</h4>
                    <picture class="image">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/assistant_image05_pc.png">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/assistant_image05_pc.png">
                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/assistant_image05_pc.png" alt="">
                    </picture>
                    <div class="info">
                        <p>外国人材を受け入れるにはどうしたらいい？などの基礎的な質問から、業務に関するお悩み、法律やルール改正に伴う変更点など、弊社所属の社労士・行政書士が無料でお答えいたします。</p>
                    </div>
                    <div class="link-page">
                        <a href="<?php echo home_url(); ?>/service/consultation/">詳しく見る ＞</a>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="box-number">
                        <p class="t1">Feature</p>
                        <p class="t2">06</p>
                    </div>
                    <h3 class="title">外国人雇用管理<br class="sp-br"/>クラウドサービス</h3>
                    <h4 class="sub-ttl">書類管理、情報共有、ペーパーレス管理を実現</h4>
                    <picture class="image">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/assistant_image06_pc.png">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/assistant_image06_pc.png">
                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/assistant_image06_pc.png" alt="">
                    </picture>
                    <div class="info">
                        <p>技能実習や特定技能にとどまらず、すべてのビザに対応。無制限のストレージ機能とチャート式のスケジュール管理が魅力です！</p>
                    </div>
                    <div class="link-page">
                        <a href="<?php echo home_url(); ?>/service/cloud/camcat/">詳しく見る ＞</a>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="box-number">
                        <p class="t1">Feature</p>
                        <p class="t2">07</p>
                    </div>
                    <h3 class="title">WEB勤怠管理システム</h3>
                    <h4 class="sub-ttl">プロパー・派遣関係なく、<br class="sp-br"/>クラウドでの勤怠管理が可能</h4>
                    <picture class="image">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/assistant_image07_pc.png">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/assistant_image07_pc.png">
                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/assistant_image07_pc.png" alt="">
                    </picture>
                    <div class="info">
                        <p>パソコン、携帯、カードリーダーなど企業様それぞれの環境に合わせてデジタルでの勤怠報告が可能。<br/>
                            日別/月別での勤務状況が確認できる他、超過残業者や勤務実績一覧などの抽出も可能。働き方改革のためのリスクヘッジ、工数削減にも繋がります。</p>
                    </div>
                    <div class="link-page">
                        <a href="https://biz.ca-m.co.jp/hr/t-rex" target="_blank">詳しく見る
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="19.028" height="17.897" viewBox="0 0 19.028 17.897">
                              <defs>
                                <clipPath id="clip-path">
                                  <rect id="Rectangle_189" data-name="Rectangle 189" width="19.028" height="17.897" fill="#28893e"/>
                                </clipPath>
                              </defs>
                              <g id="Group_457" data-name="Group 457" clip-path="url(#clip-path)">
                                <path id="Path_192" data-name="Path 192" d="M11.478,52.968H2.444A2.446,2.446,0,0,1,0,50.525V41.491a2.446,2.446,0,0,1,2.444-2.444h9.034a2.446,2.446,0,0,1,2.444,2.444v9.034a2.446,2.446,0,0,1-2.444,2.444M2.444,40.88a.612.612,0,0,0-.611.611v9.034a.612.612,0,0,0,.611.611h9.034a.612.612,0,0,0,.611-.611V41.491a.612.612,0,0,0-.611-.611Z" transform="translate(0 -35.071)" fill="#28893e"/>
                                <path id="Path_193" data-name="Path 193" d="M60.282,11.852a.916.916,0,0,1-.613-1.6l9.373-8.422H65.857a.916.916,0,0,1,0-1.833h5.576a.916.916,0,0,1,.612,1.6L60.894,11.617a.913.913,0,0,1-.612.235" transform="translate(-53.321 0.001)" fill="#28893e"/>
                                <path id="Path_194" data-name="Path 194" d="M169.805,6.843a.916.916,0,0,1-.916-.916V.916a.916.916,0,1,1,1.833,0v5.01a.916.916,0,0,1-.916.916" transform="translate(-151.693)" fill="#28893e"/>
                              </g>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php get_template_part("template-parts/banner-other"); ?>

    <?php get_template_part("template-parts/line-up"); ?>

    <?php get_template_part("template-parts/contact-bottom"); ?>

</div>

<?php get_footer(); ?>