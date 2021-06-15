<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nombre = "Cristian";
    // include ("datos_otros.php");

    function getName(){
        // Con global indico que estoy accediendo a una variable global y no a una declarada dentro de la funcion
        global $nombre;

        // Las variables dentro de las funciones tienen un ambito local
        $nombre = "El nombre es ".$nombre;
        echo $nombre;
    }

        getName(); 

        echo "<br>".$nombre; // Imprime Cristian
    ?>
</body>

</html>