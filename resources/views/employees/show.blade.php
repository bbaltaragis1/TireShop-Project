@extends ('layouts.master')

@section ('content')
<form method="POST" action="/employees/">
  {{ csrf_field() }}
  <div class="form-group">
     <div class = "row">
        <div class="col-3">
          Name<input type="text" class="form-control" placeholder=".col-2" id="name" name="name" readonly>
        </div>
        <div class="col-3">
          Price<input type="text" class="form-control" placeholder=".col-3" id="price" name="price" readonly>
        </div>
        <div class="col-3">
          Brand<input type="text" class="form-control" placeholder=".col-4" id="brand" name="brand" readonly>
        </div>
        <div class="col-3">
          Rim Diameter<input type="text" class="form-control" placeholder=".col-4" id="rimDiameter" name="rimDiameter" readonly>
        </div>
    </div>
  </div>
  


  <div class="form-group">
      <div class = "row">
        <div class="col-3">
          <a href="/employees"><button class="btn btn-danger">Cancel</button></a>
        </div>

        <div class="col-3"></div>
     
        <div class="col-3">
        <button type="submit" class="btn btn-primary">Add Employee</button>
        </div>
      </div>
  </div>

</form>

@endsection