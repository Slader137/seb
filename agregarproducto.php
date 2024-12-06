<?php include('conexion.php') ?>

<?php include('cabecera.php') ?>
<link rel="stylesheet" href="styles.css">
<div class="page-content">
    <div class="form-content">
        <form class="agregar" action="insertar_producto.php" method='POST'>
            <label for="">agregar comida</label>
            <input type="text" name='nombre' placeholder='nombre del producto'>
            <select name="categoria">
                <option value="entradas">Entradas</option>
                <option value="sopas">Sopas</option>
                <option value="ensaladas">Ensaladas</option>
                <option value="platosfuertes">Platos Fuertes</option>
                <option value="especialidades">Especialidades</option>
                <option value="postres">Postres</option>
                <option value="bebidas">Bebidas</option>
                
            </select>
            <textarea name='descripcion' cols="100" rows="20" placeholder='descripcion del producto'></textarea>
            <input type="text" name='precio' placeholder='precio del producto'>
            <button class="boton" type="submit" name='add'>agregar</button>
        </form>
    </div>
</div>

<?php include('pie.php') ?>
