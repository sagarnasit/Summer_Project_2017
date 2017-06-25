/**
 * Copyright (c) 2015 Paira Shopify Framework, ThemeTidy.com
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * This file can only use Paira Shopify Framework, So if you want this file then buy this Paira Shopify Framework From here ThemeTidy.com.
 * Author -> ThemeTidy.com
 * Email -> admin@themetidy.com
 * Version -> 1.0
 */

/*******************************************************************************
 * Run When Page DOM Is Ready
 *******************************************************************************/
$(function() {
    /***************************************************************************************
     * 0. Smooth Window Scroll
     ***************************************************************************************/
    $.srSmoothscroll({step: 80});
    $('html').niceScroll({
        cursorcolor: "#fb8455",
        zindex: '99999',
        cursorminheight: 60,
        scrollspeed: 80,
        cursorwidth: 10,
        autohidemode: true,
        background: "#696969",
        cursorborder: 'none',
        cursoropacitymax: 0.7,
        cursorborderradius: 0,
        horizrailenabled: false
    });
    $.srSmoothscroll({step: 80});
    $('#paira-quick-view').niceScroll({
        cursorcolor: "#fb8455",
        zindex: '99999',
        cursorminheight: 60,
        scrollspeed: 80,
        cursorwidth: 10,
        autohidemode: true,
        background: "#696969",
        cursorborder: 'none',
        cursoropacitymax: 0.7,
        cursorborderradius: 0,
        horizrailenabled: false
    });
    /***************************************************************************************
     * 1. Modal Dialog (Quick View, Success Message, Welcome Newsletter, Error Massage)
     ***************************************************************************************/
    $(document).on('click', '.paira-quick-view', function(e) {
        e.stopPropagation();
        $('#paira-quick-view').modal('show');
    });
    $('#paira-welcome-newsletter').modal('show');
    /*******************************************************************************
     * 2. Mega Menu
     *******************************************************************************/
    window.prettyPrint && prettyPrint();
    $(document).on('click', '.paira-mega-menu .paira-dropdown-menu', function(e) {
        e.stopPropagation();
    });
    $('.paira-mega-menu .paira-dropdown-menu').parent().hover(function() {
        var menu = $(this).find("ul");
        var menupos = $(menu).offset();
        if (menupos.left + menu.width() > $(window).width()) {
            var newpos = -$(menu).width();
            menu.css({ left: newpos });
        }
    });
    $(document).on('click', '.paira-mega-menu .paira-angle-down', function(e) {
        e.preventDefault();
        $(this).parents('.paira-dropdown').find('.paira-dropdown-menu').toggleClass('active');
    });
    $(document).on('click', '.mega-menu .dropdown-submenu .fa-angle-right', function(p) {
        p.preventDefault();
        $(this).parents('a').next().toggleClass('active-on');
    });
    $(".header-bottom").waypoint({
        handler: function(direction) {
            $("header").toggleClass('paira-sticky', direction=='down');
        }
    });
    /*******************************************************************************
     * 3. Camera Slider
     *******************************************************************************/
    if ($('.paira-camera-slider').length) {
        $('.paira-camera-slider').camera({
            height: '50%',
            loader: 'bar',
            thumbnails: false,
            hover: false,
            opacityOnGrid: false
        });
    }
    /*******************************************************************************
     * 4. Pinterest Gallery
     *******************************************************************************/
    if ($('.paira-pinterest').length) {
        $('.paira-pinterest').dcPinterestFeed({
            id: 'themetidy/themetidy-gather-responsive-shopify-theme',
            results: 10
        });
    }
    /*******************************************************************************
     * 5. Special Product Carousel
     *******************************************************************************/
    if ($('.paira-special-product').length) {
        var spc = $('.paira-special-product').owlCarousel({
            itemsCustom: [
                [1199, 1],
                [992, 1],
                [768, 1],
                [480, 1],
                [300, 1],
                [200, 1]
            ],
            autoPlay: !1,
            slidespeed: 500,
            autoHeight: !0,
            transitionStyle: "backSlide"
        });
        $(".paira-special-product-left").on("click", function() {
            spc.trigger("owl.prev")
        }), $(".paira-special-product-right").on("click", function() {
            spc.trigger("owl.next")
        })
    }
    /*******************************************************************************
     * 6. Related Product Carousel
     *******************************************************************************/
    if ($('.paira-related-product').length) {
        var qv = $('.paira-related-product').owlCarousel({
            itemsCustom:  [
                [1199, 2],
                [992, 2],
                [768, 2],
                [480, 2],
                [300, 1],
                [200, 1]
            ],
            autoPlay: !1,
            slidespeed: 500,
            autoHeight: !0,
            transitionStyle: "backSlide"
        });
        $(".paira-related-product-left").on("click", function() {
            qv.trigger("owl.prev")
        }), $(".paira-related-product-right").on("click", function() {
            qv.trigger("owl.next")
        })
    }
    /*******************************************************************************
     * 7. Single Product Page Item Carousel With Product Elevate Zoom Effect
     *******************************************************************************/
    if ($(".paira-single-product-slider").length) {
        var qvcs = $(".paira-single-product-slider").owlCarousel({
            itemsCustom: [
                [1199, 4],
                [992, 4],
                [768, 3],
                [480, 3],
                [300, 3]
            ],
            autoPlay: !1,
            slidespeed: 1e3,
            autoHeight: !0
        });
        $(".paira-single-product-slider-left").on("click", function() {
            qvcs.trigger("owl.prev")
        }), $(".paira-single-product-slider-right").on("click", function() {
            qvcs.trigger("owl.next")
        })
    }
    /*******************************************************************************
     * 8. Instagram Gallery
     *******************************************************************************/
    if ($('#paira-instagram').length) {
        var feed = new Instafeed({
            target:"paira-instagram",
            get: 'user',
            userId:  1832771695,
            accessToken: '1832771695.1677ed0.c1b652154eed468dbd69acd269e9362a',
            clientId: 'b90445f9eab9471d8ee2fadc0595fe94',
            limit: 8
        });
        feed.run();
    }
    /*******************************************************************************
     * 9. FAQs Page
     *******************************************************************************/
    if($(".paira-faqs-content").length) {
        $('.paira-faqs-content h2').click(function (e) {
            if($(this).next('.paira-faqs-content p').css('display') != 'block') {
                $('.active').slideUp('fast').removeClass('active');
                $(this).next('.paira-faqs-content p').addClass('active').slideDown('fast');
            } else {
                $('.active').slideUp('fast').removeClass('active');
            }
        });
        if($(".paira-faqs-content h2").length) {
            $(".paira-faqs-content h2").append('<i class="fa fa-angle-down"></i>');
        }
    }
});
/*******************************************************************************
 * 10. Quantity
 *******************************************************************************/
