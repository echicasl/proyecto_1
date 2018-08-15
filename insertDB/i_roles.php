<?php
require("../conexion.php");

$corta_descripcion = $_POST['corta_descripcion'];
$descripcion_rol = $_POST['descripcion_rol'];


$consulta = "INSERT INTO rol (corta_descripcion, descripcion_rol) VALUES 
('".$corta_descripcion."','".$descripcion_rol."')";


$resultado = mysqli_query($conexion, $consulta) or die ( '<script> alert("vejigaaa"); window.location</script>');


if($resultado)
{

    echo "<script>
     alert('DATO INSERTADO CORRECTAMENTE');
      window.location= '../Tablas/Roles.php'
      </script>";


}
else 
{

    echo "<script>
    alert('DATO  NO INSERTADO CORRECTAMENTE');
     window.location= '../Tablas/Roles.php'
     </script>";

}

?>
