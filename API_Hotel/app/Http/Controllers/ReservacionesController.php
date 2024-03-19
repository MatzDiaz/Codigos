<?php

namespace App\Http\Controllers;

use App\Models\Reservaciones;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReservacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $producto= Producto::all();
        return $producto;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'Habitacion'=>'require|String|max:255',
            'FechaEntrada'=>'require|String|max:255',
            'FeechaSalida'=>'require|String|max:255',
            'Precio'=>'require|numeric',
        ]);

        $producto = Producto::create([
            'Habitacion'=>$request->Habitacion,
            'FechaEntrada'=>$request->FechaEntrada,
            'FeechaSalida'=>$request->FechaSalida,
            'Precio'=>$request->Precio,
        ]);
        return response()->json($producto,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservaciones  $reservaciones
     * @return \Illuminate\Http\Response
     */
    public function show(Reservaciones $reservaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservaciones  $reservaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservaciones $reservaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservaciones  $reservaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservaciones $reservaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservaciones  $reservaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservaciones $reservaciones)
    {
        //
    }
}
