@extends ('layouts.master')

@section ('content')
<table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>TireID</th>
                  <th>Order Date</th>
                  <th>Quantity of Tires</th>
                  <th>Labor Cost</th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
                </thead>
                @foreach($orders as $order)
                  <tr>
                    <td>{{$order->orderID}}</td>
                    <td>{{$order->tireID}}</td>
                    <td>{{$order->orderDate}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->laborCost}}</td>
                    <td><a href="/orders/{{$order->orderID}}"><button type="button" class="btn btn-success">Show</button></a></td>
                    <td><a href="/orders/{{$order->orderID}}/edit"><button type="button" class="btn btn-success">Edit</button></a></td>
                    <td>
                      {!! Form::model($order, [
                       'method' => 'DELETE',
                      'route' => ['orders.destroy', $order->orderID]
                      ]) !!}
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                  </tr>
                @endforeach

              </tbody>
            </table>

@endsection