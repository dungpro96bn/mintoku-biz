    </main>

    <footer id="footer" class="footer">

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

<script>
    $(window).on('load', function() {
        $('#loading-spinner').remove();
    });
</script>

</body>

</html>