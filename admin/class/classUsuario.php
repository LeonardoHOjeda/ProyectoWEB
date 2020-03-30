<?php

if(!class_exists("dataBase")){
  include("../../herramientas.php");
}
  class Usuario extends dataBase
  {
    function accion($cual){
      $result = "";
      switch ($cual) {
        case "list":
          $result = $this->despliegaTabla("SELECT nombre, apellidos, email FROM usuario",array("add","delete","edit"),array("20%","60","25"));
          break;
        case "caracter":
          $result = $this->despliegaTabla("SELECT id_caracteristica, tipo FROM caracteristica",array("add","delete","edit"),array("5%","60%"));
          break;
        case "genero":
          $result = $this->despliegaTabla("SELECT id_genero, tipo FROM genero_pelicula",array("add","delete","edit"),array("5%","35%"));
          break;
        case "pelis":
          $result = $this->despliegaTabla("SELECT id_pelicula, nombre, gp.tipo FROM pelicula as p join genero_pelicula gp on gp.id_genero = p.id_genero",array("add","delete","edit"), array("5%","45%","35%"));
          break;
        default:
          # code...
          break;
      }
      return $result;
      
    }
  }
  
  $objeUsuario = new Usuario();
?>