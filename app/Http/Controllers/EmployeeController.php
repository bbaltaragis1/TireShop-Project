<?php

namespace App\Http\Controllers;
use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function create()
    {
        return view('employees.create');
    }

    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
            'startDate' => 'required'
        ]);
        $input = $request->all();
        Employee::create($input);
        return redirect('/employees');


    }
    public function show($employeeID)
    {
        $employee = Employee::find($employeeID);

        return view('employees.show',compact('employee'));
    }
    public function edit($employeeID)
    {
        $employee = Employee::find($employeeID);
        return view('employees.edit')->with('employee',$employee);
    }
    public function update(Request $request, $employeeID)
    {
        $employee = Employee::find($employeeID);

                $this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
            'startDate' => 'required',
            'status' => 'required'
        ]);

        $input = $request->all();

        $employee->fill($input)->save();
        $employees = Employee::all();
        return view('employees.index', compact('employees'));

    }
    public function destroy($employeeID)
    {
        $employee = Employee::find($employeeID);

        $employee->delete();
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }
}
