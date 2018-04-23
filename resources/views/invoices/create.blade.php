@extends ('layouts.master')

@section ('content')
<form method="POST" action="/invoices/">
	{{ csrf_field() }}
<div class="wrapper container">
  <div class="form-group">
  	<div class = "row">
  		
      <div class="col-3">
   			 Employee ID<input type="text" class="form-control" id="employeeID" name="employeeID" value="{{$employee->employeeID}}" readonly>
  		</div>
  		
      <div class="col-3">
   			 Customer ID<input type="text" class="form-control" id="customerID" name="customerID" value="{{$customer->customerID}}"readonly>
  		</div>
  		</div>
      <div class = "row">
      <div class="col-3">
    		Order ID<input type="text" class="form-control"  id="orderID" name="orderID" value="{{$order->orderID}}" readonly>
 	    </div>

      <div class="col-3">
        Date<input type="date" class="form-control" id="invoiceDate" name="invoiceDate" value ="{{$order->orderDate}}" readonly>
      </div>

	   </div>
     <div class = "row">
      <div class="col-3">

      Status<select class = "form-control" name="status" id="status">
        <option value ="Pending">Pending</option>
        <option value = "Complete">
        </option>

      </select>
    </div>
    </div>
  </div>

  	<div class = "row">
    <div class="col-3">
    <button type="submit" class="btn btn-primary">Create Invoice</button>
  </div>
  <div>
    <div class = "col-3">
         <a href="/customers/"><button class="btn btn-danger">Cancel</button></a>
    </div>
  </div>
</div>
  @include ('layouts.errors')

</form>
@endsection