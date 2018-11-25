@extends('layouts.app')

@section('content')
<div class="container content-margin">
	<h2 style="margin-left:40%; margin-bottom:5%;"> My Properties </h2>
	@if(Auth::check())
	<div class="row">
			@foreach($myListings as $listing)
            <div class="col-lg-4 col-md-6 mb-4">
          		<div class="card">
            		<div style="width:300; height:200px; background:url('{{$listing->photo}}');" ><img class="card-img-top" alt=""></div>
            		<div class="card-body">
              			<h4 class="card-title">{{$listing->name}}</h4>
              			<p class="card-text">{{ $listing->price }} €</p>
            		</div>
            		<div class="card-footer">
              			<a href="" class="btn btn-primary" style="margin-left:85%;">Edit</a>
            		</div>
          		</div>
            </div>
			@endforeach
          </div>
	@else
	<p>You are not logged in!</p>
	@endif
</div>
@endsection
