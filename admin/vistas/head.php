<?php
$actualURL = $_SERVER['PHP_SELF'];
$arr = explode('/',trim($actualURL));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="../home.php">Logitipo del sitio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul id="navlist" class="navbar-nav mr-auto">
                <li id="home"class="nav-item active">
                    <a class="nav-link" href="../home.php">Home <span class="sr-only">(current)</span> </a>
                </li>
                <li id="user" class="nav-item">
                    <a class="nav-link" href="usuario.php">Usuarios <span class="sr-only">(current)</span> </a>
                </li>
                <li id="caracteristica" class="nav-item">
                    <a class="nav-link" href="caracteristicas.php">Caracteristicas</a>
                </li>
                <li id="pelicula" class="nav-item">
                    <a class="nav-link" href="peliculas.php">Peliculas</a>
                </li>
                <li id="genero" class="nav-item">
                    <a class="nav-link" href="genero.php">Genero</a>
                </li>
                <li id="about" class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li id="logout" class="nav-item">
                    <a class="nav-link" href="../../index.php"> Cerrar sesion </a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <!--<input class="form-control mr-sm-2" type="text" placeholder="Search">-->
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Administrador</button>
            </form>
        </div>
    </nav>

    <div class="centered">
        <h1 class="badge badge-primary col-md-1"><?php echo $page = end($arr); ?></h1>
    </div>