<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         $libro = Libro::getAll();
         return ['libros' => $libro];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$request -> validate([
            'nombre' => 'required',
            'resumen' => 'required',
            'genero_id' => 'required'
        ]);*/
        return Libro::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $libro = Libro::find($id);
        return ['libro' => $libro];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $libro = Libro::find($id);
        $libro->titulo=$request->input('0');
        $libro->autor=$request->input('1');
        $libro->ISBN=$request->input('2');
        $libro->paisPro=$request->input('3');
        $libro->categoria_id=$request->input('4');
        $libro->genero_id=$request->input('5');
        $libro->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Libro::destroy($id);
    }
}
