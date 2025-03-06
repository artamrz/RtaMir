@extends('main')

@section('title',"$post->title")

@section('content')


		<div class="row d-flex justify-content-center">
			<div class="col-md-8">
				<img src="{{asset('img/post_img'.$post->post_img)}}" class="mx-auto d-block m-3" width="800" height="400" alt=""/>
				<h1>{{$post->title}}</h1>
				<p>{!!$post->body!!}</p>
			</div>		
		</div>
@stop