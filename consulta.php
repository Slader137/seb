

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="contenedor">
<h1>Usuarios Registrados</h1>
<?php

if(isset($_POST['consult']))
      {
 
        include("conexion.php");
        $resultados = mysqli_query($conn,"SELECT * FROM cliente");
        $id = mysqli_query($conn,"SELECT * FROM cliente WHERE apellido = 'Silva' ");
      
        //mostramos la info:
        while($consulta = mysqli_fetch_array($resultados))
        {
			
	//imprimimos resultados en formato tabla:		
          echo "
            <table width=\"50%\" border=\"1\">
              <tr>
                <td><b><center>Nombre</center></b></td>
                <td><b><center>Apellido</center></b></td>
                <td><b><center>Correo</center></b></td>
    
              </tr>
              <tr>
	
                <td>".$consulta['nombre']."</td>
                <td>".$consulta['apellido']."</td>
                <td>".$consulta['correo']."</td>
              </tr>
            </table>
          ";
        }
        //include ("cerrar_conexion.php");
        include("cerrar_conexion.php");
      }
      ?>
	  </div>
	  </body>
	  </html>