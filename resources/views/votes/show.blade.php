@extends('layouts.app')

@section('content')
<div class="container">
	@if($vote)
		<h2>{{ $vote->vote }}</h2>
		<p>ID: {{ $vote->id }}</p>
	@else
		<h2 class="bg-warning">vote with that ID not found.</h2>
	@endif
</div>
@endsection

@section('footer')
<!-- No Content -->
@endsection