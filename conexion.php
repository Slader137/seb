
    <?php
    // Establecer la conexión a la base de datos MySQL
    // mysqli_connect("servidor", "usuario", "clave", "base de datos")
    // Reemplaza estos parámetros con tus propios datos de conexión
/*$servername="localhost";
$usuario="root";
$contraseña="H8aekmyn";
$base="clientes"
*/


    $conn = mysqli_connect("localhost","root","H8aekmyn", "clientes");
    mysqli_set_charset($conn, "utf8");
    // Verificar si la conexión fue exitosa
    if (!$conn) {
        // Si la conexión falla, se termina el script y se muestra un mensaje de error
        die("No pudo conectarse a la base de datos " . mysqli_connect_error());
    }

    // Si la conexión fue exitosa, se muestra un mensaje de éxito
    echo "Conexion exitosa";

    /*if(mysqli_query($conn)) {
        echo "<br> Datos ingresados correctamente";
    }
        
    else{
        echo "<br> Fallo al insertar los datos";
    }
*/
    
    ?>
