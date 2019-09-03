@extends('layout.app')

@section('content')
	<a href="{{ url()->previous() }}" class="btn btn-default"> < Go Back</a>

	<h1> {{ $post->title }} </h1>
	

	<div>
		{{ $post->body }}
	</div>

	<hr>
	<small> Written on: {{ $post->created_at }} - update at: {{$post->updated_at}}</small>

	<hr>

	<a href="{{ $post->id }}/edit" class="btn btn-default">Edit</a> 
		
@endsection