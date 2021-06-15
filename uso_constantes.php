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
    // Definicion de una constante
    // Primero el nombre en mayusculas, segundo el valor
    define("AUTOR", "Cristian Uhrig");

    // Imprimimos la constante en pantalla
    echo "El autor es: ".AUTOR."<br><br>";
    
    // Algunas constantes predefinidas del lenguaje, ej:
    // __LINE__ n° de linea, en este caso va a dar 22
    echo "Constante __LINE__: ".__LINE__."<br>";
    // __FILE__ nos devuelve el nombre y ruta del fichero actual
    echo "Constante __FILE__: ".__FILE__."<br>";
    // __DIR__ nos devuelve el nombre del directorio del archivo
    echo "Constante __DIR__: ".__DIR__."<br>";
?>
</body>

</html>