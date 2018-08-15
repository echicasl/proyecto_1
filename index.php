<?php
    

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="Edwin" content="">

    <title>Formularios</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body style="background-color: #80ced6">

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="index.php">
                        Inicio
                    </a>
                </li>
                <li>
                    <a href="Tablas/Proyectos.php">Proyectos</a>
                </li>
                <li>
                    <a href="Tablas/Departamento.php">Departamento</a>
                </li>
                <li>
                    <a href="Tablas/Municipios.php">Municipios</a>
                </li>
                <li>
                    <a href="Tablas/Desarrolladores.php">Desarrolladores</a>
                </li>
                <li>
                    <a href="Tablas/InfoPersonasInv.php">Info. Personas Involucradas</a>
                </li>
                <li>
                    <a href="Tablas/Genero.php">Género</a>
                </li>
                <li>
                    <a href="Tablas/Telefonos.php">Teléfonos</a>
                </li>
                <li>
                    <a href="Tablas/TiposTelefonos.php">Tipos Teléfonos</a>
                </li>
                <li>
                    <a href="Tablas/TipoAccion.php">Género</a>
                </li>
                <li>
                    <a href="Tablas/RelacionFam.php">Relación Familiar</a>
                </li>
                <li>
                <li>
                    <a href="Tablas/Expediente.php">Expediente</a>
                </li>
                <li>
                    <a href="Tablas/ExpedienteReq.php">Requisitos de Expediente</a>
                </li>
                <li>
                    <a href="Tablas/Requisitos.php">Requisitos</a>
                </li>
                <li>
                    <a href="Tablas/TipoIngreso.php">Tipo Ingreso</a>
                </li>
                <li>
                    <a href="Tablas/DestSubsidio.php">Destino Subsidio</a>
                </li>
                <li>
                    <a href="Tablas/UnidadTrabajo.php">Unidad de Trabajo</a>
                </li>
                <li>
                    <a href="Tablas/Digitalizacion.php">Digitalización</a>
                </li>
                <li>
                    <a href="Tablas/BitacoraAud.php">Bitácora de Auditoria</a>
                </li>
                <li>
                    <a href="Tablas/Roles.php">Roles</a>
                </li>
                <li>
                    <a href="Tablas/Diligencias.php">Diligencias</a>
                </li>
                <li>
                    <a href="Tablas/ExpeDiligencias.php">Expediente Diligencias</a>
                </li>
                <li>
                    <a href="Tablas/Usuarios.php">Usuarios</a>
                </li>
            </ul>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1>Bienvenidos</h1><br><br>
                <p>Para iniciar actividad presionar el siguiente botón.</p>
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Menú</a>
                <a href="libreria/destroy.php">Sign Out</a>
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
