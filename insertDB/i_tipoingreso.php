<?php
require("../conexion.php");

$descripcion_ingreso = $_POST['descripcion_ingreso'];



$consulta = "INSERT INTO tb_tipoingreso (descripcion_ingreso) VALUES 
('".$descripcion_ingreso."')";


$resultado = mysqli_query($conexion, $consulta) or die ( '<script> alert("vejigaaa"); window.location</script>');


if($resultado)
{

    echo "<script>
     alert('DATO INSERTADO CORRECTAMENTE');
      window.location= '../Tablas/TipoIngreso.php'
      </script>";


}
else 
{

    echo "<script>
    alert('DATO  NO INSERTADO CORRECTAMENTE');
     window.location= '../Tablas/TipoIngreso.php'
     </script>";

}

?>