<?php
    /*
    * Template Name: confirmDownloadSeminarMovie
    * Template Post Type: page
    */
    get_header();

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
<style>
.text-alart01,.text-alart02 {
    color: #dc3232;
    font-size: 1em;
    font-weight: normal;
    display: block;
}

</style>
<main class="main">
    <div id="download">

        <div class="banner-page">
            <div class="banner-main">
                <div class="inner">
                    <div class="heading-banner">
                        <h1>セミナー情報</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="movie-seminar">

            <div class="download-form-header">
                <div class="header-entry">
                    <h2 class="heading-block center">
                        <span class="uppercase">MOVIE DOWNLOAD</span>
                    </h2>
                    <p class="sub-ttl">動画ダウンロード</p>
                </div>
                <div class="dl-inner">
                    <div class="download-selected">
                        <div class="selected-list">
                            <?php
                            if ($_POST['download_id']) {
                                $list_id = $_POST['download_id'];
                                if ($_POST['submitConfirm']) {
                                    $list_id = explode(',', $_POST['download_id']);
                                }
                            } else {
                                $list_id = explode(',', $_GET['id']);
                            }

                            $args = array(
                                'post_type' => 'seminar',
                                'posts_per_page' => -1,
                                'post__in' => $list_id
                            );

                            $posts = get_posts($args); // Lấy danh sách bài viết
                            $arr_link = array(); // Khởi tạo mảng lưu liên kết

                            foreach ($posts as $single_post) {
                                $post_id = $single_post->ID;
                                $post_link = get_permalink($post_id); // Lấy liên kết bài viết
                                $post_title = get_the_title($post_id); // Lấy tiêu đề bài viết
                                $post_content = $single_post->post_content; // Lấy nội dung bài viết

                                // Lấy tên danh mục (category name)
                                $categories = wp_get_post_terms($post_id, 'seminar_featured'); // Lấy danh sách danh mục
                                $category_name = '';
                                if (!is_wp_error($categories) && !empty($categories)) {
                                    $category_name = $categories[0]->name; // Lấy tên danh mục đầu tiên
                                }



                                // Lấy URL của ảnh đại diện (thumbnail)
                                $thumbnail_url = get_the_post_thumbnail_url($post_id, 'full'); // Lấy URL ảnh đại diện

                                // Thêm tiêu đề, liên kết, danh mục và URL ảnh đại diện vào mảng
                                $arr_link[] = $post_title . PHP_EOL . $post_link . PHP_EOL . 'Category: ' . $category_name . PHP_EOL . 'Thumbnail URL: ' . $thumbnail_url . PHP_EOL;

                                ?>

<!--                                --><?php
//                                $movie_links = '';
//                                $number = 1;
//                                if( have_rows('seminar_movie_url', $post_id) ):
//                                    while ( have_rows('seminar_movie_url', $post_id) ) : the_row($post_id);
//                                        $numMovie = $number++;
//                                        $movie_url = get_sub_field('seminar_movie_item');
//                                        if ($movie_url) {
//                                            $movie_links .= '-第'.$numMovie.'部: ' . esc_html($movie_url) . "\n";
//                                        }
//                                    endwhile;
//                                endif;
//                                ?>

                                <?php
                                $movie_data = [];
                                $number = 1;

                                if (have_rows('seminar_movie_url', $post_id)) :
                                    while (have_rows('seminar_movie_url', $post_id)) : the_row();
                                        $url = get_sub_field('seminar_movie_item');
                                        if ($url) {
                                            $movie_data[] = [
                                                'title' => '第' . $number++ . '部',
                                                'url' => esc_url($url)
                                            ];
                                        }
                                    endwhile;
                                endif;

// Đưa dữ liệu vào JS
                                wp_register_script('custom-form-script', get_template_directory_uri() . '/js/custom-form.js', [], null, true);
                                wp_enqueue_script('custom-form-script');
                                wp_localize_script('custom-form-script', 'movieLinksData', $movie_data);
                                ?>

                                <div style="display: none">
                                    <input type="hidden" name="field_title_post" value="<?= esc_attr($post_title); ?>">
                                </div>

                                <div class="selected-list-item">
                                    <div class="image-post">
                                        <?php if ($thumbnail_url) : ?>
                                            <img src="<?= esc_url($thumbnail_url); ?>" alt="<?= esc_attr($post_title); ?>"
                                                 style="max-width: 100%; height: auto;"/>
                                        <?php endif; ?>
                                    </div>
                                    <div class="post-info">
                                        <?php if($category_name) :?>
                                            <div class="category">
                                                <span><?= esc_html($category_name); ?></span>
                                            </div>
                                        <?php endif; ?>
                                        <h4 class="title-post">
                                            <?= esc_html($post_title); ?>
                                        </h4>
                                        <input type="checkbox" hidden="hidden" id="download_id_selected"
                                               class="download_id_selected" name="download_id_selected[]" value="<?= $post_id; ?>"
                                               checked disabled/>
                                    </div>
                                </div>
                                <?php
                            }

                            // Nối các phần tử trong mảng thành chuỗi
                            if (!empty($arr_link)) {
                                $arr_link = implode(PHP_EOL, $arr_link);
                            }
                            ?>
                            <input type="hidden" name="download_item_link" value="<?= $arr_link; ?>">
                        </div>
                    </div>
                </div>
            </div>

            <div class="contactForm <?php echo $slug; ?>">
                <div class="inner">
                    <div class="form-main">
                         <?php echo do_shortcode('[contact-form-7 id="8f7f692" title="お問い合わせフォーム Seminar download movie - step 1"]'); ?>
                    </div>
                </div>
            </div>

            <div class="contact-banner">
                <div class="inner">
                    <div class="info-banner">
                        <p class="title">お電話からの<br/>ご質問・ご相談はこちら</p>
                        <div class="mid-content">
                            <p class="t1"><img class="sizes" width="33" src="<?php bloginfo('template_directory'); ?>/assets/images/top_icon_contact.png" alt=""><span>お問合せ</span></p>
                            <p class="text">営業:10時-18時（月-金)</p>
                        </div>
                        <div class="tel-info">
                            <p>03-6738-9686</p>
                        </div>
                    </div>
                </div>
            </div>

            <?php get_template_part("template-parts/banner-other"); ?>

            <?php get_template_part("template-parts/support"); ?>

            <?php get_template_part("template-parts/line-up"); ?>

            <?php get_template_part("template-parts/contact-bottom"); ?>

        </div>
    </div>
