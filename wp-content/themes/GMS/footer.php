</main>
<footer id="footer" class="footer">
    <div id="page-top">
        <a href="#">
            <picture>
                <img src="<?php bloginfo('template_url');?>/images/common/back-top-mobi.png" alt="">
            </picture>
        </a>
    </div>
    <div class="inner">
        <ul class="list-footer">
            <li class="item-logo">
                <a href="<?php bloginfo('url');?>" class="item01">
                    <picture>
                        <source media="(max-width: 959px)" srcset="<?php bloginfo('template_url');?>/images/common/Img_logo_footer_sp@2x.png 2x">
                        <source media="(min-width: 960px)" srcset="<?php bloginfo('template_url');?>/images/common/Img_logo_footer_pc@2x.png 2x">
                        <img class="sizes" src="<?php bloginfo('template_url');?>/images/common/Img_logo_footer_pc@2x.png" alt="<?php bloginfo( 'name' ); ?>">
                    </picture>
                </a>
                <a href="<?php bloginfo('url');?>/privacy" class="policy item02"><span>プライバシーポリシー</span></a>
<!--                 <a href="https://biz.ca-m.co.jp/" class="operating-company item03"><span>運営会社</span></a> -->
				 <a href="https://cam-global.co.jp" class="operating-company item03"><span>運営会社</span></a>
                <p class="copyright">© CAM GLOBAL INC.All Rights Reserved.</p>
            </li>
            <li class="item-service">
                <h4 class="title-service">サービス紹介</h4>
                <div class="item-nav-footer">
                    <a href="<?php bloginfo('url');?>/service/cloud/"><span>Techサポート</span></a>
                </div>
                <div class="item-nav-footer mobi">
                    <a href="<?php bloginfo('url');?>/service/cloud/maetra/"><span>&mdash;出入国サポート</span></a>
                </div>
                <div class="item-nav-footer">
                    <a href="<?php bloginfo('url');?>/service/assistant/"><span>Jobサポート</span></a>
                </div>
                <div class="item-nav-footer"><a href="<?php bloginfo('url');?>/service/life-support/"><span>Lifeサポート</span></a></div>
                <div class="item-nav-footer mobi">
                    <a href="<?php bloginfo('url');?>/service/life-support/"><span>&mdash;Lifeサポート</span></a>
                </div>
                <div class="item-nav-footer">
                    <a href="<?php bloginfo('url');?>/service/consultation/"><span>Legalサポート</span></a>
                </div>
            </li>
            <li class="other-page">
                <div class="item-nav-footer">
                    <a href="<?php bloginfo('url');?>/case_study"><span>導入事例一覧</span></a>
                </div>
                <div class="item-nav-footer"><a href="<?php bloginfo('url');?>/qa"><span>外国人材Q&A</span></a></div>
                <div class="item-nav-footer">
                    <a href="<?php bloginfo('url');?>/seminar"><span>セミナー情報</span></a>
                </div>
                <div class="item-nav-footer">
                    <a href="<?php bloginfo('url');?>/news"><span>お知らせ</span></a>
                </div>
                <div class="item-nav-footer">
                    <a href="<?php bloginfo('url');?>/report_download"><span>資料ダウンロード</span></a>
                </div>
            </li>
            <li class="box-phone">
                <div class="advise">
                    <a href="<?php bloginfo('url');?>/#contact"><span>お問い合わせ・ご相談はこちら</span></a>
                </div>
                <p class="freecall destop">
                    <picture>
                        <source srcset="<?php bloginfo('template_url');?>/images/common/call_footer.png">
                        <img class="sizes" src="<?php bloginfo('template_url');?>/images/common/call_footer.png" alt="">
                    </picture>お問合せ
                </p>
                <p class="tel destop montserrat">03-6738-9686</p>
                <p class="time-work destop">営業:10時-18時（月-金）</p>
            </li>
        </ul>
    </div>
</footer><!-- #footer -->
</div><!-- .outer -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/1ba81f99bb.js" crossorigin="anonymous"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/lity.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/ajaxzip3.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/slick.min.js"></script>
 <script src="//kitchen.juicer.cc/?color=OvAWC9Xkyx0=" async></script> 

<?php if (is_home() || is_front_page()) { ?>
<script type="text/javascript">
$(function() {
    document.addEventListener('wpcf7submit', function(event) {
        let category = $("input[name=category]:checked").val();
        let lname = ($("input[name=lname]").val());
        let kana = ($("input[name=kana]").val());
        let comname = ($("input[name=comname]").val());
        let email = ($("input[name=your-email]").val());
        let tel = ($("input[name=tel]").val());
        let contact = ($("textarea[name=contact]").val());

        document.cookie = 'category=' + category;
        document.cookie = 'lname=' + lname;
        document.cookie = 'kana=' + kana;
        document.cookie = 'comname=' + comname;
        document.cookie = 'email=' + email;
        document.cookie = 'tel=' + tel;
        document.cookie = 'contact=' + contact;
    }, false);   
});
</script>
<?php } ?>

<?php if (is_post_type_archive('download')) { ?>
<script type="text/javascript">
    $(document).on('click', '.download_id', function() {
        if (this.checked) {
            this.setAttribute('checked', '');
        } else {
            this.removeAttribute('checked', 'checked');
        }
    });

    jQuery(function($) {
        (function() {
            const form = document.querySelector(".download-list");
            const checkboxes = form.querySelectorAll('input[type=checkbox]');
            const checkboxLength = checkboxes.length;
            const firstCheckbox = checkboxLength > 0 ? checkboxes[0] : null;

            function init() {
                if (firstCheckbox) {
                    for (let i = 0; i < checkboxLength; i++) {
                        checkboxes[i].addEventListener('change', checkValidity);
                    }
                    checkValidity();
                }
            }

            function isChecked() {
                for (let i = 0; i < checkboxLength; i++) {
                    if (checkboxes[i].checked) return true;
                }
                return false;
            }

            function checkValidity() {
                const errorMessage = !isChecked() ? 'At least one checkbox must be selected !' : '';
                firstCheckbox.setCustomValidity(errorMessage);
            }
            init();
        })();
    });
</script>
<?php } ?>

<?php if (is_singular('download')) { ?>
    <script type="text/javascript">     
        $(document).on('click', '.download-link', function() {            
            location = '<?php echo home_url(); ?>/confirm_download?id=<?php echo get_the_ID(); ?>';
        });   
    </script>
<?php } ?>

<?php if (is_singular('seminar')) { ?>
    <script type="text/javascript">     
        $(document).on('click', '#link-movie', function() {            
            location = '<?php echo home_url(); ?>/confirm_download_seminar_movie?id=<?php echo get_the_ID(); ?>';
        });   


        
    </script>
<?php } ?>
<?php if (is_post_type_archive('seminar')) { ?>
    <script type="text/javascript">  
    $(window).on('load resize', function () {
        if (parseInt($(window).width()) < 768) {
                $(document).ready(function() {
                    $('#allSeminar .all-seminar .list-columns').slick({
                        dots: false,
                        speed: 1000,
                        autoplay:true,
                        autoplaySpeed: 6000,
                        pauseOnHover: false,
                        pauseOnFocus: false,
                        arrows: false,
                        accessibility: false,
                    });
               });
            }
    });
		
     </script>
<?php } ?>
<?php wp_footer(); ?>
</body>

</html>