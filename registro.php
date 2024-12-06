<!DOCTYPE html>

<html lang="en">
 <head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head> 
<body>
  
  <?php include ("conexion.php");
  
  include("insertar.php");
  include("consulta.php");

?>
<div class="contenedor">
<h1>Este es mi Formulario de registro</h1>

<p>Ingresa tus datos</p>

<form action="validacion.php" method="POST">
  <label for="nombre">Nombre:</label><br>
  <input type="text" id="nombre" name="nombre" background="Escribe tu nombre"><br>
  
  <label for="apellido">apellido:</label><br>
  <input type="text" id="apellido" name="apellido" background="Escribe tu apellido"><br>
  
  <label for="contraseña">Contraseña:</label><br>
  <input type="password" id="contraseña" name="contraseña" background="Escribe tu contraseña"><br>

  <label for="correo">Correo:</label><br>
  <input type="email" id="correo" name="correo" background="correo electronico"><br>
  
  
  <br><br>
  <button class="botones" type=submit  name="registrar" >registrarse</button>
</form>


<form action="consulta.php" method="POST">
    <input type="submit" value="consult" name="consult"> Consultar </input>
  </form>
</div>
</body>
</html>
<?php ("cerrar_conexion");?>