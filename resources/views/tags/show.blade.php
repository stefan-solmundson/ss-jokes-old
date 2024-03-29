@extends('layouts.app')

@section('content')
<div class="container">
	@if($tag)
		<h2>{{ $tag->tag }}</h2>
		<p>ID: {{ $tag->id }}</p>
	@else
		<h2 class="bg-warning">Tag with that ID not found.</h2>
	@endif
</div>
@endsection

@section('footer')
<!-- No Content -->
@endsection