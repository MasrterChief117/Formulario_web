<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    
</head>
<body background="Fondo.png">
  <nav class="navbar-green bg-success" style="--bs-bg-opacity: .35;">
    <div class="container">
          <header>
       
                  <a class="navbar-brand" href="#">
                      <img src="Escudo_UN.png" alt="" width="75" height="75"  class="d-inline-block align-text-center">
                  </a>
                
                  <li style="margin-top:2px;min-height:1px;min-width:1px;" id="gtmDC-login-button">
                    <a class="auth-modal-toggle btn btn-primary ripple-surface ms-2 me-1" data-auth-modal-tab="sign-in">Login</a>
                  </li>
         </header>
    </div>
  </nav>



<br/><br/><br/><br/>
  <div class="container">
    <div class="row">
  <div class="col-md-5 mx-auto">
  <div id="first">
    <div class="myform form ">
       <div class="logo mb-3">
         <div class="col-md-12 text-center">
          <h1>Formulario</h1>
         </div>
      </div>
      
        <form action="" method="post" name="login" novalidate="novalidate">
          <div>
            <label for="nombre">Nombre:</label>
            <input class="form-control" id="nombre" type="text" name="nombre" placeholder="Ingrese su nombre completo"/>
          </div>  
            <div class="form-group">
              <label for="exampleInputEmail1">correo electrónico</label>
              <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="ejemplo@unal.edu.co">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Contraseña</label>
              <input type="password" name="password" id="password" class="form-control" aria-describedby="emailHelp" placeholder="Ingrese su Contraseña">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Confirmar contraseña</label>
              <input type="password" name="password" id="password" class="form-control" aria-describedby="emailHelp" placeholder="Repita su Contraseña">
            </div>
            <br/>
            <div class="checkbox pull-right">
              <label>
                <input type="checkbox">
               Al registrarse, acepta nuesros
                terminos y condiciones de uso. </label>
            </div>
            <div class="col-md-12 text-center ">
              <button style="background-color: rgb(184, 21, 156); border-radius: 85px;" type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">ingresar</button>
            </div>
          </br>
            
        </form>
             
    </div>
  
</div>
  </div>
    </div></div>
  </br></br></br></br>
  <nav class="navbar-green bg-success" style="--bs-bg-opacity: .35;">
    <div class="container">  

      <footer class="py-12 my-12">
            
                <ul class="nav justify-content-center border-bottom pb-3 mb-6">
                  <li class="nav-item"><a href="#" class="nav-link px-2 text">Home</a></li>
                  <li class="nav-item"><a href="#" class="nav-link px-2 text">Cononoce nuestro GitHub</a></li>
                  <li class="nav-item"><a href="https://dninfoa.unal.edu.co" class="nav-link px-2 text">acerca de nosotros</a></li>
                </ul>
                <p class="text-center text">© 2022 Company, Inc</p>
                <p class="text-center text">Julio Fuelagan, Nicolas Suarez </br> Luis Pulgar, Mateo Ramirez</p>
                
      </footer>
    </div>
  </nav>
 </body>
  


</html>