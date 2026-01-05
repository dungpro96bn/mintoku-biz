
<script>
    var checkSubmit = localStorage.getItem("formSubmit");
    if(!checkSubmit){
        window.location.replace('/');
    }
</script>

<?php get_header('lp'); ?>

<link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/driver.css">
<div class="page-content">

    <div class="content">
        <div class="contact-block">
            <div class="mw_wp_form_confirm">
                <?php echo do_shortcode('[contact-form-7 id="3982" title="lpdriverstep2"]'); ?>
            </div>
        </div>
    </div>

</div>

<script>

    $(".btn-submit.btn-back .back_lp").click(function (){
        localStorage.setItem("backForm", "Yes");
    });

</script>

<?php get_footer(); ?>




