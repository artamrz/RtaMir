@extends('main') 

@section('title','View Rlog')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1>{{ $post->title }}</h1>

			{!! $post->body !!}
		</div>
		<div class="col-md-4">
			<div class="card card-body bg-light">
				<dl class="dl-horizontal">
					<dt>URL Slug:</dt>
					<dd><a href="{{ route('blog.single',$post->slug) }}" class="">{{$post->slug}}</a></dd>
				</dl>
				<dl class="dl-horizontal">
					<dt>Created At:</dt>
					<dd>{{date('M j Y h:i a',strtotime($post->created_at))}}</dd>
				</dl>
				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>{{date('M j Y h:i a',strtotime($post->updated_at))}}</dd>
				</dl>
				<hr>
				<form action="{{ route('posts.destroy', $post->id) }}" method="POST">
					@csrf
					@method('DELETE')
					<div class="row">
						<div class="col-sm-6 d-grid">
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-outline-dark">Edit</a>
                        </div>
						<div class="col-sm-6 d-grid"> 
                            <button type="submit" class="btn btn-dark"> Delete</button>
                        </div>
					</div>
				</form>
				<div class="row">
					<div class="col-md-12 d-grid mt-3">
						<a href="{{ route('posts.index', $post->id) }}" class="btn btn-outline-dark">See All The Rlog Posts</a>
					</div>
				</div>
			</div>
		</div>
</div>
	
	
@endsection