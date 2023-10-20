<!-- 
Mira la documentación de include
Crea un página solo con información de los ciclos: smr, daw, dam, asir.
Por cada ciclo: nombre, descripción y enlace
Crea una página que muestre los ciclos en un ul-li y un enlace al detalle.
 -->

 <?php
    include(data.php);
 ?>

 <!DOCTYPE html>
 <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 3</title>
    </head>
    <body>
        <ul>
            <?php
                foreach($ciclos as $ciclo) {
                    echo "<li>${ciclo['nombre']}: <a href = '${ciclo['enlace']}'>${ciclo['descripcion']}</a></li>\n";
                }
            ?>
        </ul>
    </body>
 </html>