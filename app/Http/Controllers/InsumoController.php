<?php

namespace App\Http\Controllers;

use App\Models\insumo;
use Illuminate\Http\Request;

class InsumoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insumos = insumo::all();

        return view('Listac.listacinsumos', compact('insumos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forminsumos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fecha_registro' => 'required|date',
            'nombre' => 'required|string',
            'marca' => 'required|string',
            'tipo' => 'required|string',
            'valor_unitario' => 'required|integer|min:1',
            'cantidad' => 'required|integer|min:1',
            'disponibilidad' => 'required|string',
        ]);

        insumo::create($request->all());

        return redirect()->back()->with('success', 'El cultivo se ha registrado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\insumo  $insumo
     * @return \Illuminate\Http\Response
     */
    public function show(insumo $insumo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\insumo  $insumo
     * @return \Illuminate\Http\Response
     */
    public function edit(insumo $insumo, $id)
    {
        $insumo = insumo::findOrFail($id);

        return view('crud_insumos.edit', compact('insumo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\insumo  $insumo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, insumo $id)
    {
        $request->validate([
           'fecha_registro' => 'required|date',
            'nombre' => 'required|string',
            'marca' => 'required|string',
            'tipo' => 'required|string',
            'valor_unitario' => 'required|integer|min:1',
            'cantidad' => 'required|integer|min:1',
            'disponibilidad' => 'required|string',
        ]);

        $insumo = insumo::findOrFail($id);
        $insumo->update($request->all());


        return redirect()->back()->with('success', 'La actualización del cultivo fue exitosa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\insumo  $insumo
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $insumo = insumo::findOrFail($id);
        $insumo->delete();

        return redirect()->route('cultivos.index');
    }
}
