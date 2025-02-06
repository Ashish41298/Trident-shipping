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
                <strong>Edit Slide</strong>
            </div>
            <div class="card-body" >
                @if(!empty($slide))
                <form action="{{route('slider.update', $slide->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                      <label  class="form-label">Name</label>
                      <input type="text" class="form-control" name="name" value="{{$slide->name}}" >
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Description</label>
                      <textarea name="description" class="form-control" id="editor" type="text" cols="30" rows="2">{{$slide->description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Sider Image</label>
                        <input type="file" class="form-control" name="slide" >
                        @error('slide')
                        <div id="emailHelp" class="text-danger form-text">{{$message}}</div>
                        @enderror
                        <div class="mt-3" style="height: 150px;width:150px; border-radius:10px; object-fit:cover; overflow:hidden;">
                            <img style="height: 100%; width:100%;" src="{{asset('/slide/'.$slide->slide)}}" alt="{{$slide->name}}">
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