@extends('main') 

@section('title','View Rlog')

@section('content')

	<div class="row bg-sandy p-4 rounded-3 text-dark">
		<div class="col-md-8">
		<img src="{{ asset('img/post_img/' . $post->image) }}" class="mx-auto d-block m-3" width="800" height="400" alt="Post Image"/>

			<h1>{{ $post->title }}</h1>

			{!! $post->body !!}
		</div>
		<div class="col-md-4">
			<div class="card card-body bg-dark text-light">
				<dl class="dl-horizontal">
					<dt>URL Slug:</dt>
					<dd><a href="{{ route('rlogs.single',$post->slug) }}" class="">{{$post->slug}}</a></dd>
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
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-orange">Edit</a>
                        </div>
						<div class="col-sm-6 d-grid"> 
                            <button type="submit" class="btn btn-outline-light fw-bold w-100"> Delete</button>
                        </div>
					</div>
				</form>
				<div class="row">
					<div class="col-md-12 d-grid mt-3">
						<a href="{{ route('posts.index', $post->id) }}" class="btn btn-purple w-100">See All The Rlog Posts</a>
					</div>
				</div>
			</div>
		</div>
</div>
	
	
@endsection