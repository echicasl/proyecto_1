<?php
require("../conexion.php");

$descripcion_departamento = $_POST['descripcion_departamento'];

$consulta = "INSERT INTO departamento (descripcion_departamento) VALUES 
('".$descripcion_departamento."')"; 

$resultado = mysqli_query($conexion, $consulta) or die ( '<script> alert("vejigaaa"); window.location</script>');



if($resultado)
{

    echo "<script>
     alert('DATO INSERTADO CORRECTAMENTE');
      window.location= '../Tablas/Departamento.php'
      </script>";


}
else 
{

    echo "<script>
    alert('DATO  NO INSERTADO CORRECTAMENTE');
     window.location= '../Tablas/Departamento.php'
     </script>";

}

?>
