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
        // include: va a marcar el error pero va a seguir ejecutando el programa 
        // require: va a marcar el error y detener la ejecucion del programa
        include ("proporciona_datos.php");
      
        echo "Este es el primer mensaje <br>";

        dameDatos();
        
        echo "Este es el segundo mensaje <br>";

    ?>
</body>

</html>