<?php include (conexion.php); 

  $sql= "SELECT * FROM cliente";
$query=mysqli_query($conn, $sql);

  ?>



<div class="cliente-table">
        <h2>Usuarios registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Contraseña</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($cliente = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $cliente['id_cliente'] ?></th>
                        <th><?= $cliente['nombre'] ?></th>
                        <th><?= $cliente['email'] ?></th>
                        <th><?= $cliente['contraseña'] ?></th>
                        <th><a href="editarcliente.php?id=<?= $cliente['id_cliente'] ?>" class="ciente-table--edit">Editar</a></th>
                        <th><a href="eliminarcliente.php?id=<?= $cliente['id_cliente'] ?>" class="cliente-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
