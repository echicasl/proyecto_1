<?php
    session_start();

/*
    if (isset($_SESSION['autorizado']) == true) {
    
    } else {
        require("../libreria/notaNoAutorizado.php");
    exit;
    }*/

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="Edwin" content="">

    <title>Form-Desarrolladores</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body style="background-color: #d5f4e6">

    <div id="wrapper">

        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="../index.php">
                        Inicio
                    </a>
                </li>
                <li>
                    <a href="Proyectos.php">Proyectos</a>
                </li>
                <li>
                    <a href="Departamento.php">Departamento</a>
                </li>
                <li>
                    <a href="Municipios.php">Municipios</a>
                </li>
                <li>
                    <a href="Desarrolladores.php">Desarrolladores</a>
                </li>
                <li>
                    <a href="InfoPersonasInv.php">Info. Personas Involucradas</a>
                </li>
                <li>
                    <a href="Genero.php">Género</a>
                </li>
                <li>
                    <a href="Telefonos.php">Teléfonos</a>
                </li>
                <li>
                    <a href="TiposTelefonos.php">Tipos Teléfonos</a>
                </li>
                <li>
                    <a href="TipoAccion.php">Género</a>
                </li>
                <li>
                    <a href="RelacionFam.php">Relación Familiar</a>
                </li>
                <li>
                <li>
                    <a href="Expediente.php">Expediente</a>
                </li>
                <li>
                    <a href="ExpedienteReq.php">Requisitos de Expediente</a>
                </li>
                <li>
                    <a href="Requisitos.php">Requisitos</a>
                </li>
                <li>
                    <a href="TipoIngreso.php">Tipo Ingreso</a>
                </li>
                <li>
                    <a href="DestSubsidio.php">Destino Subsidio</a>
                </li>
                <li>
                    <a href="UnidadTrabajo.php">Unidad de Trabajo</a>
                </li>
                <li>
                    <a href="Digitalizacion.php">Digitalización</a>
                </li>
                <li>
                    <a href="BitacoraAud.php">Bitácora de Auditoria</a>
                </li>
                <li>
                    <a href="Roles.php">Roles</a>
                </li>
                <li>
                    <a href="Diligencias.php">Diligencias</a>
                </li>
                <li>
                    <a href="ExpeDiligencias.php">Expediente Diligencias</a>
                </li>
                <li>
                    <a href="Usuarios.php">Usuarios</a>
                </li>
            </ul>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">

                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Menú</a><br><br>
                <h1>Desarrolladores</h1><br>

                <form name="formroles" action="../insertDB/i_desarrollador.php" method="POST">
                    <div class="form-group">
                      <label for="formGroupExampleInput">Nombre del Desarrollador</label>
                      <input type="text" class="form-control" maxlength="200" id="nombre_desarrollador" name="nombre_desarrollador" placeholder="Ingrese Nombre del Desarrollador" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Nit</label>
                      <input type="text" class="form-control" maxlength="15" id="nit" name="nit" placeholder="Ingrese Nit del Desarrollador" required>
                    </div> 
                    <div class="form-group">
                      <label for="formGroupExampleInput">Direccion de la Empresa</label>
                      <input type="text" class="form-control" maxlength="200" id="direccion_empresa" name="direccion_empresa" placeholder="Ingrese la Dirección" required="">
                    </div>
                    <div class="form-group">
                      <label for="example-email-input">Correo de la Empresa</label>
                      <div >
                        <input class="form-control" maxlength="20" type="email" value="email@example.com" id="correo_electronico" name="correo_electronico" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Nombre Dueño</label>
                      <input type="text" class="form-control" maxlength="100" id="nombre_dueno" name="nombre_dueno" placeholder="Ingrese la Dirección" required="">
                    </div>
                    <button type="submit" class="btn btn-success">Enviar</button>

                  </form> 

            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
