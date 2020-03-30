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
    <!-- FORMULARIO -->
        <form action="validate.php" method="POST">
            <fieldset>
                <legend>Iniciar sesion</legend>
                <div class=" form-group row ">
                    <label for="staticEmail " class="col-sm-2 col-form-label ">Email</label>
                    <div class="col-sm-10 ">
                        <input type="text " readonly=" " class="form-control-plaintext " id="staticEmail " value="correo@ejemplo.com ">
                    </div>
                </div>
                <div class="form-group ">
                    <label for="exampleInputEmail1 ">Correo electronico</label>
                    <input type="email " class="form-control " id="exampleInputEmail1 " aria-describedby="emailHelp " placeholder="Enter email " name="email">
                    <small id="emailHelp " class="form-text text-muted ">No compartiremos tu email con nadie.</small>
                </div>
                <div class="form-group ">
                    <label for="exampleInputPassword1 ">Contrasena</label>
                    <input type="password" class="form-control " id="exampleInputPassword1 " placeholder="Password " name="pwd">
                </div>
                <button type="submit " class="btn btn-danger ">Iniciar sesion</button>
            </fieldset>
        </form>
    </div>
</body>
</html>