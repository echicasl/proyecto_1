<?php
require("../conexion.php");

$numero_telefono = $_POST['numero_telefono'];
$id_desarrollador = $_POST['id_desarrollador'];
$id_informacion_solicitante = $_POST['id_informacion_solicitante'];
$id_tipotelefono = $_POST['id_tipotelefono'];

$consulta = "INSERT INTO t_telefonos (numero_telefono,id_desarrollador,id_informacion_solicitante,
id_tipotelefono) VALUES ('".$numero_telefono."','".$id_desarrollador."','".$id_informacion_solicitante."','".$id_tipotelefono."')";


$resultado = mysqli_query($conexion, $consulta) or die ( '<script> alert("vejigaaa"); window.location</script>');


if($resultado)
{

    echo "<script>
     alert('DATO INSERTADO CORRECTAMENTE');
      window.location= '../Tablas/Telefonos.php'
      </script>";


}
else 
{

    echo "<script>
    alert('DATO  NO INSERTADO CORRECTAMENTE');
     window.location= '../Tablas/Telefonos.php'
     </script>";

}

?>