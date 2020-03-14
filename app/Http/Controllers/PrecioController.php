<?php

namespace App\Http\Controllers;

use App\Precio;
use Illuminate\Http\Request;

class PrecioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $precios = Precio::all();
        return response()->json([
            "message" => "Listado de Precios",
            "status" => 200,
            "data" => $precios
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
        $precio = Precio::create($request->all());
        return response()->json([
            "message" => "Precio creado exitosamente",
            "status" => 201,
            "data" => $precio
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Precio  $precio
     * @return \Illuminate\Http\Response
     */
    public function show(Precio $precio)
    {
        return response()->json([
            "message" => "Precio listado correctamente",
            "status" => 200,
            "data" => $precio
        ], 200);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Precio  $precio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Precio $precio)
    {
        $precio->update($request->all());
        return response()->json([
            "message" => "Precio editado correctamente",
            "status" => 200,
            "data" => $precio
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Precio  $precio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Precio $precio)
    {
        $precio->delete();
        return response()->json([
            "message" => "Precio eliminado correctamente",
            "status" => 200,
            "data" => $precio
        ], 200);
    }
}
