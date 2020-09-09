@extends('layouts.app')

@section('content')
<div class="container">
	<h1>Tags</h1>
	@if($haveTags)
		<h2 class="text-success">Found {{ count($tags) }}</h2>

		@foreach($tags as $tag)
			<p>{{ $tag->id}} <span class="badge badge-primary">
				#{{$tag->tag}}
			</span></p>
		@endforeach
	@else
		<h2 class="bg-warning">NO tags</h2>
	@endif
</div>
@endsection

@section('footer')
<!-- No Content -->
@endsection