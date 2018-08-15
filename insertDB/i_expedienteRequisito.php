<?php
require("../conexion.php");

$id_tipoIngreso = $_POST['id_tipoIngreso'];
$descripcion_requisito = $_POST['descripcion_requisito'];
$observaciones = $_POST['observaciones'];
$obligatorio = $_POST['obligatorio'];


$consulta = "INSERT INTO tb_requisito (id_tipoIngreso, descripcion_requisito, observaciones, obligatorio ) VALUES 
('".$id_tipoIngreso."','".$descripcion_requisito."','".$observaciones."','".$obligatorio."')";

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