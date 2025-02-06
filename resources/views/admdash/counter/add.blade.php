@extends('admdash.layout')

@section('main')


<main>
    <div class="container-fluid px-4">
        <ol class="breadcrumb mb-4 mt-4">
            <li class="breadcrumb-item active">Add Counter</li>
        </ol>
        <div class=" d-flex aling-items-center justify-content-center" >
        <div class="card mb-4 " style="width: fit-content; height:fit-content;" >
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                <strong>Add Slide</strong>
            </div>
            <div class="card-body" >
                <form action="{{route('counter.store')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="mb-3">
                      <label  class="form-label">Title</label>
                      <input type="text" class="form-control" name="title" required>
                      @error('title')
                      <div id="emailHelp" class="text-danger form-text">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Numbers</label>
                      <input type="number" class="form-control" name="numbers" required>
                      @error('numbers')
                      <div id="emailHelp" class="text-danger form-text">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Icon</label>
                        <input type="file" class="form-control" name="icon" required>
                        @error('icon')
                        <div id="emailHelp" class="text-danger form-text">{{$message}}</div>
                        @enderror
                      </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
            </div>
        </div>
        </div>
    </div>
</main>

@endsection