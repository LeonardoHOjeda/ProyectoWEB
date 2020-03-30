<?php
include "head.php";

session_start();
if(isset($_SESSION['isAdmin']) && $_SESSION['isAdmin']){
  echo "Bienvenido administrador";
} else {
  header ("location: ../index.php?E=45");
}

?>