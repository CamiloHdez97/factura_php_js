<?php

    $server="localhost";//127.0.0.1
    $db="facturacion";
    $user="campus";
    $passwd="campus2023";
    try{
        $conexion = new PDO("mysql:host=$server;dbname=$db",$user,$passwd);
    }
    catch(Exception $ex){
        echo $ex->getMessage();
    }
    
?>

CREATE TABLE persona
(
	id int AUTO_INCREMENT, 
	cc CHAR(10),
	nombre VARCHAR(160),
	index(cc)
);

create table factura(
  codigo integer unsigned auto_increment,
  nombre varchar(40) not null,
  valorunitario varchar(30),
  cantidad varchar (20),
  total decimal(5,2) unsigned,
  fecha DATE
  fk_cliente 
 );