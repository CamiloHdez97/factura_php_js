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

<!-- 
CREATE TABLE `persona` (
	`cc` INT(10) NOT NULL UNIQUE,
	`nombre` VARCHAR(40) NOT NULL,
	`apellido` VARCHAR(40) NOT NULL,
	PRIMARY KEY (`cc`)
);

CREATE TABLE `factura` (
	`id` INT NOT NULL AUTO_INCREMENT UNIQUE,
	`producto` VARCHAR(60) NOT NULL UNIQUE,
	`valor_unitario` FLOAT NOT NULL,
	`cantidad` INT NOT NULL,
	`iva` FLOAT NOT NULL,
	`total` FLOAT NOT NULL,
	`fecha` DATE NOT NULL,
	`cc` INT NOT NULL,
	PRIMARY KEY (`id`),
	FOREIGN KEY (`cc`) REFERENCES `persona`(`cc`)
);

DELIMITER //
CREATE TRIGGER before_insert_factura
CREATE INSERT ON factura
FOR EACH ROW
BEGIN 
	SET NEW.fecha = CURDATE();
END//
DELIMITER; 
-->