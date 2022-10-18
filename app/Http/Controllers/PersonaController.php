<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonaEditRequest;
use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PersonaController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $personas = Persona::all()->sortBy('id');
        return view('persona.index', ['activePersona' => 'active',
                                      'personas' => $personas,
                                      'subTitle' => 'Personas - Index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('persona.create', ['activePersona' => 'active',
                                       'subTitle' => 'Bikes - Index']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $persona = new Persona($request->all());
        $persona->save();
        return redirect('persona');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona) {
        return view('persona.show', ['activePersona' => 'active',
                                     'persona' => $persona,
                                     'subTitle' => 'Personas - Show - ' . $persona->nombre]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $persona) {
        return view('persona.edit', ['activePersona' => 'active',
                                     'persona' => $persona,
                                     'subTitle' => 'Personas - Edit - ' . $persona->name]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona) {
        $persona->update($request->all());
        return redirect('persona');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona) {
        $persona->delete();
        return redirect('persona');
    }
}
