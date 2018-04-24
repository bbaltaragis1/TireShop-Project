@extends ('layouts.master')

@section ('content')
<form method="POST" action="/customers/">
	{{ csrf_field() }}
<div class="wrapper container">
  <div class="form-group">
    Customer already in system? <a><button type="button" class = "btn btn-primary"> Click Here</button></a>
  	<div class = "row">
  		
      <div class="col-3">
   			 First Name<input type="text" class="form-control" placeholder="First Name" id="firstName" name="firstName">
  		</div>
  		
      <div class="col-3">
   			 Last Name<input type="text" class="form-control" placeholder="Last Name" id="lastName" name="lastName">
  		</div>
  		</div>
      <div class = "row">
      <div class="col-3">
    		Phone Number<input type="text" class="form-control" placeholder="Phone number" id="phoneNumber" name="phoneNumber">
 	    </div>

      <div class="col-3">
        Email<input type="text" class="form-control" placeholder="Email" id="email" name="email">
      </div>

	   </div>
  </div>

  	<div class = "row">
    <div class="col-3">
    <button type="submit" class="btn btn-primary">Add Customer</button>
  </div>
  <div>
    <div class = "col-3">
         <a href="/customers/"><button class="btn btn-danger" type="button">Cancel</button></a>
    </div>
  </div>
</div>
  @include ('layouts.errors')

</form>
@endsection