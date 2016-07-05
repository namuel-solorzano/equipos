<!doctype html>
<html>
<head>
  <title>Alta de jugadores</title>
  <meta charset="UTF-8">
</head>  
<body>
  <form method="post" action="registrarJugador.php">
  Ingrese identificaciopn del jugador:
   <br>
  <input type="text" name="identificacion" size="30" required>
  <br>
  Ingrese nombres del jugador:
  <br>
  <input type="text" name="nombreJugador" size="30" required>
  <br>
  Ingrese posición del jugador:
  <br>
  <input type="text" name="posicionJugador" size="30" required>
  <br>
  Seleccione nombre del equipo:
  <br>
  <select name="codigoEquipo">
  <?php
    $mysql=new mysqli("https://torneos-equiposf.rhcloud.com/phpmyadmin/","adminDqN9tbB","JQ-4V9JeDLmk","torneo");
    if ($mysql->connect_error)
      die("Problemas con la conexión a la base de datos");

    $registros=$mysql->query("select * from equipos") or
      die($mysql->error);

    while ($reg=$registros->fetch_array())
    {
      
      
       echo "<option value=\"".$reg['codigo']."\">".$reg['nombres']."</option>";
    }      
    $mysql->close();  
  ?>  
  </select>
  <br>
  <br>
  <input type="submit" value=" Registrar">
  </form>
</body>
</html>