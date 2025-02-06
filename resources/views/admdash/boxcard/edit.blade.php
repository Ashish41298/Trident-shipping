@extends('admdash.layout')

@section('main')


<main>
    <div class="container-fluid px-4">
        <ol class="breadcrumb mt-4 mb-4">
            <li class="breadcrumb-item active">Edit Boxcard</li>
        </ol>
        <div class=" d-flex aling-items-center justify-content-center" >
        <div class="card mb-4 " style="width: fit-content; height:fit-content;" >
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                <strong>Edit Boxcard</strong>
            </div>
            <div class="card-body" >
                @if(!empty($boxcard))
                <form action="{{route('boxcards.update', $boxcard->id)}}" method="post" enctype="multipart/form-data" class="container">
                    @csrf
                    @method('put')
                    <div class="row">
                    <div class="col-12 col-sm-6 mb-3">
                      <label  class="form-label">Title_1</label>
                      <input type="text" class="form-control" name="title1" value="{{$boxcard->title1}}" >
                      @error('title1')
                      <div id="emailHelp" class="text-danger form-text">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="col-12 col-sm-6 mb-3">
                        <label  class="form-label">Title_2</label>
                        <input type="text" class="form-control" name="title2" value="{{$boxcard->title2}}" >
                        @error('title2')
                        <div id="emailHelp" class="text-danger form-text">{{$message}}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Content</label>
                      <textarea class="form-control" name="content" id="editor" cols="30" rows="2">{{$boxcard->content}}</textarea>
                      @error('content')
                      <div id="emailHelp" class="text-danger form-text">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Image</label>
                        <input type="file" class="form-control" name="image" >
                        @error('image')
                        <div id="emailHelp" class="text-danger form-text">{{$message}}</div>
                        @enderror
                        <div class="mt-3 " style="height: 150px;width:150px; border-radius:10px; object-fit:cover; overflow:hidden;">
                            <img style="height: 100%; width:100%;" src="{{asset('/boxcard/'.$boxcard->image)}}" alt="{{$boxcard->title1}}">
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