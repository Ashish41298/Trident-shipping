@extends('admdash.layout')

@section('main')


<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Image Sliders</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Sliders</li>
        </ol>
        <div class=" d-flex aling-items-center justify-content-center" >
        <div class="card mb-4 " style="width: fit-content; height:fit-content;" >
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                <strong>Add Slide</strong>
            </div>
            <div class="card-body" >
                <form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label  class="form-label">Name</label>
                      <input type="text" class="form-control" name="name" >
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Description</label>
                      <textarea name="description" class="form-control" id="editor" type="text" cols="30" rows="2"></textarea>
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Sider Image</label>
                        <input type="file" class="form-control" name="slide" >
                        @error('slide')
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