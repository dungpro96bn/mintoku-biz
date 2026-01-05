jQuery(function ($) {

    // AOS init
    AOS.init({
        once: true,
        duration: 1000,
        delay: 0,
    });

    // Scroll to target (tạo hàm tái sử dụng)
    function scrollToTarget(targetId, offset = 50, speed = 500) {
        const target = $(targetId);
        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top - offset
            }, speed, 'swing');
        }
    }

    // Smooth scroll - .scroll
    $('.scroll').on('click', function (e) {
        e.preventDefault();
        const targetId = $(this).attr('href').split('#')[1];
        scrollToTarget('#' + targetId);
    });

    // Smooth scroll - TOC
    $('#toc_container a').on('click', function (e) {
        e.preventDefault();
        scrollToTarget($(this).attr('href'), 70);
    });

    // Smooth scroll - page top
    $('#page-top a').on('click', function (e) {
        e.preventDefault();
        const href = $(this).attr('href');
        scrollToTarget(href === '#' || href === '' ? 'html' : href);
    });

    // Page top button toggle
    function togglePageTop() {
        $('#page-top').toggleClass('is-open', $(window).scrollTop() > 200);
    }

    $(window).on('scroll load', function () {
        togglePageTop();

        // Scroll header toggle
        const heightScroll = $(window).width() > 1023 ? 200 : 300;
        if ($(this).scrollTop() > heightScroll) {
            $('#header-menu .header-nav').addClass('scroll-header');
            setTimeout(() => {
                $('#header-menu .header-nav').addClass('site-header--opening');
            }, 100);
        } else {
            $('#header-menu .header-nav').removeClass('scroll-header site-header--opening');
        }
    });

    // Contact form redirect
    $(document).on('wpcf7mailsent', function (event) {
        const redirectMap = {
            2216: 'contact-complete',
            4761: 'complete_report_download',
            4821: 'complete_seminar'
        };

        const targetSlug = redirectMap[event.detail.contactFormId];
        if (targetSlug) {
            const segments = window.location.pathname.split('/').filter(Boolean);
            segments[segments.length - 1] = targetSlug;
            window.location.href = '/' + segments.join('/');
        }
    });

    // Menu toggle
    $('#header-menu .toggle-menu').on('click', function () {
        $(this).toggleClass('is-active');
        $('#header-menu .right-header, #header-menu .header-action-right').toggleClass('is-open is-openMenu');
    });

    // Search popup
    $('.header-action-right .searchForm form, .searchForm .toggle-form').on('click', function () {
        $('#header-popup').addClass('is-open is-search');
    });

    // Close popup
    $('#header-popup .close-header').on('click', function () {
        $('#header-popup').removeClass('is-open is-menu is-search');
    });

    // Feature see more toggle
    $('.feature-top .info-content .see-more').on('click', function () {
        const $featureItem = $(this).closest('.feature-item');
        $featureItem.find('.feature-details').slideToggle();
        $(this).toggleClass('is-active');
        $featureItem.find('.image-content').toggleClass('is-active');
    });

    // Tab action toggle
    $('.tab-action').on('click', function () {
        $('.tab-action').removeClass('is-active');
        $(this).addClass('is-active');
    });

    // Filter submit on tab change
    $('.tabs-list input').on('change', function () {
        $('#filter-form').submit();
    });

    // Q&A toggle
    $('.qa-item .title').on('click', function () {
        $(this).toggleClass('is-open').next().slideToggle();
    });

    $(document).ready(function () {
        var checkFormReset = localStorage.getItem("formReset");
        if(checkFormReset){
            setTimeout(function (){
                const $form = $(".wpcf7-form");
                $form.each(function () {
                    this.reset();
                });
            }, 1200)
        }
    });

    setTimeout(function (){
        localStorage.removeItem("formReset");
    }, 5000);

});