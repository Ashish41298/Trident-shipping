@extends('layout')

@section('main')
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light"
        style="background-image:url({{asset('images/about_banner.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1>Mooring Ropes</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Products</a></li>
                        <li class="active">Mooring Ropes</li>
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
                                <img class="img-responsive" alt="" src="{{asset('images/gallery/Garfil_Polypropylene.jpg')}}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{asset('images/gallery/Garfil_Polypropylene.jpg')}}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Garfil Polypropylene</a></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt="" src="{{asset('images/gallery/Garfil_Maxima.jpg')}}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{asset('images/gallery/Garfil_Maxima.jpg')}}"><i class="fas fa-search"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Garfil Maxima</a></p>
                        </div>
                    </div>


                </div>
            </div>



        </div>
    </div>
@endsection
