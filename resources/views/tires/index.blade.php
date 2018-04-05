@extends ('layouts.master')

@section ('content')
<table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Stock</th>
                  <th></th>
                  <th></th>
                </tr>
                </thead>
                @foreach($tires as $tire)
                  <tr>
                    <td>{{$tire->id}}</td>
                    <td>{{$tire->tire_name}}</td>
                    <td>{{$tire->tire_price}}</td>
                    <td>{{$tire->tire_stock}}</td>
                    <td><a href="/tires/{{$tire->id}}/edit"><button type="button" class="btn btn-success">Edit</button></a></td>
                    <td>
                      {!! Form::model($tire, [
                       'method' => 'DELETE',
                      'route' => ['tires.destroy', $tire->id]
                      ]) !!}
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                  </tr>
                @endforeach

              </tbody>
            </table>
          <a href="/tires/create"><button type="button" class="btn btn-primary">Add new Tire</button></a>
@endsection