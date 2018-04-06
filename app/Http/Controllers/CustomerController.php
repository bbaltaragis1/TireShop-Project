<?php

namespace App\Http\Controllers;
use App\Customer;
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
        return redirect('/customers');


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