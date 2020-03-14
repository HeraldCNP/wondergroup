<?php

namespace App\Http\Controllers;

use App\Contrato;
use Illuminate\Http\Request;

class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contratos = Contrato::all();
        return response()->json([
            "message" => "Contrato de Personas",
            "status" => 200,
            "data" => $contratos
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
        $contrato = Contrato::create($request->all());
        return response()->json([
            "message" => "Contrato creado exitosamente",
            "status" => 201,
            "data" => $contrato
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function show(Contrato $contrato)
    {
        return response()->json([
            "message" => "Contrato listado correctamente",
            "status" => 200,
            "data" => $contrato
        ], 200);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contrato $contrato)
    {
        $contrato->update($request->all());
        return response()->json([
            "message" => "Contrato editado correctamente",
            "status" => 200,
            "data" => $contrato
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contrato $contrato)
    {
        $contrato->delete();
        return response()->json([
            "message" => "Contrato eliminado correctamente",
            "status" => 200,
            "data" => $contrato
        ], 200);
    }
}
