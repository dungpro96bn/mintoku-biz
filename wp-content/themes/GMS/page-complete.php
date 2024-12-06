<?php
	get_header('thanks');
?>
<style>
    body {
        margin-top:0px !important
    }
</style>
<main class="main">
    <div id="complete">
        <div class="pageTitle complete-home">
        <a href="<?php bloginfo('url');?>" class="logo-thaks">
            <picture class="box-img">
                <source srcset="<?php bloginfo('template_url');?>/images/common/logo_confirm.svg">
                <img class="sizes" src="<?php bloginfo('template_url');?>/images/common/logo_confirm.svg" alt="">
            </picture>
        </a>
            <h2><span class="en montserrat">COMPLETE</span>送信完了</h2>
        </div>

        <div class="content">
            <div class="inner-complete">
                <dl class="complete-content">
                    <dt class="dt-top">
                        お問い合わせ<br class="sp-br">ありがとうございます。<br>入力内容は<br class="sp-br">送信されました。
                    </dt>
                    <dd class="dd-bottom">
                        担当者から3営業日以内に<br class="sp-br">ご連絡差し上げます。<br>もうしばらくお待ちください。
                    </dd>
                </dl>
                <div class="complete-contact">
                    <p class="ttl">お急ぎのお客様はこちらへ</p>
                    <div class="txt flex">
                        <div class="txt-left">
                            <div class="text-01">
                                <picture class="box-img">
                                    <source srcset="<?php bloginfo('template_url');?>/images/top_icon_contact.png">
                                    <img class="sizes"
                                        src="<?php bloginfo('template_url');?>/images/top_icon_contact.png" alt="">
                                </picture>
                                <span>お問合せフリーダイアル</span>
                            </div>
                            <p class="text-02">営業:10時-18時（月-金）</p>
                        </div>
                        <p class="txt-right">0120-530-451</p>
                    </div>
                </div>

                <div class="back-link">
                    <a href="<?php bloginfo('url');?>">トップへ戻る</a>
                </div>
            </div>

        </div>
    </div>

</main>
<?php get_footer('simple'); ?>