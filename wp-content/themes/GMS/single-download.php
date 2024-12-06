<?php
    get_header();
	global $post, $wp_query;
?>

<style>
#allDownload .dowload-single {
    padding: 100px 0px 150px
}

#allDownload .content-single .box-img {
    width: 45%;
}

#allDownload .content-single .box-img img {
    width: 100% !important;
}

#allDownload .content-single .content-left {
    width: 55%;
    padding-left: 6%;
}

#allDownload .content-single {
    margin-bottom: 80px;
}

#allDownload .content-single .type {
    padding: 12px 20px;
    background: #0B54F7;
    display: inline-block;
    border-radius: 30px;
    color: white;
    margin-bottom: 20px;
    font-size: 18px;
}

#allDownload .content-single .dt-title {
    font-size: 26px;
    font-weight: 600;
    margin-bottom: 20px;
}

#allDownload .content-single .dd-content {
    font-size: 20px;
    line-height: 30px;
    font-weight: 400;
}

#allDownload .link-single {
    display: block;
    padding: 10px 0px;
    text-align: center;
    width: calc(50% - 10px);
    font-size: 20px;
    border-radius: 30px;
    position: relative;
}

#allDownload .box-link {
    width: 90%;
    margin: auto
}

#allDownload .link-single.back {
    border: 1px solid #0B54F7;
    color: #0B54F7;
}

#allDownload .link-single.download-link {
    background: #FF8D00;
    color: white;
}
/* #allDownload .link-single.download-link:after {
    content: "";
    position: absolute;
    background-image: url(../../images/complete_icon.png);
    width: 29px;
    height: 23px;
    top: 13px;
    right: 40px;
} */


@media (max-width: 768px) {
    #allDownload .dowload-single {
        padding: 50px 0px;
    }

    #allDownload .content-single .type {
        padding: 8px 20px;
        margin-bottom: 10px;
        font-size: 14px;
    }

    #allDownload .content-single .box-img {
        width: 100%;
        order: 2;
    }

    #allDownload .content-single .content-left {
        width: 100%;
        padding-left: 0px;
        order: 1;
    }

    #allDownload .content-single .dt-title {
        font-size: 18px;
    }

    #allDownload .dl-text {
        margin-bottom: 20px;
    }

    #allDownload .link-single {
        padding: 5px 0px;
        width: 80%;
        font-size: 16px;
        border-radius: 30px;
        margin: auto;
        margin-bottom: 10px;
    }

    #allDownload .content-single {
        margin-bottom: 30px;
    }
    #allDownload .content-single .dd-content {
        font-size: 16px;
        line-height: 26px;
    }
}
</style>
<div id="allDownload" class="columns-container">
    <div class="pageTitle">
        <h2><span class="en montserrat">REPORT DOWNLOAD</span>外国人採用に関する資料ダウンロード</h2>
    </div>
    <div id="breadcrumb" class="breadcrumb">
        <ol>
            <li>
                <a href="<?php echo home_url(); ?>">トップページ</a>&nbsp;&nbsp;<i class="fa-solid fa-chevron-right"></i>
            </li>
            <li><span>資料ダウンロード</span></li>  
        </ol>
    </div>
    <?php 
        $post_link = get_the_permalink();
        $post_title = get_the_title();
        $post_content = get_the_content();
        if (has_post_thumbnail()) {
            $post_thumbnail = get_the_post_thumbnail(get_the_ID(), 'post-thumbnail', array( 'class' => 'sizes' ));
        } else {
            $post_thumbnail = '<img src="'.bloginfo('template_url').'/images/no_image.jpg" alt="" class="sizes">';
        }
        $post_file = get_field('file', get_the_ID());
        $terms = wp_get_post_terms( get_the_ID(), 'download_cat' );       
    ?>
    <section class="dowload-single">
        <div class="inner">
            <div class="content-single flex">
                <div class="box-img">
                    <picture class="box-img">
                        <?php echo $post_thumbnail; ?>
                    </picture>
                </div>
                <div class="content-left">
                    <?php foreach ( $terms as $term ) : ?>
                        <p class="type"><?php echo $term->name; ?></p>
                    <?php endforeach; ?>
                    
                    <dl class="dl-text">
                        <dt class="dt-title"><?php echo $post_title; ?></dt>
                        <dd class="dd-content"><?php echo $post_content; ?></dd>                        
                    </dl>
                </div>
            </div>
            <div class="box-link flex">
                <a href="<?php echo home_url('/report_download') ?>" title="戻る" class="back link-single">戻る</a>                
                <button class="download-link link-single">資料をダウンロードする</button>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>