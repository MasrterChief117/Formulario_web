<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>objetos</title>
</head>
<body background="Fondo.png">
    <nav class="navbar-green bg-success" style="--bs-bg-opacity: .35;">
        <div class="container">
              <header>
           
                      <a class="navbar-brand" href="#">
                          <img src="Escudo_UN.png" alt="" width="75" height="75"  class="d-inline-block align-text-center">
                      </a>
             </header>
        </div>
      </nav>
      <div class="container">
        <div class="row">
      <div class="col-md-5 mx-auto">
      <div id="first">
        <div class="myform form ">
           <div class="logo mb-3">
             <div class="col-md-12 text-center">
              <h1>Formulario Objetos</h1>
             </div>
          </div>
          
            <form action="" method="post" name="login" novalidate="novalidate">
              <div>
                <label for="nombre">Nombre Objeto:</label>
                <input class="form-control" id="nombre" type="text" name="nombre" placeholder="Ingrese nombre objeto"/>
              </div>  
              <div>
                <label for="nombre">ID Placa del objeto:</label>
                <input class="form-control" id="IDObjeto" type="number" name="IDObjeto" placeholder="Ingrese ID"/>
              </div>
              <div>
                <label for="nombre">serial:</label>
                <input class="form-control" id="serial" type="number" name="serial" placeholder="Ingrese serial"/>
              </div>
            </br>
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="botonMarca" data-bs-toggle="dropdown" aria-expanded="false">
                  Marca
                </button>
              </br>
                <ul class="dropdown-menu" aria-labelledby="botonMarca">
                  <li><a class="dropdown-item" href="#">marca 1</a></li>
                  <li><a class="dropdown-item" href="#">marca 2</a></li>
                  <li><a class="dropdown-item" href="marca.html">Agregar otra Marca</a></li>
                </ul>
              </div>
              <div>
                <label for="nombre">Caracteristicas:</label>
                <input class="form-control" id="Caracteristicas" type="text" name="Caracteristicas" placeholder="ingrese Caracteristicas"/>
              </div> 
              <div>
                <label for="nombre">Tipo:</label>
                <input class="form-control" id="Tipo" type="text" name="Tipo" placeholder="Ingrese tipo del objeto"/>
              </div>
              <div>
              <label for="nombre">Observaciones:</label>
              <input class="form-control" id="Observaciones" type="text" name="Observaciones" placeholder="Ingrese Observaciones"/>
            </div> 
                
            <div class="form-check">
            </br>
                <label for="nombre">Aplica movilidad:</label>
                </div></form>
            </br>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"onchange="desplegar()">
                <label class="form-check-label" for="flexRadioDefault1">
                  SI
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" onchange="desplegar()">
                <label class="form-check-label" for="flexRadioDefault2">
                  NO
                </label>
              </div>         
 <script src="formu.js"></script>    



    
</body>
</html>