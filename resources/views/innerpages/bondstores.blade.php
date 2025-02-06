@extends('layout')

@section('main')
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light"
        style="background-image:url({{asset('images/about_banner.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1>Bond Stores</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Products</a></li>
                        <li class="active">Bond Stores</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 application-box">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Brand_of_Beers.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Brand_of_Beers.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Brand of Beers</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt="" src="{{ asset('images/gallery/Rum.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Rum.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Rum</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt="" src="{{ asset('images/gallery/Whisky.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Whisky.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Whisky</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt="" src="{{ asset('images/gallery/Vodka.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Vodka.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Vodka</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt="" src="{{ asset('images/gallery/Wine.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Wine.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Wine</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Cigarettes.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Cigarettes.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Cigarettes</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter frozen">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt="" src="{{ asset('images/gallery/Water.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Water.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Mineral Water</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter frozen">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Soft_Drinks_1.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Soft_Drinks_1.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Soft Drinks</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter frozen">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Chocolates.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Chocolates.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Chocolates</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter frozen">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Deodorants.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Deodorants.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Deodorants</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter frozen">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Shampoo.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Shampoo.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Shampoo</a></p>
                        </div>
                    </div>

                </div>
            </div>



        </div>
    </div>
@endsection
