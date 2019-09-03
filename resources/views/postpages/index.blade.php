@extends('layout/app')

@section('content')
	<h1> Posts </h1>

	@if(count($posts) > 0)

		@foreach($posts as $item)
			<div class="well">

				<h3> {{ $item->title }} </h3>
				<small> Written on :{{ $item->created_at }}</small>
				
			</div>			
		@endforeach

	@else
		<p>No post found</p>

	@endif

@endsection