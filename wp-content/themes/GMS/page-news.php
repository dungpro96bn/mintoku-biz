<?php get_header();
	global $post;
	global $wp_query;
?>
<div id="allSeminar" class="columns-container">
    <div class="pageTitle">
        <h2><span class="en">NEWS</span>お知らせ一覧</h2>
    </div>
    <div id="breadcrumb" class="breadcrumb">
        <ol>
            <li>
                <a href="<?php echo home_url(); ?>">トップページ</a>&nbsp;&nbsp;<i class="fa-solid fa-chevron-right"></i>
            </li>
            <li>
                <span>お知らせ一覧</span>
            </li>
        </ol>
    </div>
</div>
<?php get_footer(); ?>