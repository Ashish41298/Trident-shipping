(function () {

    "use strict";
    var Core = {
        initialized: false,
        initialize: function () {

            if (this.initialized)
                return;
            this.initialized = true;
            this.build();
        },
        build: function () {
            // Dropdown menu
            this.cotentslide();
            // Owl carousel init
            this.initOwlCarousel();
            // Stick slider init
            this.initStickSlider();
            // Fixed header 
            this.fixedHeader();
            // Progress bar animation
            this.progressBarAnimation();
            // Wow init
            this.wowInit();
            // Loader
            this.loaderInit();
            // Start video
            this.startVideo();
            // Toggle search
            this.toggleSearch();
            // Top slider init
            this.initSliderPro();
            // Init fancybox
            this.initFancyBox();
            // Init fancybox video
            this.initFancyBoxVideo();

        },
        initFancyBox: function () {            
            $('.fancybox').fancybox({
                mouseWheel: !1,
                autoPlay: !0,
                nextClick: !0,
            });
        },
        initFancyBoxVideo: function () {
            $(".fancybox-video").click(function () {
                $.fancybox({
                    'padding': 0,
                    'autoScale': false,
                    'transitionIn': 'none',
                    'transitionOut': 'none',
                    'title': this.title,
                    'width': 680,
                    'height': 495,
                    'href': this.href.replace(new RegExp("watch\\?v=", "i"), 'v/index.html'),
                    'type': 'swf',
                    'swf': {
                        'wmode': 'transparent',
                        'allowfullscreen': 'true'
                    }
                });

                return false;
            });
        },
        cotentslide: function (options) {

            var scrollPane = $(".scroll-pane"),
                    scrollContent = $(".scroll-content");
                    
                    var items = $(scrollContent).find('.scroll-content-item');
                    var count = $(items).length;                    
                    var counter = 1;
                    setInterval(function(){
                        if (scrollContent.width() > scrollPane.width()) {
                            var setwidth = 0;
                            $.each(items, function(i, a){
                                if((i + 1) <= counter)
                                    setwidth = $(a).width();
                            });
                            if(counter <= (count - 3)){
                                scrollContent.animate({ "left": "-="+setwidth+"px" }, "slow" );
                                // scrollContent.css("margin-left", Math.round(
                                //     '-' + setwidth
                                // ) + "px");
                                console.log('if');
                            } else {
                                console.log('else');
                                counter = 0;
                                var leftval = parseInt($(scrollContent).css('left'));
                                leftval = leftval * (-1);
                                console.log(leftval);
                                scrollContent.animate({ "left": "+="+leftval+"px" }, "slow" );
                                // scrollContent.css("margin-left", Math.round(
                                //     '-' + 0
                                // ) + "px");
                            }
                            console.log(counter);
                            // console.log($('.scroll-content .scroll-content-item:nth-child('+counter+')').width());
                        } else {
                            scrollContent.animate({ "left": "="+0+"px" }, "slow" );
                            // scrollContent.css("margin-left", 0);
                        }        
                        counter++;
                    }, 2000); //safari wants a timeout
            //build slider
            // var scrollbar = $(".scroll-bar").slider({
            //     slide: function (event, ui) {
            //         if (scrollContent.width() > scrollPane.width()) {
            //             console.log(ui.value);
            //             console.log(scrollPane.width());
            //             console.log(scrollContent.width());
            //             scrollContent.css("margin-left", Math.round(
            //                     ui.value / 100 * (scrollPane.width() - scrollContent.width())
            //                     ) + "px");
            //         } else {
            //             scrollContent.css("margin-left", 0);
            //         }
            //     }
            // });
            //append icon to handle
            // var handleHelper = scrollbar.find(".ui-slider-handle")
            //         .mousedown(function () {
            //             scrollbar.width(handleHelper.width());
            //         })
            //         .mouseup(function () {
            //             scrollbar.width("100%");
            //         })
            //         .append("<span class='ui-icon ui-icon-grip-dotted-vertical'></span>")
            //         .wrap("<div class='ui-handle-helper-parent'></div>").parent();
            // //change overflow to hidden now that slider handles the scrolling
            scrollPane.css("overflow", "hidden");
            //size scrollbar and handle proportionally to scroll distance
            function sizeScrollbar() {
                var remainder = scrollContent.width() - scrollPane.width();
                var proportion = remainder / scrollContent.width();
                var handleSize = scrollPane.width() - (proportion * scrollPane.width());
                scrollbar.find(".ui-slider-handle").css({
                    width: handleSize,
                    "margin-left": -handleSize / 2
                });
                handleHelper.width("").width(scrollbar.width() - handleSize);
            }

            //change handle position on window resize
            $(window).resize(function () {
                // sizeScrollbar();
            });
            //init scrollbar size
            // setTimeout(sizeScrollbar, 10); //safari wants a timeout

        },
        initStickSlider: function (options) {
            $(".enable-stick-slider").each(function (i) {
                var $stick = $(this);
                $stick.slick({
                    responsive: [
                        {
                            breakpoint: 500,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
            });

        },
        initOwlCarousel: function (options) {

            $(".enable-owl-carousel").each(function (i) {
                var $owl = $(this);
                var navigationData = $owl.data('navigation');
                var paginationData = $owl.data('pagination');
                var singleItemData = $owl.data('single-item');
                var autoPlayData = $owl.data('auto-play');
                var transitionStyleData = $owl.data('transition-style');
                var mainSliderData = $owl.data('main-text-animation');
                var afterInitDelay = $owl.data('after-init-delay');
                var stopOnHoverData = $owl.data('stop-on-hover');
                var min600 = $owl.data('min600');
                var min800 = $owl.data('min800');
                var min1200 = $owl.data('min1200');
                $owl.owlCarousel({
                    navigation: navigationData,
                    pagination: paginationData,
                    singleItem: singleItemData,
                    autoPlay: autoPlayData,
                    transitionStyle: transitionStyleData,
                    stopOnHover: stopOnHoverData,
                    navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                    itemsCustom: [
                        [0, 1],
                        [600, min600],
                        [800, min800],
                        [1200, min1200]
                    ],
                    afterInit: function (elem) {
                        if (mainSliderData) {
                            setTimeout(function () {
                                $('.main-slider_zoomIn').css('visibility', 'visible').removeClass('zoomIn').addClass('zoomIn');
                                $('.main-slider_fadeInLeft').css('visibility', 'visible').removeClass('fadeInLeft').addClass('fadeInLeft');
                                $('.main-slider_fadeInLeftBig').css('visibility', 'visible').removeClass('fadeInLeftBig').addClass('fadeInLeftBig');
                                $('.main-slider_fadeInRightBig').css('visibility', 'visible').removeClass('fadeInRightBig').addClass('fadeInRightBig');
                            }, afterInitDelay);
                        }
                    },
                    beforeMove: function (elem) {
                        if (mainSliderData) {
                            $('.main-slider_zoomIn').css('visibility', 'hidden').removeClass('zoomIn');
                            $('.main-slider_slideInUp').css('visibility', 'hidden').removeClass('slideInUp');
                            $('.main-slider_fadeInLeft').css('visibility', 'hidden').removeClass('fadeInLeft');
                            $('.main-slider_fadeInRight').css('visibility', 'hidden').removeClass('fadeInRight');
                            $('.main-slider_fadeInLeftBig').css('visibility', 'hidden').removeClass('fadeInLeftBig');
                            $('.main-slider_fadeInRightBig').css('visibility', 'hidden').removeClass('fadeInRightBig');
                        }
                    },
                    afterMove: sliderContentAnimate,
                    afterUpdate: sliderContentAnimate,
                });
            });
            function sliderContentAnimate(elem) {
                var $elem = elem;
                var afterMoveDelay = $elem.data('after-move-delay');
                var mainSliderData = $elem.data('main-text-animation');
                if (mainSliderData) {
                    setTimeout(function () {
                        $('.main-slider_zoomIn').css('visibility', 'visible').addClass('zoomIn');
                        $('.main-slider_slideInUp').css('visibility', 'visible').addClass('slideInUp');
                        $('.main-slider_fadeInLeft').css('visibility', 'visible').addClass('fadeInLeft');
                        $('.main-slider_fadeInRight').css('visibility', 'visible').addClass('fadeInRight');
                        $('.main-slider_fadeInLeftBig').css('visibility', 'visible').addClass('fadeInLeftBig');
                        $('.main-slider_fadeInRightBig').css('visibility', 'visible').addClass('fadeInRightBig');
                    }, afterMoveDelay);
                }
            }
        },
        fixedHeader: function (options) {
            if ($(window).width() > 767) {
                // Fixed Header
                var topOffset = $(window).scrollTop();
                if (topOffset > 0) {
                    $('body').addClass('fixed-header');
                }
                $(window).on('scroll', function () {
                    var fromTop = $(this).scrollTop();
                    if (fromTop > 0) {
                        $('body').addClass('fixed-header');
                    } else {
                        $('body').removeClass('fixed-header');
                    }

                });
            }
        },
        progressBarAnimation: function (options) {
            $('.skills').waypoint(function () {
                $('.skills-animated').each(function () {
                    var persent = $(this).attr('data-percent');
                    $(this).find('.progress').animate({
                        width: persent + '%'
                    }, 300);
                });
            }, {
                offset: '100%',
                triggerOnce: true
            });
        },
        wowInit: function () {
            var scrollingAnimations = $('body').data("scrolling-animations");
            if (scrollingAnimations) {
                new WOW().init();
            }
        },
        loaderInit: function () {
            $(window).on('load', function () {
                var $preloader = $('#page-preloader'),
                        $spinner = $preloader.find('.spinner');
                $spinner.fadeOut();
                $preloader.delay(350).fadeOut(800);
            });
        },
        startVideo: function () {
            if (!Modernizr.touch) {
                $(".video-play").mb_YTPlayer();
            }
        },
        toggleSearch: function () {
            $(document).on('click', "#search-open, #search-close", function () {
                $('.header').toggleClass('search-open');
            });
        },
        initSliderPro: function () {
            if ($('#topSlider').length > 0) {

                $('#topSlider').sliderPro({
                    width: 1600,
                    height: 800,
                    fade: true,
                    arrows: true,
                    buttons: false,
                    waitForLayers: true,
                    thumbnailPointer: false,
                    touchSwipe: false,
                    autoplay: true,
                    autoScaleLayers: false,
                    captionFadeDuration: 100

                });

            }
        }
    };
    Core.initialize();
})();

/*----------------------------------------------------*/
/*	Accordion
/*----------------------------------------------------*/

	var $accor = $('.accordion');

	$accor.each(function() {
		$(this).addClass('ui-accordion ui-widget ui-helper-reset');
		$(this).find('h3').addClass('ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all');
		$(this).find('div').addClass('ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom');
		$(this).find("div").hide().first().show();
		$(this).find("h3").first().removeClass('ui-accordion-header-active ui-state-active ui-corner-top').addClass('ui-accordion-header-active ui-state-active ui-corner-top');
		$(this).find("span").first().addClass('ui-accordion-icon-active');
	});

	$trigger = $accor.find('h3');

	$trigger.on('click', function(e) {
		var location = $(this).parent();

	   if( $(this).next().is(':hidden') ) {
			$triggerloc = $('h3',location);
			$triggerloc.removeClass('ui-accordion-header-active ui-state-active ui-corner-top').next().slideUp(300);
			$triggerloc.find('span').removeClass('ui-accordion-icon-active');
			$(this).find('span').addClass('ui-accordion-icon-active');
			$(this).addClass('ui-accordion-header-active ui-state-active ui-corner-top').next().slideDown(300);
		}
		e.preventDefault();
	});