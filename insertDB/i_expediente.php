<?php
require("../conexion.php");

$id_TipoIngreso = $_POST['id_TipoIngreso'];
$id_TipoSolicitudSubsidio = $_POST['id_TipoSolicitudSubsidio'];
$id_Proyecto = $_POST['id_Proyecto'];
$id_Usuario = $_POST['id_Usuario'];

$fecha_registrox = date_create($_POST['fecha_registro']);
$fecha_registrot = date_format($fecha_registrox,"d/m/Y");

$observaciones_expediente = $_POST['observaciones_expediente'];
$monto_solicitado = $_POST['monto_solicitado'];
$longitud_proyecto = $_POST['longitud_proyecto'];
$latitud_proyecto = $_POST['latitud_proyecto'];

$consulta = "INSERT INTO tb_expediente (id_TipoIngreso,id_TipoSolicitudSubsidio,id_Proyecto,
id_Usuario,fecha_registro, observaciones_expediente, monto_solicitado, longitud_proyecto, latitud_proyecto) VALUES 
('".$id_TipoIngreso."','".$id_TipoSolicitudSubsidio."','".$id_Proyecto."','".$id_Usuario."',
'".$fecha_registrot."','".$observaciones_expediente."','".$monto_solicitado."','".$longitud_proyecto."',
'".$latitud_proyecto."')";


$resultado = mysqli_query($conexion, $consulta) or die ( '<script> alert("vejigaaa"); window.location</script>');


if($resultado)
{

    echo "<script>
     alert('DATO INSERTADO CORRECTAMENTE');
      window.location= '../Tablas/Expediente.php'
      </script>";


}
else 
{

    echo "<script>
    alert('DATO  NO INSERTADO CORRECTAMENTE');
     window.location= '../Tablas/Expediente.php'
     </script>";

}

?>
