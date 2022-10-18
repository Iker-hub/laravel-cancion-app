<?php

namespace App\Http\Controllers;

use App\Http\Requests\BikeEditRequest;
use App\Models\Bike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BikeController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $bikes = Bike::all()->sortBy('id');
        return view('bike.index', ['activeBike' => 'active',
                                   'bikes' => $bikes,
                                   'subTitle' => 'Bikes - Index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('bike.create', ['activeBike' => 'active',
                                   'subTitle' => 'Bikes - Index']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        // $request -> llegan todos los argumentos del formulario
        // try, devolver un 'mensaje' del resultado de la operación
        $bike = new Bike($request->all());
        $bike->save();
        return redirect('bike');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Bike $bike) {
        //$bike = Bike::find($id);
        return view('bike.show', ['activeBike' => 'active',
                                   'bike' => $bike,
                                   'subTitle' => 'Bikes - Show - ' . $bike->name]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function edit(Bike $bike) {
        return view('bike.edit', ['activeBike' => 'active',
                                   'bike' => $bike,
                                   'subTitle' => 'Bikes - Edit - ' . $bike->name]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bike $bike) {
        // try, devolver un 'mensaje' del resultado de la operación
        $bike->update($request->all());
        return redirect('bike');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bike $bike) {
        // try, devolver un 'mensaje' del resultado de la operación
        $bike->delete();
        return redirect('bike');
    }
}