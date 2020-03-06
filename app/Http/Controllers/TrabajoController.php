<?php

namespace App\Http\Controllers;

use App\Trabajo;
use Illuminate\Http\Request;

class TrabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trabajos = Trabajo::all();
        return response()->json([
            "data" => $trabajos,
            "status" => 200
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
        $trabajo = Trabajo::create($request->all());
        return response()->json([
            "message" => "Trabajo creado exitosamente",
            "data" => $trabajo,
            "status" => 200
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trabajo  $trabajo
     * @return \Illuminate\Http\Response
     */
    public function show(Trabajo $trabajo)
    {
//        dd(Trabajo::findorfail($trabajo->id));
        return response()->json([
            "message" => "Trabajo Listado",
            "data" => $trabajo,
            "status" => 200
        ], 200);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trabajo  $trabajo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trabajo $trabajo)
    {
        //$trabajo = Trabajo::findorfail($trabajo->id);
        $trabajo->update($request->all());
        return response()->json([
            "message" => "Trabajo editado exitosamente",
            "data" => $trabajo,
            "status" => 201
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trabajo  $trabajo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trabajo $trabajo)
    {
        $trabajo->delete();
        return response()->json([
            "message" => "Trabajo eliminado exitosamente",
            "data" => $trabajo,
            "status" => 200
        ], 200);
    }
}
