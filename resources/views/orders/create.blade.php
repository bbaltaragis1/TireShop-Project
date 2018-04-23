@extends ('layouts.master')

@section ('content')
<form method="POST" action="/orders/">
	{{ csrf_field() }}
<div class="wrapper container">
  <div class="form-group">
  	<div class = "row">
  		
      <div class="col-3">
   			 TireID<input type="text" class="form-control" id="tireID" name="tireID">
  		</div>
  		
      <div class="col-3">
   			 Order Date<input type="date" class="form-control" id="orderDate" name="orderDate">
  		</div>

  		</div>

      <div class = "row">
      <div class="col-3">
    		Amount of Tires<input type="text" class="form-control"  id="quantity" name="quantity">
 	    </div>

      <div class="col-3">
        Total Labor Cost<input type="text" class="form-control"  id="laborCost" name="laborCost">
      </div>
    </div>

<div class = "row">
     
     <div class="col-3">
       <button type="submit" class="btn btn-primary">Create Order</button>
     </div>
     <div class ="col-3">
        <a href="/orders/"><button class="btn btn-danger" type="button">Cancel</button></a>
    </div>
    </div>
    </div>
</div>
</form>
@endsection