<!doctype html>
<html>
<head>
  <title>Registrar jugador</title>
  <meta charset="UTF-8">
</head>  
<body>
  

  <?php
    
    $mysql=new mysqli("localhost","adminDqN9tbB","JQ-4V9JeDLmk","torneo");  
    if ($mysql->connect_error)
      die('Problemas con la conexion a la base de datos');
    
    $mysql->query("insert into jugadores values ('".$_POST['identificacion']."','".$_POST['nombreJugador']."','".$_POST['posicionJugador']."','".$_POST['codigoEquipo']."')") or
      die($mysql->error);
     
    $mysql->close();
    


    
    echo "El nuevo JUGADOR se ha almacenó<br><br>";
    echo 	"<a href='formularioJugadores.php'>Regresar al registro de jugadores</a>";
  ?>  

 </body>
</html>