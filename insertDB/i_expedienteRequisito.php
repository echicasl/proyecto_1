<?php
require("../conexion.php");

$id_requisito = $_POST['id_requisito'];
$id_expediente = $_POST['id_expediente'];
$id_usuario = $_POST['id_usuario'];
$numero_expediente = $_POST['numero_expediente'];
$anio_expediente = $_POST['anio_expediente'];

$fecha_registrox = date_create($_POST['fecha_presentacion']);
$fecha_registrot = date_format($fecha_registrox,"d/m/Y");


$aceptado = $_POST['aceptado'];
$motivo_rechazo = $_POST['motivo_rechazo'];


$consulta = "INSERT INTO tb_expedienterequisito (id_requisito, id_expediente, id_usuario, numero_expediente, anio_expediente, fecha_presentacion, aceptado, motivo_rechazo ) VALUES 
('".$id_requisito."','".$id_expediente."','".$id_usuario."','".$numero_expediente."','".$anio_expediente."','".$fecha_registrot."','".$aceptado."','".$motivo_rechazo."')";

$resultado = mysqli_query($conexion, $consulta) or die ( '<script> alert("vejigaaa"); window.location</script>');

if($resultado)
{

    echo "<script>
     alert('DATO INSERTADO CORRECTAMENTE');
      window.location= '../Tablas/ExpedienteReq.php'
      </script>";


}
else 
{

    echo "<script>
    alert('DATO  NO INSERTADO CORRECTAMENTE');
     window.location= '../Tablas/ExpedienteReq.php'
     </script>";

}

?>