@extends('admdash.layout')

@section('main')


<main>
    <div class="container-fluid px-4">
        <ol class="breadcrumb mb-4 mt-4">
            <li class="breadcrumb-item active">Read Full Content</li>
        </ol>
        <div class=" d-flex aling-items-center justify-content-center" >
        <div class="card mb-4 " style="width: fit-content; height:fit-content;" >
            <div class="card-header d-flex aling-items-center justify-content-between">
                <i class="fas fa-table me-1"><strong>Read Full Content</strong></i>
                <a href="{{route('boxcards.index')}}" class="btn btn-outline-dark">Back</a>
            </div>
            <div class="card-body">
                {{$boxcard->content}}
            </div>
           
        </div>
        </div>
    </div>
</main>

@endsection