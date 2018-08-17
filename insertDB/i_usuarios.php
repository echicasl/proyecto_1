<?php
require("../conexion.php");

$id_login = $_POST['id_login'];
$id_rol = $_POST['id_rol'];
$id_unidad_trabajo = $_POST['id_unidad_trabajo'];
$id_genero = $_POST['id_genero'];
$nombre_1 = $_POST['nombre_1'];
$nombre_2 = $_POST['nombre_2'];
$nombre_3 = $_POST['nombre_3'];
$apellido_1 = $_POST['apellido_1'];
$apellido_2 = $_POST['apellido_2'];
$apellido_3 = $_POST['apellido_3'];
$clave = $_POST['clave'];
$username = $_POST['username'];
$estatus = $_POST['estatus'];

$consulta = "INSERT INTO tb_usuarios (id_login,id_rol,id_unidad_trabajo,id_genero, nombre_1,
 nombre_2,nombre_3, apellido_1,apellido_2, apellido_3,clave, username, estatus ) VALUES 
('".$id_login."','".$id_rol."','".$id_unidad_trabajo."','".$id_genero."',
'".$nombre_1."','".$nombre_2."','".$nombre_3."','".$apellido_1."','".$apellido_2."','".$apellido_3."',
'".$clave."','".$username."','".$estatus."')";


$resultado = mysqli_query($conexion, $consulta) or die ( '<script> alert("vejigaaa"); window.location</script>');


if($resultado)
{

    echo "<script>
     alert('DATO INSERTADO CORRECTAMENTE');
      window.location= '../Tablas/Usuarios.php'
      </script>";


}
else 
{

    echo "<script>
    alert('DATO  NO INSERTADO CORRECTAMENTE');
     window.location= '../Tablas/Usuarios.php'
     </script>";

}

?>



