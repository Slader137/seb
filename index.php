<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inicio de Sesión</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body id="inicio">
    <?php 
    include("conexion.php");
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $correo = mysqli_real_escape_string($conn, $_POST['correo']);
        $contraseña = mysqli_real_escape_string($conn, $_POST['contraseña']);

        if (empty($correo) || empty($contraseña)) {
            echo "<script>alert('Ingresa los datos para continuar');</script>";
        }
        else
        {
        $consulta = "SELECT contraseña FROM cliente WHERE correo = '$correo'";
        $resultado = mysqli_query($conn, $consulta);
        
        if ($row = mysqli_fetch_assoc($resultado)) {
            if ($contraseña === $row['contraseña']) { // Comparar contraseñas
                session_start();
                $_SESSION['correo'] = $correo;
                header("Location: tienda.php");
                exit();
        }
        else{
            echo "<script>alert('Error, la contraseña es incorrecta');</script>";
        }}
    }}
    ?>
    <div class="contenedor">
        <h1>Inicie Sesión o Regístrese para continuar</h1>
        <div id="contenedorcentrado">
            <h1>Inicio de sesión</h1>
            <form id="login" method="POST" action="">
                <label for="correo">Usuario</label>
                <input id="correo" type="email" name="correo" placeholder="Escribe tu nombre de usuario" required>
                <br><br>
                <label for="contraseña">Contraseña</label>
                <input id="contraseña" type="password" name="contraseña" placeholder="Escribe tu contraseña" required>
                <br>
                <button type="submit" title="ingresar" name="ingresar" value="ingresar">Ingresar</button>
                <br>
            </form>
            <div class="informacionadicional">
                <p>¿No tienes cuenta? <a href="registro.php">Regístrate aquí</a></p>
            </div>
        </div>
    </div>
    <?php include("pie.php");?>
</body>
</html>