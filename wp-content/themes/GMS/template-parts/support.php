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

$slugs = ["translate", "camcat", "life-support", "maetra", "videostep", "edpoke", "vr"];
?>

<div class="support <?php echo $slug; ?>" <?php if (in_array($slug, $slugs)) { echo 'style="display:none;"';} ?>>
    <div class="inner">
        <div class="reason-content">
            <div class="reason-info">
                <h2 class="heading-block">
                    <span>SUPPORT</span>
                </h2>
                <h3 class="title">導入後のサポート</h3>
                <p class="text">スムーズにご利用いただくために、<br/>各種サポートをご用意しております</p>
                <div class="link-page">
                    <a href="<?php echo home_url(); ?>/report_download/"><span>資料ダウンロード</span><span class="icon">＞</span></a>
                    <a href="<?php echo home_url(); ?>/contact/"><span>お問い合わせ</span><span class="icon">＞</span></a>
                </div>
            </div>
            <div class="reason-image">
                <div class="reasonInfo-list pc-br">
                    <div class="reasonInfo-item">
                        <div class="title">
                            <picture class="image">
                                <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/support-icon01.png 2x">
                                <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/support-icon01.png" alt="">
                            </picture>
                        </div>
                        <div class="number-info">
                            <p class="ttl">サポート満足度 97%<span>※2024年 自社調べ</span></p>
                            <p class="text">お問合わせサポートやウェビナーなどをご用意。満足度97%のサポートで、<br/>経験豊富なスタップが迅速・丁寧に解決します。</p>
                        </div>
                    </div>
                    <div class="reasonInfo-item">
                        <div class="title">
                            <picture class="image">
                                <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/support-icon02.png 2x">
                                <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/support-icon02.png" alt="">
                            </picture>
                        </div>
                        <div class="number-info">
                            <p class="ttl">初心者の方でもご安心ください</p>
                            <p class="text">システムを使い慣れていない方のために、<br/>豊富なマニュアルやサポートをご用意しています。</p>
                        </div>
                    </div>
                    <div class="reasonInfo-item">
                        <div class="title">
                            <picture class="image">
                                <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/support-icon03.png 2x">
                                <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/support-icon03.png" alt="">
                            </picture>
                        </div>
                        <div class="number-info">
                            <p class="ttl">導入支援サービス（有償）</p>
                            <p class="text">導入から運用開始までに必要な設定を専任の担当者がサポートします。前者展開前のテスト運用、車内周知から運用開始まで伴走することで、安心してご利用いただけます。</p>
                        </div>
                    </div>
                </div>
                <div class="reasonInfo-list sp-br">
                    <div class="reasonInfo-item">
                        <div class="title">
                            <p class="t1 icon">導入社数</p>
                        </div>
                        <div class="number-info">
                            <p class="text"><span class="number">2,000</span>社</p>
                            <p class="note sp-br">※2025年2月時点</p>
                        </div>
                    </div>
                    <div class="reasonInfo-item">
                        <div class="title">
                            <p class="t1">事務対応時間</p>
                        </div>
                        <div class="number-info">
                            <p class="text"><span class="number">55</span>%削減</p>
                        </div>
                    </div>
                    <div class="reasonInfo-item">
                        <div class="title">
                            <p class="t1">対応可能言語数</p>
                        </div>
                        <div class="number-info">
                            <p class="text"><span class="number">24</span>言語</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>