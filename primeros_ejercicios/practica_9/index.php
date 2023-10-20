<!-- 
9. Imprima una pirámide de colores
Utiliza css para definir elementos que tengan ancho fijo y un asterisco en el centro.
Utiliza la función de colores aleatorios.
 -->

 <!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="refresh" content="1">
        <title>Ejercicio 9</title>
    </head>
    <body>
        <?php
            function get_hexadecimal_string() {
                $hexa_string = "#";
                $iterationLength = 3;
                $min_random_number = 20;
                $max_random_number = 240;
                for ($i = 0; $i < $iterationLength; $i++) { 
                    $hexa_string .= dechex(mt_rand($min_random_number, $max_random_number));
                }
                return $hexa_string;
            }

            function generate_div_pyramid() {
                $div_string = "";
                $min_height = 2;
                $max_height = 10;
                $pyramid_height = mt_rand($min_height, $max_height);
                for ($i = 0; $i <= $pyramid_height; $i++) { 
                    for ($j = 0; $j <= $pyramid_height - $i; $j++) { 
                        $div_string .= "<span>&nbsp;&nbsp;</span>";
                    }
                    for ($k = 0; $k <= 2 * $i; $k++) { 
                        $div_string .= "<span style = 'background-color:" . get_hexadecimal_string() . "; height: 20px; width: 20px;'>*</span>";
                    }
                    $div_string .= "<br>";
                }
                return $div_string;
            }
        ?>
        <div><?php echo generate_div_pyramid() ?></div>
    </body>
</html>