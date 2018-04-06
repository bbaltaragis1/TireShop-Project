@extends ('layouts.master')

@section ('content')
{!! Form::model($employee, [
    'method' => 'PATCH',
    'route' => ['employees.update', $employee->employeeID]
]) !!}
  {{ csrf_field() }}
  <div class="form-group">
    <div class = "row">
      <div class="col-3">
         First Name<input type="text" class="form-control" value="{{$employee->firstName}}" id="firstName" name="firstName" >
      </div>
      <div class="col-3">
         Last Name<input type="text" class="form-control" value="{{$employee->lastName}}" id="lastName" name="lastName">
      </div>
      <div class="col-3">
        Start Date<input type="text" class="form-control" value="{{$employee->startDate}}" id="startDate" name="startDate">
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
   <a href="/employees/"><button class="btn btn-danger">Cancel</button></a>
@endsection