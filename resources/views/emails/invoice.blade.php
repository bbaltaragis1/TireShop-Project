<?php
$customer = $invoice->customer;
$order =  App\Order::find($invoice->orderID);
$tire = App\Tire::find($order->tireID);
?>

<!DOCTYPE html>
<html>
<head>

	<title></title>
</head>
<body>
	<h1>Thank you {{$customer->firstName}} {{$customer->lastName}} for shopping with us.</h1>

	<p>You bought {{$order->quantity}} {{$tire->brand}} tires with a labor cost of ${{$order->laborCost}} and a total price of ${{$tire->price * $order->quantity + $order->laborCost}}.<br/><br/>
		Your invoice ID is {{$invoice->invoiceID}}.

	</p>

</body>
</html>