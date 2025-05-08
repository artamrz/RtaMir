@extends('main') 

@section('title','View Rlog')

@section('content')

<div class="container bg-sandy p-4 rounded-3 text-dark">
	<div class="row g-4">

		
		<div class="col-lg-7 col-md-8">
			<img src="{{ asset('img/post_img/' . $post->image) }}" 
				 class="img-fluid rounded" 
				 style="max-width: 800px; max-height: 400px; width: 100%; height: auto;" 
				 alt="Post Image" />
		</div>

		
		<div class="col-lg-5 col-md-6">
			<div class="card card-body bg-dark text-light">
				<dl class="dl-horizontal mb-2">
					<dt>URL Slug:</dt>
					<dd><a href="{{ route('rlogs.single',$post->slug) }}" class="text-info">{{ $post->slug }}</a></dd>
				</dl>
				<dl class="dl-horizontal mb-2">
					<dt>Created At:</dt>
					<dd>{{ date('M j Y h:i a', strtotime($post->created_at)) }}</dd>
				</dl>
				<dl class="dl-horizontal mb-2">
					<dt>Last Updated:</dt>
					<dd>{{ date('M j Y h:i a', strtotime($post->updated_at)) }}</dd>
				</dl>

				<hr>

				<form action="{{ route('posts.destroy', $post->id) }}" method="POST">
					@csrf
					@method('DELETE')
					<div class="row">
						<div class="col-sm-6 d-grid mb-2">
							<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-orange">Edit</a>
						</div>
						<div class="col-sm-6 d-grid mb-2"> 
							<button type="submit" class="btn btn-outline-light fw-bold w-100">Delete</button>
						</div>
					</div>
				</form>

				<div class="d-grid mt-2">
					<a href="{{ route('posts.index', $post->id) }}" class="btn btn-purple w-100">See All The Rlog Posts</a>
				</div>
			</div>
		</div>

		<!-- Post Content -->
		<div class="col-lg-12 col-md-12 px-4 pb-5">
			<h1 class="display-5 fw-bold px-4">{{ $post->title }}</h1>
			<p class="fs-4 px-4">{{ substr(strip_tags($post->body), 0, 270) }}{{ strlen(strip_tags($post->body)) > 300 ? "..." : "" }}</p>
			{!! $post->body !!}
		</div>

	</div>
</div>

	
	
@endsection