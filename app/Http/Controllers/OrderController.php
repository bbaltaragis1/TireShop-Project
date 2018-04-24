<?php

namespace App\Http\Controllers;
use App\Order;
use App\Tire;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create()
    {
        return view('orders.create');
    }

    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tireID' => 'required',
            'orderDate' => 'required',
            'quantity' => 'required',
            'laborCost' => 'required',
        ]);
        $input = $request->all();
        Order::create($input);
        $order = Order::all()->last();
        $tire = Tire::find($order->tireID);
        
        Tire::where('tireID', $tire->tireID)->update(array('stock' => $tire->stock - $order->quantity));
        return redirect('/customers/create');


    }
    public function show($orderID)
    {
        $order = Order::find($orderID);

        return view('orders.show',compact('order'));
    }
    public function edit($orderID)
    {
        $order = Order::find($orderID);
        return view('orders.edit')->with('order',$order);
    }
    public function update(Request $request, $orderID)
    {
        $order = Order::find($orderID);

                $this->validate($request, [
            'tireID' => 'required',
            'orderDate' => 'required',
            'quantity' => 'required',
            'laborCost' => 'required',
        ]);

        $input = $request->all();

        $order->fill($input)->save();
        $orders = Order::all();
        return view('orders.index', compact('order'));

    }
    public function destroy($orderID)
    {
        $order = Order::find($orderID);
        $order->delete();
        $tire = Tire::find($order->tireID);
        Tire::where('tireID', $tire->tireID)->update(array('stock' => $tire->stock + $order->quantity));
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }
}
