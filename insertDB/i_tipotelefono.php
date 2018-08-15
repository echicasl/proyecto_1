<?php
require("../conexion.php");

$descricpcion_tipotelefono = $_POST['descricpcion_tipotelefono'];



$consulta = "INSERT INTO tb_tipotelefono(descricpcion_tipotelefono) VALUES 
('".$descricpcion_tipotelefono."')";


$resultado = mysqli_query($conexion, $consulta) or die ( '<script> alert("vejigaaa"); window.location</script>');


if($resultado)
{

    echo "<script>
     alert('DATO INSERTADO CORRECTAMENTE');
      window.location= '../Tablas/TiposTelefonos.php'
      </script>";


}
else 
{

    echo "<script>
    alert('DATO  NO INSERTADO CORRECTAMENTE');
     window.location= '../Tablas/TiposTelefonos.php'
     </script>";

}

?>