<?php
require("../conexion.php");

$Id_expediente = $_POST['Id_expediente'];
$Id_User = $_POST['Id_User'];
$nombre_archivo = $_POST['nombre_archivo'];
$fecha_escaneo = $_POST['fecha_escaneo'];



$consulta = "INSERT INTO tb_digitalizacion (Id_expediente,Id_User,nombre_archivo,fecha_escaneo) VALUES 
('".$Id_expediente."','".$Id_User."','".$nombre_archivo."','".$fecha_escaneo."')";


$resultado = mysqli_query($conexion, $consulta) or die ( '<script> alert("vejigaaa"); window.location</script>');


if($resultado)
{

    echo "<script>
     alert('DATO INSERTADO CORRECTAMENTE');
      window.location= '../Tablas/Digitalizacion.php'
      </script>";


}
else 
{

    echo "<script>
    alert('DATO  NO INSERTADO CORRECTAMENTE');
     window.location= '../Tablas/Digitalizacion.php'
     </script>";

}

?>