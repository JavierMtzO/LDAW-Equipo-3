<?php

namespace App\Http\Controllers;

use App\Models\libroCategoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibroCategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return libroCategoria::getAll();
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
     * @param  \App\Models\libroCategoria  $libroCategoria
     * @return \Illuminate\Http\Response
     */
    public function show(libroCategoria $libroCategoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\libroCategoria  $libroCategoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, libroCategoria $libroCategoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\libroCategoria  $libroCategoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(libroCategoria $libroCategoria)
    {
        //
    }
}
