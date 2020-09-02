@extends('layouts.app')

@section('content')
<div class="container">
	<h1>TAG! You're It!</h1
		>
	<!-- @if(count($tags)>0) -->
	@if($haveTags)
	<h2 class="text-success">Found {{ count($tags) }}</h2>
	@foreach($tags as $tag)
	<p>{{ $tag->id}} <span class="badge badge-primary">
		#{{$tag->tag}}
	</span></p>
	@endforeach
	@else
	<h2 class="text-warning">NO tags</h2>
	@endif
</div>
@endsection

@section('footer')
<!-- No Content -->
@endsection