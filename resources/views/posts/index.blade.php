@extends('main')

@section('title','All Rlogs')

@section('content')

	<div class="container-fluid text-dark bg-sandy p-4 m-5" style="background-color: #e7e4da;">
			<div class="row">
				<div class="col-md-8">
					<h1>All Posts</h1>
				</div>
				<div class="col-md-4 d-grid mt-2 mb-1">
					<a href="{{route('posts.create')}}" class="btn btn-dark w-100">Create New Rlog Post</a>
				</div>
				<hr>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table">
						<thead>
							<th>#</th>
							<th>Title</th>
							<th>Body</th>
							<th>Created At</th>
							<th></th>
						</thead>
						<tbody>
							@foreach($posts as $post)
							<tr>
								<th>{{$post->id}}</th>
								<td>{{$post->title}}</td>
								<td>{{substr(strip_tags($post->body),0,50)}}{{ strlen(strip_tags($post->body)) > 50 ? "..." : ""}} </td>
								<td>{{date('M j, Y',strtotime($post->created_at))}}</td>
								<td class="d-grid"><a href="{{route('posts.show',$post->id)}}" class=" btn btn-orange px-5">view</a><a href="{{route('posts.edit',$post->id)}}" class="btn btn-purple mt-1 px-5">edit</a></td>
							</tr>	
							@endforeach
						</tbody>

					</table>
					<div class="d-flex justify-content-center">
						{{ $posts->links() }}
					</div>
				</div>
			</div>

	</div>
@endsection