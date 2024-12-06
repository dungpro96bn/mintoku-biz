</main>

<footer id="footer-lp">
    <div id="page-top">
        <a href="#">
            <picture>
                <img src="<?php bloginfo('template_url');?>/images/common/back-top-mobi.png" alt="">
            </picture>
        </a>
    </div>
    <div class="inner">
        <div class="box-lp flex">
            <div class="box-logo-lp flex">
                <p class="text-lp">運営会社</p>
                <a href="<?php bloginfo('url');?>">
                     <picture>    
                         <source srcset="<?php bloginfo('template_url');?>/images/lp/lp_logo.svg">
                          <img class="sizes"  src="<?php bloginfo('template_url');?>/images/lp/lp_logo.svg" alt="<?php bloginfo( 'name' ); ?>">
                     </picture>
                </a>
            </div>
            <p class="copy-right">
              © CAMTECH INC. All Rights Reserved.
            </p>
        </div>

    </div>
</footer><!-- #footer -->
</div><!-- .outer -->
<!-- <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.min.js"></script>

<script src="//kitchen.juicer.cc/?color=OvAWC9Xkyx0=" async></script>
<script src="https://kit.fontawesome.com/1ba81f99bb.js" crossorigin="anonymous"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/lity.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/ajaxzip3.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/slick.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script> -->
</body>

</html>



<script type="text/javascript">  



	
	   jQuery(function($) {

			function addMetaTag() {
			  var meta = document.createElement('meta');
			  meta.name = 'robots';
			  meta.content = 'nofollow';
			  document.getElementsByTagName('head')[0].appendChild(meta);
			}
		   addMetaTag();
		  $(".contact-form .btn-submit.btn-back").click(function (event) {
			event.stopPropagation();
			sessionStorage.setItem('submitBack', 'yes');
			history.back();
		  });
			$submitBack = sessionStorage.getItem('submitBack');
			if($submitBack){
				var scroll = $('.contact-block').offset();
				var target_top = scroll.top - 50;
				$('html, body').animate({scrollTop: target_top}, 0, 'swing');
			}

			$(".contact-form .btn-submit.btn-send").click(function () {
			   sessionStorage .removeItem('submitBack');
			});
	 });

// 	document.addEventListener( 'wpcf7submit', function( event ) {
// 		if ( event.detail.contactFormId == '2632' && event.detail.status=='mail_sent') { 
// 			location = 'https://gms.ca-m.co.jp/complete/';
// 		}

// 	}, false );
	
 </script>

