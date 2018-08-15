<?php
require("../conexion.php");

$descricpcion_accion = $_POST['descricpcion_accion'];



$consulta = "INSERT INTO tb_tipoaccion (descricpcion_accion) VALUES 
('".$descricpcion_accion."')";


$resultado = mysqli_query($conexion, $consulta) or die ( '<script> alert("vejigaaa"); window.location</script>');


if($resultado)
{

    echo "<script>
     alert('DATO INSERTADO CORRECTAMENTE');
      window.location= '../Tablas/TipoAccion.php'
      </script>";


}
else 
{

    echo "<script>
    alert('DATO  NO INSERTADO CORRECTAMENTE');
     window.location= '../Tablas/TipoAccion.php'
     </script>";

}

?>