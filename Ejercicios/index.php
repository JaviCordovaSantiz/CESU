<?php
       
       $dominio="localhost";
       $nombreusuario="root";
       $password ="123";
       $db="Encuestasdb";

  $conexion= new mysqli($dominio, $nombreusuario, $password, $db);
  if($conexion-> connect_error){
        die("Conexion fallida: ".$conexion->connect_error);
  }

  echo"Conexion exitosa.....";

  //Creacion de base de datos
/*
  $sql="CREATE DATABASE  EncuestasDB";
  if($conexion->query($sql)=== true){
    echo "Base de datos creado correctamente....";

  } else{
    die ("Error al crear la base de datos".$conexion->error);
  }
*/
 
//Creacion de tablas 

$sql="CREATE TABLE encuestas(
 id INT (11) AUTO_INCREMENT,
 titulo VARCHAR (30) NOT NULL,
 fecha Date NOT NULL,
 PRIMARY KEY(id)
)";

if($conexion->query($sql) === true){
  echo "La tabala se creo correcatmente....";
}else{
  die ("La tabla no se creo...".$conexion->error);
}
    

$sql="CREATE TABLE respuestas(
       id INT not null AUTO_INCREMENT, 
       texto VARCHAR (50) not null ,
       votos INT (5) not null ,
       idenc INT not null,
       PRIMARY KEY (id)

)";

if($conexion->query($sql) === true){
  echo "La segunda tabla se creo correctamente....";
} else{
  die("La segunda tabla no se pudo crear....".$conexion->error);
}


?>