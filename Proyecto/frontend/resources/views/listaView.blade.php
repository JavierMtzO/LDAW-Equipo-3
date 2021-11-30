<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lista de Libros</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
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
                </form><span class="navbar-text"><a class="login" href="iniciarSesion.html">Iniciar sesión</a></span><a class="btn btn-light action-button" role="button" href="registro.html">Registrarse</a>
            </div>
        </div>
    </nav>
    <h2 class="text-center text-light"> Consultar libros </h2>
    <div class="container">
    <div class="row product-list dev">
        <div class="col-sm-6 col-md-4 product-item animation-element slide-top-left">
            <div class="product-container">
                <div class="row">
                    <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/historia_interminable.jpeg" /></a></div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h2><a href="#">Historia Interminable</a></h2>
                    </div>
                    <div class="col-4 small-text"> Michael Ende</div>
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <p class="product-description">De camino a la escuela, Bastian se mete en una librería para evitar a los matones. Escabulléndose con un libro llamado "La historia interminable".</p>
                        <div class="row">
                            <div class="col-6"><button class="btn btn-light" type="button">Ver libro</button></div>
                            <div class="col-6">
                                <p class="product-price"><i class="fa fa-star"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 product-item animation-element slide-top-left">
            <div class="product-container">
                <div class="row">
                    <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/historia_interminable.jpeg" /></a></div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h2><a href="#">Historia Interminable</a></h2>
                    </div>
                    <div class="col-4 small-text"> Michael Ende</div>
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <p class="product-description">De camino a la escuela, Bastian se mete en una librería para evitar a los matones. Escabulléndose con un libro llamado "La historia interminable".</p>
                        <div class="row">
                            <div class="col-6"><button class="btn btn-light" type="button">Ver libro</button></div>
                            <div class="col-6">
                                <p class="product-price"><i class="fa fa-star"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 product-item animation-element slide-top-left">
            <div class="product-container">
                <div class="row">
                    <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/historia_interminable.jpeg" /></a></div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h2><a href="#">Historia Interminable</a></h2>
                    </div>
                    <div class="col-4 small-text"> Michael Ende</div>
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <p class="product-description">De camino a la escuela, Bastian se mete en una librería para evitar a los matones. Escabulléndose con un libro llamado "La historia interminable".</p>
                        <div class="row">
                            <div class="col-6"><button class="btn btn-light" type="button">Ver libro</button></div>
                            <div class="col-6">
                                <p class="product-price"><i class="fa fa-star"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</header>

    <table>
        <thead>
            <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Resumen</th>
            <th scope="col">Imagen</th>
             </tr>
        </thead>
        <tbody>
            @foreach($libros as $libro)
            <tr>
            <td scope="row"> {{$libro['nombre']}}</td>
            <td scope="row">{{$libro['resumen']}}</td>
            <td scope="row">{{$libro['imagen']}}</td>
            <form method="post" action="/libros/destroy/{{$libro['id']}}">
            @csrf
            @method('DELETE')
            <td scope="row">
                 <button type="submit">Eliminar</button>

            </td>
            </form>

            </tr>
            @endforeach
        </tbody>
    </table>

    

    </body>

</html>
