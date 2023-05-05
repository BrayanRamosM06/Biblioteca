<?php
//include('../app/config/config.php');
include('../app/config/conexion.php');


$correo = $_POST['correo'];
$pass = $_POST['contrasella'];

$user="";
$password="";


$consulta = "SELECT email, pass FROM tb_users where email = '$correo'";

$resultado = $servidor->query($consulta);
$renglones = $resultado->num_rows;



if ($renglones > 0){
    while ($result = $resultado->fetch_assoc()) {
        $user = $result['email'];
        $password = $result['pass'];
    }
}
if($user != $correo){
    echo("<script>alert('El correo incorrecto')</script>");

}elseif($password != $pass) {
     echo("<script>alert('La contraseña es incorrecto')</script>");
}else{

    }



?>