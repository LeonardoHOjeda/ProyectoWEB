<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<?php
    include "head.php";
    ?>
    <!-- LOGIN -->
    <div class="container" style="margin-left: 20px; margin-top: 20px;">
        <form method="POST" action="register.php">
            <fieldset>
                <legend>Registrarse en el sitio</legend>
                <div class=" form-group row ">
                    <label for="staticEmail " class="col-sm-2 col-form-label ">Email</label>
                    <div class="col-sm-10 ">
                        <input type="text " readonly=" " class="form-control-plaintext " id="staticEmail " value="correo@ejemplo.com ">
                    </div>
                </div>
                <div class="form-group ">
                    <label for="exampleInputEmail1 ">Nombre</label>
                    <input type="text " class="form-control " id="exampleInputEmail1 " aria-describedby="emailHelp " placeholder="Nombre" name="nombre">
                </div>
                <div class="form-group ">
                    <label for="exampleInputEmail1 ">Apellidos</label>
                    <input type="text " class="form-control " id="exampleInputEmail1 " aria-describedby="emailHelp " placeholder="Apellidos" name="apellidos">
                </div>
                <div class="form-group ">
                    <label for="exampleInputEmail1 ">Correo electronico</label>
                    <input type="email " class="form-control " id="exampleInputEmail1 " aria-describedby="emailHelp " placeholder="Enter email " name="email">
                    <small id="emailHelp " class="form-text text-muted ">No compartiremos tu email con nadie.</small>
                </div>
                <button type="submit " class="btn btn-info">Registrarse</button>
            </fieldset>
        </form>
    </div>
</body>
</html>