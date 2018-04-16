@extends ('layouts.master')

@section ('content')
<form method="POST" action="/orders/">
	{{ csrf_field() }}
  <div class="form-group">
  	<div class = "row">
  		
      <div class="col-3">
   			 <label>TireID</label><input type="text" class="form-control" id="tireID" name="tireID">
  		</div>
  		
      <div class="col-3">
   			 <label>Order Date</label><input type="date" class="form-control" id="orderDate" name="orderDate">
  		</div>

  		</div>
    </div>
      <div class = "row">
      <div class="col-3">
    		<label>Amount of Tires</label><input type="text" class="form-control"  id="quantity" name="quantity">
 	    </div>

      <div class="col-3">
        <label>Total Labor Cost</label><input type="text" class="form-control"  id="laborCost" name="laborCost">
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
</form>
<a href="/orders/"><button class="btn btn-danger">Cancel</button></a>
@endsection