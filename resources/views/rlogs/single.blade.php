@extends('main')

@section('title',"$post->title")

@section('content')


		<div class="row d-flex justify-content-center text-dark bg-sandy">
			<div class="col-md-8">
			@if($post->image)
   				 <img src="{{ url('img/post_img/' . $post->image) }}" class="mx-auto d-block m-3" width="800" height="400" alt="Post Image"/>
			@endif
				<h1>{{$post->title}}</h1>
				<h6>{{date('M j, Y',strtotime($post->created_at))}}</h6>
				<hr>
				<p>{!!$post->body!!}</p>
			</div>		
		</div>
@stop