<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class LibroController extends Controller
{
     public static function index(Request $request)
    {

        $res = Http::withHeaders(['Accept'=>'application/json'])->get(env('API_URL').'/libros');
        $libro = $res->json();
        return view('listaView', ['libros' => $libro['libros']]);
    }

    public static function storeView(Request $request)
    {
        return view('storeView');
    }

    public static function store(Request $request)
    {
        $res = Http::withHeaders(['Accept'=>'application/json'])->post(env('API_URL').'/libros/store', ['nombre'=>$request->nombre, 'resumen'=>$request->resumen, 'imagen'=>$request->imagen, 'genero_id'=>$request->genero_id]);
        $libro = $res->json();
        
        return redirect('libros/index');
    }
    
    public static function destroy(Request $request, $id)
    {
        
        $res = Http::withHeaders(['Accept'=>'application/json'])->delete(env('API_URL').'/libros/destroy/'.$id);
        $libro = $res->json();
        return redirect('libros/index');
    }
}
