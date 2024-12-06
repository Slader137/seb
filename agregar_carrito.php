<?php 

include("conexion.php");

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "INSERT INTO carrito(id_producto) VALUES ('$id')";
    $result = mysqli_query($conn, $query);

    header("Location: tienda.php");
}
?>