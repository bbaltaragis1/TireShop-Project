@extends ('layouts.master')

@section ('content')
{!! Form::model($order, [
    'method' => 'PATCH',
    'route' => ['orders.update', $order->orderID]
]) !!}
  {{ csrf_field() }}
  <div class="form-group">
    <div class = "row">
      <div class="col-3">
         tireID<input type="text" class="form-control" value="{{$order->tireID}}" id="tireID" name="tireID" >
      </div>
      <div class="col-3">
         Order Date<input type="date" class="form-control" value="{{$order->orderDate}}" id="orderDate" name="orderDate">
      </div>
      <div class="col-3">
        Amount Ordered<input type="text" class="form-control" value="{{$order->quantity}}" id="quantity" name="quantity">
    </div>
    <div class="col-3">
        Labor Cost<input type="text" class="form-control" value="{{$order->laborCost}}" id="laborCost" name="laborCost">
    </div>
  </div>
  </div>
  <div class="form-group">
    <div class = "row">
    <div class="col-3">
    <button type="submit" class="btn btn-primary">Update</button>
  </div>
  </div>
  </div>
 


</form>
   <a href="/orders/"><button class="btn btn-danger">Cancel</button></a>
@endsection