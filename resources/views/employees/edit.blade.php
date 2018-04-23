@extends ('layouts.master')

@section ('content')
{!! Form::model($employee, [
    'method' => 'PATCH',
    'route' => ['employees.update', $employee->employeeID]
]) !!}
  {{ csrf_field() }}
  <div class="wrapper container">
  <div class="form-group">
    <div class = "row">
      <div class="col-3">
         First Name<input type="text" class="form-control" value="{{$employee->firstName}}" id="firstName" name="firstName" >
      </div>
      <div class="col-3">
         Last Name<input type="text" class="form-control" value="{{$employee->lastName}}" id="lastName" name="lastName">
      </div>
    </div>
    <div class = "row">
      <div class="col-3">
        Start Date<input type="text" class="form-control" value="{{$employee->startDate}}" id="startDate" name="startDate">
    </div>
    <div class="col-3">
        Status
        <select name='status' id='status' class="form-control">
        <option value = 'working'>Working</option>
        <option value = 'fired'>Fired</option>
        <option value = 'on Leave'>On Leave</option>
      </select>
    </div>
  </div>
  </div>
    <div class = "row">
    <div class="col-3">
    <button type="submit" class="btn btn-primary">Update</button>
  </div>
  <div class="col-3">
  <a href="/employees/"><button class="btn btn-danger" type="button">Cancel</button></a>
</div>
  </div>
</div>
 

</form>
 

@endsection