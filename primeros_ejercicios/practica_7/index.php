<!-- 
    7. Calculatrón
    Declare 2 variables, después produzca la suma, resta, multiplicación, división, resto y muestre la salida de aplicar el operador ++ y --.
    documentación de print_r y get_defined_vars.
    NOTA: ¿Qué variables hemos definido? print_r(get_defined_vars());
 -->

 <!DOCTYPE html>
 <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 7</title>
    </head>
    <body>
        <?php

            $number_1 = mt_rand(1, 10);
            $number_2 = mt_rand(1, 10);

            function sum() {
                global $number_1;
                global $number_2;
                return $number_1 + $number_2;
            }

            $sum_result = sum();

            function subtraction() {
                global $number_1;
                global $number_2;
                return $number_1 - $number_2;
            }

            $subtraction_result = subtraction();

            function multiplication() {
                global $number_1;
                global $number_2;
                return $number_1 * $number_2;
            }

            $multiplication_result = multiplication();

            function division() {
                global $number_1;
                global $number_2;
                return $number_1 / $number_2;
            }

            $division_result = division();

            function rest() {
                global $number_1;
                global $number_2;
                return $number_1 % $number_2;
            }

            $rest_result = rest();

            function increment() {
                global $number_1;
                $number_3 = $number_1;
                return ++$number_3;
            }

            function decrement() {
                global $number_2;
                $number_4 = $number_2;
                return --$number_4;
            }
           
        ?>
        <h1>Ejercicio 7. Calculatrón</h1>
        <p><?php echo "Hola, soy Calculatrón. el resultado de la suma de " . $number_1 . " + " . $number_2 . " es igual a " . sum() . ", el resultado de la resta de " . $number_1 . " - " . $number_2 . " es igual a " . subtraction() . ", el resultado de la multiplicación de " . $number_1 . " * " . $number_2 . " es igual a " . multiplication() . ", el resultado de la división de " . $number_1 . " / " . $number_2 . " es igual a " . number_format(division(), 2) . ", y el resto de " . $number_1 . " / " . $number_2 . " es igual a " . rest() . ". Ahora estoy incrementando el primer número de " . $number_1 . " a " . increment() . " y el segundo número lo estoy decrementando de " . $number_2 . " a " . decrement() . "."; ?></p>
    </body>
 </html>