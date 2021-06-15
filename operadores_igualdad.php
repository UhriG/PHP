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
    $variable1 = 8;
    $variable2 = "8";
    $variable3 = "Cristian";

    // Compara valor
    if($variable1 == $variable2){
        echo "Mismo valor, distinto tipo<br/>";
    }else{
        echo "No son iguales<br/>";
    }

    // Compara valor y tipo de dato
    if($variable1 === $variable2){
        echo "Mismo valor, mismo tipo<br/>";
    }else{
        echo "No son iguales<br/>";
    }

    // Compara desigualdad
    if($variable3 != $variable1){
        echo "Son diferentes";
    }else{
        echo "Son iguales";
    }
?>

</body>

</html>