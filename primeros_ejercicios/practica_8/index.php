<!-- 
    8. Imprima una pirámide de asteriscos, tamaño definido por una variable $n.
-->

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ejercicio 8</title>
    </head>
    <body>
        <?php
            function get_pyramid() {
                $min_number = 2;
                $max_number = 10;
                $pyramid_height = mt_rand($min_number, $max_number);
                $div_string = "<p>";
                for ($i=0; $i <= $pyramid_height; $i++) { 
                    for ($j=0; $j <= $pyramid_height - $i; $j++) {
                        $div_string .= "&nbsp;&nbsp;";
                    }
                    for ($k=0; $k <= 2 * $i; $k++) { 
                        $div_string .= "*";
                    }
                    $div_string .= "<br>";
                }
                $div_string .= "</p>";
                return $div_string;
            }
        ?>
        <div><?php echo get_pyramid(); ?></div>
    </body>
</html>