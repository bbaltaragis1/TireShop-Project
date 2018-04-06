<?php

namespace App\Http\Controllers;
use App\Tire;
use Illuminate\Http\Request;

class TireController extends Controller
{
    public function create()
    {
    	return view('tires.create');
    }

    public function index()
    {
    	$tires = Tire::all();
    	return view('tires.index', compact('tires'));
    }

    public function store(Request $request)
    {
   		$this->validate($request, [
   			'name' => 'required',
   			'price' => 'required',
   			'brand' => 'required',
            'rimDiameter' => 'required'
    	]);
        $input = $request->all();
        Tire::create($input);
    	return redirect('/tires');


    }
    public function show($tireID)
    {
    	$tire = Tire::find($tireID);

    	return view('tires.show',compact('tire'));
    }
    public function edit($tireID)
    {
        $tire = Tire::find($tireID);
        return view('tires.edit')->with('tire',$tire);
    }
    public function update(Request $request, $tireID)
    {
        $tire = Tire::find($tireID);

                $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'brand' => 'required',
            'rimDiameter' => 'required'
        ]);

        $input = $request->all();

        $tire->fill($input)->save();
        $tires = Tire::all();
        return view('tires.index', compact('tires'));

    }
    public function destroy($tireID)
    {
        $tire = Tire::find($tireID);

        $tire->delete();
        $tires = Tire::all();
        return view('tires.index', compact('tires'));
    }
}
