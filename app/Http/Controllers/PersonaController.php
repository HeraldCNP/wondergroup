<?php

namespace App\Http\Controllers;

use App\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::all();
        return response()->json([
            "message" => "Listado de Personas",
            "status" => 200,
            "data" => $personas
        ], 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $persona = Persona::create($request->all());
        return response()->json([
            "message" => "Persona creada exitosamente",
            "status" => 201,
            "data" => $persona
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        return response()->json([
            "message" => "Persona listada correctamente",
            "status" => 200,
            "data" => $persona
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona)
    {
        $persona->update($request->all());
        return response()->json([
            "message" => "Persona editada correctamente",
            "status" => 200,
            "data" => $persona
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
        $persona->delete();
        return response()->json([
            "message" => "Persona eliminada correctamente",
            "status" => 200,
            "data" => $persona
        ], 200);
    }
}
