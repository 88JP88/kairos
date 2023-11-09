

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="style/styleSession.css" rel="stylesheet">
  
</head>
 


<div class="container-fluid">
        <div class="row">
           <div class="col-12 col-sm-2 col-md-3 col-lg-4 col-xl-4"></div>
         
              <div class="col-12 col-sm-8 col-md-6 col-lg-4 col-xl-4 mt-4  rounded-2 shadow" id="loginForm">
                    <form id="loginForm" action="view/viewIndex.php" method="post">  <!-- //action oriinal // controller/controllerValidateLogIn.php -->
                      <div class="row">
                        <div class="col-2"></div>
                        <div class="col-2"><img class="mt-3" src="public/KAIROS2.png" alt="" width="72" height="57"></div>
                        <div class="col-8"><h3 class="m-4 text-light">KAIROS</h3></div>
                      </div>
                      <h4 class="m-4 fw-normal text-white">INGRESE SUS DATOS POR FAVOR</h4>
                      <div class="form-floating">
                        <input type="email" class="form-control mb-3" name="correo" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Correo electronico</label>
                      </div>
                      <div class="form-floating">
                        <input type="password" class="form-control mb-3" name="contraseña" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Contraseña</label>
                      </div>
                      <button class="w-100 btn btn-lg btn-primary1" type="submit" name="btnAccion" value="login">Confirmar</button>
                     
                    </form>
                    <button class="btn btn-primary1 w-100 mb-1" onclick="openModCloseSessions();">Cerrar sesion en otros dispositivos</button>
                    <p class="mt-1 m-3 text-white">&copy; Lugma.tech 2023</p>
                  </div>
              <div class="col-12 col-sm-2 col-md-3 col-lg-4 col-xl-4">
              </div>   
            </div>
           
      </div>
</html>

<!--
<form id="loginForm" action="controller/controllerValidateLogIn.php" method="post">
  <div class="row g-3 align-items-center">
    <div class="col-auto">
      <label for="inputPassword6" class="col-form-label">Correo</label>
    </div>
    <div class="col-auto">
      <input type="email" name="mail" id="mail" class="form-control" aria-describedby="passwordHelpInline" placeholder="name@example.com">
    </div>
  </div>

  <div class="row g-3 align-items-center">
    <div class="col-auto">
      <label for="inputPassword6" class="col-form-label">Contraseña</label>
    </div>
    <div class="col-auto">
      <input type="password" name="pass" id="pass" class="form-control" aria-describedby="passwordHelpInline" placeholder="Escribe tu contraseña">
    </div>
  </div>

  <button type="submit" class="btn btn-primary1">Iniciar</button>

 
</form> -->
