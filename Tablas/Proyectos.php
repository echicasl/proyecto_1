<?php
 /*   session_start();


    if (isset($_SESSION['autorizado']) == true) {
    
    } else {
        require("../libreria/notaNoAutorizado.php");
    exit;
    }*/
    
    require("../conexion.php");

    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    
    $sql="SELECT * FROM tb_municipio ";
    $sql1="SELECT * FROM desarrollador ";

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Form-Proyectos</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body style="background-color: #d5f4e6">

    <div id="wrapper">

        <!-- Sidebar -->
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

        <div id="page-content-wrapper">
            <div class="container-fluid">

                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Menú</a><br><br>
                <h1>Proyectos</h1><br>

               <form action="../insertDB/i_proyecto.php" method="POST" class="login-form">
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Id Municipio</label>
                      <select class="form-control" id="muniproy" name="muniproy">
                      <?php
                           

                                if ($result=mysqli_query($conexion,$sql))
                                {
                                // Fetch one and one row
                                    while ($row=mysqli_fetch_row($result))
                                {
                                    echo "<option value=\"".$row[0]."\">".$row[2]."</option>";
                                }
                    
                                
                                    }
                        ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Id Desarrollador</label>
                      <select class="form-control" id="desproy" name="desproy">
                      <?php
                           

                           if ($result=mysqli_query($conexion,$sql1))
                           {
                           // Fetch one and one row
                               while ($row=mysqli_fetch_row($result))
                           {
                               echo "<option value=\"".$row[0]."\">".$row[1]."</option>";
                           }
               
                           
                               }
                   ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Nombre del Proyecto</label>
                      <input type="text" class="form-control" maxlength="200" id="nombre_proyecto" name="nombre_proyecto" placeholder="Ingrese el Nombre" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Longitud</label>
                      <input type="number" class="form-control" min="0" max="180" id="longitud_proyecto" name="longitud_proyecto" placeholder="Ingrese Longitud" required>
                    </div>   
                    <div class="form-group">
                      <label for="formGroupExampleInput">Latitud</label>
                      <input type="number" class="form-control" id="latitud_proyecto" name="latitud_proyecto" placeholder="Ingrese Latitud" min="0" max="90" required>
                    </div> 
                    <div class="form-group">
                      <label for="formGroupExampleInput">Monto Aproximado del Proyecto</label>
                      <input type="number" class="form-control" id="monto_aproximado" name="monto_aproximado" placeholder="Ingrese Monto" required>
                    </div> 
                    <div class="form-group">
                      <label for="example-date-input" col-form-label>Fecha de Inicio de Trabajos</label>
                       <div>
                        <input class="form-control" type="date" value="2018-08-19" id="fecha_inicio_trabajos" name="fecha_inicio_trabajos" required>
                      </div>
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
