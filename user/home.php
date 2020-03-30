<?php
session_start();

include "head.php";
echo "Bienvenido: ".$_SESSION['nombre'];
?>