@extends('layout.app')

@section('content')
	<a href="{{config('app.url')}}/post" class="btn btn-default"> < Go Back</a>

	<h1> {{ $post->title }} </h1>
	

	<div>
		{{ $post->body }}
	</div>

	<hr>
	<small> Written on: {{ $post->created_at }}</small>

	<hr>

	<a href="{{ $post->id }}/edit" class="btn btn-default">Edit</a> 
		
@endsection