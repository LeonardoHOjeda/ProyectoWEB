<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <form action="campos.php" method=POST>

    <div class="form-group col-md-4">
      <label for="exampleSelect1">Campos</label>
      <select name="campos" class="form-control" id="exampleSelect1">
        <option value="email">email</option>
        <option value="nombre">nombre</option>
      </select>
    </div>

    <div class="form-group col-md-2">
      <label for="exampleSelect1">Tabla</label>
      <select name="table" class="form-control" id="exampleSelect1">
        <option value="Tabla">Tabla</option>
        <option value="usuario">usuario</option>
        <option value="tipo_usuario">tipo_usuario</option>
      </select>
    </div>

    <div class="form-group col-md-2">
      <label for="exampleSelect1">Color</label>
      <select name="colors" class="form-control" id="exampleSelect1">
        <option value="Color">Color</option>
        <option value="table-active">table-active</option>
        <option value="Default">Default</option>
        <option value="table-primary">table-primary</option>
        <option value="table-secondary">table-secondary</option>
        <option value="table-success">table-success</option>
        <option value="table-danger">table-danger</option>
        <option value="table-warning">table-warning</option>
        <option value="table-info">table-info</option>
        <option value="table-light">table-light</option>
        <option value="table-dark">table-dark</option>
      </select>
    </div>

    <!--
    <select name="Camposs" class="btn btn-info">
      <option value="1">Campos</option>
      <option value="2">Email</option>
      <option value="3">Nombre</option>
    </select>
    <select id="tablas" name="Tablas" class="btn btn-info">
      <option value="Tabla">Tabla</option>
      <option value="usuario">usuario</option>
      <option value="tipo_usuario">tipo_usuario</option>
    </select>
    <select id="colores" name="Color" class="btn btn-info">
      <option value="Color">Color</option>
      <option value="Email">table-active</option>
      <option value="Email">Default</option>
      <option value="table-primary">table-primary</option>
      <option value="table-secondary">table-secondary</option>
      <option value="table-success">table-success</option>
      <option value="table-danger">table-danger</option>
      <option value="table-warning">table-warning</option>
      <option value="table-info">table-info</option>
      <option value="table-light">table-light</option>
      <option value="table-dark">table-dark</option>
    </select>

    -->
    <div class="contenedor">
      <label>
        <img src="img/trash.png" alt="">
        <input type="checkbox" value="delete" name="delete"> Delete
      </label>
      <label>
        <img src="img/add.png" alt="">
        <input type="checkbox" value="add" name="add">Add
      </label>
      <label class="checkbox-inline">
        <img src="img/edit.png" alt="">
        <input type="checkbox" value="edit" name="edit">Edit
      </label>
    </div>
    <button type="submit" class="btn btn-danger">Mostrar</button>
  </form>

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
    echo $objeBD->despliegaTabla($query,$iconos,$_POST['colors']);

  }
?>
</body>

</html>