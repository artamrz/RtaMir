@extends('main') 

@section('title','Edit Post')   

@section('content')
     <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
                <h1 class="display-5 fw-bold">Edit Your Post</h1>
                <hr>
                    <form action="{{ route('posts.update', $post->id) }}" method="POST" data-parsley-validate>
                        @csrf
                        @method('PUT')
                         <label for="title">Title:</label>
                         <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}" required>

                         <label for="slug">URL Slug:</label>
                         <input type="text" name="slug" id="slug" class="form-control" maxlength="255" minlength="5" value="{{ $post->slug }}" required>

                        <label for="body">Post Content</label>
                        <textarea name="body" id="ckeditor" class="form-control">{{ $post->body }}</textarea>

                        <div class="col-md-4 mt-4">
                            <div class="card card-body bg-light">
                                <dl class="dl-horizontal">
                                    <dt>Created At:</dt>
                                    <dd>{{date('M j Y h:i a',strtotime($post->created_at))}}</dd>
                                </dl>
                                <dl class="dl-horizontal">
                                    <dt>Last Updated:</dt>
                                    <dd>{{date('M j Y h:i a',strtotime($post->updated_at))}}</dd>
                                </dl>
                                <hr>
                                <div class="row">
                                     <div class="col-sm-6 d-grid">
                                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-outline-dark">Cancel</a>
                                     </div>
                                     <div class="col-sm-6 d-grid"> 
                                         <button type="submit" class="btn btn-dark"> Save Post</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                  
        </div>
    </div>

@endsection
@section('scripts')
    <script type="text/javascript" src="{{ asset('js/parsley.min.js') }}"></script>
    
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            ClassicEditor
                .create(document.querySelector('#ckeditor'))
                .then(editor => {
                    console.log("CKEditor initialized successfully.");
                })
                .catch(error => {
                    console.error("CKEditor initialization error:", error);
                });
        });
    </script>
@endsection
