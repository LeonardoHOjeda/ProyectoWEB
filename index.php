<?php

session_start();
#session_unset('isAdmin'); //Sigue existiendo pero limpia el valor --> Si no se pone nada entre parentesis, borra todas las sesiones
session_destroy(); //Eliminarla fisicamente de mi archivo de sesion

include "head.php";
include "herramientas.php";


$valor = isset($_GET['E']);
if(isset($_GET['E'])){
  switch($_GET['E']){
    case 1:
      echo "<h2>Contrasena incorrecta </h2>";
    break;
    case 7:
      echo "<h2> Registro exitoso </h2>";
    break;
    case 10:
      echo "<h2> El correo ya existe </h2>";
    break;
    case 15:
      echo "<h2> Revisa tu correo con la nueva contrasena </h2>";
    break;
    case 25:
      echo "<h2> Ese correo no existe </h2>";
    break;
  }
}

echo $objeBD->despliegatabla("SELECT * FROM USUARIO",array("add","delete", "edit"));

    ?>