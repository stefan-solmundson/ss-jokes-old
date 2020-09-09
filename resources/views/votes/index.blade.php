@extends('layouts.app')

@section('content')
<div class="container">
	<h1>Votes</h1>
	@if($havevotes)
		<h2 class="text-success">Found {{ count($votes) }}</h2>

		<div class="card-deck">
		@foreach($votes as $vote)
		<div class="card mb-3 border-dark" style="min-width:18rem;">
			<div class="card-header bg-dark text-light">
				vote {{ $vote->joke_id }}
			</div>
			<div class="card-body col-3">
				<p class="card-text">{{ $vote->vote }}</p>
			</div>
			<div class="card-footer text-muted bg-dark">
				<span>{{ $vote->user_id }}</span>
			</div>
		</div>
		@endforeach
	@else
		<h2 class="bg-warning">NO votes</h2>
	@endif
</div>
@endsection

@section('footer')
<!-- No Content -->
@endsection
