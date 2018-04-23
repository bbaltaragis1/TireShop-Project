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
                  <th>Quantity</th>
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
                    <td>{{$tire->rimDiameter}}in</td>
                    <td>{{$tire->stock}}</td>
                    <td>
                     <form method="POST" action="/orders/">
                        {{ csrf_field() }}
                        <input type="hidden" id="tireID" name="tireID" value="{{$tire->tireID}}">
                        <input type="hidden" id="orderDate" name="orderDate" value="{{$ldate = date('Y-m-d H:i:s')}}">
                        <input type="hidden" id="laborCost" name="laborCost" value="20">
                        <select name="quantity" id="quantity">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                        </select>
                        <a href="/customers/create"><button type="submit" class="btn btn-primary">Buy</button></a>
                     </form>
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