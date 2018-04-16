@extends ('layouts.master')

@section ('content')
    <div class="jumbotron text-center">
        <h2>{{ $order->name }}</h2>
        <p>
            <strong>Tire ID:</strong> {{ $order->tireID }}<br>
            <strong>Order Date:</strong> {{ $order->orderDate }}<br>
            <strong>Amount of Tires Ordered:</strong> {{ $order->quantity }}<br>
            <strong>Installation Cost:</strong> {{ $order->laborCost }}<br>
        </p>
    </div>

</div>
<a href="/orders/"><button class="btn btn-danger">Cancel</button></a>
@endsection