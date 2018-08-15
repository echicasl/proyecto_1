<?php
require("../conexion.php");

$id_departamento = $_POST['id_departamento'];
$descripcion_municipio = $_POST['descripcion_municipio'];


$consulta = "INSERT INTO tb_municipio (id_departamento, descripcion_municipio) VALUES 
('".$id_departamento."','".$descripcion_municipio."')";

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
