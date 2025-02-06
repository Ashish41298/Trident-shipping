@extends('admdash.layout')

@section('main')


<main>
    <div class="container-fluid px-4">
        <ol class="breadcrumb mt-4 mb-4">
            <li class="breadcrumb-item active">Counters</li>
        </ol>
        <div class=" d-flex aling-items-center justify-content-center" >
        <div class="card mb-4 " style="width: fit-content; height:fit-content;" >
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                <strong>Edit Counters</strong>
            </div>
            <div class="card-body" >
                @if(!empty($counter))
                <form action="{{route('counter.update', $counter->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                      <label  class="form-label">Title</label>
                      <input type="text" class="form-control" name="title" value="{{$counter->title}}" >
                      @error('title')
                      <div id="emailHelp" class="text-danger form-text">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Description</label>
                      <input type="number" class="form-control" name="numbers" value="{{$counter->numbers}}" >
                      @error('numbers')
                      <div id="emailHelp" class="text-danger form-text">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Icon</label>
                        <input type="file" class="form-control" name="icon" >
                        @error('icon')
                        <div id="emailHelp" class="text-danger form-text">{{$message}}</div>
                        @enderror
                        <div class="mt-3 p-2" style="height: 70px;width:70px; border-radius:10px; object-fit:cover; overflow:hidden; background:lightgray;">
                            <img style="height: 100%; width:100%;" src="{{asset('/icon/'.$counter->icon)}}" alt="{{$counter->title}}">
                        </div>
                      </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                @endif
            </div>
        </div>
        </div>
    </div>
</main>

@endsection