</main>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

    <script>
        jQuery(document).ready(function ($){
            $titlePost = $('input[name="field_title_post"]').val();
            $('input[name="title_post"]').val($titlePost);
        })

        document.addEventListener('DOMContentLoaded', function () {
            if (!Array.isArray(movieLinksData)) return;

            movieLinksData.forEach((item, index) => {
                const input = document.querySelector(`input[name="link_seminar_${index + 1}"]`);
                const title = document.querySelector(`input[name="title_seminar_${index + 1}"]`);
                if (input) {
                    input.value = `${item.url}`;
                }
                if (title) {
                    title.value = `${item.title}: `;
                }
            });
        });

    </script>

<script>
jQuery(document).ready(function($) {
	$("#input_submit").prop('disabled', false);
    $('#contact-form').submit(function(e) {
		console.log('123')
        e.preventDefault();
        var formData = $(this).serialize();
		$('#modal_spin').css("display", "block");
		$("#input_submit").prop('disabled', true);
		
		console.log($('#check_agree').prop('checked'));
		
        $.ajax({
            type: 'POST',
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            data: {
                action: 'submit_contact_form',
                form_data: formData
            },
            success: function(response) {
                console.log(response);
				  $('#contact-form')[0].reset();
				$('#modal_spin').css("display", "none");
				
				let id = <?php echo $_GET['id']; ?>                      
                location = '<?php echo home_url(); ?>/complete_download_seminar_movie?id='+id;
                // Handle success response
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                // Handle error response
            }
        });
    });
	
});
</script>

<script type="text/javascript">
	$("form").on("submit", function (e) {
   var valueinput =  $("input[name='your-name']").val() ;
	 var valueinput02 =  $("input[name='your-kana']").val() ;
		$(".text-alart01").show();
		$(".text-alart02").show();
            if(valueinput !== "") {
                $(".text-alart01").hide()
            }
            else {
                $(".text-alart01").text("必須項目に入力してください。");
            }
		  
		     if(valueinput02 !== "") {
                $(".text-alart02").hide()
            }
            else {
                $(".text-alart02").text("必須項目に入力してください。");
            }
	});
	

	$('input').on('change', function() {
		   var valueinput =  $("input[name='your-name']").val() ;
	     var valueinput02 =  $("input[name='your-kana']").val() ;
            // CHANGED THIS SELECTOR
            if ($('input').is(':checked')) {
				if(valueinput !== "") {
					$(".text-alart01").text('')
				}
				else {
					$(".text-alart01").text("必須項目に入力してください。");
				}

				 if(valueinput02 !== "") {
					$(".text-alart02").text('')
				}
				else {
					$(".text-alart02").text("必須項目に入力してください。");
				}	
            } 
        });
	
	
	 $("input").keyup(function() {
	 var valueinput03 =  $("input[name='your-name']").val() ;
	 var valueinput04 =  $("input[name='your-kana']").val() ;
		if (valueinput03 !== ""){
			$(".text-alart01").hide();
	    }
		 if (valueinput04 !== ""){
			$(".text-alart02").hide();
	    }
   });
	
		
</script>
<?php get_footer(); ?>