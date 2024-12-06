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
<?php ("cerrar_conexion");?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ElLocoShop™</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="navegacion">
        <h1>Mates</h1>

        <hr>
        <nav>
            <ul>
                <button id="botonTienda"><a href="index.html">Inicio</a></button>          <!--botones que redirigen a diestintos sitios-->
                <button id="botonTienda"><a href="tienda.html">Más productos</a></button>
                <button id="botonTienda"><a href="https://youtu.be/dQw4w9WgXcQ?si=aK1fRYqD5zJq_6If">Contacto</a></button>
            </ul>
        </nav>
        <hr>
        <div class="contenedor" id="productos">  <!--productos enumerados con imagen, precio y boton de compra-->
            <p class="principales">
            <div class="producto" idproducto="P1" name="Colin2" precio="15">
                <h2>Colin Mcrae Rally 2.0 PS1</h2>
                <p><img src="Imagenes/colin2.jpg" id="imagen1">
                <p>Precio: $5000</p>
                <a href="formularioDeCompra.html" class="is-button">Comprar</a>
            </div>

            <div class="producto" idproducto="P2" name="Vtennis2" precio="15">
                <h2>Virtua Tennis 2 Dreamcast</h2>
                <p><img src="imagenes/vtennis2.png" id="imagen2"></p>
                <p>Precio: $3750</p>
                <a href="formularioDeCompra.html" class="is-button">Comprar</a>
            </div>

            <div class="producto" idproducto="P3" name="Crashtr" precio="15">
                <h2>Crash Team Racing PS1</h2>
                <p><img src="imagenes/crashtr.jpg" id="imagen3"></p>
                <p>Precio: $4400</p>
                <a href="formularioDeCompra.html" class="is-button">Comprar</a>
            </div>

            <div class="producto" idproducto="P4" name="maxPayne2" precio="15">
                <h2>Max Payne 2 PS2</h2>
                <p><img src="imagenes/mPayne2.jpg" id="imagen4"></p>
                <p>Precio: $3800</p>
                <a href="formularioDeCompra.html" class="is-button">Comprar</a>
            </div>

            <div class="producto" idproducto="P5" name="GT2" precio="15">
                <h2>Gran Turismo 2</h2>
                <p><img src="imagenes/gt2.jpg" id="imagen5"></p>
                <p>Precio: $4500</p>
                <a href="formularioDeCompra.html" class="is-button">Comprar</a>
            </div>

            <div class="producto" idproducto="P6" name="CrazyTaxi" precio="15">
                <h2>Crazy Taxi Dreamcast</h2>
                <p><img src="imagenes/crazyTaxi.png" id="imagen6"></p>
                <p>Precio: $4700</p>
                <a href="formularioDeCompra.html" class="is-button">Comprar</a>


            </div>


            </p>

        </div>
        
        </div> <!--sección de comentarios-->
        <div class="comentarios">
            <h2>Déjanos tu comentario</h2>
            <textarea id="cajadecomentarios" placeholder="Escribe tu comentario aquí"></textarea>
            <button onclick="agregarComentario()" class="boton-de-comentarios">Agregar Comentario</button>
            <button onclick="eliminarComentario()" class="boton-de-comentarios">Eliminar Comentario</button>
        </div>
        <div class="comentarios">
            <h3>Los clientes satisfechos dicen...</h3>
            <div id="comentarios">
            </div>



        
    </div>


    </div>



    <script src="funciones.js"></script>

    </div>
</body>

</html>