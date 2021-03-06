<?php

/*
Métodos estáticos para la consulta de datos (ej. BD)

Métodos normales para representar lógica asociada a una instancia
*/

namespace Models;

//Importar la BD
require_once(dirname(__FILE__) . "/../utils/db.php");

use DB\DB as DB;


class TypeModel{

    /****************
        ATRIBUTOS
    *****************/

    public $id;
    public $name;
    public $description;

    /****************
        CONSTRUCTOR
    *****************/

    public function __construct($id, $name, $description){

        $this->id = $id;
        $this->name = $name;
        $this->description = $description;

    }

    /**************************
        MÉTODOS DE INSTANCIA
    ***************************/

    public function getType(){

        //Obtener la instancia de la BD
        $db = DB::getDB();

        //Ejecutar la consulta
        $result = $db->query("SELECT * FROM types WHERE id=?", [$this->type]);

        //Verificar si se devolvió algo (query siempre devuelve una lista con los resultados o false)
        if($result){
            //Si hay resultados devolver el primero (único)
            return $result[0];
        }

        return null;

    }


    /***********************
        MÉTODOS ESTÁTICOS
    ************************/

    public static function find($value, $field = "id"){

        //Obtener la instancia de la BD
        $db = DB::getDB();

        //Ejecutar la consulta
        $result = $db->query("SELECT * FROM types WHERE id=?", [$value]);

        if($result){

            $category = $result[0];

            //Crear una instancia de la clase con los datos recuperados de la BD y devolverla
            return new TypeModel(
                $category["id"],
                $category["name"],
                $category["description"]
            );
        }

        return null;
        
    }

    //Devuelve el listado de categorías ordenado por nombre
    public static function getTypes(){

        //Obtener la instancia de la clase BD
        $db = DB::getDB();

        //Ejecutar la consulta usando db
        $types = $db->query("SELECT * FROM types ORDER BY name ASC");

        $typesList = [];

        foreach($types as $type){

            $typesList[] = new TypeModel(
                $type["id"],
                $type["name"],
                $type["description"]
            );

        }

        return $typesList;

    }

}