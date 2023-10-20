<!-- 
Elige un poema, haiku o frase.
Elige una imagen.
Selecciona autor y fecha.
Cambia la fuente de la página. Web Fonts
Mete la información en variables y muéstrala, utiliza negrita para la fecha y cursiva para el poema-frase.
 -->

<?php
    $poem = "En tanto que de rosa y azucena<br>
        se muestra la color en vuestro gesto,<br>
        y que vuestro mirar ardiente, honesto,<br>
        enciende el corazón y lo refrena;<br>
        <br>
        y en tanto que el cabello, que en la vena<br>
        del oro se escogió, con vuelo presto,<br>
        por el hermoso cuello blanco, enhiesto,<br>
        el viento mueve, esparce y desordena;<br>
        <br>
        coged de vuestra alegre primavera<br>
        el dulce fruto, antes que el tiempo airado<br>
        cubra de nieve la hermosa cumbre.<br>
        <br>
        Marchitará la rosa el viento helado,<br>
        todo lo mudará la edad ligera,<br>
        por no hacer mudanza en su costumbre.<br><br>";
    $image = "https://upload.wikimedia.org/wikipedia/commons/0/0d/Retrato_de_hombre_con_la_cruz_de_caballero_de_Alc%C3%A1ntara.jpg<br>";
    $author = "Garcilaso de la Vega<br>";
    $poemDate = "26 de febrero de 1534<br>";
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&family=Pacifico&family=Skranji&display=swap');
            #poem {
                font-family: 'Pacifico', cursive;
            }
            #poemDate {
                font-family: 'Pacifico';
                font-weight: bold;
            }
            p {
                color: white
            }
            body {
                background-color: black;
            }
        </style>
        <title>Ejercicio 2</title>
    </head>
    <body>
        <p id = "poem"><?php echo $poem ?></p>
        <img src = "<?php echo $image ?>">
        <p><?php echo $author ?></p>
        <p id = "poemDate"><?php echo $poemDate ?></p>
    </body>
</html>