@extends('admdash.layout')

@section('main')


    <main>
        <div class="container-fluid px-4">
            @session('error')
                <div class="alert alert-danger ms-2 me-2 mt-2" role="alert">
                    {{ $value }}
                </div>
            @endsession
            @session('success')
                <div class="alert alert-success ms-2 me-2 mt-2" role="alert">
                    {{ $value }}
                </div>
            @endsession
            <h1 class="mt-4"></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Slide List</li>
            </ol>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Total Users: <strong>{{ $totalslides }}</strong></div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('Dashboard') }}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card text-white mb-4" style="background: purple;">
                        <div class="card-body">Total Counters <strong>{{ $totalcounters }}</strong></div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('counter.index') }}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Total Slides: <strong>{{ $totalslides }}</strong></div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('slider.index') }}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">Total Boxcards: {{$totalboxcards}}</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('boxcards.index') }}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header  d-flex align-items-center justify-content-between">
                    <strong> <i class="fas fa-table me-1"></i>Slide List</strong>
                    <a class="btn btn-outline-dark" href="{{ route('slider.create') }}">+ Add Slide</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Slider Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($allslides))
                                    @foreach ($allslides as $key => $slide)
                                        <tr>
                                            <td class="text-center">{{ $key + 1 }}</td>
                                            <td class="text-center">{{ $slide->name }}</td>
                                            <td class="text-center">{!! $slide->description !!}</td>
                                            <td class="text-center">
                                                <div style="height: 70px; width:70px; object-fit:cover; overflow:hidden;">
                                                    <a href="{{ asset('/slide/' . $slide->slide) }}">
                                                        <img style="height:100%; width:100%;"
                                                            src="{{ asset('/slide/' . $slide->slide) }}"
                                                            alt="{{ $slide->name }}"></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center gap-2">
                                                <a class="btn btn-outline-success"
                                                    href="{{ route('slider.edit', $slide->id) }}">Edit</a>
                                                <form action="{{ route('slider.destroy', $slide->id) }}" method="post"
                                                    class="d-inline">
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
                                        User Not Found Yet!
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
