@extends ('layouts.master')

@section ('content')
<table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Phone Number</th>
                  <th>Email</th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
                </thead>
                @foreach($customers as $customer)
                  <tr>
                    <td>{{$customer->customerID}}</td>
                    <td>{{$customer->firstName}}</td>
                    <td>{{$customer->lastName}}</td>
                    <td>{{$customer->phoneNumber}}</td>
                     <td>{{$customer->email}}</td>
                     <td><a href="/customers/{{$customer->customerID}}"><button type="button" class="btn btn-success">Show</button></a></td>
                    <td><a href="/customers/{{$customer->customerID}}/edit"><button type="button" class="btn btn-success">Edit</button></a></td>
                    <td>
                      {!! Form::model($customer, [
                       'method' => 'DELETE',
                      'route' => ['customers.destroy', $customer->customerID]
                      ]) !!}
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                  </tr>
                @endforeach

              </tbody>
            </table>
          <a href="/customers/create"><button type="button" class="btn btn-primary">Add Customer</button></a>
@endsection