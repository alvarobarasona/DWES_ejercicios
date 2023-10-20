<!-- 
Mira la documentación de la función printf
investiga cómo generar un color HTML en hexadecimal.
Crea un página que obtenga todos los colores del verde en 10 tonos.
 -->

<?php
    // Método que devuelve el array relleno
    function fillArray() {
        // Principio del número hexadecimal que representa el color rojo
        $startOfString = "#00";
        // Final del número  hexadecimal que representa el color azul
        $endOfString = "00";
        // Número entero que representa el color verde
        $greenColorInt = 128;
        // Dimensión del array que guarda los strings en hexadecimal de cada color
        $arrayDimension = 10;
        // Diferencia que se irá sumando en cada iteración del array al número entero verde
        $difference = 10;
        //Array vacío que irá almacenando cada string en hexadecimal
        $arrayOfColors = [];
        // En esta variable se almacenará el color verde en hexadecimal y parseado a string
        $greenColorHexa;
        for ($i = 0; $i < $arrayDimension; $i++) { 
            // Convierto el color verde en número entero a hexadecimal
            $greenColorHexa = dechex($greenColorInt);
            // Guardo en el array la encadenación de los diferentes colores
            $arrayOfColors[$i] = $startOfString . $greenColorHexa . $endOfString;
            // Le sumo la diferencia al número entero
            $greenColorInt += $difference;
        }
        return $arrayOfColors;
    }
    // Crea las 10 etiquetas div con sus respectivos atributos
    function generate_div() {
        $array = fillArray();
        for ($i=0; $i < 10; $i++) { 
            echo "<div id = 'div$i' style = 'background-color: $array[$i]; height: 20px; width: 20px; margin: 10px;'></div>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 5</title>
    </head>
    <body>
        <?php generate_div() ?>
    </body>
</html>