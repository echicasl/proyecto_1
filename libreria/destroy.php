<?php
session_start();
unset($_SESSION['autorizado']);

session_destroy();

header('Location: ../login.php');


?>