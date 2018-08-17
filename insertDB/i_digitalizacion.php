<?php
require("../conexion.php");

$id_expediente_requisito = $_POST['id_expediente_requisito'];
$Id_User = $_POST['Id_User'];
$nombre_archivo = $_POST['nombre_archivo'];
$fecha_registrox = date_create($_POST['fecha_escaneo']);
$fecha_registrot = date_format($fecha_registrox,"d/m/Y");



$consulta = "INSERT INTO tb_digitalizacion (Id_expediente,Id_User,nombre_archivo,fecha_escaneo) VALUES 
('".$id_expediente_requisito."','".$Id_User."','".$nombre_archivo."','".$fecha_registrot."')";


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