@extends('layouts.app')

@section('content')
	<a href="{{ action('PostsController@index') }}" class="btn btn-default"> < Go Back</a>

	<h1> {{ $post->title }} </h1>
	

	<div>
		{!! $post->body !!}
	</div>

	<hr>
	<small> Written on: {{ $post->created_at }} - By: {{ $post->user->name }} </small>

	<hr>

	@if (!Auth::guest())
		@if(Auth::user()->id == $post->user->id)

		<a href="{{ $post->id }}/edit" class="btn btn-default">Edit</a>

		<form action="{{route('posts.destroy', $post->id ) }}" method="POST" accept-charset="utf-8" class="pull-right">
			{{ csrf_field() }}		
			<input type="hidden" name="_method" value="DELETE">
			<input type="submit" name="submit" value="DELETE" class="btn btn-danger">
		</form>
		
		@endif
	@endif
		
@endsection