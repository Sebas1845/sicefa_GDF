<?php

namespace App\Http\Controllers;

use App\Models\cultivo;
use Illuminate\Http\Request;

class CultivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = cultivo::all();
        return view('listac', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formcultivo');

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
            'fecha' => 'required|date',
            'nombre' => 'required|string',
            'tipo' => 'required|string',
            'area' => 'required|integer|min:1',
            'presupuesto' => 'required|integer|min:4',
        ]);

        cultivo::create($request->all());

        return redirect()->back()->with('success', 'El cultivo se ha registrado correctamente.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cultivo  $cultivo
     * @return \Illuminate\Http\Response
     */
    public function show(cultivo $cultivo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cultivo  $cultivo
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $dato = cultivo::findOrFail($id);

        return view('crud_cultivo.edit', compact('dato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cultivo  $cultivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'fecha' => 'required|date',
            'nombre' => 'required|string',
            'tipo' => 'required|string',
            'area' => 'required|integer|min:1',
            'presupuesto' => 'required|integer|min:4',
        ]);

        $dato = cultivo::findOrFail($id);
        $dato->update($request->all());


        return redirect()->back()->with('success', 'La actualización del cultivo fue exitosa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cultivo  $cultivo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dato = cultivo::findOrFail($id);
        $dato->delete();

        return redirect()->route('cultivos.index');
    }
}
