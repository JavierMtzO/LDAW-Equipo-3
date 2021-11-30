    <form class="mx-auto" method="post" action="http://localhost:8000/api/register" >

        <div class="form-row">

            <div class="col">

                <div class="form-group mb-3">

                    <label class="mb-1" for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" />

                </div>

                <div class="form-group mb-3">

                    <label class="mb-1" for="email">Correo electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" />

                </div>

                <div class="form-group mb-3">

                    <label class="mb-1" for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" />

                </div>

                <div class="form-group">

                    <button type="submit" class="btn">Registrar</button>

                </div>

            </div>

        </div>


    </form>
