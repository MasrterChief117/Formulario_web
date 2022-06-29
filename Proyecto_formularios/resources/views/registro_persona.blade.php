<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>RegistroPersona</title>
</head>
<body bgcolor=#0060aa>
    <center>
        <header>
            <svg height="100" width="100%">
                <rect width="100%" height =100% fill="green"></rect>
                <text class="titulo" x="150" y="70%" font-size="70"
                    fill="black">
                        Registro de una Persona
                </text>
            </svg>
        </header>
        <div>
            <form action="{{route('persona.store')}}" method="POST">
                <ul>
                    @csrf
                    <div>
                        <br>
                        <label for="tipo_documento">Tipo de documento:</label>
                        <br>
                        <input type="text" id="tipo_documento" name="tipo_documento" placeholder="tipo de documento">
                        <br>
                    </div>
                    <br>
                    <div>
                        <br>
                        <label for="num_documento">Numero de documento:</label>
                        <br>
                        <input type="text" id="num_documento" name="num_documento" placeholder="numero de documento">
                        <br>
                    </div>
                    <br>
                    <div>
                        <br>
                        <label for="nombre">nombre completo:</label>
                        <br>
                        <input type="text" id="nombre" name="nombre" placeholder="nombre">
                        <br>
                    </div>
                    <br>
                    <div>
                        <br>
                        <label for="email">Email:</label>
                        <br>
                        <input type="e-mail" id="email" name="email" placeholder="su email">
                        <br>
                    </div>
                    <br>
                    <div>
                        <br>
                        <label for="tipo_documento">Su celular:</label>
                        <br>
                        <input type="text" id="telefono" name="telefono" placeholder="su celular">
                        <br>
                    </div>
                    <br>
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <button class="btn btn-primary" type="submit">Guardar Registro</button>
                    </div>
                </ul>
            </form>  
        </div>
        </center>
</body>