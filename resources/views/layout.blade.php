<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>TRIDENT SHIPPING</title>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon" />

    <!--MAIN-CSS-->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
    <!--MAIN-CSS-->

    <!--FONTS-->
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap&subset=cyrillic,cyrillic-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <!--FONTS-->

    <!--MAIN-JS-->
    <script type="text/javascript" src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <!--MAIN-JS-->

    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <script src="{{ asset('js/custom.js') }}" type="text/javascript"></script>

    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <script src="{{ asset('js/main.js') }}"></script>

    <!--BANNER-->
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="{{ asset('css/banner.css') }}" media="all" />
    <!--BANNER-->

    <!--TEXT-ANIMATION-->
    <script type="text/javascript" src="{{ asset('js/waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <!--TEXT-ANIMATION-->

    <!--PRODUCT SLIDER-->
    <link href="{{ asset('css/product_slider.css') }}" rel="stylesheet" media="all">
    <!--PRODUCT SLIDER-->

    <!--photo Gallery-->
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}" media="screen">
    <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
    <!--photo Gallery-->

    <!--CLIENTELE LOGO SLIDER CSS & JS-->
    <link href="{{ asset('css/clientele_slider.css') }}" rel="stylesheet" media="all">
    <script src="{{ asset('js/slick.js') }}"></script>
    <!--CLIENTELE LOGO SLIDER CSS & JS-->

    <script>
        //paste this code under head tag or in a seperate js file.
        // Wait for window load
        $(window).load(function() {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("fast");;
        });
    </script>

</head>

<body>
    <div class="se-pre-con"></div>

    <div class="nav-bar">
        <a href=""><i class="fas fa-ellipsis-v"></i><span>Menu</span></a>
    </div>

    <header class="header scrolling-header">
        <nav id="nav" class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container relative-nav-container">

                @include ('include.logo')

                <div class="top-right">

                    <nav>
                        <ul>
                            <li><a href="{{ route('home') }}" class="active">Home </a></li>
                            <li><a href="{{ route('aboutus') }}">About us</a></li>
                            <li class="sub-menu">
                                <a href="#">Products <i class="fas fa-angle-down faicon"></i></a>
                                <ul class="children">
                                    <li><a href="{{ route('provision') }}">Provision Stores</a></li>
                                    <li><a href="{{ route('bondstores') }}">Bond Stores</a></li>
                                    <li><a href="{{ route('deckstores') }}">Deck Stores</a></li>
                                    <li><a href="{{ route('cabinstores') }}">Cabin Stores</a></li>
                                    <li><a href="{{ route('enginestore') }}">Engine Stores</a></li>
                                    <li><a href="{{ route('freshwatersupply') }}">Fresh Water Supply</a></li>
                                    <li><a href="{{ route('chemicalsupplies') }}">Chemical Supplies</a></li>
                                    <li><a href="{{ route('lubricatingoilsupplies') }}">Lubricating Oil Supplies</a>
                                    </li>
                                    <li><a href="{{ route('safetyequipments') }}">Safety Equipments</a></li>
                                    <li><a href="{{ route('mooringropes') }}">Mooring Ropes</a></li>
                                    <li><a href="{{ route('secondhandspares') }}">Secondhand Spares</a></li>
                                    <li><a href="{{ route('repair-services') }}">Repair Services</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('services') }}">Services</a></li>
                            <li><a href="{{ route('certifications') }}">certifications</a></li>
                            <li><a href="{{ route('ports') }}">Ports</a></li>

                        </ul>
                    </nav>

                    <div class="contact-btn">
                        <a href="{{ route('contact_us') }}"><button class="top-contact-btn">contact us</button></a>
                    </div>

                </div>

            </div>
        </nav>
    </header>

    @yield('main')

    @include ('include.footer')

    <script type="text/javascript">
        $(document).ready(function(){
            //FANCYBOX
            //https://github.com/fancyapps/fancyBox
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });
        });  
        </script>

    <!--PRODUCT-SCROLLER-->
    <script type="text/javascript">
        $(document).ready(function() {

            $('#itemslider').carousel({
                interval: 3000
            });

            $('.carousel-showmanymoveone .item').each(function() {
                var itemToClone = $(this);

                for (var i = 1; i < 3; i++) {
                    itemToClone = itemToClone.next();

                    if (!itemToClone.length) {
                        itemToClone = $(this).siblings(':first');
                    }

                    itemToClone.children(':first-child').clone()
                        .addClass("cloneditem-" + (i))
                        .appendTo($(this));
                }
            });
        });
    </script>
    <!--PRODUCT-SCROLLER-->


    <!--TEXT-ANIMATION-->
    <script type="text/javascript">
        // Counter 
        jQuery('.statistic-counter').counterUp({
            delay: 100,
            time: 2500
        });
    </script>
    <!--TEXT-ANIMATION-->


    <!--CLIENTELE LOGO SLIDER JS FUNCTION-->
    <script type="text/javascript">
        $(document).ready(function() {
            $('.customer-logos').slick({
                slidesToShow: 7,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 5
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });
    </script>
    <!--CLIENTELE LOGO SLIDER JS FUNCTION-->

    <!--BACK TO TOP-->
    <script type="text/javascript">
        if ($('#back-to-top').length) {
            var scrollTrigger = 100, // px
                backToTop = function() {
                    var scrollTop = $(window).scrollTop();
                    if (scrollTop > scrollTrigger) {
                        $('#back-to-top').addClass('show');
                    } else {
                        $('#back-to-top').removeClass('show');
                    }
                };
            backToTop();
            $(window).on('scroll', function() {
                backToTop();
            });
            $('#back-to-top').on('click', function(e) {
                e.preventDefault();
                $('html,body').animate({
                    scrollTop: 0
                }, 1200);
            });
        }
    </script>
    <!--BACK TO TOP-->

    <script type="text/javascript" src="{{ asset('js/banner.js') }}"></script>

</body>

</html>
