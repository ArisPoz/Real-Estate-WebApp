@extends('layouts.app')

@section('content')

<div class="container content-margin">
  
  <div class="row">
    <div class="col-md-6">
    <h1>Add Product</h1>
    </div>
  </div>
  
    
  
<div class="row">
  
  <div class="col-md-6">
  <form method="post" action= "">
    {{ csrf_field() }} 
 <div class="form-group">
   <label for="productname" class="loginFormElement">Name</label>
   <input class="form-control" name="name" type="text">
 </div>
    
 <div class="form-group">
   <label for="productprice" class="loginFormElement">Product Price</label>
   <input class="form-control" name="price" type="text">
 </div>
   

<div class="form-group">
 
<label class="control-label">Product Image</label>
 
<input class="filestyle" data-icon="false" type="file">
 
</div>
    
    <div class="form-group">
      <label class="loginformelement" for="productdescription">Product Description</label>
  	  <input id="productdescription" class="form-control input-lg" placeholder="Large" type="text"><div class="container">
      </div>
 
    <button type="submit" id="loginSubmit" class="btn btn-success loginFormElement">Add Product</button>
  
    </div></form>
    
    </div>
  
  
  

  
  
  

  
  </div>
  
  <!-- /.container -->

@endsection
