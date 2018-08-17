<?php
    session_start();

/*
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
    
    $sql="SELECT * FROM usuarios ";
    $sql1="SELECT * FROM rol ";
    $sql2="SELECT * FROM unidadtrabajo ";
    $sql3="SELECT * FROM tb_genero ";

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Form-Usuarios</title>

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

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">

                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Menú</a><br><br>
                <h1>Usuarios</h1><br>

               <form action="../insertDB/i_usuarios.php" method="POST" class="login-form">

                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Id login</label>
                      <select class="form-control" id="id_login" name="id_login">
                      <?php
                           
                           if ($result=mysqli_query($conexion,$sql))
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
                      <label for="exampleFormControlSelect1">Id Rol</label>
                      <select class="form-control" id="id_rol" name="id_rol">
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
                      <label for="exampleFormControlSelect1">Id Unidad de Trabajo</label>
                      <select class="form-control" id="id_unidad_trabajo" name="id_unidad_trabajo">
                        <?php
                           
                           if ($result=mysqli_query($conexion,$sql2))
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
                      <label for="exampleFormControlSelect1">Id Género</label>
                      <select class="form-control" id="id_genero" name="id_genero">
                      <?php
                           
                           if ($result=mysqli_query($conexion,$sql3))
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
                    <div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Nombre 1</label>
                      <input type="text" class="form-control" maxlength="25" id="nombre_1" name="nombre_1" placeholder="Ingrese el Nombre" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Nombre 2</label>
                      <input type="text" class="form-control" maxlength="25" id="nombre_2" name="nombre_2" placeholder="Ingrese el Nombre">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Nombre 3</label>
                      <input type="text" class="form-control" maxlength="25" id="nombre_3" name="nombre_3" placeholder="Ingrese el Nombre">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Apellido 1</label>
                      <input type="text" class="form-control" maxlength="25" id="apellido_1" name="apellido_1" placeholder="Ingrese el Apellido" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Apellido 2</label>
                      <input type="text" class="form-control" maxlength="25" id="apellido_2" name="apellido_2" placeholder="Ingrese el Apellido 2">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Apellido 3</label>
                      <input type="text" class="form-control" maxlength="25" id="apellido_3" name="apellido_3" placeholder="Ingrese el Apellido 2">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Clave</label>
                        <input type="password" class="form-control" maxlength="200" id="clave" name="clave" placeholder="Ingrese la Clave" required>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Nombre de Usuario</label>
                      <input type="text" class="form-control" maxlength="20" id="username" name="username" placeholder="Nombre del Usuario" required>
                    </div>

                    <div class="form-group">
                      <label for="exampleFormControlSelect1"> Estatus</label>
                      <select class="form-control" id="estatus" name="estatus">
                        <option>Activado</option>
                        <option>Desactivado</option>
                      </select>
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