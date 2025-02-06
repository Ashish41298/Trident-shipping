@extends('layout')

@section('main')

<div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image:url({{asset('images/about_banner.jpg')}})">
    <div class="container">
        <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        	<h1>Chemical Supplies</h1>
        <ul class="breadcrumb">
        <li><a href="{{asset('home')}}"><i class="fas fa-home"></i> Home</a></li>
        <li><a href="#">Products</a></li>
        <li class="active">Chemical Supplies</li>
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
        	<img class="img-responsive" alt="" src="{{asset('images/gallery/Methanol.jpg')}}"/>
            <div class="gallery-1-box-content">                        
                <ul class="gallery-1-icon">
                	<li><a class="thumbnail fancybox" rel="ligthbox" href="{{asset('images/gallery/Methanol.jpg')}}"><i class="fas fa-search"></i></a></li>
                </ul>
            </div>
        </div>
    <p><a href="#">Methanol</a></p>
    </div>                    
</div>

<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
    <div class="gallery-box-inner">
        <div class="gallery-1">
        	<img class="img-responsive" alt="" src="{{asset('images/gallery/Distilled_Water.jpg')}}"/>
            <div class="gallery-1-box-content">                        
                <ul class="gallery-1-icon">
                	<li><a class="thumbnail fancybox" rel="ligthbox" href="{{asset('images/gallery/Distilled_Water.jpg')}}"><i class="fas fa-search"></i></a></li>
                </ul>
            </div>
        </div>
    <p><a href="#">Distilled Water</a></p>
    </div>                    
</div>

<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
    <div class="gallery-box-inner">
        <div class="gallery-1">
        	<img class="img-responsive" alt="" src="{{asset('images/gallery/Rust_Remover.jpg')}}"/>
            <div class="gallery-1-box-content">                        
                <ul class="gallery-1-icon">
                	<li><a class="thumbnail fancybox" rel="ligthbox" href="{{asset('images/gallery/Rust_Remover.jpg')}}"><i class="fas fa-search"></i></a></li>
                </ul>
            </div>
        </div>
    <p><a href="#">Rust Remover</a></p>
    </div>                    
</div>

<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
    <div class="gallery-box-inner">
        <div class="gallery-1">
        	<img class="img-responsive" alt="" src="{{asset('images/gallery/Alkaline_liquid.jpg')}}"/>
            <div class="gallery-1-box-content">                        
                <ul class="gallery-1-icon">
                	<li><a class="thumbnail fancybox" rel="ligthbox" href="{{asset('images/gallery/Alkaline_liquid.jpg')}}"><i class="fas fa-search"></i></a></li>
                </ul>
            </div>
        </div>
    <p><a href="#">Alkaline liquid</a></p>
    </div>                    
</div>

<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
    <div class="gallery-box-inner">
        <div class="gallery-1">
        	<img class="img-responsive" alt="" src="{{asset('images/gallery/Tank_clean.jpg')}}"/>
            <div class="gallery-1-box-content">                        
                <ul class="gallery-1-icon">
                	<li><a class="thumbnail fancybox" rel="ligthbox" href="{{asset('images/gallery/Tank_clean.jpg')}}"><i class="fas fa-search"></i></a></li>
                </ul>
            </div>
        </div>
    <p><a href="#">Tank clean</a></p>
    </div>                    
</div>

<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
    <div class="gallery-box-inner">
        <div class="gallery-1">
        	<img class="img-responsive" alt="" src="{{asset('images/gallery/Sea_Clean.jpg')}}"/>
            <div class="gallery-1-box-content">                        
                <ul class="gallery-1-icon">
                	<li><a class="thumbnail fancybox" rel="ligthbox" href="{{asset('images/gallery/Sea_Clean.jpg')}}"><i class="fas fa-search"></i></a></li>
                </ul>
            </div>
        </div>
    <p><a href="#">Sea Clean</a></p>
    </div>                    
</div>

<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
    <div class="gallery-box-inner">
        <div class="gallery-1">
        	<img class="img-responsive" alt="" src="{{asset('images/gallery/Oil_spill_remover.jpg')}}"/>
            <div class="gallery-1-box-content">                        
                <ul class="gallery-1-icon">
                	<li><a class="thumbnail fancybox" rel="ligthbox" href="{{asset('images/gallery/Oil_spill_remover.jpg')}}"><i class="fas fa-search"></i></a></li>
                </ul>
            </div>
        </div>
    <p><a href="#">Oil spill remover</a></p>
    </div>                    
</div>

<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center filter fresh">
    <div class="gallery-box-inner">
        <div class="gallery-1">
        	<img class="img-responsive" alt="" src="{{asset('images/gallery/Degreaser_Hd.jpg')}}"/>
            <div class="gallery-1-box-content">                        
                <ul class="gallery-1-icon">
                	<li><a class="thumbnail fancybox" rel="ligthbox" href="{{asset('images/gallery/Degreaser_Hd.jpg')}}"><i class="fas fa-search"></i></a></li>
                </ul>
            </div>
        </div>
    <p><a href="#">Degreaser Hd</a></p>
    </div>                    
</div>
			       		 
        </div>
    </div>
        
        
               
    </div>
</div>

    
@endsection