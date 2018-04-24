<?php

namespace App\Http\Controllers;
use App\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function create()
    {
        return view('invoices.create', compact('tire'));
    }

    public function index()
    {
        $invoices = Invoice::orderBy('status')->get();
        return view('invoices.index', compact('invoices'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'employeeID' => 'required',
            'customerID' => 'required',
            'orderID' => 'required',
            'invoiceDate' => 'required',
            'status' => 'required'
        ]);
        $input = $request->all();
        Invoice::create($input);
        return redirect('/invoices');


    }
    public function show($invoiceID)
    {
        $invoice = Invoice::find($invoiceID);

        return view('invoices.show',compact('invoice'));
    }
    public function edit($invoiceID)
    {
        $invoice = Invoice::find($invoiceID);
        return view('invoices.edit')->with('invoice',$invoice);
    }
    public function update(Request $request, $invoiceID)
    {
        $invoice = Invoice::find($invoiceID);

                $this->validate($request, [
            'employeeID' => 'required',
            'customerID' => 'required',
            'orderID' => 'required',
            'invoiceDate' => 'required',
            'status' => 'required'
        ]);

        $input = $request->all();

        $invoice->fill($input)->save();
        $invoices = Invoice::all();
        return view('invoices.index', compact('invoices'));

    }
    public function destroy($invoiceID)
    {
        $invoice = Invoice::find($invoiceID);

        $invoice->delete();
        $invoices = Invoice::all();
        return view('invoices.index', compact('invoices'));
    }
}
