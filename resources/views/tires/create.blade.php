@extends ('layouts.master')

@section ('content')
<form method="POST" action="/tires/">
	{{ csrf_field() }}
  <div class="form-group">
  	<div class = "row">
  		
      <div class="col-3">
   			 Name<input type="text" class="form-control" placeholder=".col-2" id="tire_name" name="tire_name">
  		</div>
  		
      <div class="col-3">
   			 Price<input type="text" class="form-control" placeholder=".col-3" id="tire_price" name="tire_price">
  		</div>
  		
      <div class="col-3">
    		Stock<input type="text" class="form-control" placeholder=".col-4" id="tire_stock" name="tire_stock">
 	    </div>

	   </div>
  </div>



  <div class="form-group">
  	<div class = "row">
  	 
     <div class="col-3"></div>
  	 
     <div class="col-3"></div>
  	 
     <div class="col-3">
  	   <button type="submit" class="btn btn-primary">Add Tire</button>
     </div>

    </div>
  </div>
 


</form>
<a href="/tires/"><button class="btn btn-danger">Cancel</button></a>
@endsection