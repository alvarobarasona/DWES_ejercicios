<!-- 
Crea 5 variables con colores aleatorios.
Muestra 5 div que ocupen toda la pantalla.
Utiliza la cebcera meta refresh para que la página cambia cada segundo.
 -->
 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv = "refresh" content = "1">
        <style>
            body {
                margin: 0;
                height: 1024px;
                width: 1920px;
                display: flex;
            }
        </style>
        <title>Ejercicio 5</title>
    </head>
    <body>
        <?php
            function generate_array_of_random_strings() {
                $array = [];
                $array_dimension = 5;
                $number_dimension = 3;
                for ($i=0; $i < $array_dimension; $i++) {
                    $random_string_number = "#";
                    for ($n=0; $n < $number_dimension; $n++) { 
                        $random_string_number .= dechex(mt_rand(50, 200));
                    }
                    $array[$i] = $random_string_number;
                }
                return $array;
            }

            function create_divs() {
                $array = generate_array_of_random_strings();
                $array_dimension = 5;
                for ($i=0; $i < $array_dimension; $i++) { 
                    echo "<div id = 'div$i' style = 'height: 100%; width: 20%; background-color: $array[$i];'></div>";
                }
            }
        ?>
        <?php create_divs() ?>
    </body>
</html>