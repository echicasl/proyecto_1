<?php
require("../conexion.php");


$descSubsidio = $_POST['descripcion_Subsidio'];


$consulta = "INSERT INTO tb_destsubsidio (descripcion_Subsidio) VALUES 
('".$descSubsidio."')";


$resultado = mysqli_query($conexion, $consulta) or die ( '<script> alert("vejigaaa"); window.location</script>');


if($resultado)
{

    echo "<script>
     alert('DATO INSERTADO CORRECTAMENTE');
      window.location= '../Tablas/DestSubsidio.php'
      </script>";


}
else 
{

    echo "<script>
    alert('DATO  NO INSERTADO CORRECTAMENTE');
     window.location= '../Tablas/DestSubsidio.php'
     </script>";

}

?>