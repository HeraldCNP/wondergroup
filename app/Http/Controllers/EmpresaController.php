<?php

namespace App\Http\Controllers;

use App\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = Empresa::all();
        return response()->json([
            "message" => "Listado de Empresas",
            "status" => 200,
            "data" => $empresas
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
        $empresa = Empresa::create($request->all());
        return response()->json([
            "message" => "Empresa creada exitosamente",
            "status" => 201,
            "data" => $empresa
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        return response()->json([
            "message" => "Empresa listada correctamente",
            "status" => 200,
            "data" => $empresa
        ], 200);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
        $empresa->update($request->all());
        return response()->json([
            "message" => "Empresa editada correctamente",
            "status" => 200,
            "data" => $empresa
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
        $empresa->delete();
        return response()->json([
            "message" => "Empresa eliminada correctamente",
            "status" => 200,
            "data" => $empresa
        ], 200);
    }
}
