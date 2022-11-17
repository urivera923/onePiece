<?php

namespace App\Http\Controllers;

use App\Models\Pruebas;
use Illuminate\Http\Request;

class PruebasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function creador()
    {
        return view('informacion/creador');
    }

    public function personajes()
    {
        return view('informacion/personajes');
    }
    public function saga()
    {
        return view('informacion/saga');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pruebas  $pruebas
     * @return \Illuminate\Http\Response
     */
    public function show(Pruebas $pruebas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pruebas  $pruebas
     * @return \Illuminate\Http\Response
     */
    public function edit(Pruebas $pruebas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pruebas  $pruebas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pruebas $pruebas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pruebas  $pruebas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pruebas $pruebas)
    {
        //
    }
}
