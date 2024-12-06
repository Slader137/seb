<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>El Buen Comer</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

        
        <?php include('cabecera.php');
              include("conexion.php");   ?>

<div class="categoria">
    <form method="POST" action="">
        <label for="categoria">Filtrar por categoría:</label>
        <select name="categoria">
            <option value="entradas">Entradas</option>
            <option value="sopas">Sopas</option>
            <option value="ensaladas">Ensaladas</option>
            <option value="platosfuertes">Platos Fuertes</option>
            <option value="especialidades">Especialidades</option>
            <option value="postres">Postres</option>
            <option value="bebidas">Bebidas</option>
          
        </select>
        <input type="submit" name="filter" value="🔍︎">
    </form>
</div>
<div class="menu">
    <?php
    if (isset($_POST['filter'])) { // filtro por categoria
        $categoria = $_POST['categoria'];

       
        $query = "SELECT * FROM producto WHERE categoria = '$categoria'";
        $resultado = mysqli_query($conn, $query);

        while ($producto = mysqli_fetch_array($resultado)) { ?>
            <div class="comidas">
            <h4>Categoria:<?php echo $producto['categoria'] ?></h4>
                <h1><?php echo $producto['nombre'] ?></h1>
               
                <h3>Descripcion:<?php echo $producto['descripcion'] ?></h3>
                <h2>$<?php echo $producto['precio'] ?></h2>
                <form method="GET" action="agregar_carrito.php">
                <a href="agregar_carrito.php?id=<?php echo $producto['id_producto'] ?>">agregar al carrito</a>
                
        </form>
        
            </div>
        
        <?php }
    }
    ?>
        <script src="funciones.js"></script>
        </div>
        <br>
        <a href="carrito.php">Carrito</a>
            </div>
        <div class="contenedor">
            <h2>Déjanos tu comentario</h2>
            <textarea id="cajadecomentarios" placeholder="Escribe tu comentario aquí"></textarea>
            <button onclick="agregarComentario()" class="boton-de-comentarios">Agregar Comentario</button>
            <button onclick="eliminarComentario()" class="boton-de-comentarios">Eliminar Comentario</button>
        
            <h3>Los clientes satisfechos dicen...</h3>
          <div id="comentarios"><h2></h2></div>
            </div>
<?php include("pie.php");?>


        
    </div>


    </div>



    <script src="funciones.js"></script>

    </div>
</body>

</html>
<?php ("cerrar_conexion");?>