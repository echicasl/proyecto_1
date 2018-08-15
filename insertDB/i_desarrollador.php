<?php
require("../conexion.php");

$nombre_desarrollador = $_POST['nombre_desarrollador'];
$nit = $_POST['nit'];
$direccion_empresa = $_POST['direccion_empresa'];
$correo_electronico = $_POST['correo_electronico'];
$nombre_dueno = $_POST['nombre_dueno'];


$consulta = "INSERT INTO desarrollador (nombre_desarrollador,nit,direccion_empresa,correo_electronico,nombre_dueno) VALUES 
('".$nombre_desarrollador."','".$nit."','".$direccion_empresa."','".$correo_electronico."','".$nombre_dueno."')";


$resultado = mysqli_query($conexion, $consulta) or die ( '<script> alert("vejigaaa"); window.location</script>');


if($resultado)
{

    echo "<script>
     alert('DATO INSERTADO CORRECTAMENTE');
      window.location= '../Tablas/Desarrolladores.php'
      </script>";


}
else 
{

    echo "<script>
    alert('DATO  NO INSERTADO CORRECTAMENTE');
     window.location= '../Tablas/Desarrolladores.php'
     </script>";

}

?>
