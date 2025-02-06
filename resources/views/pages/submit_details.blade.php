@extends('layout')

@section('main')


<div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image:url({{asset('images/about_banner.jpg')}})">
    <div class="container">
        <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        	<h1>submit details</h1>
        <ul class="breadcrumb">
        <li><a href="{{route("home")}}"><i class="fas fa-home"></i> Home</a></li>
        <li class="active">submit details</li>
        </ul>
        </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">     
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
     @session('success')
         <p style="color:rgb(31, 146, 31)">{{$value}}</p>
     @endsession
     @session('error')
         <p style="color:crimson;">{{$value}}</p>
     @endsession
    </div>
    </div>
</div>

    
@endsection