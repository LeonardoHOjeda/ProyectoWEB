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
    <!-- Header -->
    <div>
        <h1> Calificaciones</h1>
        <p>Donec felis ex, tincidunt ac nulla in, tristique rhoncus neque. Maecenas ac quam vel lectus porttitor vulputate. Suspendisse auctor sapien at fermentum hendrerit. Fusce at magna in felis blandit dapibus sed vel tellus. Donec vitae congue diam,
            a condimennc fringilla, ut interdum urna efficitur. Donec imperdiet sit amet magna non dapibus. Aenean sollicitudin euismod nisl, non placerat enim. Mauris abus justo mollis vitae. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
            posuere cubilia Curae; Quisque lorem elit, ornare eget ullamcorper vel, varius eu mi. Aenean sit amet sodales turpis. Nulla facilisi. Curabitur cursus, orci ut euismod finibus, lorem ante pretium nisi, sit amet varius nisl turpis euismod risus.
            Nullam in turpis vel arcu gravida pharetra quis at ligula. Praesent facilisis quam ac ligula sollicitudin euismod. Sed vel fringilla sem, a ultricies quam.
        </p>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                N. Control
                            </th>
                            <th>
                                Evaluacion 1
                            </th>
                            <th>
                                Evaluacion 2
                            </th>
                            <th>
                                Evaluacion 3
                            </th>
                            <th>
                                Evaluacion 4
                            </th>
                            <th>
                                Promedio
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-success">
                            <td>
                                17053264
                            </td>
                            <td>
                                95
                            </td>
                            <td>
                                98
                            </td>
                            <td>
                                93
                            </td>
                            <td>
                                69
                            </td>
                            <td>
                                88.75
                            </td>
                        </tr>
                        <tr class="table-success">
                            <td>
                                16035895
                            </td>
                            <td>
                                93
                            </td>
                            <td>
                                72
                            </td>
                            <td>
                                78
                            </td>
                            <td>
                                94
                            </td>
                            <td>
                                82
                            </td>
                        </tr>
                        <tr class="table-success">
                            <td>
                                18035496
                            </td>
                            <td>
                                99
                            </td>
                            <td>
                                99
                            </td>
                            <td>
                                99
                            </td>
                            <td>
                                99
                            </td>
                            <td>
                                99
                            </td>
                        </tr>
                        <tr class="table-warning">
                            <td>
                                19054723
                            </td>
                            <td>
                                71
                            </td>
                            <td>
                                70
                            </td>
                            <td>
                                70
                            </td>
                            <td>
                                70
                            </td>
                            <td>
                                70
                            </td>
                        </tr>
                        <tr class="table-danger">
                            <td>
                                17035698
                            </td>
                            <td>
                                60
                            </td>
                            <td>
                                40
                            </td>
                            <td>
                                27
                            </td>
                            <td>
                                99
                            </td>
                            <td>
                                0
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
                <h2>Mejores promedios</h2>
                <ol>
                    <li class="list-item">
                        18035496
                    </li>
                    <li class="list-item">
                        17053264
                    </li>
                    <li class="list-item">
                        16035895
                    </li>
                </ol>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>

    <main class="contenedor seccion contenido-centrado">
        <form action="">
            <fieldset>
                <legend>Cualquier duda, favor de escribir sus problemas</legend>

                <label for=" ">Numero de Control</label>
                <input type="text " name=" " id=" " placeholder="Numero de control ">
                <br>
                <label for=" ">Mensaje: </label>
                <textarea id="mensaje "></textarea>
            </fieldset>
            <input type="submit " value="Mandar reclamo " class="btn btn-success">
        </form>
    </main>
    < </body>

</html>