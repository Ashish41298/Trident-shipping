@extends('layout')

@section('main')
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light"
        style="background-image:url({{asset('images/about_banner.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1>Engine Stores</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Products</a></li>
                        <li class="active">Engine Stores</li>
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
                                    src="{{ asset('images/gallery/Hoses_&_Couplings.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Hoses_&_Couplings.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Hoses & Couplings</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Cutting_Tools.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Cutting_Tools.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Cutting Tools</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Hand_Tool.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Hand_Tool.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Hand Tool</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Fasteners.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Fasteners.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Fasteners</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Measuring_Instruments.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Measuring_Instruments.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Measuring Instruments</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Pneumatic_Electrical.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Pneumatic_Electrical.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Pneumatic & Electrical</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Packing_Jointing.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Packing_Jointing.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Packing & Jointing</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Welding_Equipment.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Welding_Equipment.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Welding Equipment</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{ asset('images/gallery/Valves.jpg') }}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{ asset('images/gallery/Valves.jpg') }}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Valves</a></p>
                        </div>
                    </div>



                </div>
            </div>



        </div>
    </div>
@endsection
