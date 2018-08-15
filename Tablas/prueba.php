<?php
   // session_start();

    require("../conexion.php");

    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    
    $sql="SELECT id_proyectos,muniproy FROM proyectosdb ORDER BY muniproy";
    
    if ($result=mysqli_query($conexion,$sql))
      {
      // Fetch one and one row
      while ($row=mysqli_fetch_row($result))
        {
            echo "Cosa: ".$row[0];
        }
      // Free result set
      mysqli_free_result($result);
    }
    
    mysqli_close($conexion);
    ?>
