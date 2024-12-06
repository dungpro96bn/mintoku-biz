jQuery(function ($) {
    // userAgent
    const ua = navigator.userAgent;
    const uaLowerCase = navigator.userAgent.toLowerCase();
    const isSp = ua.indexOf('iPhone') > 0 || ua.indexOf('iPod') > 0 || (ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0);
    const isTablet = ua.indexOf('iPad') > 0 || (ua.indexOf('Android') > 0 && ua.indexOf('Mobile') == -1) || ua.indexOf('A1_07') > 0 || ua.indexOf('SC-01C') > 0 || uaLowerCase.indexOf('macintosh') > 0 && 'ontouchend' in document;
    const isPc = (!isSp && !isTablet);

    (function(d) {
        var config = {
                kitId: 'awg6uyv',
                scriptTimeout: 3000,
                async: true
            },
            h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);


    //scroll
    $(function () {
        $('.scroll').click(function (event) {
            event.preventDefault();
            var url = $(this).attr('href');
            var dest = url.split('#');
            var target = dest[1];
            var target_offset = $('#' + target).offset();
            var target_top = target_offset.top;
            $('html, body').animate({scrollTop: target_top}, 500, 'swing');
            return false;
        });
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