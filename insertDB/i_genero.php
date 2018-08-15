<?php
require("../conexion.php");

$descripcion_genero = $_POST['descripcion_genero'];



$consulta = "INSERT INTO tb_genero (descripcion_genero) VALUES 
('".$descripcion_genero."')";


$resultado = mysqli_query($conexion, $consulta) or die ( '<script> alert("vejigaaa"); window.location</script>');


if($resultado)
{

    echo "<script>
     alert('DATO INSERTADO CORRECTAMENTE');
      window.location= '../Tablas/Genero.php'
      </script>";


}
else 
{

    echo "<script>
    alert('DATO  NO INSERTADO CORRECTAMENTE');
     window.location= '../Tablas/Genero.php'
     </script>";

}

?>