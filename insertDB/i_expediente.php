<?php
require("../conexion.php");

$id_UnidadTrabajo = $_POST['id_UnidadTrabajo'];
$descripcion_diligencia = $_POST['descripcion_diligencia'];
$obligatorio = $_POST['obligatorio'];
$orden = $_POST['orden'];

$consulta = "INSERT INTO tb_diligencias (Id_UnidadTrabajo,descripcion_diligencia,obligatorio,orden) VALUES 
('".$id_UnidadTrabajo."','".$descripcion_diligencia."','".$obligatorio."','".$orden."')";


$resultado = mysqli_query($conexion, $consulta) or die ( '<script> alert("vejigaaa"); window.location</script>');


if($resultado)
{

    echo "<script>
     alert('DATO INSERTADO CORRECTAMENTE');
      window.location= '../Tablas/Diligencias.php'
      </script>";


}
else 
{

    echo "<script>
    alert('DATO  NO INSERTADO CORRECTAMENTE');
     window.location= '../Tablas/Diligencias.php'
     </script>";

}

?>
