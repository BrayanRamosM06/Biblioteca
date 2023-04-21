<?php
/**
 * Create Sistem the biblioteca
 * User: Brayan Ramos
 * Date: 21/04/2023
 * Time: 10.25 a.m
 * 
 * **/
include('config.php');

$servidor = "mysql:dbname = ".DB_SISTEM."; host=".DB_SERVIDOR;


try{
    $pdo = new PDO($servidor, DB_USUARIO, DB_PASSWORD);
    echo "<script>alert('Conexion exitosa a la base de datos');</script>";

}catch(PDOException $e){
  echo "No se pudo hacer la conexión a labase de datos".$e;  
}

?>