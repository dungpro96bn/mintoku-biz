    </main>

    <footer id="footer" class="footer">
        <div class="inner">
            <div class="footer-content">
                <div class="footer-left">
                    <div class="logo-footer">
                        <a href="<?php echo home_url(); ?>">
                            <picture class="logo">
                                <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/logo-footer.svg">
                                <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/logo-footer.svg" alt="<?php bloginfo('name'); ?>">
                            </picture>
                        </a>
                    </div>
                    <div class="info-company">
                        <h4 class="ttl">株式会社キャムグローバル</h4>
                        <div class="address">
                            <p>〒163-0638<br/>東京都新宿区西新宿1-25-1</p>
                        </div>
                        <div class="privacy">
                            <a href="<?php echo home_url(); ?>/privacy/">プライバシーポリシー</a>
                            <a href="https://cam-global.co.jp/" target="_blank">運営会社</a>
                        </div>
                    </div>
                </div>
                <div class="footer-right">
                    <div class="footer-link-page">
                        <ul class="footer-menu-list">
                            <li class="footer-menu-item">
                                <a href="<?php echo home_url(); ?>/qa/">外国人材Q&A</a>
                            </li>
                            <li class="footer-menu-item">
                                <a href="<?php echo home_url(); ?>/seminar/">セミナー情報</a>
                            </li>
                            <li class="footer-menu-item">
                                <a href="<?php echo home_url(); ?>/news/">お知らせ</a>
                            </li>
                            <li class="footer-menu-item">
                                <a href="<?php echo home_url(); ?>/contact/">お問い合わせ</a>
                            </li>
                        </ul>
                        <ul class="footer-menu-list">
                            <li class="footer-menu-item">
                                <a target="_blank" href="https://mintoku.com/messe/" >オンライン展示会</a>
                            </li>
                            <li class="footer-menu-item">
                                <a target="_blank" href="https://kjtimes.jp/">海外人材タイムズ</a>
                            </li>
                            <li class="footer-menu-item">
                                <a href="<?php echo home_url(); ?>/report_download/?category=manual_video">動画コンテンツ一覧</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-service">
                        <h4 class="title en">SERVICE</h4>
                        <ul class="menu-service-list">
                            <li class="menu-service-item">
                                <a href="<?php echo home_url(); ?>/service/recuit-support/">採用サポート</a>
                            </li>
                            <li class="menu-service-item">
                                <a href="<?php echo home_url(); ?>/service/assistant/">労務代行サービス</a>
                            </li>
                            <li class="menu-service-item">
                                <a href="<?php echo home_url(); ?>/service/life-support/">生活支援サービス</a>
                            </li>
                            <li class="menu-service-item">
                                <a class="link-target" target="_blank" href="https://edu-poke.jp/global">mintoku study</a>
                            </li>
                            <li class="menu-service-item">
                                <a href="<?php echo home_url(); ?>/service/cloud/maetra/">マエトレ</a>
                            </li>
                            <li class="menu-service-item">
                                <a class="link-target" target="_blank" href="https://camtech-ea.net/">エデュックアカデミー</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>© CAM GLOBAL INC.All Rights Reserved.</p>
            </div>
        </div>
    </footer><!-- #footer -->
</div><!-- .outer -->


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

<!--<script>-->
<!--    $(window).on('load', function() {-->
<!--        $('#loading-spinner').remove();-->
<!--    });-->
<!--</script>-->

</body>

</html>