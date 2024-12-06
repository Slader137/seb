<?php 

include("conexion.php");

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM carrito WHERE id_producto = $id";
    $result = mysqli_query($conn, $query);

    header("Location: carrito.php");
}
?>
