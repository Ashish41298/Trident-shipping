@extends('layout')

@section('main')
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light"
        style="background-image:url({{asset('images/about_banner.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1>Provision Stores</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Products</a></li>
                        <li class="active">Provision Stores</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 filter-button-box text-center">
                <button class="btn btn-default filter-button" data-filter="all">All</button>
                <button class="btn btn-default filter-button" data-filter="fresh">FRESH</button>
                <button class="btn btn-default filter-button" data-filter="frozen">Frozen</button>
                <button class="btn btn-default filter-button" data-filter="beverages">Beverages</button>
                <button class="btn btn-default filter-button" data-filter="dry">Dry</button>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 application-box">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Vegetables.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Vegetables.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Vegetables</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt="" src="{{ asset('images/gallery/Herbs.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Herbs.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Herbs</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt="" src="{{ asset('images/gallery/Fruits.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Fruits.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Fruits</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Fresh_Sea_Food.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Fresh_Sea_Food.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Fresh Sea Food</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Fresh_Local_Meat.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Fresh_Local_Meat.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Fresh Local Meat</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Dairy_Products.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Dairy_Products.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Dairy Products</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter frozen">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Frozen_Meat.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Frozen_Meat.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Frozen Meat</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter frozen">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Frozen_Fruits.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Frozen_Fruits.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Frozen Fruits</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter frozen">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Frozen_Vegetables.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Frozen_Vegetables.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Frozen Vegetables</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter frozen">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Frozen_Pre_Cooked_Food.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Frozen_Pre_Cooked_Food.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Frozen Pre Cooked Food</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter frozen">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Ice_Cream_and_Pastries.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Ice_Cream_and_Pastries.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Ice Cream and Pastries</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter beverages">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Tea.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Tea.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Tea</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter beverages">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Soft_Drinks.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Soft_Drinks.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Soft Drinks</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter beverages">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Coffee.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Coffee.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Coffee</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter beverages">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Water.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Water.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Water</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter beverages">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Fruit_Juices.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Fruit_Juices.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Fruit Juices</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter beverages">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Syrups.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Syrups.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Syrups</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter dry">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Dry_Fruits.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Dry_Fruits.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Dry Fruits</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter dry">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Nuts.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Nuts.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Nuts</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter dry">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Spices.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Spices.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Spices</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter dry">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Herbs.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Herbs.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Herbs</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter dry">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Seasonings.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Seasonings.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Seasonings</a></p>
                        </div>
                    </div>

                </div>
            </div>



        </div>
    </div>


    <!--filter function-->
    <script type="text/javascript">
        $(document).ready(function() {

            $(".filter-button").click(function() {
                var value = $(this).attr('data-filter');

                if (value == "all") {
                    //$('.filter').removeClass('hidden');
                    $('.filter').show('1000');
                } else {
                    //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
                    //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                    $(".filter").not('.' + value).hide('3000');
                    $('.filter').filter('.' + value).show('3000');

                }
            });

        });
    </script>
    <!--filter function-->

    <script type="text/javascript">
        $(document).ready(function() {
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
@endsection
