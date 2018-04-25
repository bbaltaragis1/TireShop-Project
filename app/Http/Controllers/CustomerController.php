<?php

namespace App\Http\Controllers;
use App\Customer;
use App\Employee;
use App\Order;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function create()
    {
        return view('customers.create');
    }

    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    public function inSystem(Request $request)
    {
        $input = $request->all();
        $customer = Customer::where('phoneNumber', 'LIKE' , $request->input('phoneNumber'))->first();
        $employee = Employee::all()->last();
        $order = Order::all()->last();
        return view('invoices.create' , compact('customer', 'employee', 'order'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
            'phoneNumber' => 'required',
            'email' => 'required'
        ]);
        $input = $request->all();
        Customer::create($input);
        $customer = Customer::all()->last();
        $employee = Employee::all()->last();
        $order = Order::all()->last();
        return view('invoices.create' , compact('customer', 'employee', 'order'));


    }
    public function show($customerID)
    {
        $customer = Customer::find($customerID);

        return view('customers.show',compact('customer'));
    }
    public function edit($customerID)
    {
        $customer = Customer::find($customerID);
        return view('customers.edit')->with('customer',$customer);
    }
    public function update(Request $request, $customerID)
    {
        $customer = Customer::find($customerID);

                $this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
            'phoneNumber' => 'required',
            'email' => 'required'
        ]);

        $input = $request->all();

        $customer->fill($input)->save();
        $customers = Customer::all();
        return view('customers.index', compact('customers'));

    }
    public function destroy($customerID)
    {
        $customer = Customer::find($customerID);

        $customer->delete();
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }
}
