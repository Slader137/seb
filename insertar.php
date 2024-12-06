<?php

include("conexion.php");

if (isset($_POST['registrar'])) {

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];


$query= "INSERT INTO trabajador(nombre,apellido,correo,contraseña)
        VALUES ('$nombre','$apellido','$correo','$contraseña')";
$result= mysqli_query($conn,$query);
}
?>


