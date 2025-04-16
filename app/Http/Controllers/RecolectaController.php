<?php

namespace App\Http\Controllers;

use App\Models\Cultivo;
use App\Models\Recolecta;
use Illuminate\Http\Request;

class RecolectaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cultivos = Cultivo::all();
        return view('recolecta.create', compact('cultivos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'cultivos_id' => 'required|exists:cultivos,id',
            'fecha_recolecta' => 'required|date_format:Y-m-d',
            'cantidad' => 'required|numeric',
            'unidad' => 'required|string',
            'observaciones' => 'nullable|string',
        ]);
    
        // Explicitly create the Recolecta with validated data
        Recolecta::create($validatedData);
    
        return redirect()->route('recolectas.create')->with('success', 'Recolección registrada con éxito.');
}


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recolecta  $recolecta
     * @return \Illuminate\Http\Response
     */
    public function show(Recolecta $recolecta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recolecta  $recolecta
     * @return \Illuminate\Http\Response
     */
    public function edit(Recolecta $recolecta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recolecta  $recolecta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recolecta $recolecta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recolecta  $recolecta
     * @return \Illuminate\Http\Response
     */
public function destroy(Recolecta $recolecta)
{
    //
}
}