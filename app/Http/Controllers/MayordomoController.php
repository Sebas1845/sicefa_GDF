<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MayordomoController extends Controller
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
    public function showForm()
    {
        return view('register_mayordomo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        {
            $request->validate([
                'name'     => 'required|string|max:255',
                'email'    => 'required|email|unique:users,email',
                'password' => 'required|string|min:6',
            ]);

            User::create([
                'name'     => $request->name,
                'email'    => $request->email,
                'password' => Hash::make($request->password),
                'role'     => 'mayordomo', // Se define el rol
            ]);

            return redirect()->back()->with('success', 'Mayordomo registrado correctamente.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mayordomo  $mayordomo
     * @return \Illuminate\Http\Response
     */
   // public function show(Mayordomo $mayordomo)
   // {
        //
    //}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mayordomo  $mayordomo
     * @return \Illuminate\Http\Response
     */
   // public function edit(Mayordomo $mayordomo)
   // {
        //
    //}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mayordomo  $mayordomo
     * @return \Illuminate\Http\Response
     */
    //public function update(Request $request, Mayordomo $mayordomo)
   // {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mayordomo  $mayordomo
     * @return \Illuminate\Http\Response
     */
    //public function destroy(Mayordomo $mayordomo)
    //{
        //
   // }
//}
