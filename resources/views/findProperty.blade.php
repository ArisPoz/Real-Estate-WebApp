@extends('layouts.app')

@section('content')
	<div class="container-fluid content-margin-extended">
		<div style="margin-left:500px;">
		<form method="POST" action="{{ url('findResults') }}">
		<div class="form-group">
  			<label class="col-md-4 control-label" for="textinput">&nbspLocation</label>  
  			<div class="col-md-4">
  			<input id="textinput" name="city" type="text" placeholder="Search Location" class="form-control input-md">
  			<span class="help-block">&nbsp&nbsp&nbsp(e.g City,Town,Village)</span>  
  		</div>
	</div>

		<!-- Text input-->
	<div class="form-group">
 		 <label class="col-md-4 control-label" for="textinput">&nbspPrice</label>  
 		 <div class="col-md-4">
 		 <input id="textinput" name="price" type="text" placeholder="Enter Max Price" class="form-control input-md">
 		 <span class="help-block">&nbsp&nbsp&nbspEuro (€)</span>  
 		 </div>
	</div>

		<!-- Button -->
		<div class="form-group">
  		<div class="col-md-4">

    		&nbsp<button id="singlebutton" type="submit" name="singlebutton" class="btn btn-primary">Search</button>
  		</div>
		</div>
		</form>
	</div>
	</div>
@endsection
