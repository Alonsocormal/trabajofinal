<?php

$usuario=$_POST['Usuario'];
$contraseña=$_POST['Contraseña'];
session_start();
$_SESSION['Usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","iconic");

$consulta="SELECT*FROM administrador where Usuario='$usuario' and Contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:clientes.php");

}else{
    ?>
    <?php
    include("login.php");
    ?>
    <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
