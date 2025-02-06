@extends('layout')

@section('main')
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light"
        style="background-image:url({{asset('images/about_banner.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1>Services</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-5 col-xs-12 text-center">
                <img src="{{asset('images/service_1.jpg')}}" class="img-responsive inner-img">
            </div>

            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12 text-left">
                <h3>Spare Parts</h3>
                <h1>OUR QUALITY SERVICE</h1>
                <p>Providing premier services in the field of Spare Parts of Engine, Electrical equipment and Navigational
                    equipment.</p>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <p><span><i class="fas fa-check-square"></i></span> <strong>Engine</strong></p>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <p><span><i class="fas fa-check-square"></i></span> <strong>Electrical</strong></p>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <p><span><i class="fas fa-check-square"></i></span> <strong>Navigational</strong></p>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="line"></div>
            </div>

            <div class="col-lg-4 col-md-5 col-sm-5 col-xs-12 text-center visible-xs">
                <img src="{{asset('images/service_2.jpg')}}" class="img-responsive inner-img">
            </div>

            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12 text-left">
                <h3>Ship Service</h3>
                <h1>SHIP SERVICES WE PROVIDE</h1>
                <p>Trident Shipping has endeavored to be a reliable companion, one of the most promising, best-in-class
                    company, providing premier services in the field of shipping.</p>

                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <p><span><i class="fas fa-check-square"></i></span> <strong>Steel Renewal</strong></p>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <p><span><i class="fas fa-check-square"></i></span> <strong>Underwater Survey</strong></p>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <p><span><i class="fas fa-check-square"></i></span> <strong>Pipe Line Renewal</strong></p>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <p><span><i class="fas fa-check-square"></i></span> <strong>Electrical Works</strong></p>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <p><span><i class="fas fa-check-square"></i></span> <strong>Hull Cleaning</strong></p>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <p><span><i class="fas fa-check-square"></i></span> <strong>Repairs (Generator, Crane,
                                Pump)</strong></p>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <p><span><i class="fas fa-check-square"></i></span> <strong>Garbage Disposal</strong></p>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <p><span><i class="fas fa-check-square"></i></span> <strong>Sludge Removal</strong></p>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <p><span><i class="fas fa-check-square"></i></span> <strong>Scrap Removal</strong></p>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <p><span><i class="fas fa-check-square"></i></span> <strong>Chipping & Painting</strong></p>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <p><span><i class="fas fa-check-square"></i></span> <strong>Fabrications (Gangway, Special
                                Parts)</strong></p>
                    </div>
                </div>

            </div>

            <div class="col-lg-4 col-md-5 col-sm-5 col-xs-12 text-center hidden-xs">
                <img src="{{asset('images/service_2.jpg')}}" class="img-responsive inner-img">
            </div>
        </div>
    </div>
@endsection
