<?php 

include("conexion.php");

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM producto WHERE id_producto = $id";
    $result = mysqli_query($conn, $query);

    header("Location: admin.php");
}
?>
