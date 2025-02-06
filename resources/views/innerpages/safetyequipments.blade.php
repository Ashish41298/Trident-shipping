@extends('layout')

@section('main')
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light"
        style="background-image:url({{asset('images/about_banner.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1>Safety Equipments</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Products</a></li>
                        <li class="active">Safety Equipments</li>
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
                                <img class="img-responsive" alt="" src="{{asset('images/gallery/Life_Raft_Servicing.jpg')}}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{asset('images/gallery/Life_Raft_Servicing.jpg')}}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Life Raft Servicing</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{asset('images/gallery/Fire_Extinguisher_Servicing.jpg')}}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{asset('images/gallery/Fire_Extinguisher_Servicing.jpg')}}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Fire Servicing</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt="" src="{{asset('images/gallery/Safety_Suits.jpg')}}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{asset('images/gallery/Safety_Suits.jpg')}}"><i class="fas fa-search"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Safety Suits</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt="" src="{{asset('images/gallery/Life_Jacket.jpg')}}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{asset('images/gallery/Life_Jacket.jpg')}}"><i class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Life Jacket</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt="" src="{{asset('images/gallery/Immersion_Suits.jpg')}}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{asset('images/gallery/Immersion_Suits.jpg')}}"><i class="fas fa-search"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Immersion Suits</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt="" src="{{asset('images/gallery/Lifebuoys.jpg')}}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{asset('images/gallery/Lifebuoys.jpg')}}"><i class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Lifebuoys</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt="" src="{{asset('images/gallery/Lifebuoy_Lights.jpg')}}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{asset('images/gallery/Lifebuoy_Lights.jpg')}}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Lifebuoy Lights</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{asset('images/gallery/Retro_Reflactive_Tapes.jpg')}}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{asset('images/gallery/Retro_Reflactive_Tapes.jpg')}}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Retro Reflactive Tapes</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt="" src="{{asset('images/gallery/Radar_Reflectors.jpg')}}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{asset('images/gallery/Radar_Reflectors.jpg')}}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Radar Reflectors</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt="" src="{{asset('images/gallery/Lifeboat_Compass.jpg')}}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{asset('images/gallery/Lifeboat_Compass.jpg')}}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Lifeboat Compass</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt="" src="{{asset('images/gallery/First_Aid_kits.jpg')}}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{asset('images/gallery/First_Aid_kits.jpg')}}"><i class="fas fa-search"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">First Aid kits</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt="" src="{{asset('images/gallery/Waterproof_Torches.jpg')}}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{asset('images/gallery/Waterproof_Torches.jpg')}}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Waterproof Torches</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt="" src="{{asset('images/gallery/Safety_Harness.jpg')}}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{asset('images/gallery/Safety_Harness.jpg')}}"><i class="fas fa-search"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Safety Harness</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt="" src="{{asset('images/gallery/Safety_Helmets.jpg')}}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{asset('images/gallery/Safety_Helmets.jpg')}}"><i class="fas fa-search"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Safety Helmets</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt=""
                                    src="{{asset('images/gallery/Plastic_Chipping_Goggles.jpg')}}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{asset('images/gallery/Plastic_Chipping_Goggles.jpg')}}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Plastic Chipping Goggles</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
                        <div class="gallery-box-inner">
                            <div class="gallery-1">
                                <img class="img-responsive" alt="" src="{{asset('images/gallery/Life_Boat_Rowlocks.jpg')}}" />
                                <div class="gallery-1-box-content">
                                    <ul class="gallery-1-icon">
                                        <li><a class="thumbnail fancybox" rel="ligthbox"
                                                href="{{asset('images/gallery/Life_Boat_Rowlocks.jpg')}}"><i
                                                    class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p><a href="#">Life Boat Rowlocks</a></p>
                        </div>
                    </div>



                </div>
            </div>



        </div>
    </div>
@endsection
