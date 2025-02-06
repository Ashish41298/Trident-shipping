@extends('admdash.layout')

@section('main')

    <main>
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

        <div class="container-fluid px-4">
            <ol class="breadcrumb mt-4 mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Total Users: <Strong>{{ $totalusers }}</Strong></div>
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
                        <div class="card-body">Cards: <strong>{{ $totalboxcards }}</strong></div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('boxcards.index') }}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                 <div class="card-header  d-flex align-items-center justify-content-between">
                <strong>  <i class="fas fa-table me-1"></i>Users List</strong>
                <a class="btn btn-outline-dark" href="{{route('register')}}">+ Add User</a>
            </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($alluser))
                                    @foreach ($alluser as $key => $user)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center gap-2">
                                                <a href="{{route('edit',$user->id)}}" class="btn btn-outline-success">Edit</a>
                                                <form action="{{route('delete',$user->id)}}" class="d-inline" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" onclick="sure()" class="btn btn-outline-danger">Delete</button>
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
<Script>
    function sure(){
       return confirm("Are you sure to delete this user!");
    }
</Script>
@endsection
