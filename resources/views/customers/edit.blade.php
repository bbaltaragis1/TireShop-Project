@extends ('layouts.master')

@section ('content')
{!! Form::model($customer, [
    'method' => 'PATCH',
    'route' => ['customers.update', $customer->customerID]
]) !!}
  {{ csrf_field() }}
  <div class="form-group">
    <div class = "row">
      <div class="col-3">
         First Name<input type="text" class="form-control" value="{{$customer->firstName}}" id="firstName" name="firstName" >
      </div>
      <div class="col-3">
         Last Name<input type="text" class="form-control" value="{{$customer->lastName}}" id="lastName" name="lastName">
      </div>
      <div class="col-3">
        Phone Number<input type="text" class="form-control" value="{{$customer->phoneNumber}}" id="phoneNumber" name="phoneNumber">
    </div>
    <div class="col-3">
        Email<input type="text" class="form-control" value="{{$customer->email}}" id="phoneNumber" name="email">
    </div>
  </div>
  </div>
  <div class="form-group">
    <div class = "row">
    <div class="col-3">
    </div>
    <div class="col-3">
  </div>
    <div class="col-3">
    <button type="submit" class="btn btn-primary">Update</button>
  </div>
  </div>
  </div>
 


</form>
   <a href="/customers/"><button class="btn btn-danger">Cancel</button></a>
@endsection