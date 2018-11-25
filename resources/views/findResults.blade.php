@extends('layouts.app')

@section('content')

	@foreach($searchListings as $listing)
	<p>{{ $listing->name }}</p>
	@endforeach
@endsection
