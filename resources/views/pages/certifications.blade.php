@extends('layout')

@section('main')
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light"
        style="background-image:url({{ asset('images/about_banner.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1>certifications</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">certifications</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 application-box">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                        <div class="product-box-inner">
                            <div class="box9">
                                <img class="img-responsive" alt="" src="{{ asset('images/1.jpg') }}" />
                                <div class="box-content">
                                    <ul class="icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/1.jpg') }}"><i class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                        <div class="product-box-inner">
                            <div class="box9">
                                <img class="img-responsive" alt="" src="{{ asset('images/2.jpg') }}" />
                                <div class="box-content">
                                    <ul class="icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/2.jpg') }}"><i class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                        <div class="product-box-inner">
                            <div class="box9">
                                <img class="img-responsive" alt="" src="{{ asset('images/3.jpg') }}" />
                                <div class="box-content">
                                    <ul class="icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/3.jpg') }}"><i class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-0">
                        <div class="product-box-inner">
                            <div class="box9">
                                <img class="img-responsive" alt="" src="{{ asset('images/4.jpg') }}" />
                                <div class="box-content">
                                    <ul class="icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/4.jpg') }}"><i class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                        <div class="product-box-inner">
                            <div class="box9">
                                <img class="img-responsive" alt="" src="{{ asset('images/5.jpg') }}" />
                                <div class="box-content">
                                    <ul class="icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/5.jpg') }}"><i class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>



        </div>
    </div>
    
@endsection
