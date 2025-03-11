@extends('main')

@section('title', 'Create A Post')
@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
                <h1 class="display-5 fw-bold">Create A New Post</h1>
                <hr>
                    <form action="{{route('posts.store') }}" method="POST" enctype="multipart/form-data" data-parsley-validate>
                        @csrf
                            <label for="title">Title:</label>
                            <input type="text" name="title" id="title" class="form-control" required>

                            <label for="slug">URL Slug:</label>
                            <input type="text" name="slug" id="slug" class="form-control" maxlength="255" minlength="5" required>

                            <label for="image">Photo:</label>
                            <input type="file" name="image" class="form-control">


                            <label for="body">Post Content</label>
                            <textarea id="ckeditor" name="body" class="form-control" rows="5"></textarea><br>

                            <div class="d-grid gap-2 mt-1">
                            <button type="submit" class="btn btn-dark"> Create Post</button>
                            </div> 

                    </form>
                  
        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/parsley.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>

    <script>
    ClassicEditor
        .create(document.querySelector('#ckeditor'))
        .catch(error => {
            console.error(error);
        });
    </script>
@endsection