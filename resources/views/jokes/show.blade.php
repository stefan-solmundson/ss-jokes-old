@extends('layouts.app')

@section('content')
<div class="container">
	@if($joke)
		<h2>{{ $joke->joke }}</h2>
		<p>ID: {{ $joke->id }}</p>
	@else
		<h2 class="bg-warning">joke with that ID not found.</h2>
	@endif
</div>
@endsection

@section('footer')
<!-- No Content -->
@endsection