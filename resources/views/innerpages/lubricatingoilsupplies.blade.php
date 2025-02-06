@extends('layout')

@section('main')

<div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image:url({{asset('images/about_banner.jpg')}})">
    <div class="container">
        <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        	<h1>Lubricating Oil Supplies</h1>
        <ul class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fas fa-home"></i> Home</a></li>
        <li><a href="#">Products</a></li>
        <li class="active">Lubricating Oil Supplies</li>
        </ul>
        </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">     
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 home-img img">
			<img src="{{asset('images/gallery/lubricatingoilsupplies.jpg')}}" class="img-responsive">
		</div>    	              
    </div>
</div>


@endsection