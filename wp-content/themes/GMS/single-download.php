<?php
    get_header();
	global $post, $wp_query;
?>

<style>
#allDownload .dowload-single {
    padding: 120px 0px 150px
}

#allDownload .content-single .box-img {
    width: 100%;
    max-width: 600px;
    margin: 0 auto 30px;
}

#allDownload .content-single .box-img img {
    width: 100% !important;
}

#allDownload .content-single .content-left {
    width: 100%;
}

#allDownload .content-single {
    margin-bottom: 80px;
}

#allDownload .content-single .type {
    padding: 12px 20px;
    background: #E48121;
    display: inline-block;
    border-radius: 30px;
    color: white;
    margin-bottom: 20px;
    font-size: 18px;
    line-height: 1;
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
    font-size: 20px;
    border-radius: 30px;
    position: relative;
}

#allDownload .box-link {
    width: 100%;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(2,1fr);
    column-gap: 40px;
    max-width: 680px;
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
        padding: 200px 0px 60px;
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
    #allDownload .box-link{
        grid-template-columns: repeat(1,1fr);
        row-gap: 15px;
        max-width: 300px;
        margin: auto;
    }
    #allDownload .link-single {
        width: 100%;
        padding: 5px 0px;
        font-size: 16px;
        border-radius: 30px;
        margin: auto;
        height: 50px;
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
                    
                    <div class="dl-text">
                        <h1 class="dt-title"><?php echo $post_title; ?></h1>
                        <div class="dd-content"><?php echo $post_content; ?></div>
                    </div>
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