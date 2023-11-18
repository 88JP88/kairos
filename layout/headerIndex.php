
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KAIROS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="public/KAIROS2.png">
    <link href="../style/styleSession.css" rel="stylesheet">
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!--links fullcalendar-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.css">
     <!--<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js"></script>-->
   <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/locales-all.js"></script>
   
  </head>
  <body>

  </body>
</html>


<!-- Barra de navegacion de prueba -->
<nav class="navbar navbar-expand-lg bg-dark m-0 p-0" style="background-color: #001219;">
  <div class="container-fluid" style="background-color: #001219;">
  <a class="navbar-brand" href="../view/viewIndex.php"><img src="../public/KAIROS.png" alt="KAIROS" width="60" height="60"></a>
  <!--  <a class="navbar-brand text-light" href="../public/index.php">Speech App</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="../view/viewOption1.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-light" href="">Caracteristicas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="">Acerca de</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Perfil
          </a>
          <ul class="dropdown-menu m-2">
            <li><a class="dropdown-item" style="border-radius: 0px;" href="#">Cerrar sesion</a></li>
            <li><a class="dropdown-item" style="border-radius: 0px;" href="#">Notificaciones</a></li>
            <li><a class="dropdown-item" style="border-radius: 0px;" href="">Perfil</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="row mb-0 subMenu" style="background-color:#E4E4E4"> 

  <form class="d-flex m-1 mr-4 ml-4" role="search">
     <input class="form-control ms-2 me-1" type="search" placeholder="Search" aria-label="Search">
     <button class="btn btn-outline-dark me-3" type="submit">Buscar</button>
  </form>

</div> 

<!-- CONTENEDOR DEL CALENDARIO-->
<div class="container">
    <div class="col md-8 m-2">
         <div id='calendar'></div>

            

    </div>
</div>


  <!-- CONTENEDOR DEL MODAL-->
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-dark btn-lg" style="height: 100%;" data-bs-toggle="modal" data-bs-target="#modalEvent" data-target="#modalEvent" onclick="getClientRoomsList();">
                Evento
              </button>

              <!-- Modal -->
              <div class="modal fade" id="modalEvent" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content" id="modalBackglound">
                      <div class="modal-header">
                      <div class="row">
                     <div class="col-2"></div>
                     <div class="col-2"><img class="mt-3" src="../public/KAIROS2.png" alt="" width="72" height="57"></div>
                     <div class="col-8"><h1 class="m-4 text-light">KAIROS</h1></div></div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    <div class="modal-body">
                      <div class="container-fluid">
                        
                        <form action="">
                            <div class="mb-3">
                              <label for="" class="form-label text-light">Nombre del evento</label>
                              <input type="text" class="form-control" id="eventName">

                              <label for="" class="text-light">fecha inicio</label>
                              <input type="datetime-local" class="form-control"  id="dateStart">

                              <label for="" class="text-light">fecha final</label>  
                              <input type="datetime-local" class="form-control" id="dateEnd">
                             
                              <input type="hidden" id="url" >

                              <label for="floatingInput" class="text-light">Seleccione el estado</label> 
                                <select class="form-select form-select-sm" aria-label="form-select-sm example" id="state">
                                  <option selected>Estado</option>
                                  <option value="Agendado">Agendado</option>
                                  <option value="Pendiente">Pendiente</option>
                                  <option value="Disponible">Disponible</option>
                                </select>

                              <label for="floatingInput" class="text-light">Seleccione el sala</label>  
                                <select id="list-clientroom" class="form-control" name="currency" required onclick="onClientRoomSelect('assign')"></select>
                                <option value="0"></option>
                            </div>
                        </form>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                      <button type="button" class="btn btn-primary" id="lectorEvento">Guardar</button>
                    </div>
                  </div>
                </div>
              </div>

  <!-- CONTENEDOR DEL MODAL
            
              <button type="button" class="btn btn-dark btn-lg" style="height: 100%;" data-bs-toggle="modal" data-bs-target="#modalEvent" data-target="#modalEvent" onclick="getClientRoomsList();">
                Evento
              </button>

             
              <div class="modal fade" id="modalEvent" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                    <div class="row">
                     <div class="col-2"></div>
                     <div class="col-2"><img class="mt-3" src="../public/KAIROS2.png" alt="" width="72" height="57"></div>
                     <div class="col-8"><h1 class="m-4 text-light">KAIROS</h1></div>
                   </div>
                    </div>
                  
                    <div class="modal-body">
                      <div class="container-fluid">
                        
                        <form action="">
                           
                          <label for="floatingInput" class="text-light">Nombre del evento</label>
                          <input type="text" class="form-control mb-3" name="eventName" id="eventName">
                              
                          <label for="floatingInput" class="text-light">Fecha de inicio</label>
                          <input type="datetime-local" id="dateStart" class="form-control mb-3">
                              
                          <label for="floatingInput" class="text-light">Fecha final</label>
                          <input type="datetime-local" id="dateEnd" class="form-control mb-3">
                         
                          <label for="floatingInput" class="text-light">Seleccione el estado</label> 
                          <select class="form-select form-select-sm" aria-label="form-select-sm example" id="state">
                            <option selected>Estado</option>
                            <option value="Agendado">Agendado</option>
                            <option value="Pendiente">Pendiente</option>
                            <option value="Disponible">Disponible</option>
                          </select>
                   
                          <label for="floatingInput" class="text-light">Seleccione la sala</label>
                          <select id="list-clientroom" class="form-control" name="currency" required onclick="onClientRoomSelect('assign')"></select>
                          <option value="0">Selecciona room</option>
                              
                        </form>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                      <button type="button" class="btn btn-primary" id="lectorEvento">Guardar</button>
                    </div>
                  </div>
                </div>
              </div>

              -->
    <!--scripts fullcalendar-->
    <script src="../script/calendar.js"></script> 
   

