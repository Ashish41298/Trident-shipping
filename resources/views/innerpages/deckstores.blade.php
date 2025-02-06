@extends('layout')

@section('main')
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light"
        style="background-image:url({{asset('images/about_banner.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1>Deck Stores</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Products</a></li>
                        <li class="active">Deck Stores</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 application-box">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Deck_Store.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Deck_Store.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Deck Store</a></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Cabin_Store.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Cabin_Store.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Cabin Store</a></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Engine_Store.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Engine_Store.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Engine Store</a></p>
                        </div>
                    </div>



                </div>
            </div>



        </div>
    </div>
@endsection
