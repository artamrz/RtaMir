@extends('main') 

@section('title','Edit Post')   

@section('content')

  <div class="container-fluid col-md-12 bg-sandy p-4 rounded-3 p-4 text-dark">
        <div class="row">
            <h1 class="display-5 fw-bold">Edit Your Post</h1>
            <hr>
                  <form action="{{ route('posts.update', $post->id) }}" method="POST"enctype="multipart/form-data" data-parsley-validate>
                        @csrf
                        @method('PUT')
                        <div class="col-md-7">
                            <label for="title">Title:</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}" required>

                            <label for="slug">URL Slug:</label>
                            <input type="text" name="slug" id="slug" class="form-control" maxlength="255" minlength="5" value="{{ $post->slug }}" required>
                            
                            <label for="image">Photo:</label>
                            <input type="file" name="image" class="form-control">
                            <label for="body">Post Content</label>
                            <textarea name="body" id="ckeditor" class="form-control">{{ $post->body }}</textarea>
                        </div>    

                        <div class="col-md-5 mt-4 text-dark">
                            <div class="card card-body bg-sandy">
                                <dl class="dl-horizontal">
                                    <dt>Created At:</dt>
                                    <dd>{{date('M j Y h:i a',strtotime($post->created_at))}}</dd>
                                </dl>
                                <dl class="dl-horizontal">
                                    <dt>Last Updated:</dt>
                                    <dd>{{date('M j Y h:i a',strtotime($post->updated_at))}}</dd>
                                </dl>
                                <hr>
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-purple w-100 mt-3">Cancel</a>
                                <button type="submit" class="btn btn-orange w-100 mt-3"> Save Post</button>
                    
                            </div>
                        </div>
                    </form>    
        </div>
    </div>

@endsection
@section('scripts')
    <script type="text/javascript" src="{{ asset('js/parsley.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/media-embed/oembed/1.0.0/oembed.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>

    <script>
    ClassicEditor
        .create(document.querySelector('#ckeditor'))
        .catch(error => {
            console.error(error);
        });
    </script>

    <script>
        let editor;

        ClassicEditor
            .create(document.querySelector('#ckeditor'), {
                mediaEmbed: {
                    previewsInData: true
                }
            })
            .then(e => {
                editor = e;
                console.log('CKEditor initialized with previewsInData.');
            })
            .catch(error => {
                console.error(error);
            });
    </script>


@endsection
