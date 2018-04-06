@extends ('layouts.master')

@section ('content')
<form method="POST" action="/employees/">
	{{ csrf_field() }}
  <div class="form-group">
  	<div class = "row">
  		
      <div class="col-3">
   			 First Name<input type="text" class="form-control" placeholder="firstName" id="firstName" name="firstName">
  		</div>
  		
      <div class="col-3">
   			 Last Name<input type="text" class="form-control" placeholder="lastName" id="lastName" name="lastName">
  		</div>
  		
      <div class="col-3">
    		Start Date<input type="date" class="form-control" placeholder="startDate" id="startDate" name="startDate">
 	    </div>

	   </div>
  </div>



  <div class="form-group">
  	<div class = "row">
  	 
     <div class="col-3"></div>
  	 
     <div class="col-3"></div>
  	 
     <div class="col-3">
  	   <button type="submit" class="btn btn-primary">Add Employee</button>
     </div>

    </div>
  </div>
 
  @include ('layouts.errors')

</form>
<a href="/employees/"><button class="btn btn-danger">Cancel</button></a>
@endsection