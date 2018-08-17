<?php
require("../conexion.php");



$descripcion_municipio = $_POST['descripcion_municipio'];
$ndescripcion_municipio = $_POST['ndescripcion_municipio'];

/*
$consulta = "INSERT INTO departamento (descripcion_departamento) VALUES 
('".$descripcion_departamento."')"; 

*/

$consulta = "UPDATE tb_municipio SET descripcion_municipio = '".$ndescripcion_municipio."'
WHERE descripcion_municipio = '".$descripcion_municipio."'";

$resultado = mysqli_query($conexion, $consulta) or die ( '<script> alert("vejigaaa"); window.location</script>');



if($resultado)
{

    echo "<script>
     alert('DATO INSERTADO CORRECTAMENTE');
      window.location= '../Tablas/Municipios.php'
      </script>";


}
else 
{

    echo "<script>
    alert('DATO  NO INSERTADO CORRECTAMENTE');
     window.location= '../Tablas/Municipios.php'
     </script>";

}

?>