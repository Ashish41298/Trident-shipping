@extends('admdash.layout')

@section('main')


<main>
    <div class="container-fluid px-4">
        @session('error')
        <div class="alert alert-danger ms-2 me-2 mt-2" role="alert">
        {{$value}}
      </div>
        @endsession
        @session('success')
        <div class="alert alert-success ms-2 me-2 mt-2" role="alert">
        {{$value}}
      </div>
        @endsession
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Box Card List</li>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">Total Users: <strong>{{$totalslides}}</strong></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{route('Dashboard')}}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card text-white mb-4" style="background: purple;">
                    <div class="card-body">Total Counters <strong>{{$totalcounters}}</strong></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{route('counter.index')}}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">Total Slides: <strong>{{$totalslides}}</strong></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{route('slider.index')}}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">Total Boxcard: <strong>{{$totalboxcards}}</strong></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{('boxcards.index')}}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header  d-flex align-items-center justify-content-between">
                <strong>  <i class="fas fa-table me-1"></i>Boxcard List</strong>
                <a class="btn btn-outline-dark" href="{{route('boxcards.create')}}">+ Add Boxcard</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatablesSimple" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title_1</th>
                                <th>Title_2</th>
                                <th>Content</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($allboxcards))
                            @foreach ($allboxcards as $key=>$cards)
                            <tr>
                                <td class="text-center">{{$key+1}}</td>
                                <td class="text-center">{{$cards->title1}}</td>
                                <td class="text-center">{{$cards->title2}}</td>
                                <td class="text-center">{{ \Illuminate\Support\Str::limit($cards->content, 50) }}
                                    @if(strlen($cards->content) >= 100)
                                    <br>
                                    <a href="{{route('readmore.show', $cards->id)}}" style="text-decoration:none; color:blue;">Read More</a>
                                @endif
                                </td>
                                <td class="text-center">
                                    <div style="height: 70px; width:70px; object-fit:cover; overflow:hidden;">
                                        <a href="{{asset('/boxcard/'.$cards->image)}}">
                                            <img style="height:100%; width:100%;" src="{{asset('/boxcard/'.$cards->image)}}" alt="{{$cards->image}}">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                   <div class="d-flex align-items-center justify-content-center gap-2">
                                    <a class="btn btn-outline-success" href="{{route('boxcards.edit', $cards->id)}}">Edit</a>
                                    <form action="{{route('boxcards.destroy', $cards->id)}}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-outline-danger" type="submit">Delete</button>
                                    </form>
                                   </div>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="6" class="text-center">User Not Found Yet!</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</main>

@endsection