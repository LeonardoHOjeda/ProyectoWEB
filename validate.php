<?php
session_start(); //Siempre debe de ser invocada en todos los recursos que van a utilizar sesiones.

# $_SESSION[]= //Variable de sesion $_SESSION[nombre descriptivo]=valor; --> Esto se guardara en la computadora, en el servidor

include "herramientas.php";
$superAdmin=array("admin","control");

if(in_array($_REQUEST['email'],$superAdmin)){
  if($_REQUEST['pwd']=="FGT055"){
    $_SESSION['isAdmin']=true;
    header("location: admin/home.php");
  } else {
    header("location: index.php?E=35");
  }
} else {
  $row = $objeBD->saca_tupla("SELECT * FROM usuario WHERE email='".$_POST['email']."' and clave = password('".$_POST['pwd']."')");
  //var_dump($objeBD->saca_tupla("SELECT * FROM usuario WHERE email='".$_POST['email']."' and clave = password('".$_POST['pwd']."')"));
  //echo "Resultado: ".$objeBD->numRegister;
  if($row==1){
    $_SESSION['nombre']=$row->nombre." ".$row->apellidos;
    $_SESSION['email']=$row->email;
    $_SESSION['id']=$row->id;
    header("location: user/home.php");
  } else {
    //echo "SELECT * FROM usuario WHERE email='".$_POST['email']."' and clave = password('".$_POST['pwd']."');";
    header ("location: index.php?E=1");
  }
}
//$conn = mysqli_connect("localhost","userTEST","1234","test");

/*if($conn){
  $bloque = mysqli_query($conn,"SELECT * FROM usuario WHERE email='".$_POST['email']."' and clave = password('".$_POST['pwd']."');");
  $num_tuplas = mysqli_num_rows($bloque);
  if($num_tuplas){
    header("location: home.php");
  } else {
    //echo "SELECT * FROM usuario WHERE email='".$_POST['email']."' and clave = password('".$_POST['pwd']."');";
    header ("location: index.php?E=1");
  }
  mysqli_close($conn);
}*/
?>