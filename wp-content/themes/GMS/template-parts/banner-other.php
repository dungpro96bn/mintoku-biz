<?php
$post = get_post();
$slug = $post->post_name;
?>

<div class="banner-other <?php echo $slug; ?>">
    <div class="inner">
        <div class="banner-list">
            <div class="banner-item">
                <div class="image-banner">
                    <picture class="image">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image15_pc.png">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image15_pc.png">
                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/top_image15_pc.png" alt="">
                    </picture>
                </div>
                <div class="info">
                    <h4 class="title"><span>お役立ち資料</span></h4>
                    <p>外国人材に関するサービス活用方法や、<br/>特定技能在留外国人推移などの資料が無料でダウンロード可能。</p>
                </div>
                <div class="link-page">
                    <a href="#">詳しく見る ＞</a>
                </div>
            </div>
            <div class="banner-item">
                <div class="image-banner">
                    <picture class="image">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image16_pc.png">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/top_image16_pc.png">
                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/top_image16_pc.png" alt="">
                    </picture>
                </div>
                <div class="info">
                    <h4 class="title"><span>セミナー</span></h4>
                    <p>外国人採用に関するセミナーを<br/>
                        様々なテーマで開催<br/>
                        過去セミナーの動画もダウンロード可能</p>
                </div>
                <div class="link-page">
                    <a href="#">詳しく見る ＞</a>
                </div>
            </div>
        </div>
    </div>
</div>