$('.quantity').on('click', 'button', function() {
    var data = $(this).data('direction'),
        i = $(this).parent().children('input[type="text"]'),
        val = i.val();
    if (data == "up") {
        val++;
        i.val(val);
    } else if (data == "down") {
        if (val == 1) return;
        val--;
        i.val(val);
    }
});
/*******************************************************************************
 * Run When The Entire Page Full Load
 *******************************************************************************/
$(window).load(function() {
    /*******************************************************************************
     * 11. Scroll Animation Function - Using Animate.css with jQuery Waypoints
     *******************************************************************************/
    function pairaAnimation( items, trigger ) {
        items.each( function() {
            var osElement = $(this),
                osAnimationClass = osElement.attr('data-paira-animation'),
                osAnimationDelay = osElement.attr('data-paira-animation-delay');
            osElement.css({
                '-webkit-animation-delay':  osAnimationDelay,
                '-moz-animation-delay':     osAnimationDelay,
                'animation-delay':          osAnimationDelay
            });
            var osTrigger = ( trigger ) ? trigger : osElement;
            osTrigger.waypoint(function() {
                osElement.addClass('animated').addClass(osAnimationClass);
            },{
                triggerOnce: true,
                offset: '90%'
            });
        });
    }
    pairaAnimation($('.paira-animation'), $('.paira-animation-container'));
});

