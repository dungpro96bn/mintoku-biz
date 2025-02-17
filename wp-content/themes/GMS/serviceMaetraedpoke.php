<?php
/**
 * Template Name: serviceMaetraedpoke
 * Template Post Type: page
 **/
?>

<?php
$post = get_post();
$slug = $post->post_name;
?>

<?php get_header();?>

<div id="maetra" class ="edpoke">

    <div class="banner-service">
        <div class="image-content">
            <picture class="image">
                <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/edpoke_mainImg_pc.png">
                <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/edpoke_mainImg_pc.png">
                <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/edpoke_mainImg_pc.png" alt="">
            </picture>
        </div>
        <div class="banner-info">
            <div class="banner-inner">
                <picture class="banner-logo banner-edpoke">
                    <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/edpoke_logo_banner_img.png 2x">
                    <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/edpoke_logo_banner_img.png 2x">
                    <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/edpoke_logo_banner_img.png" alt="">
                </picture>
            </div>
        </div>
    </div>

    <?php get_template_part("template-parts/partners"); ?>

    <?php get_template_part("template-parts/service-aboutUs"); ?>

    <div id="#maetra">
        <div id="serviceCloudVR" class="serviceCloudMaetra">
            <div class="solution">
                <div class="inner">
                    <div class="heading-entry">
                        <h2 class="heading-block">
                            <span class="uppercase">SOLUTION</span>
                        </h2>
                        <p class="sub-ttl edpoke-ttl">Employabilityを見える化し、<br/>向上する【LQプログラム】</p>
                    </div>
                    <div class="edpoke-banner-top">
                        <div class="image-content">
                            <picture class="image">
                                <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/images/service02/epoke_pic_01_pc.png">
                                <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/images/service02/epoke_pic_01_pc.png">
                                <img class="sizes" src="<?php bloginfo('template_directory'); ?>/images/service02/epoke_pic_01_pc.png" alt="">
                            </picture>
                        </div>
                        <div class="banner-info">
                            <p class="text">LQプログラムでは、日常行動として求められることを実践的にトレーニングを行うことで、創成的にEmployability（雇われうる力）を高めていきます。どのような行動を求められているかを明確にし、トレーニング、フィードバックすることにより、就業意欲も生まれ、個人の生産性向上から全体の生産性向上へと繋げます。</p>
                            <p class="note">※LQ（Labor’s Quality）プログラムとは、働く者として必要な能力を理解し、具体的に行動として実践できるかどうか、数量・数値にて結果検証し、さらに継続的に実践していくためのマネジメントプログラムの総称です。</p>
                        </div>
                    </div>

                    <div class="solution-content">
                        <div class="solution-list">
                            <!--                        1-->
                            <div class="solution-item">
                                <div class="image-content edpoke-img">
                                    <picture class="image">
                                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/images/service02/epoke_pic_02_pc.png">
                                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/images/service02/epoke_pic_02_pc.png">
                                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/images/service02/epoke_pic_02_pc.png" alt="">
                                    </picture>
                                </div>
                                <div class="edpoke-info info-content">
                                    <h4 class="title">必要行動項目チェック表</h4>
                                    <p class="text">求められる行動を日常作業レベルで実践できるようになることを目的として、「必要行動項目チェック表」の項目に落とし込みます。定期的な自己チェック、上長評価実施により、トレーニングの効果の定着を図ります。評価結果は、技能実習から特定技能への移行の選抜時の判断や、昇給の判断に活用することができます。 </p>
                                    <p class="note">※サービス利用はオンライン上で行えます。</p>
                                </div>
                            </div>
                            <!--                        2-->
                            <div class="solution-item">
                                <div class="image-content edpoke-img">
                                    <picture class="image">
                                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/images/service02/epoke_pic_03_pc.png">
                                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/images/service02/epoke_pic_03_pc.png">
                                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/images/service02/epoke_pic_03_pc.png" alt="">
                                    </picture>
                                </div>
                                <div class="edpoke-info info-content">
                                    <h4 class="title">LQ検定</h4>
                                    <p class="text">職場において必要とされる基本的な知識を学習するコンテンツです。「仕事の心構え」「マナー」「仕事のつながり（工程）」等の基本を学習することで、「ただ仕事をする」ではなく、働く人としての資質を高め、職場全体の生産性も高めていきます。テキストで学習をするだけではなく、テストで理解度を深めます。 </p>
                                    <p class="note">※サービス利用はオンライン上で行えます。</p>
                                </div>
                            </div>
                            <!--                        3-->
                            <div class="solution-item">
                                <div class="image-content edpoke-img">
                                    <div class="right-video">
                                        <div class="div-play" onclick="playVideo()"></div>
                                        <iframe id="videoFrame" width="100%" height="259" src="https://www.youtube.com/embed/PWmNIpn7FYI?si=9ttj-00G-_afB4hK" title="YouTube video player" frameborder="0" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                                <div class="edpoke-info info-content">
                                    <h4 class="title"> 「愛される社員になる」<br/>動画</h4>
                                    <p class="text">「一緒に仕事したい」「一緒に働いて気持ちが良い」と周囲から思ってもらえる振る舞いを、外国人の方にもわかりやすいように動画で説明しています。 </p>
                                </div>
                            </div>

                            <div class="banner-mid">
                                <div class="banner-inner">
                                    <div class="left-content">
                                        <h4 class="ttl">「読む」「聞く」だけじゃない！<br/>
                                            「書く」「話す」も加えた<br/>
                                            コミュニケーション能力向上<br/>
                                            日本語動画研修</h4>
                                        <p class="text">JLPT（日本語能力試験）やJFTの試験対策だけではなく、職場で必要となるコミュニケーションを習得できる、アウトプットに重きをおいたコンテンツも実装しています。動画は500本以上あり、オンライン上で動画閲覧、テストを実施していただきます。</p>
                                    </div>
                                    <div class="right-content">
                                        <picture class="image">
                                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/images/service02/epoke_pic_04_pc.png">
                                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/images/service02/epoke_pic_04_pc.png">
                                            <img class="sizes" src="<?php bloginfo('template_directory'); ?>/images/service02/epoke_pic_04_pc.png" alt="">
                                        </picture>
                                        <p class="text">【Education Pocket】<br/>
                                            「ポケットに入れて持ち運べるくらい、手軽にできる教育を」をテーマにした企業の外国人材育成を支援する社員教育クラウドサービスです。<br/>
                                            ※多言語化対応 </p>
                                    </div>
                                </div>
                            </div>

                            <!--                        4-->
                            <div class="solution-item">
                                <div class="image-content edpoke-img">
                                    <picture class="image">
                                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/images/service02/epoke_pic_05_pc.png">
                                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/images/service02/epoke_pic_05_pc.png">
                                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/images/service02/epoke_pic_05_pc.png" alt="">
                                    </picture>
                                </div>
                                <div class="edpoke-info info-content">
                                    <h4 class="title">質の高い教育</h4>
                                    <p class="text">一方的な講義ではなく、「魅せる」ことを意識した動画ですので、親しみやすく楽しみながら学習できます。 また、日本語教師として経験豊富な講師陣による授業のため、質の高い教育を提供いたします。 </p>
                                    <p class="note">※サービス利用はオンライン上で行えます。</p>
                                </div>
                            </div>
                            <div class="solution-item">
                                <div class="image-content edpoke-img">
                                    <picture class="image">
                                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/images/service02/epoke_pic_06_pc.png">
                                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/images/service02/epoke_pic_06_pc.png">
                                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/images/service02/epoke_pic_06_pc.png" alt="">
                                    </picture>
                                </div>
                                <div class="edpoke-info info-content">
                                    <h4 class="title">充実した管理者機能 </h4>
                                    <p class="text">個人、グループごとに動画の視聴状況やテスト結果の状況を確認することができます。<br/>
                                        確認の結果、進捗状況がよくない学習者へは、メッセージ機能を<br/>
                                        使って学習を促したり、不明点を確認したりすることができます。<br/>
                                        また、貴社オリジナルの動画やマニュアルをコンテンツとしてアップロードし、学習者へ展開することも可能です。 </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="edpoke-program">
        <div class="inner">
            <div class="heading-entry">
                <h2 class="heading-block center">
                    <span class="uppercase">PROGRAM</span>
                </h2>
                <p class="sub-ttl">プログラム</p>
            </div>
            <div class="program-list">
                <div class="program-item">
                    <h4 class="title">LQプログラム </h4>
                    <p class="text">【Employability（雇用可能力、雇用されうる力）】を向上するプログラムを提供</p>
                    <ul>
                        <li>必要行動項目チェック表</li>
                        <li>LQ検定 : 基礎、安全衛生、品質管理、ビジネスマナー、KYT etc</li>
                        <li>愛される社員になる動画 : 挨拶と声掛け、感謝 etc</li>
                        <li>資質向上テキスト : あいさつをする意味、凡事徹底 etc</li>
                    </ul>
                </div>
                <div class="program-item">
                    <h4 class="title">日本語動画研修  </h4>
                    <p class="text">業務に必要な日本語学習や試験対策等の動画教材を提供</p>
                    <ul>
                        <li>JLPT対策コース : N5、N4、N3 etc</li>
                        <li>JFT対策コース : A1、A2 etc</li>
                        <li>BJC（Basic Japanese for Communication）: ゼロ初級、N5</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="edpoke-process">
        <div class="inner">
            <div class="heading-entry">
                <h2 class="heading-block center">
                    <span class="uppercase">PROCESS</span>
                </h2>
                <p class="sub-ttl">導入の流れ</p>
            </div>
            <div class="process-step">
                <div class="process-item">
                    <div class="box-number">
                        <p class="t1">Step</p>
                        <p class="t2">01</p>
                    </div>
                    <h4 class="title">お問い合わせ</h4>
                    <p class="text">ご質問やご相談など、お問い合わせフォームより、お気軽にお問い合わせください。お見積書をご提出いたします。</p>
                </div>
                <div class="process-item">
                    <div class="box-number">
                        <p class="t1">Step</p>
                        <p class="t2">02</p>
                    </div>
                    <h4 class="title">お申し込み</h4>
                    <p class="text">申込書と名簿をお渡しいたしますので、必要事項記入後、ご提出ください。名簿は対象者のお名前、生年月日、メールアドレスが必要となります。</p>
                </div>
                <div class="process-item">
                    <div class="box-number">
                        <p class="t1">Step</p>
                        <p class="t2">03</p>
                    </div>
                    <h4 class="title">導入</h4>
                    <p class="text">お申し込み後、最短で3営業日後からご利用いただけます。導入に必要な各種マニュアルや管理者アカウントなどもご提供いたします。</p>
                </div>
            </div>
        </div>
        <div class="trusted-program">
            <div class="trusted-program-inner">
                <div class="content">
                    <div class="info">
                        <p class="t1">導入事例</p>
                        <h4 class="title">信頼できるプログラム</h4>
                        <p class="text">様々なお客様から大変高い評価を頂いております。</p>
                        <p class="text">受入準備や日本語教育、お困りごとなどのサポートを行い、引き続き外国人就労者がずっと安心して日本で暮らしていけるようなライフサポート提供して参ります。確認の結果、進捗状況がよくない学習者へは、メッセージ機能を<br/>使って学習を促したり、不明点を確認したりすることができます。また、貴社オリジナルの動画やマニュアルをコンテンツとしてアップロードし、学習者へ展開することも可能です。 </p>
                    </div>
                    <div class="image-content">
                        <picture class="image">
                            <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/trusted_program_pc.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/trusted_program_pc.png 2x" alt="">
                        </picture>
                    </div>
                </div>
                <div class="info-bottom">
                    <div class="image-content">
                        <picture class="image">
                            <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/02_01-100.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/02_01-100.png 2x" alt="">
                        </picture>
                    </div>
                    <div class="info">
                        <p class="text">現在は技能実習生ですが、将来的に特定技能に移行することを検討しています。<br/>
                            特定技能になると作業範囲も広がり、より日本語がわかるようにしておかないと 生産性もあがらないので、今のうちに学習してもらうため、導入しました。<br/>
                            こちらからキャリアプランを伝えること、また日本語能力試験に合格したら、受験料を会社で負担する制度にすることでモチベーションもあがり、積極的に学習してくれています。 </p>
                        <p class="author">福井県：食品製造業 </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pricing">
        <div class="inner">
            <div class="heading-entry">
                <h2 class="heading-block center">
                    <span class="uppercase">PRICING</span>
                </h2>
                <p class="sub-ttl">料金プラン</p>
            </div>
            <div class="pricing-content block-style">
                <div class="pricing-scroll">
                    <ul class="list-style">
                        <li class="item-style">
                            <div class="title-style one">プラン名(税込）</div>
                            <div class="lq-style flex-item">
                                <p class="title-lq">LQプログラム</p>
                                <ul class="list-lq">
                                    <li class="item-lp">必要行動項目チェック表</li>
                                    <li class="item-lp">LQ検定</li>
                                    <li class="item-lp">愛される社員になる動画</li>
                                    <li class="item-lp">資質向上テキスト</li>
                                </ul>
                            </div>
                            <p class="text-style">日本語動画研修</p>
                            <p class="text-style"><strong style="color: #3164AA;">NEW!</strong>JLPT模擬試験</p>
                            <p class="text-style last">日本語能力測定試験実施と学習プラン策定<br>面談（3か月に1回）</p>
                        </li>
                        <li class="item-style">
                            <div class="title-style two">
                                <p class="title-style-item">ベーシック</p>
                                <p class="title-style-item">4,400円</p>
                            </div>
                            <p class="text-style ox">×</p>
                            <p class="text-style ox">〇</p>
                            <p class="text-style ox">〇</p>
                            <p class="text-style ox">〇</p>
                            <p class="text-style ox">〇</p>
                            <p class="text-style ox">×</p>
                            <p class="text-style last ox">×</p>
                        </li>
                        <li class="item-style">
                            <div class="title-style three">
                                <p class="title-style-item">スタンダード</p>
                                <p class="title-style-item">5,500円</p>
                            </div>
                            <p class="text-style ox">〇</p>
                            <p class="text-style ox">〇</p>
                            <p class="text-style ox">〇</p>
                            <p class="text-style ox">〇</p>
                            <p class="text-style ox">〇</p>
                            <p class="text-style ox">〇</p>
                            <p class="text-style last ox">×</p>
                        </li>
                        <li class="item-style">
                            <div class="title-style four">
                                <p class="title-style-item">プレミアム</p>
                                <p class="title-style-item">8,800円</p>
                            </div>
                            <p class="text-style ox">〇</p>
                            <p class="text-style ox">〇</p>
                            <p class="text-style ox">〇</p>
                            <p class="text-style ox">〇</p>
                            <p class="text-style ox">〇</p>
                            <p class="text-style ox">〇</p>
                            <p class="text-style last ox">〇</p>
                        </li>
                    </ul>
                </div>
                <p class="note-style-02">日本語能力測定試験実施と学習プラン策定面談<br>日本語能力測定試験とは、JLPTやJFTでは測れない、実際のコミュニケーションで必要となる４つの能力「よむ」「きく」「かく」「はなす」の能力を測定し、 【できること】【できないこと】を明確にする試験です。能力を測定した結果、最適な学習プランを策定いたします。
                </p>
            </div>
        </div>
    </div>

    <div class="edpoke-qa">
        <div class="inner">
            <div class="qa-content">
                <div class="heading-entry">
                    <h2 class="heading-block center">
                        <span class="uppercase">QUESTIONS</span>
                    </h2>
                    <p class="sub-ttl">よくある質問</p>
                </div>
                <div class="qa-list">
                    <div class="qa-item">
                        <div class="title">
                            <span class="t1">Q1</span>
                            <p class="ttl">サービスの概要を教えてください </p>
                        </div>
                        <div class="qa-answer">
                            <div class="info">
                                <span class="t1">A</span>
                                <p>職場で働く上で必要となる知識や日本語がオンライン上で学べるサービスになります。 コースを選んで動画やテキストを閲覧・学習後、コンテンツ毎の理解度確認テストを実施し理解を深めることができるサービスです。 また管理者向けに管理画面を用意し学習者の進捗等の管理が可能になっております。 </p>
                            </div>
                        </div>
                    </div>
                    <div class="qa-item">
                        <div class="title">
                            <span class="t1">Q2</span>
                            <p class="ttl">LQプログラムとは何でしょうか。</p>
                        </div>
                        <div class="qa-answer">
                            <div class="info">
                                <span class="t1">A</span>
                                <p>LQ（Labor's Quality）プログラムとは、働く者として必要な能力を理解し、具体的に行動として実践できるかどうか、数量・数値にて結果検証し、　さらに継続的に実践していくためのマネジメントプログラムの総称です。</p>
                            </div>
                        </div>
                    </div>
                    <div class="qa-item">
                        <div class="title">
                            <span class="t1">Q3</span>
                            <p class="ttl">LQプログラムの［必要行動項目チェック表］とは何でしょうか。またどのように活用できますか。</p>
                        </div>
                        <div class="qa-answer">
                            <div class="info">
                                <span class="t1">A</span>
                                <p>職場で働く上で必要とされる行動を一覧にし、その行動がとれているかどうかを、外国人の方が自己チェックします。それに加え、職場の上長にもチェックをしていただくことにより、行動の評価をすることができます。こちらは、社員教育はもちろんのこと、技能実習生から特定技能への移行の判断材料や、特定技能外国人の方の昇給・更新の判断に活用することができます。</p>
                            </div>
                        </div>
                    </div>
                    <div class="qa-item">
                        <div class="title">
                            <span class="t1">Q4</span>
                            <p class="ttl">「愛される社員になる」とは何でしょうか。</p>
                        </div>
                        <div class="qa-answer">
                            <div class="info">
                                <span class="t1">A</span>
                                <p>どの職場においても愛される社員になるために必要な考え方や行動をまとめた書籍 「愛される社員になる」から、外国人の方にも必要となる要素をわかりやすく動画にしています。</p>
                            </div>
                        </div>
                    </div>
                    <div class="qa-item">
                        <div class="title">
                            <span class="t1">Q5</span>
                            <p class="ttl">多言語対応はしていますか</p>
                        </div>
                        <div class="qa-answer">
                            <div class="info">
                                <span class="t1">A</span>
                                <p>LQプログラムはベトナム語、英語、インドネシア語、タガログ語、ミャンマー語、タイ語、中国語をご準備しております（一部準備中）。日本語動画研修は、コースにより、ベトナム語、英語、インドネシア語、ミャンマー語があります。日本語動画研修の[BJCコース]は0初級の方でもわかる日本語の教材です。</p>
                            </div>
                        </div>
                    </div>
                    <div class="qa-item">
                        <div class="title">
                            <span class="t1">Q6</span>
                            <p class="ttl">プレミアムプランの［日本語能力測定試験］とはどのように実施するのですか。</p>
                        </div>
                        <div class="qa-answer">
                            <div class="info">
                                <span class="t1">A</span>
                                <p>外国人の方と弊社測定員の1対1で試験を行います。 原則ZOOM等のオンラインで接続させていただき、30分程度試験をさせていただきます。通常の日本語試験では測れない、コミュニケーション力を測ることができます。</p>
                            </div>
                        </div>
                    </div>
                    <div class="qa-item">
                        <div class="title">
                            <span class="t1">Q7</span>
                            <p class="ttl">マイページには何が表示されますか？</p>
                        </div>
                        <div class="qa-answer">
                            <div class="info">
                                <span class="t1">A</span>
                                <p>マイページはその学習者の概要が表示されます。視聴の履歴やテストの履歴、管理者からのお知らせ等もマイページに表示されます。お知らせは管理画面より投稿すると法人内での組織内掲示板として使用することができます。</p>
                            </div>
                        </div>
                    </div>
<!--                    <div class="qa-item">-->
<!--                        <div class="title">-->
<!--                            <span class="t1">Q8</span>-->
<!--                            <p class="ttl">管理画面では何ができますか？</p>-->
<!--                        </div>-->
<!--                        <div class="qa-answer">-->
<!--                            <div class="info">-->
<!--                                <span class="t1">A</span>-->
<!--                                <p>管理画面では主に貴社内の学習者の進捗や学習管理可能となっております。 学習者の進捗確認、学習者の編集、メッセージ機能、掲示板機能など様々な機能があります。 管理画面に毎日ログインしていただき、学習者へメッセージを送ったり、管理をすることでより学習者が集中して学習できるようになります。是非ご活用ください。 コース管理<br/>-->
<!--                                    ┗レッスンの登録を設定します。オンデマンド動画、ライブ配信、オンライン対面式のいずれのレッスン形式であり、動画のアップロード等はこちらから登録を行います。 学習者一覧<br/>-->
<!--                                    ┗ご登録いただいている法人(組織)内の学習者と学習者の学習状況をご覧いただくことができます。 企業管理<br/>-->
<!--                                    ┗法人(組織)全体の情報の確認と法人(組織)内のグループ設定ができます。 お知らせ<br/>-->
<!--                                    ┗法人(組織)内の学習者全体に情報を伝達するための、掲示板のような機能です。 メッセージ<br/>-->
<!--                                    ┗お知らせ機能とは対照的に、法人(組織)内の学習者個人に対して連絡をするための機能です。 学習者ログイン<br/>-->
<!--                                    ┗学習者が使用する通常のサービスのログイン画面に移動します。 ログアウト<br/>-->
<!--                                    ┗ログアウトすることができます。</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                    <div class="qa-item">
                        <div class="title">
                            <span class="t1">Q8</span>
                            <p class="ttl">動画のアップロードはどうしたらいいのでしょうか？</p>
                        </div>
                        <div class="qa-answer">
                            <div class="info">
                                <span class="t1">A</span>
                                <p>スマートフォンで撮影した動画や、 カメラで撮影した動画を管理画面からアップロードすることができます。御社独自の「講座」を作ることができます。カテゴリ選択、コース選択をし、その配下に動画が登録されます。必須項目は必ず入力する必要があります。 アップロードには時間がかかります。 詳細はマニュアルを送付してあるかと思いますので、そちらをご参照ください。</p>
                            </div>
                        </div>
                    </div>
                    <div class="qa-item">
                        <div class="title">
                            <span class="t1">Q9</span>
                            <p class="ttl">初期費用はかかりますか？</p>
                        </div>
                        <div class="qa-answer">
                            <div class="info">
                                <span class="t1">A</span>
                                <p>初期費用はかかりません。また、管理者アカウントを発行いたしますが、こちらも無料です。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php get_template_part("template-parts/banner-other"); ?>

    <?php get_template_part("template-parts/support"); ?>

    <?php get_template_part("template-parts/line-up"); ?>

    <?php get_template_part("template-parts/contact-bottom"); ?>

</div>

<?php get_footer(); ?>