<?php
/**
 * Create Sistem the biblioteca
 * User: Brayan Ramos
 * Date: 21/04/2023
 * Time: 10.25 a.m
 * 
 * **/
include('config.php');

$servidor = new mysqli(DB_SERVIDOR,DB_USUARIO,DB_PASSWORD,DB_SISTEM);

if($servidor->connect_errno){
  echo("<script>alert('No se pudo establecer la conección')</script>");
  exit();
}
//echo("<script>alert('Coneccion exitosa')</script>");


?>