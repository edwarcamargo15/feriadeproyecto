<?php

$server ='localhost';
$username='root';
$clave='';
$database='feria';

try{
	$conn = new PDO("mysql:host=$server; dbname=$database;",$username,$clave);

}catch(PDOException $e){
	die('Conexion fallida: '.$e->getMessage());
}


?>