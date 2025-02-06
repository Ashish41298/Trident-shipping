@extends('admdash.layout')

@section('main')


<main>
    <div class="container-fluid px-4">
        <ol class="breadcrumb mb-4 mt-4">
            <li class="breadcrumb-item active">Add Boxcard</li>
        </ol>
        <div class=" d-flex aling-items-center justify-content-center" >
        <div class="card mb-4 " style="width: fit-content; height:fit-content;" >
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                <strong>Add Boxcard</strong>
            </div>
            <div class="card-body">
                <form action="{{route('boxcards.store')}}" method="post" enctype="multipart/form-data" class="container">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-sm-6 mb-3">
                            <label class="form-label">Title_1</label>
                            <input type="text" class="form-control" name="title1">
                            @error('title1')
                            <div id="emailHelp" class="text-danger form-text">{{$message}}</div>
                            @enderror
                        </div>
                
                        <div class="col-12 col-sm-6 mb-3">
                            <label class="form-label">Title_2</label>
                            <input type="text" class="form-control" name="title2">
                            @error('title2')
                            <div id="emailHelp" class="text-danger form-text">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                
                    <div class="mb-3">
                        <label class="form-label">Content</label>
                        <textarea class="form-control" name="content" id="editor" cols="30" rows="2"></textarea>
                        @error('content')
                        <div id="emailHelp" class="text-danger form-text">{{$message}}</div>
                        @enderror
                    </div>
                
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" name="image" required>
                        @error('image')
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