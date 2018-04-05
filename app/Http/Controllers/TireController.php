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
   			'tire_name' => 'required',
   			'tire_price' => 'required',
   			'tire_stock' => 'required'
    	]);
        $input = $request->all();
        Tire::create($input);
    	return redirect('/tires');


    }
    public function show($id)
    {
    	$tire = Tire::find($id);

    	return view('tires.show',compact('tire'));
    }
    public function edit($id)
    {
        $tire = Tire::find($id);
        return view('tires.edit')->with('tire',$tire);
    }
    public function update(Request $request, $id)
    {
        $tire = Tire::find($id);

                $this->validate($request, [
            'tire_name' => 'required',
            'tire_price' => 'required',
            'tire_stock' => 'required'
        ]);

        $input = $request->all();

        $tire->fill($input)->save();
        $tires = Tire::all();
        return view('tires.index', compact('tires'));

    }
    public function destroy($id)
    {
        $tire = Tire::find($id);

        $tire->delete();
        $tires = Tire::all();
        return view('tires.index', compact('tires'));
    }
}
