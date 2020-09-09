@extends('layouts.app')

@section('content')
<div class="container">
	<h1>Jokes</h1>
	@if($haveJokes)
		<h2 class="text-success">Found {{ count($jokes) }}</h2>

		<div class="card-deck">
		@foreach($jokes as $joke)
			<div class="card mb-3 border-dark" style="min-width:18rem;">
				<div class="card-header bg-dark text-light">
					Joke {{ $joke->id }}
				</div>
				<div class="card-body">
					<p class="card-text">{{ $joke->the_joke }}</p>
				</div>
				<div class="card-footer text-muted bg-dark">
					<div class="row">
						<span class="col-9">{{ $joke->author }}</span>
						<span class="col-3">{{ $joke->rating }}</span>
						<span class="col-12">{{ $joke->tags }}</span>
					</div>
				</div>
			</div>
		@endforeach
	@else
		<h2 class="bg-warning">NO Jokes</h2>
	@endif
</div>
@endsection

@section('footer')
<!-- No Content -->
@endsection
