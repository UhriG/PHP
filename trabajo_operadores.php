<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    h1 {
        text-align: center;
    }

    table {
        background-color: #FFC;
        padding: 5px;
        border: #666 5px solid;
    }

    .no-validado {
        font-size: 18px;
        color: #f00;
        font-weight: bold;
    }

    .validado {
        font-size: 18px;
        color: #0c3;
        font-weight: bold;
    }
    </style>
</head>

<body>
    <h1>USANDO OPERADORES DE COMPARACIÓN</h1>
    <form action="validacion.php" method="post" name="datos_usuario" id="datos_usuario">
        <table width="15%" align="center">
            <tr>
                <td>
                    Nombre:</td>
                <td><label for="nombre_usuario"></label>
                    <input type="text" name="nombre_usuario" id="nombre_usuario">
                </td>
            </tr>
            <tr>
                <td>Edad:</td>
                <td>
                    <label for="edad_usuario"></label>
                    <input type="text" name="edad_usuario" id="edad_usuario">
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Enviar" id="enviando" name="enviando">
                </td>
            </tr>

        </table>
    </form>



</body>

</html>