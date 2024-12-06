<?php 

include("conexion.php");

if (isset($_POST['add'])){
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];

    $query = "INSERT INTO producto(categoria, nombre, descripcion, precio) VALUES ('$categoria', '$nombre', '$descripcion', '$precio')";

    $resultado = mysqli_query($conn, $query);

    header("Location: admin.php");
}

?>
