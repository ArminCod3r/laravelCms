@extends('layout/app')

@section('content')

	<form action="{{ action('PostsController@store') }}" method="POST" accept-charset="utf-8">
		{{ csrf_field() }}
		

		<div class="form-group">
			<label for="title">Title</label>
  			<input type="text" name="title" id="title" class="form-control" value="" placeholder="Title"><br>
		</div>

		<div class="form-group">
			<label for="body">Body</label><br/>
  			<textarea rows="4" cols="50" name="body" class="form-control" value=""> </textarea>
		</div>

		<input type="submit" name="submit" value="Submit" class="btn btn-primary">

	</form>

@endsection