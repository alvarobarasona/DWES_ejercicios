<!-- 
Escriba tu nombre, posición en la empresa, apodo, y la hora.
Modifique las clases CSS dependiendo si el segundo de visita es par o impar 
-->

<?php
    $name = "Alvaro<br>";
    $aka = "Varo<br>";
    $profesion = "Programador<br>";
    $actualDate = date('d/m/Y H:m:s');
    $second = date('s');
    $color = $second % 2 == 0 ? "red" : "green";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                background-color: <?php echo $color ?>
            }
        </style>
        <title>Ejercicio 1</title>
    </head>
    <body>
        <?php echo $name ?>
        <?php echo $aka ?>
        <?php echo $profesion ?>
        <?php echo $actualDate ?>
    </body>
</html>