@extends('layout')

@section('main')


    @include ('include.banner', ['images' => $images])

    @include ('include.counter', ['counters' => $counters])

    <div class="container">
        @if (isset($boxcard) && !empty($boxcard))
            @foreach ($boxcard as $card)
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 text-left home-img">
                        @if (isset($card->image))
                            <img src="{{ asset('/boxcard/'.$card->image) }}" class="img-responsive">
                        @endif
                    </div>

                    <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 text-left">
                        <h3>{{ $card->title1 }}</h3>
                        <h1>{{ $card->title2 }}</h1>
                        <div>{!! $card->content !!}</div>
                        <a href="{{ route('aboutus') }}"><button class="home-btn">read more <i
                                    class="fas fa-arrow-right"></i></button></a>
                    </div>
            @endforeach
        @else
            <div class="container d-flex align-items-center justify-content-center" style="height:450px; width:100%;">
                <h2>No Boxcard Content Found Yet!.</h2>
            </div>
        @endif





    </div>
    @include('include.service')
    @include('include.products')
    @include('include.our_client')

@endsection
