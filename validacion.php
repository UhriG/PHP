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
<?php
   if(isset($_POST['enviando'])){
       $usuario = $_POST['nombre_usuario'];
       $edad = $_POST['edad_usuario'];

       if($usuario == "Cristian" && $edad >= 18){
           echo "<p class='validado'>Bienvenido $usuario</p>";
       }else {
           echo "<p class='no-validado'>$usuario no tienes acceso</p>";
       }
    }
   
?>