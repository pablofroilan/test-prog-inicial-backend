<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Models\Modelo;
use Illuminate\Http\Request;

class ModeloController extends Controller
{
    /**
     * Lista a todos los modelos
     */
    public function index()
    {
        //
        $modelos = Modelo::all();
        return response()->json($modelos);
    }

    //Listar modelos de una marca
    public function obtenerModelosSegunMarca($marca_id) 
    {
        
        $modelos = Modelo::select('modelos.modelo_id', 'modelos.modelo_nombre', 'marcas.marca_nombre')
                ->join('marcas', 'marcas.marca_id', '=', 'modelos.marca_id')
                ->where('marcas.marca_id', $marca_id)
                ->get();

        //Valida si existe el id de la marca en la DB
        if(!Marca::find($marca_id))
        {
            return response()->json(['error' => 'Marca no encontrada'], 404);
        }
        return response()->json($modelos);
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
