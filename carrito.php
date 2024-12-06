<link rel="stylesheet" href="styles.css">

<?php include('conexion.php') ?>

<?php include('cabecera.php'); ?>

<div class="categoria">
    <a href="">comprar</a>
</div>
<div class="comidas">
    <?php
        $query = "SELECT * FROM carrito c INNER JOIN producto p ON c.id_producto = p.id_producto";
        $result = mysqli_query($conn, $query);

        while($producto = mysqli_fetch_array($result)){ ?>
            <div class="product-card-admin">
                <h1><?php echo $producto['nombre'] ?></h1>
                <h4><?php echo $producto['categoria'] ?></h4>
                <h3><?php echo $producto['descripcion'] ?></h3>
                <h2><?php echo $producto['precio'] ?></h2>
                <a href="eliminar_carrito.php? id=<?php echo $producto['id_producto'] ?>">eliminar</a>
            </div>
        <?php } ?>
    
</div>


<?php include('pie.php'); ?>