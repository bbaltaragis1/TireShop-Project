@extends ('layouts.master')

@section ('content')
<form method="POST" action="/tires/">
	{{ csrf_field() }}
  <div class="form-group">
  	<div class = "row">
  		
      <div class="col-3">
   			 <label>Name</label><input type="text" class="form-control" id="name" name="name">
  		</div>
  		
      <div class="col-3">
   			 <label>Price</label><input type="text" class="form-control" id="price" name="price">
  		</div>

  		</div>
      <div class = "row">
      <div class="col-3">
    		<label>Brand</label><input type="text" class="form-control"  id="brand" name="brand">
 	    </div>

      <div class="col-3">
        <label>Rim Diameter</label><input type="text" class="form-control"  id="rimDiameter" name="rimDiameter">
      </div>
    </div>
    <div class = "row">
      <div class="col-3">
        <label>Stock</label><input type="text" class="form-control"  id="stock" name="stock">
      </div>
    </div>
	   </div>

  <div class="form-group">
  	<div class = "row">
  	 
  	 <div class = "row">
     <div class="col-3">
  	   <label> </label><button type="submit" class="btn btn-primary">Add Tire</button>
     </div>
   </div>
    </div>
  </div>
  @include ('layouts.errors')
</form>
<a href="/tires/"><button class="btn btn-danger">Cancel</button></a>
@endsection