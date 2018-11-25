<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

		 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" type="text/css" href="css/navbar.css">

</head>
<body>
	<!-- Navigation bar start -->
	<nav class="navbar navbar-expand-lg mb-4 top-bar navbar-static-top sps sps--abv navbar-default">
        	<div class="container">
      			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse1" 				aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        			<span class="navbar-toggler-icon"></span>
      			</button>
      		<a class="navbar-brand mx-auto" href="/">Home<span>Scopic</span></a>
      		<div class="collapse navbar-collapse" id="navbarCollapse1">
        		<ul class="navbar-nav ml-auto">
         			<li class="nav-item active"> <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a> </li>
        			<li class="nav-item"> <a class="nav-link" href="/findProperty">Find Property</a> </li>
        			<li class="nav-item"> <a class="nav-link" href="/about">About</a> </li>

			@if(Auth::check())
			<li class="nav-item"> <a href="{{route('logout')}}"><button type="button" class="btn btn-primary btn-custom">Logout</button></a> </li>
			@else
            <li class="nav-item"> <a href="{{route('login')}}"><button type="button" class="btn btn-primary btn-custom">Login</button></a> </li>
            <li class="nav-item"> <a href="{{route('register')}}"><button type="button" class="btn btn-primary btn-custom">Sign Up</button></a> </li>
			@endif

	</ul>
      		</div>
            </div>
    	</nav>
	<!-- Navigation bar end-->
        @yield('content')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
