@extends('layout/app')

@section('content')

	<form action="{{route('posts.update', $post->id ) }}" method="POST" accept-charset="utf-8">
		{{ csrf_field() }}
		

		<div class="form-group">
			<label for="title">Title</label>
  			<input type="text" name="title" id="title" class="form-control" value="{{$post->title}}" placeholder="Title"><br>
		</div>

		<div class="form-group">
			<label for="body">Body</label><br/>
  			<textarea rows="4" cols="50" name="body" class="form-control" value=""> {{ $post->body}} </textarea>
		</div>

		<input type="hidden" name="_method" value="PATCH">

		<input type="submit" name="submit" value="Submit" class="btn btn-primary">

	</form>

@endsection