@extends ('layouts.master')

@section ('content')
<form method="POST" action="/customers/">
	{{ csrf_field() }}
  <div class="form-group">
  	<div class = "row">
  		
      <div class="col-3">
   			 First Name<input type="text" class="form-control" placeholder="First Name" id="firstName" name="firstName">
  		</div>
  		
      <div class="col-3">
   			 Last Name<input type="text" class="form-control" placeholder="Last Name" id="lastName" name="lastName">
  		</div>
  		
      <div class="col-3">
    		Phone Number<input type="text" class="form-control" placeholder="Phone number" id="phoneNumber" name="phoneNumber">
 	    </div>

      <div class="col-3">
        Email<input type="text" class="form-control" placeholder="Email" id="email" name="email">
      </div>

	   </div>
  </div>

  <div class="form-group">
  	<div class = "row">
  	 
     <div class="col-3"></div>
  	 
     <div class="col-3"></div>
  	 
     <div class="col-3">
  	   <button type="submit" class="btn btn-primary">Add Customer</button>
     </div>

    </div>
  </div>
  @include ('layouts.errors')

</form>
<a href="/customers/"><button class="btn btn-danger">Cancel</button></a>
@endsection