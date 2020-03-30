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
    <div class="container" style="margin-left: 20px; margin-top: 20px;">
        <form action="changePass.php" method="POST">
            <fieldset>
                <legend>Recuperar Contrasena</legend>
                <div class="form-group ">
                    <label for="exampleInputEmail1 ">Correo electronico</label>
                    <input type="email " class="form-control " id="exampleInputEmail1 " aria-describedby="emailHelp " placeholder="Enter email " name="emailRec">
                    <small id="emailHelp " class="form-text text-muted ">No compartiremos tu email con nadie.</small>
                </div>
                <button type="submit " class="btn btn-danger ">Recuperar contrasena</button>
            </fieldset>
        </form>
    </div>
</body>
</html>