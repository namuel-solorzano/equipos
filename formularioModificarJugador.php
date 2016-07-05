<!doctype html>
<html>
<head>
  <title>Modificar datos del jugador</title>
  <meta charset="UTF-8">
</head>  
<body>

  <h1>Modificar datos del jugador</h1>
  
  <?php
    $mysql=new mysqli("https://torneos-equiposf.rhcloud.com/phpmyadmin/","adminDqN9tbB","JQ-4V9JeDLmk","torneo");
    if ($mysql->connect_error)
      die("Problemas con la conexión a la base de datos");
  
    $registro=$mysql->query("select * from jugadores where identificacion=".$_GET['ide'].";") or
      die($mysql->error);
     
    if ($reg=$registro->fetch_array())
    {
  ?>
    <form method="post" action="modificarJugador.php">
      Identificación del jugador:
      <br>
      <input type="text" name="identificacion" size="50" value="<?php echo $reg['identificacion']; ?>">
      <br>
      Nombres del jugador:
      <br>
      <input type="text" name="nombres" size="10" value="<?php echo $reg['nombres']; ?>">      
      <br>   
      Posición del jugador:
      <br>
      <input type="text" name="posicion" size="10" value="<?php echo $reg['posi']; ?>">      
      <br>     
     Equipo donde milita:
      <select name="codigoEquipo">
      <?php
      $registros2=$mysql->query("select codigo,nombres from equipos") or
        die($mysql->error);
      while ($reg2=$registros2->fetch_array())
      {
         if ($reg2['codigo']==$reg['codigo'])
           echo "<option value=\"".$reg2['codigo']."\" selected>".$reg2['nombres']."</option>";
         else
           echo "<option value=\"".$reg2['codigo']."\">".$reg2['nombres']."</option>";
      }        
      ?>  
      </select>      
      
      <input type="hidden" name="codigo" value="<?php echo $_GET['ide']; ?>">     
      <br> 
      <input type="submit" value="Actualizar">
    </form>
  <?php
    }      
    else
      echo 'No existe un jugador con esa identificación';
    
    $mysql->close();

  ?>  
</body>
</html>