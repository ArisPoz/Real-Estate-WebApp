@extends('layouts.app')
@section('content')
   	 <!-- Page Content -->
    	<div class="container content-margin">

      		<!-- Jumbotron Header -->
      		<header class="jumbotron my-4">
        		<h1 class="display-4">Welcome to HomeScopic Real Estate</h1>
        		<p class="lead">In HomeScopic you can search for the appartment of your dreams!<br>
			You can find listings for rent,for sale so you can help your dream come true.</p>
        		<a href="#" class="btn btn-primary btn-lg">Get Started!</a>
      		</header>

      		<!-- Page Features -->
      		<div class="row text-center">
			@foreach($listing as $listingItem )
        	<div class="col-lg-3 col-md-6 mb-4">
          		<div class="card">
            		<div style="width:300; height:200px; background:url('{{$listingItem->photo}}');" ><img class="card-img-top" alt=""></div>
            		<div class="card-body">
              			<h4 class="card-title">{{$listingItem->name}}</h4>
						<p class="card-text">{{ $listingItem->city }}</p>
              			<p class="card-text">{{ $listingItem->description }}</p>
            		</div>
            		<div class="card-footer">
              			<a href="#" class="btn btn-primary">Find Out More!</a>
            		</div>
          		</div>
        	</div>
			@endforeach

      	</div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; HomeScopic 2017</p>
      </div>
    </footer>
    <!-- /.Footer -->
@endsection
