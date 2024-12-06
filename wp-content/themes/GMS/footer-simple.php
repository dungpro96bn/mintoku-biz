</main>
<footer id="<?php echo isset($args['class']) ? $args['class'] :'footer-simple'; ?>" class="footer">
    <div class="inner">
        <ul class="list-footer">
            <li class="item-logo">
                <a href="<?php bloginfo('url');?>" class ="item01">
                <?php if(!isset($args['footer_logo'])): ?>
                    <picture>
                        <source media="(max-width: 959px)" srcset="<?php bloginfo('template_url');?>/images/common/Img_logo_footer_sp@2x.png 2x">
                        <source media="(min-width: 960px)" srcset="<?php bloginfo('template_url');?>/images/common/Img_logo_footer_pc@2x.png 2x">
                        <img class="sizes" src="<?php bloginfo('template_url');?>/images/common/Img_logo_footer_pc@2x.png" alt="<?php bloginfo( 'name' ); ?>">
                    </picture>
                    <?php else: ?>
                    <picture>
                        <source media="(max-width: 959px)" srcset="<?php echo $args['footer_logo'];?>">
                        <source media="(min-width: 960px)" srcset="<?php echo $args['footer_logo'];?>">
                        <img class="sizes" src="<?php echo $args['footer_logo'];?>" alt="<?php bloginfo( 'name' ); ?>">
                    </picture>
                    <?php endif; ?>
                </a>
                <p class="copyright">© CAM GLOBAL INC.All Rights Reserved.</p>
            </li>
        </ul>
    </div>
</footer><!-- #footer -->
</div><!-- .outer -->

<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.min.js"></script>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/lity.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/picturefill.min.js" async></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/css-vars-ponyfill.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/ajaxzip3.js"></script>

<?php if (is_page('confirm_download')) { ?>
    <script type="text/javascript">
        $(function() {
            document.addEventListener( 'wpcf7mailsent', function( event ) {
                let list_id= [];
                $.each($("input[name='download_id_selected[]']:checked"), function() {
                    list_id.push($(this).val());
                });    
                
                document.cookie = 'ids=' + list_id.join(",");                       
                location = '<?php echo home_url(); ?>/complete_download?ids='+list_id.join(",");
            }, false );
        })
    </script>
<?php } ?>

<?php if (is_page('confirm_download_seminar_movie')) { ?>
    <script type="text/javascript">
        $(function() {
            document.addEventListener( 'wpcf7mailsent', function( event ) {
                let id = <?php echo $_GET['id']; ?>                      
                location = '<?php echo home_url(); ?>/complete_download_seminar_movie?id='+id;
            }, false );
        })
    </script>
<?php } ?>

<?php if (is_page('confirm')) { ?>
    <script type="text/javascript">
        $(function() {
            document.addEventListener( 'wpcf7mailsent', function( event ) {    
                location = '<?php echo home_url(); ?>/contact/complete';
            }, false );            
        })
        $(document).on('click', '.contact_form_back', function() { 
            location = '<?php echo home_url(); ?>/#contact';
        });
    </script>
<?php } ?>

<?php if (is_page('confirm_maetra')) { ?>
    <script type="text/javascript">
        $(function() {
            document.addEventListener( 'wpcf7mailsent', function( event ) {        
                location = '<?php echo home_url(); ?>/complete_maetra';
            }, false );
        })
    </script>
<?php } ?>




<?php wp_footer(); ?>
</body>
</html>