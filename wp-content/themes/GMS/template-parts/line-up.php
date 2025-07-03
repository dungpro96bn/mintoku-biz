<?php
$current_object = get_queried_object();
$slug = '';

if (is_page() || is_single()) {
    $slug = $current_object->post_name;
} elseif (is_category() || is_tag() || is_tax()) {
    $slug = $current_object->slug;
} elseif (is_post_type_archive()) {
    $slug = get_query_var('post_type');
} elseif (is_author()) {
    $slug = $current_object->user_nicename;
} elseif (is_date()) {
    $slug = get_query_var('year') . '-' . get_query_var('monthnum') . '-' . get_query_var('day');
}
?>

<div class="line-up <?php echo $slug; ?>">
    <div class="inner">
        <div class="heading-entry">
            <h2 class="heading-block">
                <span>LINE UP</span>
            </h2>
            <p class="sub-ttl">外国人労働者の採用から帰国まで、全てをカバーするトータルサポート</p>
        </div>
        <div class="line-up-content">
            <ul class="lineUp-list">
                <li class="lineUp-item">
                    <picture class="image">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image06_sp.jpg 2x">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image06_pc.jpg 2x">
                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/top_image06_pc.jpg" alt="">
                    </picture>
                    <div class="info">
                        <h4 class="title">採用サポート</h4>
                        <p class="text">国内外様々な求人を掲載可能な「mintoku work」の運営や、採用プランを一から構築いたします。</p>
                        <div class="link-info">
                            <a href="<?php echo home_url(); ?>/service/recuit-support/">詳しく見る ＞</a>
                        </div>
                    </div>
                </li>
                <li class="lineUp-item">
                    <picture class="image">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image07_sp.jpg 2x">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image07_pc.jpg 2x">
                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/top_image07_pc.jpg" alt="">
                    </picture>
                    <div class="info">
                        <h4 class="title">労務代行サービス</h4>
                        <p class="text">勤怠管理/年末調整/翻訳/通訳など煩雑な作業を依頼できます。</p>
                        <div class="link-info">
                            <a href="<?php echo home_url(); ?>/service/assistant/">詳しく見る ＞</a>
                        </div>
                    </div>
                </li>
                <li class="lineUp-item">
                    <picture class="image">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image08_pc.jpg 2x">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image08_pc.jpg 2x">
                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/top_image08_pc.jpg" alt="">
                    </picture>
                    <div class="info">
                        <h4 class="title">生活支援サービス</h4>
                        <p class="text">安心・安全な生活インフラの準備<br/>緊急対応や緊急の連絡対応など要望に応じて幅広く対応できます！完全成果報酬制で余計なコストはかかりません。</p>
                        <div class="link-info">
                            <a href="<?php echo home_url(); ?>/service/life-support/">詳しく見る ＞</a>
                        </div>
                    </div>
                </li>
                <li class="lineUp-item">
                    <picture class="image">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image09_pc.jpg 2x">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image09_pc.jpg 2x">
                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/top_image09_pc.jpg" alt="">
                    </picture>
                    <div class="info">
                        <h4 class="title">mintoku study</h4>
                        <p class="text">読む・聞くだけでなく、話すというコミュニケーションに向けた専門アプリが利用できます。<br/>試験対策もバッチリ</p>
                        <div class="link-info">
                            <a target="_blank" href="https://edu-poke.jp/global">詳しく見る
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16.72" height="15.726" viewBox="0 0 16.72 15.726">
                                    <defs>
                                        <clipPath id="clip-path">
                                            <rect id="Rectangle_186" data-name="Rectangle 186" width="16.72" height="15.726" fill="none"/>
                                        </clipPath>
                                    </defs>
                                    <g id="Group_449" data-name="Group 449" clip-path="url(#clip-path)">
                                        <path id="Path_180" data-name="Path 180" d="M18.28,58.669H10.342A1.342,1.342,0,0,1,9,57.327V49.389a1.342,1.342,0,0,1,1.342-1.342H18.28a1.342,1.342,0,0,1,1.342,1.342v7.938a1.342,1.342,0,0,1-1.342,1.342" transform="translate(-8.195 -43.748)" fill="#fff"/>
                                        <path id="Path_181" data-name="Path 181" d="M10.085,51.28H2.147A2.15,2.15,0,0,1,0,49.132V41.194a2.15,2.15,0,0,1,2.147-2.147h7.938a2.15,2.15,0,0,1,2.147,2.147v7.938a2.15,2.15,0,0,1-2.147,2.147M2.147,40.657a.537.537,0,0,0-.537.537v7.938a.537.537,0,0,0,.537.537h7.938a.537.537,0,0,0,.537-.537V41.194a.537.537,0,0,0-.537-.537Z" transform="translate(0 -35.554)" fill="#b93636"/>
                                        <path id="Path_182" data-name="Path 182" d="M60.171,10.414a.805.805,0,0,1-.538-1.4l8.236-7.4h-2.8a.805.805,0,0,1,0-1.61h4.9a.805.805,0,0,1,.538,1.4l-9.8,8.8a.8.8,0,0,1-.538.206" transform="translate(-54.054 0.001)" fill="#b93636"/>
                                        <path id="Path_183" data-name="Path 183" d="M169.694,6.013a.805.805,0,0,1-.805-.805V.805a.805.805,0,1,1,1.61,0v4.4a.805.805,0,0,1-.805.805" transform="translate(-153.779)" fill="#b93636"/>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="lineUp-item">
                    <picture class="image">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image10_pc.jpg 2x">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image10_pc.jpg 2x">
                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/top_image10_pc.jpg" alt="">
                    </picture>
                    <div class="info">
                        <h4 class="title">マエトレ</h4>
                        <p class="text">「伝える」と「伝わる」は違います！<br/>多言語対応のカンタン動画でわかりやすく伝わります！</p>
                        <div class="link-info">
                            <a href="<?php echo home_url(); ?>/service/cloud/maetra/">詳しく見る ＞</a>
                        </div>
                    </div>
                </li>
                <li class="lineUp-item">
                    <picture class="image">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image11_pc.jpg 2x">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image11_pc.jpg 2x">
                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/top_image11_pc.jpg" alt="">
                    </picture>
                    <div class="info">
                        <h4 class="title">外国人研修施設<br/>エデュックアカデミー</h4>
                        <p class="text">外国人専用の研修施設です。<br/>
                            入国後講習や集合型研修にご利用いただけます。<br/>
                            専門資格の取得もご相談ください。</p>
                        <div class="link-info">
                            <a target="_blank" href="https://camtech-ea.net/">詳しく見る
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16.72" height="15.726" viewBox="0 0 16.72 15.726">
                                  <defs>
                                    <clipPath id="clip-path">
                                      <rect id="Rectangle_187" data-name="Rectangle 187" width="16.72" height="15.726" fill="none"/>
                                    </clipPath>
                                  </defs>
                                  <g id="Group_451" data-name="Group 451" clip-path="url(#clip-path)">
                                    <path id="Path_184" data-name="Path 184" d="M18.28,58.669H10.342A1.342,1.342,0,0,1,9,57.327V49.389a1.342,1.342,0,0,1,1.342-1.342H18.28a1.342,1.342,0,0,1,1.342,1.342v7.938a1.342,1.342,0,0,1-1.342,1.342" transform="translate(-8.195 -43.748)" fill="#fff"/>
                                    <path id="Path_185" data-name="Path 185" d="M10.085,51.28H2.147A2.15,2.15,0,0,1,0,49.132V41.194a2.15,2.15,0,0,1,2.147-2.147h7.938a2.15,2.15,0,0,1,2.147,2.147v7.938a2.15,2.15,0,0,1-2.147,2.147M2.147,40.657a.537.537,0,0,0-.537.537v7.938a.537.537,0,0,0,.537.537h7.938a.537.537,0,0,0,.537-.537V41.194a.537.537,0,0,0-.537-.537Z" transform="translate(0 -35.554)" fill="#cb468e"/>
                                    <path id="Path_186" data-name="Path 186" d="M60.171,10.414a.805.805,0,0,1-.538-1.4l8.236-7.4h-2.8a.805.805,0,0,1,0-1.61h4.9a.805.805,0,0,1,.538,1.4l-9.8,8.8a.8.8,0,0,1-.538.206" transform="translate(-54.054 0.001)" fill="#cb468e"/>
                                    <path id="Path_187" data-name="Path 187" d="M169.694,6.013a.805.805,0,0,1-.805-.805V.805a.805.805,0,1,1,1.61,0v4.4a.805.805,0,0,1-.805.805" transform="translate(-153.779)" fill="#cb468e"/>
                                  </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>