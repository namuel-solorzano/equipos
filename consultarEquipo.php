<!doctype html>
<html>
<head>
  <title>Consulta equipos</title>
  <meta charset="UTF-8">
</head>  
<body>
  
  <?php
    $mysql=new mysqli("localhost","adminDqN9tbB","JQ-4V9JeDLmk","torneo");
    if ($mysql->connect_error)
      die("Problemas con la conexión a la base de datos");

    $registros=$mysql->query("select * from equipos where codigo=".$_POST['codigo'].";") or
      die($mysql->error);
	 
    if ($reg=$registros->fetch_array()){
      echo "Los datos del equipo son <br>";
      echo "Codigo equipo     :".$reg['codigo']."<br>";
      echo "Nombre del equipo :".$reg['nombres']."<br>"; 
      echo "Ciudad del equipo :".$reg['ciudad']."<br>"; 
      echo "<a href='formularioConsulta.php'>Formulario de conulsta</a>";
    }
    else{
      echo 'No existe un rubro con dicho código';
    }
	
    $mysql->close();

  ?>  
</body>
</html>