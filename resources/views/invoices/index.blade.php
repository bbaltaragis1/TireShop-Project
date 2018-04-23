@extends ('layouts.master')

@section ('content')
<table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Customer ID</th>
                  <th>Order ID</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
                </thead>
                @foreach($invoices as $invoice)
                  <tr>
                    <td>{{$invoice->invoiceID}}</td>
                    <td>{{$invoice->customerID}}</td>
                    <td>{{$invoice->orderID}}</td>
                    <td>{{$invoice->invoiceDate}}</td>
                    <td>{{$invoice->status}}in</td>
                    <td>
                    </td>
                  </form>
                    <td><a href="/invoices/{{$invoice->invoiceID}}/edit"><button type="button" class="btn btn-success">Edit</button></a></td>
                    <td>
                      {!! Form::model($invoice, [
                       'method' => 'DELETE',
                      'route' => ['invoices.destroy', $invoice->invoiceID]
                      ]) !!}
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                  </tr>
                @endforeach

              </tbody>
            </table>
@endsection