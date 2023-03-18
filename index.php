<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Ejercicio</title>
</head>

<body>
    <h1>Loop con texto</h1>
    <div class="row">
        <div class="col-6 align-items-center">
            <form method="post" class="align-items-center">
                <label class="form-label" for="mensaje">Inserte Texto:</label>
                <input class="form-control mb-3" id="mensaje" type="text" name="mensaje">
                <label class="form-label" for="cantidad-veces">Cantidad de Veces:</label>
                <input class="form-control mb-3" type="number" id="cantidad-veces" name="cantidad-veces">
                <button class="btn btn-primary" type="submit" name="datos">probar!</button>
            </form>
        </div>
        <div class="col-6">
            <ol>
                <?php

                if (isset($_POST['datos'])) {
                    $mensaje = $_POST['mensaje'];
                    $num = $_POST['cantidad-veces'];
                    $a = 1;
                    while ($a <= $num) {
                        echo "<li> $mensaje </li> ";
                        $a++;
                    }
                }

                ?>
            </ol>
        </div>
    </div>


</body>

</html>