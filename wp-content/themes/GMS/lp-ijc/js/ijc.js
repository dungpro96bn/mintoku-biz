jQuery(function ($) {
    // userAgent
    const ua = navigator.userAgent;
    const uaLowerCase = navigator.userAgent.toLowerCase();
    const isSp = ua.indexOf('iPhone') > 0 || ua.indexOf('iPod') > 0 || (ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0);
    const isTablet = ua.indexOf('iPad') > 0 || (ua.indexOf('Android') > 0 && ua.indexOf('Mobile') == -1) || ua.indexOf('A1_07') > 0 || ua.indexOf('SC-01C') > 0 || uaLowerCase.indexOf('macintosh') > 0 && 'ontouchend' in document;
    const isPc = (!isSp && !isTablet);

 
    // only IE
    if (ua.indexOf('Trident') !== -1) {
        $('#toyota .sizes').each(function () {
            var objElement = $(this);
            var objOmg = new Image();
            objOmg.src = objElement.attr('src');
            if (objOmg.width != 0) {
                objElement.css({'width': objOmg.width / 2});
            }
        });
    }


    //scroll
    $(function(){
        $('.scroll').click(function(event){event.preventDefault();
            var url = $(this).attr('href');
            var dest = url.split('#');var target = dest[1];
            var target_offset = $('#'+target).offset();
            var target_top = target_offset.top;
            $('html, body').animate({scrollTop:target_top}, 500, 'swing');
            return false;});
    });

	var checkComplete = document.getElementsByClassName('mw_wp_form_complete');
    if (checkComplete.length > 0) {
        var scroll = $('#contact-form').offset();
        var target_top = scroll.top;
        $('html, body').animate({scrollTop: target_top}, 0, 'swing');
    }
	
	var checkError = document.getElementsByClassName('error');
    if (checkError.length > 0) {
        var scroll = $('#contact-form').offset();
        var target_top = scroll.top;
        $('html, body').animate({scrollTop: target_top}, 0, 'swing');
    }
	
	var checkConfirm = document.getElementsByClassName('mw_wp_form_confirm');
    if (checkConfirm.length > 0) {
        var scroll = $('#contact-form').offset();
        var target_top = scroll.top;
        $('html, body').animate({scrollTop: target_top}, 0, 'swing');
    }


});