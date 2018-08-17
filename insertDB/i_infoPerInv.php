<?php
require("../conexion.php");

$id_ExpedienteRequisito = $_POST['id_ExpedienteRequisito'];
$id_RelacionFamiliar = $_POST['id_RelacionFamiliar'];
$id_genero = $_POST['id_genero'];
$numero_documento = $_POST['numero_documento'];
$nombre_1 = $_POST['nombre_1'];
$nombre_2 = $_POST['nombre_2'];
$nombre_3 = $_POST['nombre_3'];
$apellido_1 = $_POST['apellido_1'];
$apellido_2 = $_POST['apellido_2'];
$apellido_3 = $_POST['apellido_3'];
$apellido_casado = $_POST['apellido_casado'];
$direccion = $_POST['direccion'];

$fecha_registrox = date_create($_POST['fecha_nacimiento']);
$fecha_registrot = date_format($fecha_registrox,"d/m/Y");

$telefono = $_POST['telefono'];

$consulta = "INSERT INTO tb_infopersonasinv (id_ExpedienteRequisito,id_RelacionFamiliar,id_genero,
numero_documento,nombre_1, nombre_2, nombre_3, apellido_1, apellido_2, apellido_3, apellido_casado, direccion, fecha_nacimiento, telefono) VALUES 
('".$id_ExpedienteRequisito."','".$id_RelacionFamiliar."','".$id_genero."','".$numero_documento."',
'".$nombre_1."','".$nombre_2."','".$nombre_3."','".$apellido_1."',
'".$apellido_2."','".$apellido_3."','".$apellido_casado."',
'".$direccion."','".$fecha_registrot."','".$telefono."')";


$resultado = mysqli_query($conexion, $consulta) or die ( '<script> alert("vejigaaa"); window.location</script>');


if($resultado)
{

    echo "<script>
     alert('DATO INSERTADO CORRECTAMENTE');
      window.location= '../Tablas/InfoPersonasInv.php'
      </script>";


}
else 
{

    echo "<script>
    alert('DATO  NO INSERTADO CORRECTAMENTE');
     window.location= '../Tablas/InfoPersonasInv.php'
     </script>";

}

?>