<script>
  var modalId = document.getElementById('modalId');

  modalId.addEventListener('show.bs.modal', function (event) {
      // Button that triggered the modal
      let button = event.relatedTarget;
      // Extract info from data-bs-* attributes
      let recipient = button.getAttribute('data-bs-whatever');

    // Use above variables to manipulate the DOM
  });
</script>




<!-- Optional: Place to the bottom of scripts -->
<script>
  const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)

</script>                               

<!-- Barra de navegacion original -->
<!--
<nav class="navbar bg-dark m-0 p-0 fixed-top" style="background-color: #001219;">
  <div class="container-fluid m-0" style="background-color: #001219;">
    <a class="navbar-brand" href="#"><img src="public/KAIROS.png" alt="KAIROS" width="60" height="60"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header" style="background-color: #001219;">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="public/KAIROS2.png" alt="KAIROS" width="60" height="60"></h5>
        <button type="button" class="btn-close" style="border-radius: 5px;" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body" >
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item" style="border-radius: 5px; padding-left: 10px;">
            <a class="nav-link active" aria-current="page" href="#" style="color: #C70039;border-radius: 5px;">Home</a>
          </li>
          <li class="nav-item" style="border-radius: 5px; padding-left: 10px;">
          <button class="nav-link" onclick="changeSection('spam1');" id="alerts-tab1" data-bs-toggle="tab" data-bs-target="#alerts-tab-pane1" type="button" role="tab" aria-controls="alerts-tab-pane1" aria-selected="false" style="color: #C70039;">Repositorios</button>
          </li>
          <li class="nav-item" style="border-radius: 5px; padding-left: 10px;">
            <a class="nav-link" href="#" style="color: #C70039; border-radius: 5px;">Foros</a>
          </li>
          <li class="nav-item dropdown" style="border-radius: 5px; padding-left: 10px; padding-right: 10px; padding-bottom: 5px;">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #C70039; border-radius: 5px;">
              Más
            </a>
            <ul class="dropdown-menu">
            <li><button type="button" style="border-radius: 0px;" class="dropdown-item" onclick="openModLogIn()" data-bs-toggle="tooltip" title="Tooltip">Iniciar Sesión</button></li>
              
              
              <li><button type="button" style="border-radius: 0px;" class="dropdown-item" onclick="openModCreateUser()" data-bs-toggle="tooltip" title="Tooltip">Crear cuenta</button></li>
              <li><button type="button" style="border-radius: 0px;" class="dropdown-item" onclick="openModValCode()" data-bs-toggle="tooltip" title="Tooltip">Código de validación</button></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item m-0" style="border-radius: 0px;" href="#">Acerca de nosotros</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>
-->


<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0"></div>
  <div class="tab-pane fade" id="api-tab-pane" role="tabpanel" aria-labelledby="api-tab" tabindex="0">..www.</div>
  <div class="tab-pane fade" id="tools-tab-pane" role="tabpanel" aria-labelledby="tools-tab" tabindex="0">qqq</div>
  <div class="tab-pane fade" id="alerts-tab-pane1" role="tabpanel" aria-labelledby="alerts-tab1" tabindex="0">..eeee.</div>
  <div class="tab-pane fade" id="groups-tab-pane" role="tabpanel" aria-labelledby="groups-tab" tabindex="0">..eeee.</div>
  <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">.ddf..</div>
</div>
<div class="notification" id="notification">
        <p id="notificationText"></p>
    </div>

    
<script>
// Función para mostrar la notificación
function mostrarNotificacion(mensaje, tipo) {
    const notificacion = document.getElementById('notification');
    const notificacionText = document.getElementById('notificationText');

    notificacionText.textContent = mensaje;
    notificacion.classList.remove('error'); // Remover clase de error (en caso de que esté presente)

    if (tipo === 'error') {
        notificacion.classList.add('error');
    }
   
    notificacion.style.display = 'block';

    // Desaparecer la notificación después de 3 segundos
    setTimeout(() => {
        notificacion.style.display = 'none';
    }, 3000);
}



function obtenerVariablesPHPSession() {
  fetch('layout/getPHPVariablesIndex.php')
    .then(response => response.json())
    .then(data => {
      // Aquí obtienes los nuevos valores de las variables PHP en el objeto "data"
      // Puedes acceder a los valores como data.mensaje y data.error
      // Por ejemplo:
      var nuevoMensaje = data.mensaje;
      var nuevoError = data.error;

    

      if(nuevoError==="true"){
        
        var re="success";
        
      }
      if(nuevoError==="false"){
      
        var re="error";
        
      }
      
if(nuevoMensaje==""){

}else{
  mostrarNotificacion(nuevoMensaje, re);
}
      
     

    })
    .catch(error => {
      console.error('Error al obtener las variables PHP:', error);
    });
}
</script>
<style>
.notification {
    position: fixed;
    top: 20px;
    right: 20px;
    background-color: #4CAF50;
    color: #fff;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    display: none;
    z-index: 9999;
    animation: slideIn 8s forwards, slideOut 10s forwards;
}
.notification.error {
    background-color: #f44336;
}
@keyframes slideIn {
    0% {
        transform: translateX(100%);
        opacity: 0;
    }
    80% {
        transform: translateX(-10%);
        opacity: 1;
    }
    100% {
        transform: translateX(0);
        opacity: 1;
    }
}
@keyframes slideOut {
    0% {
        transform: translateX(0);
        opacity: 1;
    }
    100% {
        transform: translateX(100%);
        opacity: 0;
    }
}
</style>
<script> obtenerVariablesPHPSession();</script>

