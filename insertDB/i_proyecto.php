<?php
require("../conexion.php");

$muniproy = $_POST['muniproy'];
$desproy = $_POST['desproy'];
$nombre_proyecto = $_POST['nombre_proyecto'];
$longitud_proyecto = $_POST['longitud_proyecto'];
$latitud_proyecto = $_POST['latitud_proyecto'];
$monto_aproximado = $_POST['monto_aproximado'];
$fecha_inicio_trabajos = $_POST['fecha_inicio_trabajos'];


$consulta = "INSERT INTO in_proyecto (muniproy,desproy,nombre_proyecto,longitud_proyecto,latitud_proyecto,monto_aproximado,fecha_inicio_trabajos) VALUES 
('".$muniproy."','".$desproy."','".$nombre_proyecto."','".$longitud_proyecto."','".$latitud_proyecto."','".$monto_aproximado."','".$fecha_inicio_trabajos."')";


$resultado = mysqli_query($conexion, $consulta) or die ( '<script> alert("vejigaaa"); window.location</script>');


if($resultado)
{

    echo "<script>
     alert('DATO INSERTADO CORRECTAMENTE');
      window.location= '../Tablas/Proyectos.php'
      </script>";


}
else 
{

    echo "<script>
    alert('DATO  NO INSERTADO CORRECTAMENTE');
     window.location= '../Tablas/Proyectos.php'
     </script>";

}

?>
