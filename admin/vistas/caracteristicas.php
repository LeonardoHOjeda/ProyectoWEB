<?php
  include "head.php";
  include "../class/classUsuario.php";

  echo $objeUsuario -> accion("caracter");
  //echo $objeBD->despliegatabla("SELECT * FROM USUARIO",array("add","delete", "edit"));

?>