<?php
    get_header();
	global $post, $wp_query;
?>

<div id="allDownload" class="columns-container">
    <div class="pageTitle">
        <h2><span class="en montserrat">REPORT DOWNLOAD</span>外国人採用に関する資料ダウンロード</h2>
    </div>
    <div id="breadcrumb" class="breadcrumb">
        <ol>
            <li>
                <a href="<?php echo home_url(); ?>">トップページ</a>&nbsp;&nbsp;<i class="fa-solid fa-chevron-right"></i>
            </li>
            <li>
                <span>資料ダウンロード</span>
            </li>
        </ol>
    </div>

    <section class="dowload">
        <div class="inner">
            <div class="content-dowload">
                <dl class="title-page-dowload">
                    <dt class="dt-title-page">ホワイトペーパー・調査<br class="sp-br">レポート資料</dt>
                   <dd class="dd-title-page">外国人材に関するサービス活用方法や、<br class="sp-br">特定技能在留外国人推移などの資料を<br class="sp-br">ご用意しました。<br>サービスご検討や調査を<br class="sp-br">無料でダウンロードいただけます。</đ>
                </dl>
                <div class="tab_box">
                    <div class="btn_area">
                        <p class="tab_btn active">ホワイトペーパー</p>
                        <p class="tab_btn">調査レポート</p>
                    </div>
                    <div class="panel_area">
                        <div class="tab_panel active">
                            <form method="POST" action="<?php bloginfo('url');?>/confirm_download">
                                <ul class="download-list flex">
                                    <?php
                                    if (isset($_COOKIE['ids'])) {
                                        unset($_COOKIE['ids']);
                                        setcookie('ids', '', time() - 3600, '/'); // empty value and old timestamp
                                    }

                                    $args = array(
                                        'post_type' => array( 'download'),
                                        'posts_per_page' => -1,
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'download_cat',
                                                'field'    => 'slug',
                                                'terms'    => 'white_paper',
                                            ),
                                        ),
                                    );
                                    $posts = get_posts($args);
            

                                    foreach($posts as $post) {
                                        $post_id = $post->ID;
                                        $post_link = get_the_permalink($post_id);
                                        $post_title = get_the_title($post_id);
                                        $post_texts = apply_filters( 'the_content', $post->post_content );
                                        $str = strip_tags($post_texts);
                                        $count =50;
                                        $length = mb_strlen($str,'utf-8');
                                        if ($length>$count) {
                                            $post_texts = mb_substr($str,0,$count,'utf-8').'...';
                                        } else{
                                            $post_texts = $str;
                                        }
                                        if (has_post_thumbnail($post_id)) {  
                                            $post_thumbnail = get_the_post_thumbnail($post_id, 'post-thumbnail', array( 'class' => 'sizes' ));
                                        } else {
                                            $post_thumbnail = '<img src="'.bloginfo('template_url').'/images/no_image_download.jpg" alt="" class="sizes">';
                                        }
                                        ?>
                                        <li class="download-item">                                            
                                            <a href="<?= esc_html( $post_link ); ?>" title="<?= esc_html( $post_title ); ?>">
                                                <div class="box-img"><?= $post_thumbnail; ?></div>
                                                <dl class="dl-download">
                                                    <dt class="dt-download"><span><?= esc_html( $post_title ); ?></span></dt>
                                                    <dd class="dd-download"><?= esc_html( $post_texts ); ?></dd>
                                                </dl>
                                            </a>
                                            <p class="check">
                                              <input type="checkbox" id="<?= esc_html( $post_id ); ?>" class="download_id" name="download_id[]" value="<?= $post_id; ?>" autocomplete="off" />
                                              <label for="<?= esc_html( $post_id ); ?>"> 選択する</label>
                                            </p>
                                        </li>
							            <?php
                                    }
                                    ?>
                                </ul>
                                <div class="download-selected-bulk">
                                    <input type="submit" id="download-selected" name="download-selected" class="btn-submit" value="選択した資料を一括ダウンロードする" disabled="disabled"/>
                                </div>
                            </form>
                        </div>

                        <div class="tab_panel">
                            <form method="POST" action="<?php bloginfo('url');?>/confirm_download">
                                <ul class="download-list flex">
                                    <?php
                                    $args = array(
                                        'post_type' => array( 'download'),
                                        'posts_per_page' => -1,
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'download_cat',
                                                'field'    => 'slug',
                                                'terms'    => 'report',
                                            ),
                                        ),
                                    );
                                    $posts = get_posts($args);

                                    foreach($posts as $post) {
                                        $post_id = $post->ID;
                                        $post_link = get_the_permalink($post_id);
                                        $post_title = get_the_title($post_id);
                                        $post_texts = apply_filters( 'the_content', $post->post_content );
                                        $str = strip_tags($post_texts);
                                        $count = 60;
                                        $length = mb_strlen($str,'utf-8');
                                        if ($length>$count) {
                                            $post_texts = mb_substr($str,0,$count,'utf-8').'...';
                                        } else{
                                            $post_texts = $str;
                                        }
                                        if (has_post_thumbnail($post_id)) {
                                            $post_thumbnail = get_the_post_thumbnail($post_id, 'post-thumbnail', array( 'class' => 'sizes' ));
                                        } else {
                                            $post_thumbnail = '<img src="'.bloginfo('template_url').'/images/no_image_download.jpg" alt="" class="sizes">';
                                        }
                                        ?>
                                        <li class="download-item">
                                            <a href="<?= esc_html( $post_link ); ?>" title="<?= esc_html( $post_title ); ?>">
                                                <div class="box-img"><?= $post_thumbnail; ?></div>
                                                <dl class="dl-download">
                                                    <dt class="dt-download"><span><?= esc_html( $post_title ); ?></span></dt>
                                                    <dd class="dd-download"><?= esc_html( $post_texts ); ?></dd>
                                                </dl>
                                            </a>
                                            <p class="check">
                                            <input type="checkbox" id="<?= esc_html( $post_id ); ?>" class="download_id" name="download_id[]" value="<?= $post_id; ?>" autocomplete="off" />
                                              <label for="<?= esc_html( $post_id ); ?>"> 選択する</label>
                                            </p>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                                <div class="download-selected-bulk">
                                    <input type="submit" id="download-selected" name="download-selected" class="btn-submit" value="選択した資料を一括ダウンロードする" disabled="disabled" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>