<div class="header">
<img src="img/logo.jpg" alt="">
<div class="header"></div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Productos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#" onclick="cargar('main','productos/articulosescolares.php')">Articulos Escolares</a>
          <a class="dropdown-item" href="#" onclick="cargar('main','productos/articulosdeoficina.php')">Articulos de Oficina</a>
          </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cotizacion de Productos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#" onclick="cargar('main','cotizacion/registro.php')">Registro</a>
          </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Servicios de Papeleria
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#" onclick="cargar('main','serviciosdepapeleria/enmicado.php')">Enmicado</a>
          <a class="dropdown-item" href="#" onclick="cargar('main','serviciosdepapeleria/engargolado.php')">Engargolado</a>
          <a class="dropdown-item" href="#" onclick="cargar('main','serviciosdepapeleria/envolturaderegalos.php')">Envoltura de Regalos</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Servicios Informaticos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#" onclick="cargar('main','serviciosinformaticos/busquedadeinformacion.php')">Busqueda de Informacion</a>
          <a class="dropdown-item" href="#" onclick="cargar('main','serviciosinformaticos/consultadedatos.php')">Consulta de Datos</a>
          </div> 
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Internet
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#" onclick="cargar('main','internet/alquilerdeequiposdecomputo.php')">Alquiler de Equipos de Computo</a>
          <a class="dropdown-item" href="#" onclick="cargar('main','internet/orientacion.php')">Orientacion</a>
          </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Impresiones
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#" onclick="cargar('main','impresiones/blancoynegro.php')">Blanco y Negro</a>
          <a class="dropdown-item" href="#" onclick="cargar('main','impresiones/color.php')">Color</a>
          <a class="dropdown-item" href="#" onclick="cargar('main','impresiones/fotocopiado.php')">Fotocopiado</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Empresa
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#" onclick="cargar('main','empresa/valores.php')">Valores mision y Vision</a>
                    
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>