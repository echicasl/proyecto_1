<?php
require("conexion.php");

$username = $_POST['username'];
$paswords = $_POST['paswords'];

$consulta = "SELECT * FROM usuarios";

/*$consulta = "INSERT INTO ejemplo (username, passwords) VALUES 
('".$username."','".$passwords."')"; */

$resultado = mysqli_query($conexion, $consulta) or die ( "Algo ha ido mal en la consulta a la base de datos");

//echo $resultado;


$variable = 0;

 while ($columna = mysqli_fetch_array($resultado))
{
if ($columna['username'] === $username and $columna['paswords'] === $paswords)
  {
 	$variable = 1;
 }
 }

 if($variable === 1){
		//  echo "Todo bien";
		  
		  require("index.php");
 }else
 {
	require("login.php");

	echo '<script type="text/javascript">alert(\'Login incorrecto!\');</script>'; 
 }  
?>
