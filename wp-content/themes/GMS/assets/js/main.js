jQuery(function ($) {



    //fade
    // AOS.init({
    //     once: true,
    //     duration: 1000,
    //     delay: 0,
    // });


    //scroll
    $(function(){
        $('.scroll').click(function(event){
            event.preventDefault();
            var url = $(this).attr('href');
            var dest = url.split('#');var target = dest[1];
            var target_offset = $('#'+target).offset();
            var target_top = target_offset.top - 50;
            $('html, body').animate({scrollTop:target_top}, 500, 'swing');
            return false;
        });

    });



    $('#toc_container a').on('click', function(e) {
        e.preventDefault();

        var targetId = $(this).attr('href');

        $('html, body').animate({
            scrollTop: $(targetId).offset().top - 70
        }, 500);
    });


    // page-top
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('#page-top').addClass('is-open');
        } else {
            $('#page-top').removeClass('is-open');
        }
    });

    if ($(this).scrollTop() > 200) {
        $('#page-top').addClass('is-open');
    } else {
        $('#page-top').removeClass('is-open');
    }

    //Scroll page top
    $('#page-top a').click(function(event){
        event.preventDefault();
        var speed = 500;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").animate({scrollTop:position}, speed, "swing");
        return false;
    });

    //Open Menu
    $("#header-menu .toggle-menu").click(function () {
        $(this).toggleClass("is-active");
        $("#header-menu .right-header").toggleClass("is-open");
        $("#header-menu .header-action-right").toggleClass("is-openMenu");
    });

    $(".header-action-right .searchForm form, .searchForm .toggle-form").click(function () {
        $("#header-popup").addClass("is-open").addClass("is-search");
    });

    $("#header-popup .close-header").click(function () {
        $("#header-popup").removeClass("is-open").removeClass("is-menu").removeClass("is-search");
    });

    // $(".searchForm .toggle-form").on("click", function () {
    //     var check = $("body");
    //     if(check.hasClass("search-focus")){
    //         $(this).next().toggleClass("is-open");
    //         $("body").removeClass("search-focus");
    //         $(".bg-loading-search").hide();
    //     } else {
    //         $(this).next().toggleClass("is-open");
    //         $("body").addClass("search-focus");
    //         $(".bg-loading-search").show();
    //     }
    // });


    // Scroll header
    $(window).scroll( function(){
        if( $(this).scrollTop() > 200 ){
            $('#header-menu .header-nav').addClass('scroll-header');
            setTimeout(function(){
                $('#header-menu .header-nav').addClass('site-header--opening');
            },100);
        } else {
            $('#header-menu .header-nav').removeClass('scroll-header');
            $('#header-menu .header-nav').removeClass('site-header--opening');
        }
    });
    if($(this).scrollTop() > 200 ){
        $('#header-menu .header-nav').addClass('scroll-header');
        setTimeout(function(){
            $('#header-menu .header-nav').addClass('site-header--opening');
        },100);
    } else {
        $('#header-menu .header-nav').removeClass('scroll-header');
        $('#header-menu .header-nav').removeClass('site-header--opening');
    }

    $(".feature-top .info-content .see-more").on('click', function (){
        $(this).parents(".feature-item").find(".feature-details").slideToggle();
        $(this).toggleClass("is-active");
    })


});