<?php include('conexion.php') ?>

<?php include('cabecera.php'); ?>
<link rel="stylesheet" href="styles.css">
<div class="navbar">
    <a href="agregarproducto.php">agregar producto</a>
</div>

<div class="page-content">


    <?php
        $query = "SELECT * FROM producto";
        $resultado = mysqli_query($conn, $query);

        while($producto = mysqli_fetch_array($resultado)){ ?>
            <div class="product-card-admin">
                <h1><?php echo $producto['nombre'] ?></h1>
                <h4><?php echo $producto['categoria'] ?></h4>
                <h3><?php echo $producto['descripcion'] ?></h3>
                <h2><?php echo $producto['precio'] ?></h2>
                <a href="delete-product.php?id=<?php echo $producto['id_producto'] ?>">eliminar</a>
            </div>
        <?php } ?>
    
</div>


<?php include('pie.php'); ?>