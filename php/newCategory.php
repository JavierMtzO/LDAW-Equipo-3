<?php 

//Controller
include_once(dirname(__FILE__) . "/controllers/EntriesController.class.php");

use Controllers\EntriesController as Controller;

//Ejecutar la función del controlador correspondiente a la vista
Controller::newCategory();

?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Nueva Categoría</title>

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
        <link rel="stylesheet" href="./css/newEntry.css" />
            
    </head>

    <body>

        <!-- Incluir el header -->
        <?php include_once(dirname(__FILE__) . "/partials/header.php"); ?>

        <!-- Incluir el la navegación -->
        <?php include_once(dirname(__FILE__) . "/partials/mainNav.php"); ?>

        <!-- Contenido principal -->
        <main class="container-fluid">

        <h2>Categorías registradas</h2>
        <ul class="list-group mx-auto mt-sm-5" id="newEntryForm" >
                <?php 
                if(!empty($categories)){

                    foreach($categories as $category){
                        
                ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center <?php echo($class); ?>">
                            <div class="date me-2">
                                <p class="mb-0"><?php echo($category->name); ?></p>
                            </div>

                        </li>
                
                <?php
                    }
                }
                else{
                    echo "<h3>No se encontraron registros</h3>";
                }
                ?>

            </ul>
            <br>
            <br>




            <h2>Nueva Categoría</h2>

            <form action="<?php echo($actionUrl) ?>" method="post" id="newEntryForm" class="mx-auto mt-sm-5">

                <?php if(isset($error)){ ?>

                    <div class="alert alert-danger" role="alert"><?php echo($error);?></div>
                
                <?php } ?>

                <div class="form-group mb-3">
                    <label for="nombre">Nombre de la categoría </label>
                    <input type="text" class="form-control" id="nombre" name="name" placeholder="Nombre de la categoría" required />
                </div>

                <div class="form-group mb-3">
                    <label for="description">Descipción</label>
                    <textarea class="form-control" id="description" name="description" ></textarea>
                </div>

                <div class="form-group mb-3">
                    <label for="type">Categoría</label>
                    <select class="form-control w-25" id="type" name="type" >

                        <?php foreach($types as $type){ ?>

                            <option value="<?php echo($type->id); ?>"><?php echo($type->name); ?></option>

                        <?php } ?>
                       
                    </select>
                </div>

                <div class="form-group mt-4">
                    <button type="submit" class="btn btn-primary mt-4">Guardar</button>
                </div>

            </form>

        </main>

        <!-- Incluir el footer -->
        <?php include_once(dirname(__FILE__) . "/partials/footer.php"); ?>
        
    </body>

    <!--
    *******************************
            JAVASCRIPT
    *******************************
    -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</html>