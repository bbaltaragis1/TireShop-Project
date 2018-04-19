@extends ('layouts.master')

@section ('content')
<table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Brand</th>
                  <th>Rim Diameter</th>
                  <th>Stock</th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
                </thead>
                @foreach($tires as $tire)
                  <tr>
                    <td>{{$tire->tireID}}</td>
                    <td>{{$tire->name}}</td>
                    <td>{{$tire->price}}</td>
                    <td>{{$tire->brand}}</td>
                    <td>{{$tire->rimDiameter}}</td>
                    <td>{{$tire->stock}}</td>
                    <td>
                    <form method="POST" action="/orders/">
                    {{ csrf_field() }}
                      <label>Quantity</label><input type="number" class="form-control" id="quantity" name="quantity">
                      <label> </label><button type="submit" class="btn btn-primary">Buy</button>
                    </td>
                  </form>
                    <td><a href="/tires/{{$tire->tireID}}/edit"><button type="button" class="btn btn-success">Edit</button></a></td>
                    <td>
                      {!! Form::model($tire, [
                       'method' => 'DELETE',
                      'route' => ['tires.destroy', $tire->tireID]
                      ]) !!}
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                  </tr>
                @endforeach

              </tbody>
            </table>
          <a href="/tires/create"><button type="button" class="btn btn-primary">Add Tire</button></a>
@endsection