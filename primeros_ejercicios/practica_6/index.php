<!-- 
    6. Área y perímetro:
    Crea las variables $nombre, $r, $pi.
    Al visitar la página establecerá el valor de las variables, escribirá un mensaje de bienvenida y escribirá el área y el perímetro de la circunferencia.
    NOTA: Utiliza un fichero css para dar estilo a cada parte.
-->

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .circle {
                <?php generate_style() ?>
            }
        </style>
        <title>Ejercicio 6</title>
    </head>
    <body>
        <?php
                
            $name = "Alvaro";

            function welcome() {
                global $name;
                echo "Bienvenido al Calculador de círculos, " . $name;
            }

            $randomNumber = mt_rand(1, 5);
            $radio = $randomNumber;
            $diameter = $radio * 2;

            function calculate_diameter() {
                global $radio;
                $diameter = $radio * 2;
                return $diameter;
            }

            function generate_style() {
                echo "height: " . calculate_diameter() . "cm; width: " . calculate_diameter() . "cm; background-color: green; border-radius: 50%;";
            }


            function get_area() {
                global $radio;
                $area = M_PI * pow($radio, 2);
                return $area;
            }

            function get_perimeter() {
                global $radio;
                $perimeter = 2 * M_PI * $radio;
                return $perimeter;
            }
        ?>
        <h1>Calculador de círculos</h1>
        <div>
            <h2><?php welcome() ?></h2>
            <p><?php echo "El área del círculo es de " . number_format(get_area(), 2) . " cm"; ?></p>
            <p><?php echo "El perímetro del círculo es de " . number_format(get_perimeter(), 2) . " cm"; ?></p>
            <p><?php echo "El radio del círculo es de " . $radio . " cm"; ?></p>
            <p><?php echo "El diámetro del círculo es de " . number_format(calculate_diameter(), 2) . " cm"; ?></p>
            <div style = "<?php generate_style(); ?>"></div>
        </div>
    </body>
</html>