<html>
    <head>
    <meta type charset UTF-8>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
<div id="titulo"> 
    <h1> Usuario Registrado </h1>
    <h2> Estos son tus datos </h2>
</div>
<div class="contenedor">
    <?php 
          include("conexion.php");
       
    ?>
        <form action="registro.php" method="POST">
 <br>
        <?php
        echo "Nombre: ";
        isset($_REQUEST['nombre']) ? print $_REQUEST['nombre'] : "";
        ?>
        <br>

        <?php
        echo "Apellido: ";
        isset($_REQUEST['apellido']) ? print $_REQUEST['apellido'] : "" ;
        ?> 
        <br>
        
        <?php
        echo "Contraseña: ";
        isset($_REQUEST['contraseña']) ? print $_REQUEST['contraseña']: "";
        ?>
        <br>

        <?php
        echo "Correo: ";
        isset($_REQUEST['correo'])? print $_REQUEST['correo']: "";
        ?><br>
        <br>

            <?php
         

            if(isset($_REQUEST['registrar'])){
                $nombre= $_REQUEST['nombre'];
                $apellido= $_REQUEST['apellido'];
                $correo= $_REQUEST['correo'];
                $contraseña= $_REQUEST['contraseña'];

                $campos=array();
            

                if($nombre == ""){
                    array_push($campos,"Error, el campo nombre no puede estar vacio");
                }

                if($contraseña == "" || strlen($contraseña) < 4){
                array_push($campos,"Error la contraseña tiene que tener al menos 5 caracteres");
                }

                if($correo =="" ||  strpos($correo,"@")==="false"){
                    array_push($campos,"Error, correo no valido");
                }
if (count($campos) < 0){
    echo "<br>";
    echo "ERROR";
    for($i=0;$i<count($campos);$i++){
        echo "$campos[$i]";
    }}
    $query="INSERT INTO cliente (nombre,apellido,correo,contraseña) VALUES
                ('$nombre','$apellido','$correo','$contraseña')";
    if(mysqli_query($conn,$query)){
        echo "registro existoso";
    }
    else
{
    echo "fallo el registro". mysqli_error($conn);
}
  

    }
            


    //$sql= "SELECT * FROM tienda";
   
  
  
    //$resultado=mysqli_query($conn, $sql);
  
            
?>
</div>
</form>
<a href="index.php" class="boton">Volver</a>
            </body>
            </html>
            <?php ("cerrar_conexion");?><html>
    <head>
    <meta type charset UTF-8>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
<div id="titulo"> 
    <h1> Usuario Registrado </h1>
    <h2> Estos son tus datos </h2>
</div>
<div class="contenedor">
    <?php 
          include("conexion.php");
       
    ?>
        <form action="registro.php" method="POST">
 <br>
        <?php
        echo "Nombre: ";
        isset($_REQUEST['nombre']) ? print $_REQUEST['nombre'] : "";
        ?>
        <br>

        <?php
        echo "Apellido: ";
        isset($_REQUEST['apellido']) ? print $_REQUEST['apellido'] : "" ;
        ?> 
        <br>
        
        <?php
        echo "Contraseña: ";
        isset($_REQUEST['contraseña']) ? print $_REQUEST['contraseña']: "";
        ?>
        <br>

        <?php
        echo "Correo: ";
        isset($_REQUEST['correo'])? print $_REQUEST['correo']: "";
        ?><br>
        <br>

            <?php
         

            if(isset($_REQUEST['registrar'])){
                $nombre= $_REQUEST['nombre'];
                $apellido= $_REQUEST['apellido'];
                $correo= $_REQUEST['correo'];
                $contraseña= $_REQUEST['contraseña'];

                $campos=array();
            

                if($nombre == ""){
                    array_push($campos,"Error, el campo nombre no puede estar vacio");
                }

                if($contraseña == "" || strlen($contraseña) < 4){
                array_push($campos,"Error la contraseña tiene que tener al menos 5 caracteres");
                }

                if($correo =="" ||  strpos($correo,"@")==="false"){
                    array_push($campos,"Error, correo no valido");
                }
if (count($campos) < 0){
    echo "<br>";
    echo "ERROR";
    for($i=0;$i<count($campos);$i++){
        echo "$campos[$i]";
    }}
    $insert="INSERT INTO cliente (nombre,apellido,correo,contraseña) VALUES
                ('$nombre','$apellido','$correo','$contraseña')";
    if(mysqli_query($conn,$insert)){
        echo "registro existoso";
    }
    else
{
    echo "fallo el registro". mysqli_error($conn);
}
  

    }
            

         

    //$sql= "SELECT * FROM tienda";
   
  
  
    //$resultado=mysqli_query($conn, $sql);
  
            
?>
</div>
</form>
            </body>
            </html>