<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $genero = $_POST['genero'];
    echo " <br>$nombre </br>";
    echo " <br>$apellido </br>";
    echo " <br>$correo </br>";
    echo " <br>$genero </br>";
    ?>
    <br><a href="form.php" ><input type="button" value="Volver"></br>
</body>
</html>