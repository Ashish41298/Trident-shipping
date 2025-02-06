@extends('layout')

@section('main')
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light"
        style="background-image:url({{asset('images/about_banner.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1>Repair Services</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Products</a></li>
                        <li class="active">Repair Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <p>Our set up includes workshop with full-fledged facilities and equipments such as Sand-Blasting Machines,
                    Compressors, Lathe, Steel Plate-Bending Machine, Slaughting Machines, Welding Equipments & Cutting Sets
                    & all types of Machinery to tackle any technical job.</p>
                <p>TRIDENT SHIPPING offers a spectrum of ship repairs. Repair Services like: Motors Rewinding, Air
                    conditioners and deep freezers repairs, All types of machining jobs, Radar repairs etc are offered as a
                    key support to our esteemed customers.</p>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 application-box">
                <div class="row">
                    <div
                        class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center filter fresh col-lg-offset-2 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt="" src="{{asset('images/service_1.jpg')}}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox" href="{{asset('images/service_1.jpg')}}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">SPARE PARTS</a></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt="" src="{{asset('images/service_2.jpg')}}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox" href="{{asset('images/service_2.jpg')}}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">SHIP SERVICE</a></p>
                        </div>
                    </div>

                </div>
            </div>



        </div>
    </div>
@endsection
