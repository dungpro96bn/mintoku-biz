<?php
/**
 * Template Name: lpcomplete
 * Template Post Type: page
 **/
?>

<?php
get_header('lp');
?>

        <div class="content">
			<div class="contact-block">
				<div class="form-complete">
					<div class="title">
						<p class="t1 en">Thank you.</p>
						<p class="ttl">お問い合わせありがとうございました。</p>
						<p class="text">お問い合わせいただいた内容につきましては、<br class="sp-br" />近日中に担当者より返信させていただきます。</p>
					</div>
					<div class="link-page">
						<a href="<?php echo do_shortcode('[homePath]'); ?>" class="btn-link en">Back</a>
					</div>
				</div>
			</div>
        </div>

    </div>

<script>

// 	var checksubmit = localStorage.getItem('submit-form');
// 	if(checksubmit == "confirmlp"){
// 		$(".page-content .content").show();
// 	} else{
// 		var strHref = window.location.href,
// 			href = strHref.replace('completelp', '');
// 		window.location.replace(href);
// 	}
	
// 	$(".page-complete .contact-block .link-page").click(function(){
// 		localStorage.removeItem('submit-form');
// 	});

</script>




<?php
get_footer('lp'); ?>