<div id="lp-contact" class="contact contact-lp">
    <div class="inner">
        <h2 class="title">ぜひお気軽に<br class="sp-br"/>お問合せください。<br/>いつでもご説明致します</h2>
        <h4 style="display: none;" class="lp-form-title"><?php the_title(); ?></h4>
        <div class="contact-block">
            <?php echo do_shortcode('[contact-form-7 id="3981" title="lpdriverstep1"]'); ?>
        </div>
    </div>
</div>

<script>
    jQuery(function ($) {

        window.onload = function() {
            setTimeout(function() {
                var titleText = $('.lp-form-title').text().trim(),
                    urlLP = location.href,
                    titleInput = $('input[name="lp-title"]').val();

                $('input[name="url-lp"]').val(urlLP);

                if(titleInput !== titleText){
                    $('input[name="lp-title"]').val(titleText);
                } else{
                    $('input[name="lp-title"]').val(titleText);
                }
            }, 2000);
        };

    })
</script>