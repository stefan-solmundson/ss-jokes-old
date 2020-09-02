@extends('layouts.app')

@section('content')
	@if($tag)
		<h2>{{ $tag->tag }}</h2>
		<p>ID: {{ $tag-id }}
	@else
		<h2 class="text-warning">Tag with that ID not found.</h2>
	@endif
@endsection

@section('footer')
<!-- No Content -->
@endsection