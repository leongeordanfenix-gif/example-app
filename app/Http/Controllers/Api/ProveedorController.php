<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Proveedor;
use App\Http\Requests\StoreProveedorRequest;
use App\Http\Requests\UpdateProveedorRequest;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Proveedor::paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProveedorRequest $request)
    {
        $proveedor = Proveedor::create($request->validated());

        return response()->json($proveedor, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Proveedor $proveedor)
    {
        return response()->json($proveedor, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProveedorRequest $request, Proveedor $proveedor)
    {
        $proveedor->update($request->validated());

        return response()->json($proveedor, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();

        return response()->json(['message' => 'Eliminado correctamente'], 200);
    }
}
