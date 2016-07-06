<!doctype html>
<html>
<head>
  <title>Gestion de Jugadores - CUD</title>
  <meta charset="UTF-8">
  <style>
  .tablalistado {
    border-collapse: collapse;
    box-shadow: 0px 0px 8px #000;
    margin:20px;
  }
  .tablalistado th{  
    border: 1px solid #000;
    padding: 5px;
    background-color:#ffd040;      
  }  
  .tablalistado td{  
    border: 1px solid #000;
    padding: 5px;
    background-color:#ffdd73;      
  }
  </style>
</head>  
<body>
  <h1>Gestion de Jugadores - CUD</h1>
  <hr>

  <?php
    $mysql = new mysqli(getenv('OPENSHIFT_MYSQL_DB_HOST'), "", "", "torneo", getenv('OPENSHIFT_MYSQL_DB_PORT'));
    if ($mysql->connect_error)
      die("Problemas con la conexión a la base de datos -- ".$mysql->connect_error);
  
    $registros=$mysql->query("select     jug.identificacion as ideJugador,
                                         jug.nombres as nombreJugador,
                                         jug.posi as posicionJugador,
                                         eq.nombres as nombreEquipo 
                                      from jugadores as jug
                                      inner join equipos as eq on eq.codigo=jug.codigo") or
      die($mysql->error);
     
    echo '<table class="tablalistado">';
    echo '<tr><th>Identificación</th><th>Nombres del Jugador</th><th>Posición del Jugador</th>
          <th>Nombre del Equipo</th><th>Borrar</th><th>Modificar</th></tr>';
    while ($reg=$registros->fetch_array())
    {
      echo '<tr>';
      echo '<td>';
      echo $reg['ideJugador'];
      echo '</td>';      
      echo '<td>';
      echo $reg['nombreJugador'];      
      echo '</td>';      
      echo '<td>';
      echo $reg['posicionJugador'];      
      echo '</td>';      
      echo '<td>';
      echo $reg['nombreEquipo'];      
      echo '</td>';
      echo '<td>';
      echo '<a href="eliminarJugador.php?ide='.$reg['ideJugador'].'">Borra?</a>';
      echo '</td>';
      echo '<td>';
      echo '<a href="formularioModificarJugador.php?ide='.$reg['ideJugador'].'">Modifica?</a>';
      echo '</td>';      
      echo '</tr>';      
    }    
    echo '<tr><td colspan="6">';
    echo '<a href="formularioJugadores.php">Agrega un nuevo Jugador?</a>';
    echo '</td></tr>';
    echo '<table>';    
    
    $mysql->close();

  ?>  
</body>
</html>