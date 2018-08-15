<?php
require("../conexion.php");


$descripcion_unidad = $_POST['descripcion_unidad'];


$consulta = "INSERT INTO UnidadTrabajo (descrip_uniTrabajo) VALUES 
('".$descripcion_unidad."')";


$resultado = mysqli_query($conexion, $consulta) or die ( '<script> alert("vejigaaa"); window.location</script>');


if($resultado)
{

    echo "<script>
     alert('DATO INSERTADO CORRECTAMENTE');
      window.location= '../Tablas/UnidadTrabajo.php'
      </script>";


}
else 
{

    echo "<script>
    alert('DATO  NO INSERTADO CORRECTAMENTE');
     window.location= '../Tablas/UnidadTrabajo.php'
     </script>";

}

?>