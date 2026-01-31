<?php
$page_id = get_the_ID();
$current_object = get_queried_object();
$slug = '';

if (is_page() || is_single()) {
    $slug = $current_object->post_name;
}

// Data cấu hình banner
$bannerData = [
    'recuit-support' => [
        'color' => 'blue',
        'heading' => ['採用後のサポートまで安心', '新しい外国人採用の形'],
    ],
    'assistant' => [
        'color' => 'green',
        'heading' => ['外国人材が働く上で必要な', '手厚いサポートを実現'],
    ],
    'life-support' => [
        'color' => 'orange',
        'heading' => ['新たな外国人雇用の生活に、', '充実とバランスを'],
    ],
    'translate' => [
        'color' => 'green',
        'heading' => ['翻訳通訳サポート'],
    ],
    'immigration' => [
        'color' => 'green',
        'heading' => ['出入国サポート'],
    ],
    'camcat' => [
        'color' => 'green',
        'heading' => ['CAMCAT外国人', '雇用管理サービス'],
    ],
    'maetra' => [
        'color' => 'blue-2',
        'heading' => ['動画とAI翻訳で外国人との', 'コミュニケーションをカンタンに！'],
        'icon-pc' => 'maetra-icon-title01.png',
        'icon-sp' => 'maetra-icon-title01.png',
    ],
    'videostep' => [
        'color' => 'blue-2',
        'heading' => ['母国語の動画で、', '“伝える”から“伝わる”へ'],
        'icon-pc' => 'maetra-icon-title02.png',
        'icon-sp' => 'maetra-icon-title02.png',
    ],
    'vr' => [
        'color' => 'blue-2',
        'heading' => ['前トレ with VRが', '事業者の業績UPに貢献'],
        'icon-pc' => 'maetra-icon-title03.png',
        'icon-sp' => 'maetra-icon-title03.png',
    ],
    'edpoke' => [
        'color' => 'blue-2',
        'heading' => [],
        'icon-pc' => 'maetra-icon-title04.png',
        'icon-sp' => 'maetra-icon-title04-sp.png',
    ],
];

$colorBg = $bannerData[$slug]['color'] ?? 'green';
$headingLines = $bannerData[$slug]['heading'] ?? [];
$iconPc = $bannerData[$slug]['icon-pc'] ?? '';
$iconSp = $bannerData[$slug]['icon-sp'] ?? $iconPc;

$heading = get_field('heading', $page_id);
$description = get_field('description', $page_id);
$image = get_field('banner_image', $page_id);
$templateDir = get_template_directory_uri();

if(esc_attr($slug) == "administrative-support"){
    $class = "assistant";
} else{
    $class = esc_attr($slug);
}

?>

<?php if ($heading || $description || $image) : ?>
    <div class="banner-top bannerBg-<?php echo esc_attr($colorBg); ?> <?php echo $class; ?>">
        <div class="image-content">
            <picture class="image">
                <source media="(max-width: 767px)" srcset="<?php echo $templateDir; ?>/assets/images/main/main-<?php echo esc_attr($slug); ?>-sp.jpg">
                <source media="(min-width: 768px)" srcset="<?php echo $templateDir; ?>/assets/images/main/main-<?php echo esc_attr($slug); ?>-pc.jpg">
                <img class="sizes" src="<?php echo $templateDir; ?>/assets/images/main/main-<?php echo esc_attr($slug); ?>-pc.jpg" alt="">
            </picture>

            <?php if (!empty($headingLines)) : ?>
                <h2 class="heading <?php echo esc_attr($colorBg); ?>">
                    <?php foreach ($headingLines as $index => $line) : ?>
                        <span><?php echo esc_html($line); ?></span>
                        <?php if ($index !== array_key_last($headingLines)) : ?>
                            <br/>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </h2>
            <?php endif; ?>

            <?php if ($slug === 'camcat') : ?>
                <div class="heading-camcat">
                    <div class="logo-title">
                        <img class="sizes" width="206" src="<?php echo $templateDir; ?>/assets/images/cam_cat_image01_pc.png" alt="">
                    </div>
                    <p>専門家無料相談サービス</p>
                </div>
            <?php elseif (in_array($slug, ['maetra', 'videostep', 'vr', 'edpoke'])) : ?>
                <?php if ($slug !== 'edpoke') : ?>
                    <h3 class="sub-title maetra">クラウドサービス</h3>
                    <div class="icon-title-maetra">
                        <picture class="image">
                            <source media="(max-width: 767px)" srcset="<?php echo $templateDir; ?>/assets/images/<?php echo esc_attr($iconSp); ?> 2x">
                            <source media="(min-width: 768px)" srcset="<?php echo $templateDir; ?>/assets/images/<?php echo esc_attr($iconPc); ?>">
                            <img class="sizes" src="<?php echo $templateDir; ?>/assets/images/<?php echo esc_attr($iconPc); ?>" alt="">
                        </picture>
                    </div>
                <?php else : ?>
                    <div class="icon-title-edpoke">
                        <picture class="image">
                            <source media="(max-width: 767px)" srcset="<?php echo $templateDir; ?>/assets/images/<?php echo esc_attr($iconSp); ?> 2x">
                            <source media="(min-width: 768px)" srcset="<?php echo $templateDir; ?>/assets/images/<?php echo esc_attr($iconPc); ?>">
                            <img class="sizes" src="<?php echo $templateDir; ?>/assets/images/<?php echo esc_attr($iconPc); ?>" alt="">
                        </picture>
                    </div>
                <?php endif; ?>
            <?php else : ?>
                <h3 class="sub-title color-<?php echo esc_attr($colorBg); ?>"><?php the_title(); ?></h3>
            <?php endif; ?>
        </div>

        <div class="about-content upgrade">
            <div class="about-info el-<?php echo $class; ?>">
                <h1 class="heading color-<?php echo esc_attr($colorBg); ?>">
                    <?php if ($slug === 'translate') : ?>
                        <p class="uppercase pc-br"><?php echo nl2br($heading); ?></p>
                    <?php else : ?>
                        <p class="uppercase"><?php echo nl2br($heading); ?></p>
                    <?php endif; ?>
                </h1>
                <div class="info"><?php echo wp_kses_post($description); ?></div>
            </div>
            <div class="about-image er-<?php echo $class; ?>">
                <?php if ($image) : ?>
                    <picture class="image">
                        <source media="(max-width: 767px)" srcset="<?php echo esc_url($image['url']); ?> 2x">
                        <source media="(min-width: 768px)" srcset="<?php echo esc_url($image['url']); ?> 2x">
                        <img class="sizes" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </picture>
                <?php endif; ?>
            </div>

            <?php if ($slug === 'edpoke') : ?>
                <div class="edpoke-contact">
                    <div class="btn-contact">
                        <a href="<?php echo home_url('/biz/report_download/'); ?>">資料請求もお問い合わせください<span>＞</span></a>
                    </div>
                    <div class="time">
                        <div class="icon-ttl">
                            <img width="39" src="<?php echo $templateDir; ?>/assets/images/top_icon_contact.png" alt="">
                            <p>お問合せフリーダイアル</p>
                        </div>
                        <p class="t2">営業時間:10時〜18時（月〜金）</p>
                    </div>
                    <p class="tel">0120-530-451</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>
