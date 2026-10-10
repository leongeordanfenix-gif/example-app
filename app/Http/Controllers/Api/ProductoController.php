<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Almacen;
use Illuminate\Http\Request;

class AlmacenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Almacen::paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_almacen' => 'required|string|max:255',
            'tamaño'         => 'nullable|string|max:255',
            'estado'         => 'boolean',
        ]);

        return Almacen::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Almacen $almacen)
    {
        return $almacen;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Almacen $almacen)
    {
        $request->validate([
            'nombre_almacen' => 'sometimes|required|string|max:255',
            'tamaño'         => 'nullable|string|max:255',
            'estado'         => 'boolean',
        ]);

        $almacen->update($request->all());

        return $almacen;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Almacen $almacen)
    {
        $almacen->delete();

        return response()->json(['message' => 'Eliminado correctamente']);
    }
}
