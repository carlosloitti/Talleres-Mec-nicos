<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicios = DB::table('servicios')
        ->join('vehiculos', 'servicios.vehiculo_id', '=' , 'vehiculos.id')
        ->select('servicios.*', "vehiculos.marca")
        ->get();
    return view('servicio.index', ['servicios' => $servicios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vehiculos = DB::table('vehiculos')
        ->orderBy('marca')
        ->get();
        return view('servicio.new' , ['vehiculos' => $vehiculos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $servicio = new Servicio();
        $servicio->fecha_servicio = $request->fecha_servicio;
        $servicio->descripcion = $request->descripcion;
        $servicio->costo  = $request->costo; 
        $servicio->vehiculo_id = $request->code;
        $servicio->save();

        $servicios = DB::table('servicios')
        ->join('vehiculos', 'servicios.vehiculo_id', '=' , 'vehiculos.id')
        ->select('servicios.*', "vehiculos.marca")
        ->get();
    return view('servicio.index', ['servicios' => $servicios]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
