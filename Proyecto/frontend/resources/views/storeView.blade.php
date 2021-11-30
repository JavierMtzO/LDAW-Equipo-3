<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lista de Libros</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">

    <header class="header-blue">
    <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
        <div class="container-fluid"><a class="navbar-brand" href="index.html">Meet My Books</a><button data-bs-toggle="collapse" data-bs-target="#navcol-1" class="navbar-toggler"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.html">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="buscar.html"><i class="fa fa-search"></i> Buscar libros</a></li>
                    <li class="nav-item"></li>
                </ul>
                <form class="d-flex me-auto navbar-form" target="_self">
                    <div class="d-flex align-items-center"></div>
                </form><span class="navbar-text"><li class="nav-item dropdown"><a aria-expanded="false" data-bs-toggle="dropdown" class="dropdown-toggle nav-link" href="#">Username </a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Favoritos</a><a class="dropdown-item" href="#">Agregar libro</a><a class="dropdown-item text-danger" href="#">Cerrar sesión</a></div>
                    </li></span>
            </div>
        </div>
    </nav>
    <div class="row register-form">
    <div class="col-md-8 offset-md-2">
        <form class="custom-form" method="post" action="/libros/store">
            <h1>Registrar libro</h1>
            <div class="row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field fname">Nombre del libro</label></div>
                <div class="col-sm-6 input-column"><input type="hidden" id="nombre" name="nombre" value="test2" /></div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="dropdown-input-field">Autor </label></div>
                <div class="col-sm-4 input-column">
                    <div class="dropdown"><button class="btn btn-light dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">Autor </button>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Resúmen </label></div>
                <div class="col-sm-6 input-column"><textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea></div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="dropdown-input-field">Categoría </label></div>
                <div class="col-sm-4 input-column">
                    <div class="dropdown"><button class="btn btn-light dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">Categoría </button>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="dropdown-input-field">Género </label></div>
                <div class="col-sm-4 input-column">
                    <div class="dropdown"><button class="btn btn-light dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">Género </button>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                    </div>
                </div>
                
            </div>
            <div class="row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Imagen del libro</label></div>
                <div class="col-sm-6 input-column"><input type="hidden" id="imagen" name="imagen" value="test" /><br></div>
            </div>
            <button class="btn btn-light submit-button" type="button">Registrar</button>
        </form>
    </div>
</div>
</header>

    <form method="post" action="/libros/store">
        @csrf
        <label for="fname">Nombre:</label><br>
        <input type="hidden" id="nombre" name="nombre" value="test2" /><br>
        <label for="lname">Resumen:</label><br>
        <input type="hidden" id="resumen" name="resumen" value="test2" /><br>
        <input type="hidden" id="imagen" name="imagen" value="test" /><br>
        <input type="hidden" id="genero_id" name="genero_id" value="1" /><br>
        <button type="submit">Registrar</button>
    </form>

    </body>

</html>
