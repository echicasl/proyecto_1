<?php
require("../conexion.php");

$relacion_familiar = $_POST['relacion_familiar'];



$consulta = "INSERT INTO tb_relacionfamiliar (relacion_familiar) VALUES 
('".$relacion_familiar."')";


$resultado = mysqli_query($conexion, $consulta) or die ( '<script> alert("vejigaaa"); window.location</script>');


if($resultado)
{

    echo "<script>
     alert('DATO INSERTADO CORRECTAMENTE');
      window.location= '../Tablas/RelacionFam.php'
      </script>";


}
else 
{

    echo "<script>
    alert('DATO  NO INSERTADO CORRECTAMENTE');
     window.location= '../Tablas/RelacionFam.php'
     </script>";

}

?>