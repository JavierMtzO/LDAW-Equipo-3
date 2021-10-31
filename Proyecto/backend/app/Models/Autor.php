<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Autor extends Model
{
    use HasFactory;
    public $timestamps = false;

    //Métodos de instancia



    //Métodos estáticos

    public static function getAll() {
        $result = DB::select("SELECT * FROM autors");
        return $result;
    }

}
