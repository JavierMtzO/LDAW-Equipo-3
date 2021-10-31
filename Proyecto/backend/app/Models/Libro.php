<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Libro extends Model
{
    use HasFactory;
    public static function getAll() {
        $result = DB::select("SELECT * FROM libros");
        return $result;
    }
}
