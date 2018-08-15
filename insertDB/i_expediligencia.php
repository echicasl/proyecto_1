<?php
require("../conexion.php");

$numero_expediente = $_POST['numero_expediente'];

$consulta = "INSERT INTO tb_municipios (descripcion_municipio) VALUES 
('".$descripcion_municipio."')";

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
