<?php /* Template Name: CAM JIC */ ?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,minimum-scale=0.5">
    <title>LP CAM JIC</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta property="og:title" content="">
    <meta name="format-detection" content="telephone=no">
    <!-- <link rel="stylesheet" media="all" href="./css/style.css"/> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

</head>

<style>
    #header-menu{
        display: none !important;
    }
	footer, header {
      display: none !important;
   }
</style>

<body>

<?php 
	get_header(); ?>


<main id="main_wrap">

    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/fxy3lmk.css">
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/lp-ijc/css/ijc.css"/>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/lp-ijc/js/ijc.js"></script>

    <div id="ijc" class="ijc">
       <div class="banner-main">
            <p class="top-text">昨年10月から始まったインドネシア政府との</p>
            <p class="top-text two">技能実習生プロジェクトが本格始動！</p>

            <p class="img-logo">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Group_13" data-name="Group 13" width="398.667" height="398.667" viewBox="0 0 398.667 398.667">
                    <defs>
                    <clipPath id="clip-path">
                        <rect id="Rectangle_25" data-name="Rectangle 25" width="398.667" height="398.667" fill="none"/>
                    </clipPath>
                    </defs>
                    <g id="Group_12" data-name="Group 12" clip-path="url(#clip-path)">
                    <g id="Group_11" data-name="Group 11">
                        <g id="Group_10" data-name="Group 10" clip-path="url(#clip-path)">
                        <g id="Group_9" data-name="Group 9" opacity="0.3" style="mix-blend-mode: multiply;isolation: isolate">
                            <g id="Group_8" data-name="Group 8">
                            <g id="Group_7" data-name="Group 7" clip-path="url(#clip-path)">
                                <g id="Group_6" data-name="Group 6">
                                <g id="Group_5" data-name="Group 5" clip-path="url(#clip-path)">
                                    <image id="Rectangle_21" data-name="Rectangle 21" width="398.667" height="398.667" xlink:href="data:image/png;base64,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"/>
                                </g>
                                </g>
                            </g>
                            </g>
                        </g>
                        <path id="Path_19" data-name="Path 19" d="M2.622,186.781C2.622,85.02,85.117,2.525,186.878,2.525S371.138,85.02,371.138,186.781,288.643,371.037,186.878,371.037,2.622,288.542,2.622,186.781" transform="translate(6.395 6.159)" fill="#fff"/>
                        <path id="Path_20" data-name="Path 20" d="M28.205,103.96H23.094a.852.852,0,0,1-.849-.853V75.229a.851.851,0,0,1,.849-.849h12.67a10.487,10.487,0,0,1,10.524,10.5A10.332,10.332,0,0,1,35.971,95.015H32.676a.849.849,0,0,1-.849-.849V89.055a.847.847,0,0,1,.849-.849h3.192a3.58,3.58,0,0,0,3.594-3.171,3.513,3.513,0,0,0-3.491-3.845H29.058v21.918a.853.853,0,0,1-.853.853" transform="translate(54.259 181.424)" fill="#df1f27"/>
                        <path id="Path_21" data-name="Path 21" d="M57.686,104.108h-6A11.4,11.4,0,0,1,40.3,92.718V85.77A11.4,11.4,0,0,1,51.688,74.38h6A11.4,11.4,0,0,1,69.073,85.77v6.947a11.4,11.4,0,0,1-11.387,11.39m-6-22.915a4.582,4.582,0,0,0-4.578,4.578v6.947A4.582,4.582,0,0,0,51.688,97.3h6a4.582,4.582,0,0,0,4.574-4.578V85.77a4.582,4.582,0,0,0-4.574-4.578Z" transform="translate(98.3 181.424)" fill="#df1f27"/>
                        <path id="Path_22" data-name="Path 22" d="M68.834,103.96H62.4A11.385,11.385,0,0,1,51.012,92.57v-6.8A11.382,11.382,0,0,1,62.4,74.38h5.716a9.511,9.511,0,0,1,9.513,9.513V84a.853.853,0,0,1-.853.853H71.661A.849.849,0,0,1,70.815,84v-.107a2.706,2.706,0,0,0-2.7-2.7H62.4a4.577,4.577,0,0,0-4.574,4.578v6.8A4.577,4.577,0,0,0,62.4,97.147h7.776a.641.641,0,0,0,.643-.64V93.536a.644.644,0,0,0-.643-.643H65.164a.848.848,0,0,1-.846-.849V87.59a.851.851,0,0,1,.846-.853H74.24a3.381,3.381,0,0,1,3.384,3.381v5.056a8.79,8.79,0,0,1-8.79,8.787" transform="translate(124.426 181.424)" fill="#df1f27"/>
                        <path id="Path_23" data-name="Path 23" d="M50.9,93.134c3.271-1.255,4.447-4.5,4.447-8.474A10.371,10.371,0,0,0,44.928,74.38H32.159a.853.853,0,0,0-.853.853v27.878a.85.85,0,0,0,.853.849h5.107a.85.85,0,0,0,.853-.849V82.042a.851.851,0,0,1,.849-.849h6.063a3.511,3.511,0,0,1,3.508,3.5c0,1.6-.409,3.508-2.352,3.508H41.159a.425.425,0,0,0-.375.629l8.037,14.685a.851.851,0,0,0,.746.44h6.545a.424.424,0,0,0,.371-.629Z" transform="translate(76.36 181.424)" fill="#df1f27"/>
                        <path id="Path_24" data-name="Path 24" d="M80.958,93.134c3.271-1.255,4.447-4.5,4.447-8.474A10.371,10.371,0,0,0,74.984,74.38H62.215a.853.853,0,0,0-.853.853v27.878a.85.85,0,0,0,.853.849h5.107a.85.85,0,0,0,.853-.849V82.042a.851.851,0,0,1,.849-.849h6.063A3.511,3.511,0,0,1,78.6,84.7c0,1.6-.409,3.508-2.352,3.508H71.215a.425.425,0,0,0-.375.629l8.037,14.685a.851.851,0,0,0,.746.44h6.545a.424.424,0,0,0,.371-.629Z" transform="translate(149.671 181.424)" fill="#df1f27"/>
                        <path id="Path_25" data-name="Path 25" d="M83.227,74.383A12.4,12.4,0,0,0,71.273,86.861v16.25a.852.852,0,0,0,.853.849h5.107a.852.852,0,0,0,.853-.849V86.764A5.522,5.522,0,0,1,83.313,81.2a5.445,5.445,0,0,1,5.647,5.434v1.149a.426.426,0,0,1-.426.426H82.3a.852.852,0,0,0-.853.85v5.111a.853.853,0,0,0,.853.853h6.232a.423.423,0,0,1,.426.423v7.669a.852.852,0,0,0,.853.849h5.107a.852.852,0,0,0,.853-.849V86.63A12.265,12.265,0,0,0,83.227,74.383" transform="translate(173.846 181.424)" fill="#df1f27"/>
                        <path id="Path_26" data-name="Path 26" d="M103.768,74.383a9.749,9.749,0,0,0-6.07,1.94.923.923,0,0,1-1.1,0,9.746,9.746,0,0,0-6.067-1.94,9.932,9.932,0,0,0-9.585,10v18.73a.852.852,0,0,0,.849.853H86.9a.851.851,0,0,0,.853-.853V84.291A3.062,3.062,0,0,1,90.541,81.2a3,3,0,0,1,3.2,2.985v18.792a.853.853,0,0,0,.853.853H99.7a.853.853,0,0,0,.856-.853V84.291a3.062,3.062,0,0,1,2.786-3.092,3,3,0,0,1,3.2,2.985v18.792a.85.85,0,0,0,.849.853H112.5a.853.853,0,0,0,.853-.853V84.38a9.934,9.934,0,0,0-9.585-10" transform="translate(197.43 181.425)" fill="#df1f27"/>
                        <path id="Path_27" data-name="Path 27" d="M63.391,120.859a3.527,3.527,0,0,1,3.4,2.879A14.058,14.058,0,0,0,94.7,121.316V32.4a3.22,3.22,0,0,1,3.219-3.222h25.766a3.222,3.222,0,0,1,3.222,3.222v88.916A46.354,46.354,0,0,1,79.5,167.6c-23.961-.567-43.1-19.713-45.025-43.24a3.537,3.537,0,0,1,3.556-3.862Z" transform="translate(84.049 71.17)" fill="#df1f27"/>
                        <path id="Path_28" data-name="Path 28" d="M150.478,167.615h-39.77a46.3,46.3,0,0,1-46.3-46.3V75.477a46.3,46.3,0,0,1,46.3-46.3h39.77a3.218,3.218,0,0,1,3.216,3.219V58.164a3.218,3.218,0,0,1-3.216,3.219h-39.77A14.1,14.1,0,0,0,96.614,75.477v45.84a14.092,14.092,0,0,0,14.094,14.09h39.77a3.221,3.221,0,0,1,3.216,3.222V164.4a3.218,3.218,0,0,1-3.216,3.219" transform="translate(157.106 71.172)" fill="#df1f27"/>
                        <path id="Path_29" data-name="Path 29" d="M22.025,135.831V43.843a3.222,3.222,0,0,1,3.219-3.222H51.01a3.225,3.225,0,0,1,3.222,3.222v92.341a3.519,3.519,0,0,1-3.57,3.518L25.5,139.349a3.519,3.519,0,0,1-3.47-3.518" transform="translate(53.722 99.081)" fill="#df1f27"/>
                        <path id="Path_30" data-name="Path 30" d="M22.025,45.281a16.1,16.1,0,1,1,16.1,16.1,16.1,16.1,0,0,1-16.1-16.1" transform="translate(53.722 71.172)" fill="#df1f27"/>
                        </g>
                    </g>
                    </g>
                </svg>
            </p>
            
            <p class="text-01">
                <img src="<?php bloginfo('template_directory'); ?>/lp-ijc/images/ijc/banner_Text_01.png">
            </p>

            <p class="text-02">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1319.131" height="393.729" viewBox="0 0 1319.131 393.729">
                    <defs>
                    <filter id="_2023年始動_" x="0" y="0" width="1319.131" height="393.729" filterUnits="userSpaceOnUse">
                        <feOffset dx="6" dy="6" input="SourceAlpha"/>
                        <feGaussianBlur result="blur"/>
                        <feFlood flood-opacity="0.91"/>
                        <feComposite operator="in" in2="blur"/>
                        <feComposite in="SourceGraphic"/>
                    </filter>
                    </defs>
                    <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#_2023年始動_)">
                    <text id="_2023年始動_2" data-name="2023年始動!!" transform="matrix(1, -0.09, 0.09, 1, 18.56, 324.97)" fill="#fff" font-size="198" font-family="mplus-1c-black, 'M\+ \31 c'" font-weight="800"><tspan x="0" y="0">2023年始動!!</tspan></text>
                    </g>
                </svg>
            </p>
            <p class="text-03">
                本プロジェクトはインドネシア政府・JOE協同組合・キャムテックの共同プロジェクトです
            </p>


            <div class="banner-note">
                <dl class="dl-img-note">
                    <dt class="dt-img">
                        <img src="<?php bloginfo('template_directory'); ?>/lp-ijc/images/ijc/pic_01.png">
                    </dt>
                    <dd class="dd-img">
                        2023年8月開設予定 「IJCセンター」<br>
                        ■場所：インドネシア バンドン <br>
                        ■目的：プロジェクト合格者の日本入国前集合講習 <br>
                        ■収容可能人数：500名 <br>
                        ■寮入居可能人数：300名
                    </dd>
                </dl>
                <ul class="list-text flex">
                    <li class="item-text">
                        <p class="li-text">
                            パイロットプロジェクト成功に伴い、<br>
                            正式な国家プロジェクトに昇格!! 
                        </p>
                  
                    </li>
                    <li class="item-text two">
                        <p class="li-text">
                            国営の職業訓練校を卒業した<br>
                            優秀なインドネシア人 <br>
                            技能実習生を採用することが可能!!
                        </p>
                    </li>
                </ul>
                <p class="img-note-last">
                    <span>IJC</span>とは下記4つの頭文字から取った略称となります<br>
                    <span>I</span>ndonesia <span>J</span>apan & <span>J</span>OE cooperative <span>C</span>amtech

                </p>

            </div>

       </div>

       <div class="block-one">
        <div class="inner">
            <div class="content-one">
                <p class="title-page">対象者 受講修了カリキュラム一覧</p>
                <div class="list-one flex">
                    <ul class="right">
                        <li class="item-one"><span class="dot-01">●</span><span>機械製造</span>（機械加工、機械操作、等）</li>
                        <li class="item-one"><span class="dot-01">●</span><span>溶接</span>（アーク溶接、TIG溶接）</li>
                        <li class="item-one"><span class="dot-01">●</span><span>電気電子</span>（機械オペレーター）</li>
                    </ul>
                    <ul class="left">
                        <li class="item-one"><span class="dot-01">●</span><span>自動車関連</span>（自動車整備、フォークリフト操作、等）</li>
                        <li class="item-one"><span class="dot-01">●</span><span>家電修理</span>（冷凍機・エアコンのメンテナンス）</li>
                        <li class="item-one"><span class="dot-01">●</span><span>飲食料品製造</span>（飲食料品加工、パン製造、水産加工、等）</li>
                    </ul>
                </div>
                <P class="note-one">※240名は、職業訓練校にて上記いずれかのカリキュラムを修了しております。</P>
            </div>

            <p class="img-note-one">
                <svg xmlns="http://www.w3.org/2000/svg" width="1470" height="158" viewBox="0 0 1470 158">
                    <text id="_IJCプログラム_はIndonesia_JOE協同組合_CAMTECHによる_社会課題に向き合った新しい技能実習生度のカタチを実現するプログラムです_" data-name="「IJCプログラム」はIndonesia・JOE協同組合・CAMTECHによる 社会課題に向き合った新しい技能実習生度のカタチを実現するプログラムです。" transform="translate(735 75)" fill="#fff" font-size="40" font-family="mplus-1c-black, 'M\+ \31 c'" font-weight="800" letter-spacing="0.02em"><tspan x="-675.23" y="0">「</tspan><tspan y="0" fill="#ffec00" font-size="70">IJC</tspan><tspan y="0">プログラム」は</tspan><tspan y="0" fill="#ffec00" font-size="70">I</tspan><tspan y="0">ndonesia・</tspan><tspan y="0" fill="#ffec00" font-size="70">J</tspan><tspan y="0">OE協同組合・</tspan><tspan y="0" fill="#ffec00" font-size="70">C</tspan><tspan y="0">AMTECHによる</tspan><tspan x="-734" y="70">社会課題に向き合った新しい技能実習生度のカタチを実現するプログラムです。</tspan></text>
                  </svg>
            </p>
        </div>
       </div>


       <div class="content-main">
             <ul class="list-scroll flex">
                <li class="item-scroll">
                    <a href="#p1" class="scroll">
                        <p class="img-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="91.594" height="83.961" viewBox="0 0 91.594 83.961">
                                <path id="iconmonstr-construction-8" d="M91.594,84.961H15.266A15.271,15.271,0,0,1,0,69.7V9.8A11.841,11.841,0,0,1,11.449,1a11.436,11.436,0,0,1,11.43,8.824l.019,6.442h68.7ZM83.961,23.9H22.9v41.98a8.671,8.671,0,0,0-7.335-3.816A7.9,7.9,0,0,0,7.633,69.7a7.636,7.636,0,0,0,7.633,7.633h68.7ZM76.328,69.7h-45.8V31.531h45.8ZM45.8,35.348H34.348V65.879H72.512V35.348h-22.9V46.8h22.9v3.816H64.879V62.063H61.063V50.613H49.613V62.063H45.8Z" transform="translate(0 -1)" fill="#df1f27" fill-rule="evenodd"/>
                              </svg>
                        </p>
                        <p class="text-icon">プログラム概要</p>
                    </a>
                </li>
                <li class="item-scroll">
                    <a href="#p2" class="scroll">
                        <p class="img-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="76.943" height="84.386" viewBox="0 0 76.943 84.386">
                                <g id="_i_icon_15006_icon_150060" transform="translate(-22.581)">
                                  <path id="Path_62" data-name="Path 62" d="M36.291,76.613a8.625,8.625,0,0,1-8.632-8.632V25.625H41.016A7.182,7.182,0,0,0,48.2,18.435V5.079h27.15a8.614,8.614,0,0,1,8.619,8.632V34.229a24.729,24.729,0,0,1,4.63,3.635c.149.15.312.314.448.477V13.711A13.71,13.71,0,0,0,75.354,0H46.109l-1.5,1.484L24.065,22.029l-1.484,1.5V67.981a13.73,13.73,0,0,0,13.71,13.711H65.537s-4.993-4.311-6.371-5.079H36.291Z" fill="#df1f27"/>
                                  <path id="Path_63" data-name="Path 63" d="M126.671,210.141a24.394,24.394,0,0,1,5.023-3.867H109.733v4.848h16.011C126.045,210.795,126.344,210.468,126.671,210.141Z" transform="translate(-72.788 -172.277)" fill="#df1f27"/>
                                  <rect id="Rectangle_126" data-name="Rectangle 126" width="19.742" height="4.851" transform="translate(54.645 21.061)" fill="#df1f27"/>
                                  <path id="Path_64" data-name="Path 64" d="M109.733,288.883v4.848h9.912a23.7,23.7,0,0,1,1.061-4.848Z" transform="translate(-72.788 -241.27)" fill="#df1f27"/>
                                  <path id="Path_65" data-name="Path 65" d="M109.733,376.34h12.281a24.427,24.427,0,0,1-1.783-4.848h-10.5Z" transform="translate(-72.788 -310.264)" fill="#df1f27"/>
                                  <path id="Path_66" data-name="Path 66" d="M259.4,275.666s-6.038-5.281-7.483-6.723c-2.119-2.11-2.966-3.126-2.219-4.84a17.879,17.879,0,1,0-8.181,8.178c1.715-.747,2.732.1,4.841,2.221,1.443,1.444,6.723,7.482,6.723,7.482,2.738,2.738,4.844,1.054,6.111-.21S262.14,278.4,259.4,275.666ZM240.968,263.55a10.35,10.35,0,1,1,0-14.635A10.353,10.353,0,0,1,240.968,263.55Z" transform="translate(-161.351 -199.071)" fill="#df1f27"/>
                                </g>
                              </svg>
                        </p>
                        <p class="text-icon">導入事例</p>
                    </a>
                </li>
                <li class="item-scroll">
                    <a href="#p3" class="scroll">
                        <p class="img-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="97" height="77" viewBox="0 0 97 77">
                                <g id="Group_86" data-name="Group 86" transform="translate(-883 -2186)">
                                  <g id="Subtraction_1" data-name="Subtraction 1" transform="translate(883 2186)" fill="#df1f27">
                                    <path d="M 95.00020599365234 35.99980163574219 L 2.000003099441528 35.99980163574219 L 2.000003099441528 9.000000953674316 C 2.000003099441528 5.140186309814453 5.140188694000244 2.000000715255737 9.000002861022949 2.000000715255737 L 88.00020599365234 2.000000715255737 C 91.86001586914062 2.000000715255737 95.00020599365234 5.140186309814453 95.00020599365234 9.000000953674316 L 95.00020599365234 35.99980163574219 Z" stroke="none"/>
                                    <path d="M 93.00020599365234 33.99980163574219 L 93.00020599365234 9.000000953674316 C 93.00020599365234 6.242984294891357 90.75721740722656 4.000000953674316 88.00020599365234 4.000000953674316 L 9.000002861022949 4.000000953674316 C 6.24298620223999 4.000000953674316 4.000002861022949 6.242984294891357 4.000002861022949 9.000000953674316 L 4.000002861022949 33.99980163574219 L 93.00020599365234 33.99980163574219 M 97.00020599365234 37.99980163574219 L 2.996826196977054e-06 37.99980163574219 L 2.996826196977054e-06 9.000000953674316 C 2.996826196977054e-06 4.037384033203125 4.037386417388916 8.178710686479462e-07 9.000002861022949 8.178710686479462e-07 L 88.00020599365234 8.178710686479462e-07 C 92.96282196044922 8.178710686479462e-07 97.00020599365234 4.037384033203125 97.00020599365234 9.000000953674316 L 97.00020599365234 37.99980163574219 Z" stroke="none" fill="#df1f27"/>
                                  </g>
                                  <g id="Subtraction_2" data-name="Subtraction 2" transform="translate(980 2263) rotate(180)" fill="#fff">
                                    <path d="M 95.00020599365234 41.00022125244141 L 2.000003099441528 41.00022125244141 L 2.000003099441528 9.000006675720215 C 2.000003099441528 5.140192031860352 5.140188694000244 2.000006437301636 9.000002861022949 2.000006437301636 L 88.00020599365234 2.000006437301636 C 91.86001586914062 2.000006437301636 95.00020599365234 5.140192031860352 95.00020599365234 9.000006675720215 L 95.00020599365234 41.00022125244141 Z" stroke="none"/>
                                    <path d="M 93.00020599365234 39.00020599365234 L 93.00020599365234 9.000006675720215 C 93.00020599365234 6.242990016937256 90.75721740722656 4.000006675720215 88.00020599365234 4.000006675720215 L 9.000002861022949 4.000006675720215 C 6.24298620223999 4.000006675720215 4.000002861022949 6.242990016937256 4.000002861022949 9.000006675720215 L 4.000002861022949 39.00020599365234 L 93.00020599365234 39.00020599365234 M 97.00020599365234 43.00120544433594 L 97.00020599365234 43.00020599365234 L 2.996826196977054e-06 43.00020599365234 L 2.996826196977054e-06 9.000006675720215 C 2.996826196977054e-06 4.037389755249023 4.037386417388916 6.536865384987323e-06 9.000002861022949 6.536865384987323e-06 L 88.00020599365234 6.536865384987323e-06 C 92.96282196044922 6.536865384987323e-06 97.00020599365234 4.037389755249023 97.00020599365234 9.000006675720215 L 97.00020599365234 43.00120544433594 Z" stroke="none" fill="#df1f27"/>
                                  </g>
                                </g>
                              </svg>
                        </p>
                        <p class="text-icon">インドネシア人の特色</p>
                    </a>
                </li>
                <li class="item-scroll">
                    <a href="#p4" class="scroll">
                        <p class="img-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="76" height="83" viewBox="0 0 76 83">
                                <g id="_i_icon_00165_icon_001650" transform="translate(-23.676 -0.422)">
                                  <rect id="Rectangle_119" data-name="Rectangle 119" width="44" height="6" transform="translate(39.676 36.422)" fill="#df1f27"/>
                                  <rect id="Rectangle_120" data-name="Rectangle 120" width="44" height="6" transform="translate(39.676 49.422)" fill="#df1f27"/>
                                  <rect id="Rectangle_121" data-name="Rectangle 121" width="32" height="5" transform="translate(39.676 62.422)" fill="#df1f27"/>
                                  <path id="Path_58" data-name="Path 58" d="M91.676,55.5h-7v6a3.751,3.751,0,0,1-4,4h-9c-2.442,0-5-1.589-5-4v-6h-10v6c0,2.445-2.531,4-5,4h-9a3.721,3.721,0,0,1-4-4v-6h-7c-4.384,0-8,2.656-8,7v59a8.07,8.07,0,0,0,8,8h60a8.066,8.066,0,0,0,8-8v-59C99.676,58.153,96.066,55.5,91.676,55.5Zm2,66c0,1.395-.605,2-2,2h-60c-1.395,0-2-.605-2-2v-46h64Z" transform="translate(0 -46.075)" fill="#df1f27"/>
                                  <path id="Path_59" data-name="Path 59" d="M134.311,16.422h9c.736,0,1-.269,1-1v-12a2.785,2.785,0,0,0-3-3h-5a2.785,2.785,0,0,0-3,3v12C133.311,16.154,133.574,16.422,134.311,16.422Z" transform="translate(-91.635)" fill="#df1f27"/>
                                  <path id="Path_60" data-name="Path 60" d="M310.205,16.422h9c.708,0,1-.3,1-1v-12a2.813,2.813,0,0,0-3-3h-5a2.813,2.813,0,0,0-3,3v12C309.206,16.125,309.5,16.422,310.205,16.422Z" transform="translate(-238.529)" fill="#df1f27"/>
                                </g>
                              </svg>
                        </p>
                        <p class="text-icon">採用スケジュール</p>
                    </a>
                </li>
                <li class="item-scroll last">
                    <a href="#p5" class="scroll">
                        <p class="img-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="90" height="70.642" viewBox="0 0 90 70.642">
                                <g id="_i_icon_12533_icon_125330" transform="translate(0 -55.062)">
                                  <path id="Path_61" data-name="Path 61" d="M89.768,65.119A12.449,12.449,0,0,0,87.19,59.66a10.731,10.731,0,0,0-.848-.94,12.457,12.457,0,0,0-8.827-3.659H12.484a12.474,12.474,0,0,0-8.826,3.659,10.962,10.962,0,0,0-.848.94A12.3,12.3,0,0,0,.244,65.119,12.074,12.074,0,0,0,0,67.547v45.674a12.413,12.413,0,0,0,1.034,4.958,12.236,12.236,0,0,0,2.624,3.867c.279.279.557.535.86.79a12.473,12.473,0,0,0,7.966,2.869H77.516a12.394,12.394,0,0,0,7.967-2.88,10.78,10.78,0,0,0,.86-.779,12.493,12.493,0,0,0,2.636-3.867v-.011A12.353,12.353,0,0,0,90,113.221V67.547A12.83,12.83,0,0,0,89.768,65.119ZM8.175,63.237a6.03,6.03,0,0,1,4.309-1.789H77.516a6,6,0,0,1,4.856,2.428L48.286,93.583a5,5,0,0,1-6.573,0L7.642,63.864A4.607,4.607,0,0,1,8.175,63.237ZM6.387,113.221V70.473L31.053,91.992,6.4,113.487A1.823,1.823,0,0,1,6.387,113.221Zm71.129,6.1H12.484a6.013,6.013,0,0,1-3.019-.8L35.477,95.848l2.428,2.113a10.807,10.807,0,0,0,14.2,0l2.427-2.113,26,22.669A6.021,6.021,0,0,1,77.516,119.316Zm6.1-6.1a1.9,1.9,0,0,1-.012.266L58.948,92,83.613,70.485Z" transform="translate(0 0)" fill="#df1f27"/>
                                </g>
                              </svg>
                        </p>
                        <p class="text-icon">お問い合わせ</p>
                    </a>
                </li>

             </ul>
              <section class="all-progaram" id="p1" >
                <div class="inner">
                    <h3 class="title-h3">プログラム概要</h3>

                    <div class="content-progaram">
                        <ul class="list-progaram">
                            <li class="item-progaram flex arrow-lp one">
                                <div class="logo-progaram one">
                                    <p class="img-progaram">
                                        <img src="<?php bloginfo('template_directory'); ?>/lp-ijc/images/ijc/logo_item_01.png" class="logo-01">
                                    </p>
                                    <p class="text-note">インドネシア政府 国営職業訓練校</p>

                                </div>
                                <div class="right-progaram">
                                    <p class="title-page">受講終了カリキュラム</p>
                                    <div class="content-flex flex">
                                        <p class="item-progaram-text one">・機械製造（機械加工、機械操作等）<br>・自動車関連（整備、フォークリフト等）<br>・溶接（アーク、TIG）</p>
                                        <p class="item-progaram-text one">・機械製造（機械加工、機械操作等）<br>・自動車関連（整備、フォークリフト等）<br>・溶接（アーク、TIG）</p>    
                                    </div>
                                </div>
                            </li>
                            <li class="item-progaram flex arrow-lp two">
                                <div class="logo-progaram">
                                    <p class="img-progaram two">
                                        <img src="<?php bloginfo('template_directory'); ?>/lp-ijc/images/ijc/logo_item_02.png" class="logo-02">
                                    </p>
                                    <p class="text-note">海外実習事業主催協議会AP2LN<br>IJCセンター</p>

                                </div>
                                <div class="right-progaram">
                                    <p class="title-page">3ヵ月基礎教育</p>
                                    <div class="content-flex flex">
                                        <p class="item-progaram-text">・日本語基礎学習<br>・ビジネスマナー教育<br>・安全衛生教育
                                        </p>
                                        <p class="item-progaram-text">・実技基礎教育<br>・各種eラーニング<br>
                                        </p>    
                                    </div>
                                </div>
                            </li>

                            <li class="item-progaram flex arrow-lp three">
                                <div class="logo-progaram">
                                    <p class="img-progaram three">
                                        <img src="<?php bloginfo('template_directory'); ?>/lp-ijc/images/ijc/logo_item_03.png" class="logo-03">
                                    </p>
                                    <p class="text-note">入国後講習施設</p>

                                </div>
                                <div class="right-progaram">
                                    <p class="title-page">1ヵ月入国後教育</p>
                                    <div class="content-flex flex">
                                        <p class="item-progaram-text">・日本語教育カリキュラム<br>・各種生活学習<br>・法的保護講習、消防講習、警察講習</p>
                                        <p class="item-progaram-text">・VR製造基礎講習<br>・配属前トレーニング</p>
                                    </div>
                                </div>
                            </li>
                            <li class="item-progaram flex four">
                                <div class="logo-progaram">
                                    <p class="img-progaram four">
                                        <img src="<?php bloginfo('template_directory'); ?>/lp-ijc/images/ijc/logo_item_04.png" class="logo-04">
                                    </p>
                                   
                                </div>
                                <div class="right-progaram destop">
                                    <p class="title-page">受入企業様配属</p>
                                    <div class="content-flex flex">
                                        <p class="item-progaram-text last">
                                            ・社宅契約、備品購入代行<br>・通勤ルート、近隣施設案内<br>・入社教育通訳、翻訳
                                        </p>
                                        <p class="item-progaram-text last">
                                            ・24ｈ対応コールセンター<br>・緊急時駆けつけサポート<br>
                                        </p>   
                                        <p class="item-progaram-text last">
                                            ・日本語教育サポート<br>・技能検定教育サポート<br>
                                        </p>  
                                    </div>
                                </div>
                                <div class="right-progaram mobi">
                                    <p class="title-page">受入企業様配属</p>
                                    <div class="content-flex flex">
                                        <p class="item-progaram-text">
                                            ・社宅契約、備品購入代行<br>・通勤ルート、近隣施設案内<br>・入社教育通訳、翻訳<br>・24ｈ対応コールセンター
                                        </p> 
                                        <p class="item-progaram-text">
                                        ・緊急時駆けつけサポート<br>・日本語教育サポート<br>・技能検定教育サポート<br>
                                        </p>  
                                    </div>
                                </div>
                            </li>
                        </ul>
                       <!-- map -->

                        <div class="block-progaram">
                            <p class="title-page all">失業率改善に向けて</p>
                            <p class="des-page">
                                若年層の失業率が高く社会問題化している状況下、<br class="br-sp">職業訓練校を通じて専門技術を学んだ、<br>
                                意識の高い若者を技能実習生として日本へ受け入れます。
                            </p>

                            <div class="box-map">
                                <p class="title-map">若年層の失業率</p>
                               <div class="map-flex flex">
                                    <p class="img-map">
                                        <img src="<?php bloginfo('template_directory'); ?>/lp-ijc/images/ijc/map.png" class="">
                                    </p>
                                    <div class="map-content">
                                        <p class="title-01">インドネシア</p>
                                         <p class="number-01">
                                         <span class="title-01-pc">インドネシア</span><span class="span01">16.5</span><span class="span02">%</span><span class="span03">（約740万人）</span>
                                         </p>
                                         <ul class="list-number flex">
                                            <li class="item-number">
                                                <p class="number-item-01">ベトナム</p>
                                                <p class="number-item-02">6.9<span class="span05">%</span></p>
                                                <p class="number-item-03">（約95万人）</p>
                                            </li>
                                            <li class="item-number">
                                                <p class="number-item-01">日本</p>
                                                <p class="number-item-02">8.2<span class="span05">%</span></p>
                                                <p class="number-item-03">（約95万人）</p>
                                            </li>
                                         </ul>
                                    </div>
                               </div>
                            </div>

                            <div class="box-content-map flex">
                                <div class="left-content">
                                    <p class="left-01">インドネシア国営の職業訓練校は、雇用創出を目的として、求職者に対して多種多様な付加価値の高い授業プログラムを提供しており、運営している学校数は21校、年間の受講学生の総数は約15万人で、これまでの卒業者は累計700万人を超えます。国営の職業訓練校は、入学するために厳しい選考を通過しなければならず、通過率は約10%と非常に狭き門となっております。今後は訓練校に当社独自の授業プログラムを設け、より実践的な技能と日本語の教育を行うことで生産性の高い人材を輩出してまいります。</p>
                                    <p class="left-02">学術的な素養を持つ職業訓練校卒業生を採用ソースとすることでより質の高い実習生を配属できる</p>
                                </div>
                                <div class="right-content">
                                    <div class="img-map-01">
                                        <p class="img-map">
                                            <img src="<?php bloginfo('template_directory'); ?>/lp-ijc/images/ijc/pic_02.png" class="">
                                            <span class="note-map">訓練校①</span>
                                        </p>
                                      
                                    </div>
                                    <div class="img-map-02">
                                        <p class="img-map">
                                            <img src="<?php bloginfo('template_directory'); ?>/lp-ijc/images/ijc/pic_03.png" class="">
                                            <span class="note-map">訓練校②</span>
                                        </p>
                                     
                                    </div>
                                </div>

                            </div>
                        </div>
                         <div class="solution-map">
                            <p class="title-page last">借金問題への取り組み</p>
                            <ul class="list-solution flex">
                                <li class="item-solution">
                                    <p class="img-map">
                                        <img src="<?php bloginfo('template_directory'); ?>/lp-ijc/images/ijc/logo_item_01.png" class="logo-01">
                                    </p>
                                    <p class="text-solution">インドネシア政府</p>

                                    <p class="text-arrow">補助金</p>
                                </li>
                                <li class="item-solution">
                                    <p class="img-map">
                                        <img src="<?php bloginfo('template_directory'); ?>/lp-ijc/images/ijc/logo_item_05.png" class="logo-05">
                                    </p>
                                    <p class="text-solution">JOE協同組合</p>

                                    <p class="text-arrow">補助金</p>
                                </li>
                                <li class="item-solution">
                                    <p class="img-map">
                                        <img src="<?php bloginfo('template_directory'); ?>/lp-ijc/images/ijc/logo_item_02.png" class="logo-02">
                                    </p>
                                    <p class="text-solution">海外実習事業主催協議会</p>

                                    <p class="text-arrow">補助金</p>
                                </li>
                            </ul>
                            <div class="box-price flex">
                                <div class="left-price">
                                    <p class="price-01">実習生本人が負担する教育受講費用</p>
                                    <p class="price-02">225,000<span>円</span></p>
                                </div>
                                <div class="right-price">
                                    <p class="price-03">25,000<span>円</span></p>
                                </div>
                    
                            </div>
                            <p class="note-price">技能実習制度において問題視されている借金問題解決に向け、インドネシア政府の国家予算と<br>
                                    JOE協同組合の奨学金制度、送り出し機関の補助金を組み合わせることで取り組んでいます。
                            </p>
                         </div>
                    </div>
                </div>
              </section>

              <section class="block-example" id="p2">
                <div class="inner">
                    <h3 class="title-h3">導入事例</h3>
                    <div class="content-example">
                        <div class="list-example">
                            <li class="item-example flex">
                                <dl class="dl-example">
                                    <dt class="dt-exam">電子部品製造業K社様</dt>
                                    <dd class="dd-exam">かねてより技能実習生の受け入れをしたかったが、納品先が米国企業のため、外国人労働者の受け入れに関する監査が厳しく断念していた。⇒IJCプログラムでは現地での学費を本人がほとんど負担せず、借金しないで入国できることから、監査項目をクリアできるため参画を決定。</dd>
                                </dl>
                                <p class="img-box">
                             
                                    <picture class="image">
                                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/lp-ijc/images/ijc/pic_04_sp.png 2x">
                                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/lp-ijc/images/ijc/pic_04_pc.png 2x">
                                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/lp-ijc/images/ijc/pic_04_pc.png" alt="Camcom logo">
                                    </picture>
                                </p>
                            </li>

                            <li class="item-example flex">
                                <dl class="dl-example">
                                    <dt class="dt-exam">惣菜製造業M社様</dt>
                                    <dd class="dd-exam">他国の技能実習生を受け入れていたが、食品を扱うことに関するリテラシーに乏しく、教育に苦労していた。職業訓練校や入国後講習で食品製造に関する基礎を習得している実習生を採用できることから、IJCプログラムへ参画。</dd>
                                </dl>
                                <p class="img-box">
                                <picture class="image">
                                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/lp-ijc/images/ijc/pic_05_sp.png 2x">
                                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/lp-ijc/images/ijc/pic_05_pc.png 2x">
                                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/lp-ijc/images/ijc/pic_05_pc.png" alt="Camcom logo">
                                    </picture>
                                </p>
                            </li>

                        </div>

                        <ul class="box-note">
                            <li class="item-exam">K社様・M社様　配属スケジュール</li>
                            <li class="item-exam flex">
                                <p class="text-exam-01">2022年10月</p>
                                <p class="text-exam-02">プロジェクトへの参画決定</p>
                            </li>
                            <li class="item-exam flex">
                                <p class="text-exam-01">11月</p>
                                <p class="text-exam-02">面接実施、内定決定　日本語学習開始</p>
                            </li>
                            <li class="item-exam flex">
                                <p class="text-exam-01">3月</p>
                                <p class="text-exam-02">日本入国　CAMTECH Educ.Academyにて1ヵ月講習</p>
                            </li>
                            <li class="item-exam flex">
                                <p class="text-exam-01">4月</p>
                                <p class="text-exam-02">K社様へ入社、配属</p>
                            </li>
                        </ul>

                    </div>
                </div>
              </section>

              <section class="block-indo" id="p3">
                <div class="inner">
                    <h3 class="title-h3">インドネシア人の特色</h3>
                    <div class="content-indo">
                        <div class="item-indo flex">
                            <p class="img-box">
                                <picture class="image">
                                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/lp-ijc/images/ijc/pic_06_sp.png 2x">
                                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/lp-ijc/images/ijc/pic_06_pc.png 2x">
                                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/lp-ijc/images/ijc/pic_06_pc.png" alt="Camcom logo">
                                </picture>
                            </p>
                            <p class="p-indo">
                                ❶帰属意識が高く、穏やかで対立を好まない<br>
                                ❷真面目で指示内容を真摯に受け止め行動できる<br>
                                ❸日本語の習得が早く、英語を話せる人材も多い<br>
                                <span class="p-indo two">
                                ❹親日的（自動車やバイクは日本製、<br>
                                &nbsp;&nbsp;日本のアニメや漫画が人気）であり、<br>
                                &nbsp;&nbsp;日本は規律があって安全な国として人気が高い
                               </span>
                            </p>
                        </div>
                        <p class="title-page last">雇用上の留意点</p>
                         <div class="box-img-indo flex">
                         <div class="div-indo sp">
                                <p class="title-indo"><span>■</span>イスラム教への配慮</p>
                                <p class="note-indo">近年の若者はイスラム教徒でも信仰の度合いは就労に問題ないレベルまで緩和傾向です。</p>
                                <dl class="dl-indo">
                                    <dt class="dt-note">［礼拝］ 決まった時間と場所で1日5回実施する</dt>
                                    <dd class="dd-note">出社前や退社後、休憩時間などを利用して1日2～3回程度で実施することが多く<br>礼拝のための場所を準備するほどの配慮まではしていないところが多いです。</dd>
                                </dl>
                             </div>

                            <p class="img-box">
                                <img src="<?php bloginfo('template_directory'); ?>/lp-ijc/images/ijc/pic_07.png" class="">
                            </p>
                             <div class="div-indo pc">
                                <p class="title-indo pc"><span>■</span>イスラム教への配慮</p>
                                <p class="note-indo pc">近年の若者はイスラム教徒でも信仰の度合いは就労に問題ないレベルまで緩和傾向です。</p>
                                <dl class="dl-indo pc">
                                    <dt class="dt-note">［礼拝］ 決まった時間と場所で1日5回実施する</dt>
                                    <dd class="dd-note">出社前や退社後、休憩時間などを利用して1日2～3回程度で実施することが多く<br>礼拝のための場所を準備するほどの配慮まではしていないところが多いです。</dd>
                                </dl>

                                <dl class="dl-indo last">
                                    <dt class="dt-note">［食事］豚肉やアルコール類は厳禁</dt>
                                    <dd class="dd-note">豚肉は食べないようにしますが、豚肉とわからず食べてしまったことは許されており、<br>インドネシア人のために別メニューの食事を提供するなどは不要です。<br>また、宗教上の理由からアルコールを摂取する方が少ないため、<br>日常生活における不要なトラブルが著しく少ないです。</dd>
                                </dl>
                                <dl class="dl-indo last">
                                    <dt class="dt-note">［断食］1ヶ月間（年に1回）の食事制限</dt>
                                    <dd class="dd-note">完全な断食ではなく、日没後の食事は可能なため、夜は食事をします。<br>水分補給など気を付ければ、健康面での就労における問題はほとんど発生しません。</dd>
                                </dl>
                             </div>

                         </div>
                         <p class="last-note-indo">親日で温和な国民性と、宗教面での配慮事項が少ない点から、<br>日本企業への親和性は非常に高いことがわかる</p>
                    </div>
                </div>
              </section>

            <!-- box-table -->
            <section class="block-table" id="p4">
                <div class="inner">
                    <h3 class="title-h3">採用スケジュール</h3>
                    <div class="box-table">
                        <p class="title-table">9月に企業様から正式オーダーをいただいた場合</p>
                        <ul class="list-table">
                            <li class="item-table flex">
                                <p class="table-01">2023年　　2月</p>
                                <p class="table-02">募集活動</p>
                                <p class="table-03">インドネシア政府と送出し機関が、国営職業訓練校卒業生をターゲットに、<br class="br-pc">本プロジェクトのPR、並びに求人展開を実施。想定応募人数800名以上。</p>
                            </li>
                            <li class="item-table flex">
                                <p class="table-01">3月</p>
                                <p class="table-02">1次選考</p>
                                <p class="table-03">インドネシア政府と送出し機関により、体力試験・筆記試験・面接を実施し、<br class="br-pc">500名程度に絞り込む。</p>
                            </li>
                            <li class="item-table flex">
                                <p class="table-01"></p>
                                <p class="table-02">2次選考</p>
                                <p class="table-03">JOE協同組合により、筆記試験と面接を実施し、<br>240名の合格者を決定。</p>
                            </li>
                            <li class="item-table flex">
                                <p class="table-01">5月</p>
                                <p class="table-02">入国前講習</p>
                                <p class="table-03">バンドンに開設する「IJCセンター」にて、日本語教育を実施。教育プログラムは<br class="br-pc">送出し機関とキャムテックが共同作成。講習費用の一部はインドネシア政府が負担。</p>
                            </li>
                            <li class="item-table flex">
                                <p class="table-01">9月</p>
                                <p class="table-02">企業様からのオーダー</p>
                                <p class="table-03">企業様からのオーダーは2023年9月末にて締め切り。<br>次回プロジェクトについては、2023年12月頃に告知予定。</p>
                            </li>
                            <li class="item-table flex">
                                <p class="table-01">10月</p>
                                <p class="table-02">企業様向け面接会</p>
                                <p class="table-03">合格者240名の中から選抜した方を対象に企業様毎に個別の面接会を実施。<br class="br-pc">面接会は原則オンライン。現地で実施することも可能。</p>
                            </li>
                            <li class="item-table flex">
                                <p class="table-01">2024年 3〜9月</p>
                                <p class="table-02">日本入国、入国後講習</p>
                                <p class="table-03">キャムテックエデュックアカデミー（千葉・大阪）にて入国後講習を実施。<br class="br-pc">独自のプログラムで勤労者資質を向上。</p>
                            </li>
                            <li class="item-table flex">
                                <p class="table-01">4〜10月</p>
                                <p class="table-02">企業様へ配属</p>
                                <p class="table-03">受入企業様とJOE協同組合にて技能実習開始。<br class="br-pc">生活面はキャムテックが充実のサポートを実施。 </p>
                            </li>
                        </ul>
                    </div>

                </div>

            </section>

        <!-- block-sponso (tai tro) -->
        <section class="block-sponsor" id="p5">
            <div class="inner">
                <h3 class="title-h3">プログラム協賛</h3>
                <div class="box-sponsor">
                    <div class="title-sponsor flex">
                        <p class="img-sponso">
                            <img src="<?php bloginfo('template_directory'); ?>/lp-ijc/images/ijc/logo_item_01.png" class="logo-01">
                        </p>
                        <dl class="dl-title">
                            <dt class="dt-title">インドネシア政府</dt>
                            <dd class="dd-title">「多様性の中の統一」を国是としており、その多様性こそが魅力の国家です</dd>
                        </dl>
                        
                    </div>

                    <ul class="list-info">
                        <li class="item-info flex">
                            <p class="info-left">総人口</p>
                            <p class="info-right">約2億7千万人</p>
                        </li>
                        <li class="item-info flex">
                            <p class="info-left">民　族</p>
                            <p class="info-right">約300種族（ジャワ人/スンダ人/マドゥーラ人/パプア人/中華系/アラブ系/インド系等</p>
                        </li>
                        <li class="item-info flex">
                            <p class="info-left">宗　教</p>
                            <p class="info-right">イスラム教/キリスト教/仏教/ヒンドゥー教等</p>
                        </li>
                    </ul>
                    <p class="note-sponsor">
                        若年層の失業率改善に向けて、21校もの職業訓練校を開校し、<br class="br-sp">累計卒業生は700万人を超えている。
                    </p>
                </div>
                <div class="box-sponsor two">
                    <div class="title-sponsor flex">
                        <p class="img-sponso two">
                            <img src="<?php bloginfo('template_directory'); ?>/lp-ijc/images/ijc/logo_item_05.png" class="logo-05">
                        </p>
                        <dl class="dl-title">
                            <dt class="dt-title">JOE協同組合</dt>
                            <dd class="dd-title">技能実習生受入事業の優良な実務運営で企業様と共に<br>国際貢献を実現し、CSRに寄与いたします</dd>
                        </dl>
                        
                    </div>

                    <ul class="list-info">
                        <li class="item-info flex">
                            <p class="info-left">設　立</p>
                            <p class="info-right">2020年1月</p>
                        </li>
                        <li class="item-info flex">
                            <p class="info-left">拠　点</p>
                            <p class="info-right">イ東京都港区浜松町2-4-1  世界貿易センタービルディング南館16F<br>
                                愛知県名古屋市中村区那古野1-47-1  名古屋国際センタービル8階
                            </p>
                        </li>
                    </ul>

                    <div class="flex-spon flex">
                        <div class="item-spon">
                            <p class="title">〈提携団体〉</p>
                            <div class="flex-item flex">
                                <p class="item-left"><span class="dot-01">●</span>国連支援交流協会<br><span class="dot-01">●</span>国際交流推進協会</p>
                                <p class="item-left"><span class="dot-01">●</span>JIC協同組合支援協会<br><span class="dot-01">●</span>外国人材支援機構　他</p>
                            </div>
                        </div>

                        <div class="item-spon two">
                            <p class="title">〈外国人技能実習生 受入提携国〉</p>
                            <div class="flex-item flex">
                                <p class="item-left-last"><span class="dot-01">●</span>ベトナム</p>
                                <p class="item-left-last"><span class="dot-01">●</span>フィリピン</p>
                                <p class="item-left-last"><span class="dot-01">●</span>タイ</p>
                                <p class="item-left-last"><span class="dot-01">●</span>インドネシア</p>
                                <p class="item-left-last"><span class="dot-01">●</span>ミャンマー</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="box-sponsor three">
                    <div class="title-sponsor flex">
                        <p class="img-sponso">
                            <img src="<?php bloginfo('template_directory'); ?>/lp-ijc/images/ijc/logo_item_02.png" class="logo-02">
                        </p>
                        <dl class="dl-title">
                            <dt class="dt-title">海外実習事業主催協議会AP2LN</dt>
                            <dd class="dd-title">（Asosiasi Penyelenggara Pemagangan Luar Negeri）</dd>
                        </dl>
                    </div>
                    <ul class="list-info">
                        <li class="item-info flex">
                            <p class="info-left">設　立 </p>
                            <p class="info-right">2015年1月</p>
                        </li>
                    </ul>
                    <p class="note-sponsor">人権を守りながら、よりレベルの高い技能実習生を育てるため、労働省のバックアップを受けて設立。<br class="br-pc">現在は119社の送り出し機関が加盟しており、学習カリキュラムの提供や日本との交流促進等の活動を<br>行っている。</p>
                </div>
            </div>

        </section>


         <!-- block-contact  -->
		   
	  <section>
	    <div class="inner">
			       <h3 class="title-h3">お問い合わせ</h3>
			         <div id="contact-form" class="contact-form">
						 <h4 class ="title-contact">
							<span>IJCプログラムについて、<br class="br-sp">お気軽にお問い合わせください</span>
							
						 </h4>
                      <?php echo do_shortcode('[mwform_formkey key="3253"]'); ?>
              
              </div>
			  </div>
        </section>
		   
       <div id="footer">
            <div class="footer-inner">
                <div class="footer-top">
                    <div class="logo-footer">
                        <a target="_blank" href="https://biz.ca-m.co.jp/"><img src="https://gms.ca-m.co.jp/wp/wp-content/themes/GMS/lp-cam-messe/images/cam-messe/logo_footer.svg" alt=""></a>
                    </div>
                    <div class="menuList-footer">
                        <div class="menuItem-footer">
                            <a target="_blank" href="https://biz.ca-m.co.jp/sitepolicy">サイトポリシー</a>
                        </div>
                        <div class="menuItem-footer">
                            <a target="_blank" href="https://biz.ca-m.co.jp/privacypolicy">プライバシーポリシー</a>
                        </div>
                    </div>
                    <div class="copyright">
                        <p>© CAMTECH Inc. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>



       </div>


        <div class="footer-ijc">

        </div>

    </div>


</main>
<?php 
	get_footer(); 
	?>
</body>

</html>