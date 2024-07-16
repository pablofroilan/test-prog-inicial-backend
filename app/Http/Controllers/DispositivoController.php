<?php

namespace App\Http\Controllers;

use App\Models\Bodega;
use App\Models\Dispositivo;
use App\Models\Marca;
use App\Models\Modelo;
use Illuminate\Http\Request;

class DispositivoController extends Controller
{
    /**
     * Lista a todos los dispositivos
     */
    public function index()
    {
        //
        $dispositivos = Dispositivo::all();
        return response()->json($dispositivos);
    }

    public function obtenerDispositivosSegunModelo($modelo_id) 
    {
        $dispositivos = Dispositivo::select('dispositivos.dispositivo_id',
                                                 'dispositivos.dispositivo_nombre', 'dispositivos.modelo_id', 'marcas.marca_id',
                                                  'dispositivos.bodega_id','modelos.modelo_nombre', 'marcas.marca_nombre')
                                                 ->join('modelos', 'dispositivos.modelo_id', '=', 'modelos.modelo_id')
                                                 ->join('marcas', 'modelos.marca_id', '=', 'marcas.marca_id')
                                                 ->where('modelos.modelo_id', $modelo_id)
                                                 ->get();

        //Valida si existe el id del modelo en la DB
        if(!Modelo::find($modelo_id))
        {
            return response()->json(['error' => 'Modelo no encontrado'], 404);
        }

        return response()->json($dispositivos);
    }

    public function obtenerDispositivosSegunMarca($marca_id) 
    {
        $dispositivos = Dispositivo::select('dispositivos.dispositivo_id',
                                                 'dispositivos.dispositivo_nombre', 'dispositivos.modelo_id', 'marcas.marca_id',
                                                  'dispositivos.bodega_id','modelos.modelo_nombre', 'marcas.marca_nombre')
                                                 ->join('modelos', 'dispositivos.modelo_id', '=', 'modelos.modelo_id')
                                                 ->join('marcas', 'modelos.marca_id', '=', 'marcas.marca_id')
                                                 ->where('marcas.marca_id', $marca_id)
                                                 ->get();

        //Valida si existe el id de la marca en la DB
        if(!Marca::find($marca_id))
        {
            return response()->json(['error' => 'Marca no encontrada'], 404);
        }

        return response()->json($dispositivos);
    }

    public function obtenerDispositivosSegunBodega($bodega_id) 
    {
        $dispositivos = Dispositivo::select('dispositivos.dispositivo_id',
                                                 'dispositivos.dispositivo_nombre', 'dispositivos.modelo_id', 'marcas.marca_id',
                                                  'dispositivos.bodega_id','modelos.modelo_nombre', 'marcas.marca_nombre')
                                                 ->join('modelos', 'dispositivos.modelo_id', '=', 'modelos.modelo_id')
                                                 ->join('marcas', 'modelos.marca_id', '=', 'marcas.marca_id')
                                                 ->where('dispositivos.bodega_id', $bodega_id)
                                                 ->get();

        //Valida si existe el id de la bodega en la DB
        if(!Bodega::find($bodega_id))
        {
            return response()->json(['error' => 'Bodega no encontrada'], 404);
        }

        return response()->json($dispositivos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
