@extends('main')

@section('title',"$post->title")

@section('content')


		<div class="row d-flex justify-content-center">
			<div class="col-md-8">
				<h1>{{$post->title}}</h1>
				<p>{!!$post->body!!}</p>
			</div>		
		</div>
@stop