<!-- /// seminar interdepend -->
<style>
    #qa-archive .box-interdepend  {
        justify-content: center;
        display: flex;
        width: 100%;
        margin-bottom : 40px;
    }
    #qa-archive .box-interdepend .box-item {
        padding: 10px;
        border:1px solid #ccc;
        display: flex;
        cursor: pointer;
        margin-bottom : 20px;
        align-items: center;
        margin-left:20px
    }
    #qa-archive .box-interdepend .img-logo {
        display: block;
        width: 200px;
    }
    #qa-archive .box-interdepend .img-logo img {
        width: 100%;
    }
    #qa-archive .box-interdepend .link-seminar {
        width: calc(100% - 200px);
        display: block;
        padding-left:10px
    }
</style>

<div class="box-interdepend">   
<?php  if( $interdepend_video): ?>
    <a href="<?php echo $interdepend_video ?>" class="box-item seminar flex" >
            <picture class="img-logo">
                    <source  srcset="<?php bloginfo('template_url');?>/images/seminar_button_01_sp.png">
                    <img class="sizes" src="<?php bloginfo('template_url');?>/images/seminar_button_01_sp.png" alt="">
            </picture>
            <p class="link-seminar">関連セミナー</p>

    </a>
<?php endif; ?>
<?php  if( $interdepend_seminar ): ?>
    <a href="<?php echo $interdepend_seminar ?>" class="box-item dowload flex" >
            <picture class="img-logo">
            <source  srcset="<?php bloginfo('template_url');?>/images/seminar_button_02_sp.png">
                    <img class="sizes" src="<?php bloginfo('template_url');?>/images/seminar_button_02_sp.png" alt="">
            </picture>
            <p class="link-seminar">関連セミナー動画</p>
    </a>
    <?php endif; ?>
</div>