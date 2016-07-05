<!doctype html>
<html>
<head>
  <title>Listado de equipos</title>
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
  
  <?php
   $mysql=new mysqli("https://torneos-equiposf.rhcloud.com/phpmyadmin/","adminDqN9tbB","JQ-4V9JeDLmk","torneo");
  if ($mysql->connect_error)
    die("Problemas con la conexión a la base de datos");

    $registros=$mysql->query("select * from equipos") or
    die($mysql->error);
  
    echo '<table class="tablalistado">';
    echo '<tr><th>Código</th><th>Nombre del equipo</th><th>Ciudad del equipo</th></tr>';
    while ($reg=$registros->fetch_array())
    {
      echo '<tr>';
      echo '<td>';
      echo $reg['codigo'];
      echo '</td>';   
      echo '<td>';
      echo $reg['nombres'];   
      echo '</td>';
      echo '<td>';
      echo $reg['ciudad'];   
      echo '</td>';     
      echo '</tr>';   
    } 
    echo '<table>'; 
  
    $mysql->close();

  ?>  
</body>
</html>