<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .resaltar {
        color: #f00;
        font-weight: bold;
    }
    </style>
</head>

<body>
    <?php

        $nombre = "Cristian";

        echo "<p class='resaltar'>Esto es un párrafo</p>";

        // De esta manera con la \ escapamos las comillas para escribir de una forma distinta a la de arriba
        echo "<p class=\"resaltar\">Esto es un párrafo</p>";

        echo "Hola $nombre";

        echo "<br>";

        // Compara strings tenienendo en cuenta mayusculas y minusculas, si los valores coinciden retorna 0, si no coincide retorna 1 o true
        echo strcmp($nombre, "CRISTIAN");

        echo "<br>";

        // Compara strings sin tener en cuenta mayusculas o minusculas, si los valores coinciden retorna 0, si no coincide retorna 1 o true
        echo strcasecmp($nombre, "CRISTIAN");

        echo "<br>";

        //Ejemplo practico
        if(!strcasecmp($nombre, "CRISTIAN")){
            echo "Coinciden";
        }else {
            echo "No coinciden";
        }
    ?>
</body>

</html>