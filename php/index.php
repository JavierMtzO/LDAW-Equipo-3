<?php

require_once(dirname(__FILE__) . "/controllers/EntriesController.class.php");

//Importar el controller
use Controllers\EntriesController as Controller;

//Invocar la función de control de la vista
Controller::index();

//var_dump($entries);die();

// function find($value, $field = "id"){
//     //Código
// }

// find(2);



?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Ingresos y Egresos</title>

        <!--
        ***********************************
                        CSS
        ***********************************
        -->
           
        <!--Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        
        <!--Main CSS-->
        <link rel="stylesheet" href="./css/main.css" />

        <!-- Page CSS -->
        <link rel="stylesheet" href="./css/index.css" />
            
    </head>

    <body>

        <?php require_once(dirname(__FILE__) . "/partials/header.php"); ?>

        <?php require_once(dirname(__FILE__) . "/partials/mainNav.php"); ?>

        <main class="container-fluid">

            <h2>Listado de Ingresos y Egresos</h2>

            <ul class="list-group mt-5" id="entries-list" >

                <?php 
                if(!empty($entries)){

                    foreach($entries as $entry){

                        $type = $entry->category->getType();
                        
                        var_dump($type["id"]);
                        
                        $class = "income";

                        if($type["id"] == 2){
                            $class = "outcome";
                        }
                        
                ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center <?php echo($class); ?>">
                            <div class="date me-2">
                                <p class="mb-0"><?php echo($entry->getFormattedDate()); ?></p>
                            </div>

                            <div class="ps-3 me-auto data">
                                <p class="fw-bold mb-0"><?php echo($entry->category->name . " - " . $entry->title); ?></p>
                                <p class="mb-0 mt-1 description"><?php echo($entry->description); ?></p>
                            </div>
                            
                            <span class="badge rounded-pill"><?php echo($entry->getMoneyQty()); ?></span>

                        </li>
                
                <?php
                    }
                }
                else{
                    echo "<h3>No se encontraron registros</h3>";
                }
                ?>

            </ul>

        </main>

        <?php require_once(dirname(__FILE__) . "/partials/footer.php"); ?>
        
    </body>

    <!--
    *******************************
            JAVASCRIPT
    *******************************
    -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</html>