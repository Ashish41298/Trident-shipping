@extends('layout')

@section('main')

<div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image:url({{asset('images/about_banner.jpg)')}}">
    <div class="container">
        <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        	<h1>about us</h1>
        <ul class="breadcrumb">
        <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
        <li class="active">about us</li>
        </ul>
        </div>
        </div>
    </div>
</div>


<div class="container">
	<div class="row">      
        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 text-left home-img">
        	<img src="{{asset('images/about.jpg')}}" class="img-responsive">
        </div>
        
        <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 text-left">
        	<h3>ABOUT</h3>
            <h1>TRIDENT SHIPPING</h1>
            
        	<p><span>Trident Shipping</span> is one of the reputed ship chandelling company in India. We are in this field of business over a period of 15 years shadowing across the globe with our ancestries in India.</p>

<p><span>Trident Shipping</span> has endeavoured to be a reliable companion to our clients. It has an excellent pathway of record for best client gratification. We are attentive, key determined, comprehensive upholders in the maritime industry. We support all over India ports.</p>
<p>Our professional arcade acquaintance has motivated us to continuous improvement in the way we operate.</P>            
        </div>
    </div>
</div>

<section id="home-future-section">
<div class="container">
	<div class="row"> 
    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
        	<h3>VALUE FOR YOU</h3>
            <h1>We Provide us</h1>
        </div>            
    
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 future-box">
        	<div class="future-box-icon"><img src="{{asset('images/icon_2.png')}}" class="img-responsive"></div>
            <h5>Cold Storage</h5>            
        </div>
    </div>
    
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 future-box">
        	<div class="future-box-icon"><img src="{{asset('images/icon_1.png')}}" class="img-responsive"></div>
            <h5>Warehousing</h5>
        </div>
    </div>
    
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 future-box">
        	<div class="future-box-icon"><img src="{{asset('images/icon_3.png')}}" class="img-responsive"></div>
            <h5>Farm</h5>
        </div>
    </div>
    
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 future-box">
        	<div class="future-box-icon"><img src="{{asset('images/icon_4.png')}}" class="img-responsive"></div>
            <h5>Home Produce</h5>
        </div>
    </div>

    </div>
</div>    
</section>

@include ("include.products")
@include ("include.our_client")

    
@endsection