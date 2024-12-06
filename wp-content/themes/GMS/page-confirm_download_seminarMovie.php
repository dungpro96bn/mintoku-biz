<?php
    /*
    * Template Name: confirmDownloadSeminarMovie
    * Template Post Type: page
    */
    get_header('thanks');
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
    <section id="download">
        <div class="inner movie-seminar">
            <p class="header-logo">
                <a href="<?php bloginfo('url');?>">
                    <picture>
                        <source id="changeMe01" srcset="<?php bloginfo('template_url');?>/images/common/Img_logo_download.svg">
                        <img class="sizes" id="changeMe" src="<?php bloginfo('template_url');?>/images/common/Img_logo_download.svg" alt="<?php bloginfo( 'name' ); ?>">
                    </picture>
                </a>
            </p><!-- .header-logo -->
            <p class="download-list-heading">
                <span class="span-es">MOVIE DOWNLOAD</span><br><span>動画ダウンロード</span>
            </p>
            <p class="title-form">
<!--                 動画の名前が入ります<br> -->
                <?php
                    $post = get_post($_GET['id']); 
                    $post_title = $post->post_title;
                    $post_link = get_the_permalink($post->ID);
                ?>
                <a href="<?php echo $post_link ?>" title="<?php echo $post_title ?>"><?php echo $post_title ?></a>
            </p>
            
            
			<div class="contact-form">
				<div id="response-message"></div>
				 <form id="contact-form">
					 <div class="content-download">
						 <div class="home-form download-form">
						 	<?php                   
							$id = $_GET['id'];
							$post = get_post($id); 
							$post_title = $post->post_title;
							$post_link = get_the_permalink($post->ID);
							$post_movie_url = get_field('seminar_movie_url', $post_id);
						?>
						<?php $count = 1;?>
							 <input type="hidden" class="download_id_selected_video" name="hidden_field" value="<?php echo count($post_movie_url) ;?>" />
							 <?php

							 foreach ($post_movie_url as $key => $value) {
							?>
								 <input type="hidden" class="download_id_selected_video" name="hidden_field_<?php echo $key + 1 ;?>" value="<?php echo $value['seminar_movie_item'] ;?>" />
							 <?php
							}

							 ?>
							  <input type="hidden" class="wpcf7-form-control wpcf7-text" name="title_post" value="<?php echo $post_title; ?>">
							 <ul class="table table-contact">
								 <li>
									 <p class="title-input">会社名<span class="text-reque">必須</span></p>
									 <div class="input-item">
									 <input type="text" class="wpcf7-form-control wpcf7-text" name="your_com" placeholder="会社名を入力してください" required>
									 </div>
								 </li>
								 <li>
									 <p class="title-input">お名前<span class="text-reque">必須</span></p>
									  <div class="input-item">
									 <input type="text" class="wpcf7-form-control wpcf7-text" name="your_name" placeholder="苗字　名前" required>
									 </div>
								 </li>
								 <li>
									 <p class="title-input">メール<br>アドレス<span class="text-reque">必須</span></p>
									 <div class="input-item">
									 <input type="email" class="wpcf7-form-control wpcf7-text" name="your_mail" placeholder="CG@camtechglobal.com" required>
									 </div>
								 </li>
							 </ul>
							 <div class="check_agree" id="check_vld">
								 <label for="check_agree">
									 <input type="checkbox" name="agree" value="1" id="check_agree" required>
									 <span><a href="https://gms.ca-m.co.jp/privacy/">プライバシーポリシー</a> と上記の確認事項に同意する。</span>
								 </label>
							 </div>
							 <div class="btn_submit" id="btn_submit">
							 	<input type="submit" value="送信する" id="input_submit">
								 <div class="modal" id="modal_spin"></div>
							 </div>
							
						 </div>
					 </div>
				</form>
			</div>
            <div class="contact-download">
                <p class="text-01">上記のフォームから送信できない場合は、<a href="mailto:contact@ca-m.com">contact@ca-m.com</a>までメールをお送りください。<br>お電話でのお問い合わせも承っております。</p>
                <div class="dl-phone">
                    <div class="dt-phone flex">
                        <picture class="box-img">
                            <source srcset="<?php bloginfo('template_url');?>/images/top_icon_contact.png">
                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_icon_contact.png" alt="">
                        </picture>
                        <p class="text-phone">お問合せフリーダイアル</p>
                        <p class="number-phone montserrat">0120-530-451</p>
                    </div>
                    <p class="time">営業:10時-18時（月-金）</p>
                </div>
            </div>
        </div>
    </section>
</main>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

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
<?php get_footer('simple'); ?>