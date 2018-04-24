@extends ('layouts.master')

@section ('content')
{!! Form::model($invoice, [
    'method' => 'PATCH',
    'route' => ['invoices.update', $invoice->invoiceID]
]) !!}
  {{ csrf_field() }}
<div class="wrapper container">
  <div class="form-group">
  	<div class = "row">
  		
      <div class="col-3">
   			 Employee ID<input type="text" class="form-control" id="employeeID" name="employeeID" value="{{$invoice->employeeID}}" readonly="">
  		</div>
  		
      <div class="col-3">
   			 Customer ID<input type="text" class="form-control" id="customerID" name="customerID" value="{{$invoice->customerID}}" readonly>
  		</div>
  		</div>
      <div class = "row">
      <div class="col-3">
    		Order ID<input type="text" class="form-control"  id="orderID" name="orderID" value="{{$invoice->orderID}}" readonly>
 	    </div>

      <div class="col-3">
        Date<input type="date" class="form-control" id="invoiceDate" name="invoiceDate" value ="{{$invoice->invoiceDate}}" >
      </div>

	   </div>
     <div class = "row">
      <div class="col-3">

      Status<select class = "form-control" name="status" id="status" value="{{$invoice->status}}">
        <option disabled selected value style="display:none">Select One</option>
        <option value ="Pending">Pending</option>
        <option value = "Complete">Complete</option>
      </select>
    </div>
    </div>
  </div>

  	<div class = "row">
    <div class="col-3">
    <button type="submit" class="btn btn-primary">Update</button>
  </div>
  <div>
    <div class = "col-3">
         <a href="/invoices/"><button class="btn btn-danger" type ="button">Cancel</button></a>
    </div>
  </div>
</div>
  @include ('layouts.errors')

</form>
@endsection