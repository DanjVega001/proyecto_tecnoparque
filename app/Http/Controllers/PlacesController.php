<?php

namespace App\Http\Controllers;

use App\Models\Places;
use Illuminate\Http\Request;

class PlacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places= Places::with('schedule')->get();
        //dd($places);
        return view('places.index', compact('places'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schedules= Schedule::all();
        return view('places.create', compact('schedules'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'latitude'=>'required',
            'length'=>'required',
            'schedule_id'=>'required',
        ]);

        $place= new Places();
        $place->name = $request->name;
        $place->email = $request->email;
        $place->address = $request->address;
        $place->latitude = $request->latitude;
        $place->length = $request->length;
        $place->schedule_id = $request->schedule_id;
        $place->save();
        return redirect()->route('places.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Places  $places
     * @return \Illuminate\Http\Response
     */
    public function show(Places $places)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Places  $places
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $place = Places::find($id);
        $schedules= Schedule::all();
        return view('places.edit', compact('place','schedules'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Places  $places
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validar = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'latitude'=>'required',
            'length'=>'required',
            'schedule_id'=>'required',
        ]);
        $place = Places::find($id);
        $place->name = $request->name;
        $place->email = $request->email;
        $place->address = $request->address;
        $place->latitude = $request->latitude;
        $place->length = $request->length;
        $place->schedule_id = $request->schedule_id;
        $place->update();
  
        return redirect()->route('places.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Places  $places
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $place = Places::find($id);   
        if ($place) {
            $place->delete();
            return redirect()->route('places.index')->with('success', 'Lugar eliminado exitosamente');
        } else {
            return redirect()->route('places.index')->with('error', 'No se encontró el lugar para eliminar');
        }
    }
}
