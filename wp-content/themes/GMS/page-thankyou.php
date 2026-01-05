
<script>
    var checkSubmit = localStorage.getItem("sendMail");
    if(!checkSubmit){
        window.location.replace('/');
    }
</script>

<?php get_header('lp'); ?>

<div id="contact-form">

    <div class="banner-page">
        <div class="banner-main">
            <div class="inner">
                <div class="heading-banner">
                    <h1>お問い合わせ</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="complete-main">
        <div class="inner">
            <h3 class="title">送信完了しました</h3>
            <p class="text">お申し込み・お問い合わせありがとうございます。<br/>後日に担当者が確認の上、ご連絡いたしますので、恐れ入りますがしばらくお待ちください。</p>
        </div>
    </div>

    <?php get_template_part("template-parts/banner-other"); ?>

    <?php get_template_part("template-parts/support"); ?>

    <?php get_template_part("template-parts/line-up"); ?>

    <?php get_template_part("template-parts/contact-bottom"); ?>

</div>

<script>

    localStorage.setItem("formReset", "Yes");

    checkSubmit = localStorage.getItem("formSubmit");
    checkSendMail = localStorage.getItem("sendMail");
    if(checkSubmit && checkSendMail){
        setTimeout(function (){
            localStorage.removeItem("formSubmit");
            localStorage.removeItem("sendMail");
        }, 5000)
    }

</script>

<?php get_footer(); ?>