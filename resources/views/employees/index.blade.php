@extends ('layouts.master')

@section ('content')
<table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Start Date</th>
                  <th></th>
                  <th></th>
                </tr>
                </thead>
                @foreach($employees as $employee)
                  <tr>
                    <td>{{$employee->employeeID}}</td>
                    <td>{{$employee->firstName}}</td>
                    <td>{{$employee->lastName}}</td>
                    <td>{{$employee->startDate}}</td>
                    <td><a href="/employees/{{$employee->employeeID}}/edit"><button type="button" class="btn btn-success">Edit</button></a></td>
                    <td>
                      {!! Form::model($employee, [
                       'method' => 'DELETE',
                      'route' => ['employees.destroy', $employee->employeeID]
                      ]) !!}
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                  </tr>
                @endforeach

              </tbody>
            </table>
          <a href="/employees/create"><button type="button" class="btn btn-primary">Add Employee</button></a>
@endsection