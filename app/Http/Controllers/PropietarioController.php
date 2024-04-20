<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use App\Models\Propietarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropietarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $propietarios = Propietarios::all();
        //$propietarios = DB::table('propietarios')
            //->join('vehiculos', 'propietarios.nombre', '=' , 'vehiculos.id')
           // ->select('propietarios.*', "vehiculos.modelo")
           // ->get();
        return view('propietario.index', ['propietarios' => $propietarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vehiculos = DB::table('vehiculos')
        ->orderBy('marca')
        ->get();
        return view('propietario.new' , ['vehiculos' => $vehiculos]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $propietario = new Propietarios();
        $propietario->nombre = $request->nombre;
        $propietario->apellido= $request->apellido;
        $propietario->telefono  = $request->telefono;
        $propietario->correo_electronico  = $request->correo_electronico;
        $propietario->direccion  = $request->direccion;
        $propietario->id = $request->code;
        $propietario->save();

        $propietarios = Propietarios::all();
        return view('propietario.index', ['propietarios' => $propietarios]);
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
