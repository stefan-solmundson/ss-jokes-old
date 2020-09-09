@extends('layouts.app')

@section('content')
<div class="container">
	<h1>TAG! You're It!</h1
		>
	@if($haveJokes)
		<h2 class="text-success">Found {{ count($jokes) }}</h2>

		<div class="card-deck">
		@foreach($jokes as $joke)
			<div class="card mb-3 border-dark" style="min-width:18rem;">
				<div class="card-header bg-dark text-light">
					Joke #
				</div>
				<div class="card-bodu">
					<p class="card-text">Joke</p>
				</div>
				<div class="card-footer text-muted bg-dark">
					<div class="row">
						<span class="col-8">Author</span>
						<span class="col-4">Rating</span>
						<span class="col-12">Tags</span>
					</div>
				</div>
			</div>
		@endforeach
	@else
		<h2 class="text-warning">NO Jokes</h2>
	@endif
</div>
@endsection

@section('footer')
<!-- No Content -->
@endsection