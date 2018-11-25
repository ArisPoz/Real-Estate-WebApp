@extends('layouts.app')

@section('content')

<!-- Page Content -->
    <div class="container content-margin">
		@if(Auth::check())
      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">Welcome User</h1>
          <div class="list-group">
            <a href="/profile" class="list-group-item"><i class="fa fa-profile"></i> Profile</a>
            <a href="/myproperties" class="list-group-item"><i class="fa fa-eye"></i> View My Properties</a>
            <a href="/addproperty" class="list-group-item"><i class="fa fa-plus"></i> Add Property</a>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">


          <div class="row">
			@foreach($newListings as $listing)
            <div class="col-lg-4 col-md-6 mb-4">
          		<div class="card">
            		<div style="width:300; height:200px; background:url('{{$listing->photo}}');" ><img class="card-img-top" alt=""></div>
            		<div class="card-body">
              			<h4 class="card-title">{{$listing->name}}</h4>
              			<p class="card-text">{{ $listing->price }} €</p>
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
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->
		@else
		<p>You have to be logged in</p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		@endif
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
@endsection 
