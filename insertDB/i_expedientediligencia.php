<?php
require("../conexion.php");

$id_Expediente_Diligencia = $_POST['id_Expediente_Diligencia'];
$id_DocDilitalizado = $_POST['id_DocDilitalizado'];
$id_usuario = $_POST['id_usuario'];
$id_diliencia = $_POST['id_diliencia'];
$numero_expediente = $_POST['numero_expediente'];
$anio_expediente = $_POST['anio_expediente'];

$fecha_registrox = date_create($_POST['fecha_diligencia']);
$fecha_registrot = date_format($fecha_registrox,"d/m/Y");

$resultado_diligencia = $_POST['resultado_diligencia'];
$diligencia_finalizada = $_POST['diligencia_finalizada'];

$consulta = "INSERT INTO tb_expedientediligencia (id_Expediente_Diligencia,id_DocDilitalizado,id_usuario, id_diliencia,
 numero_expediente,anio_expediente, fecha_diligencia,resultado_diligencia, diligencia_finalizada) VALUES 
('".$id_Expediente_Diligencia."','".$id_DocDilitalizado."','".$id_usuario."','".$id_diliencia."',
'".$numero_expediente."','".$anio_expediente."','".$fecha_registrot."','".$resultado_diligencia."','".$diligencia_finalizada."')";


$resultado = mysqli_query($conexion, $consulta) or die ( '<script> alert("vejigaaa"); window.location</script>');


if($resultado)
{

    echo "<script>
     alert('DATO INSERTADO CORRECTAMENTE');
      window.location= '../Tablas/ExpeDiligencias.php'
      </script>";


}
else 
{

    echo "<script>
    alert('DATO  NO INSERTADO CORRECTAMENTE');
     window.location= '../Tablas/ExpeDiligencias.php'
     </script>";

}

?>



