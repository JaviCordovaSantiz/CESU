<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="enc3.php" method="post">
  <table border="0">
<?php

  for($i=1;$i<=$respuestas;$i++){
?>
  <tr>
    <td>respuesta <?php echo $i; ?></td>
    <td><input name="p<?php echo $i;?>" type="text" size="50" maxlength="50"></td>
  </tr>
<?php } ?>
  </table>
    <input type="submit" name="Submit" value="Enviar"></p>
	<input name="titulo" type="hidden" value="<?php echo $titulo;?>">
	<input type="hidden" name="respuestas" value="<?php echo $respuestas;?>">
</form>
    


</body>
</html>