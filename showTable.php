<?php
  //include "herramientas.php";
  if(isset($_POST['table'])){
    include "herramientas.php";
    $query = "SELECT ".(($_POST['campos']>"")?$_POST['campos']:"*")." FROM ".$_POST['table'];
    //echo $query;
    //echo $_POST['color'];
    $iconos = array();

    if(isset($_POST['delete'])) 
      array_push($iconos,'delete');
    if(isset($_POST['edit'])) 
      array_push($iconos,'edit');
    if(isset($_POST['add'])) 
      array_push($iconos,'add');

    //var_dump($iconos);
    //echo $_POST['colors'];
    
    //echo "<div>".$objeBD->despliegaTabla($query,$iconos,$_POST['colors']);."</div>";

  }
?>

<div>
<?php echo $objeBD->despliegaTabla($query,$iconos,$_POST['colors']); ?>
</div>