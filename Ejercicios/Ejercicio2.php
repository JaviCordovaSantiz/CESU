<?php

// para almacenar o guardar el valor que se va a mandar a llamar 
if($_POST){
// Recibir informacion de html metodo post
    $nombre = $_POST['txtNombre'];

    echo "Hola ".$nombre;
}
//print("Hola").$nombre;


?>

<!DOCTYPE html>
<htmal lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UACompatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>

    

    <form action="ejercicio2.php" method="post">
        nombre: 

        <input type="text" name="txtNombre" id="">
        <input type="submit" value="Enviar">


    </form>

</body>
</html>  