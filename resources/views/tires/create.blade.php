@extends ('layouts.master')

@section ('content')
<form method="POST" action="/tires/">
	{{ csrf_field() }}
  <div class="form-group">
  	<div class = "row">
  		
      <div class="col-3">
   			 Name<input type="text" class="form-control" placeholder="Name" id="name" name="name">
  		</div>
  		
      <div class="col-3">
   			 Price<input type="text" class="form-control" placeholder="Price" id="price" name="price">
  		</div>
  		
      <div class="col-3">
    		Brand<input type="text" class="form-control" placeholder="Brand" id="brand" name="brand">
 	    </div>

      <div class="col-3">
        Rim Diameter<input type="text" class="form-control" placeholder="Rim Diameter" id="rimDiameter" name="rimDiameter">
      </div>
      <div class="col-3">
        Stock<input type="text" class="form-control" placeholder="Stock" id="stock" name="stock">
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