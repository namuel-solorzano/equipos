<!doctype html>
<html>
<head>
  <title>Alta de equipos</title>
  <meta charset="UTF-8">
</head>  
<body>
  

  <?php
    
    $mysql=new mysqli("https://torneos-equiposf.rhcloud.com/phpmyadmin/","adminDqN9tbB","JQ-4V9JeDLmk","torneo"); 
    if ($mysql->connect_error)
      die('Problemas con la conexion a la base de datos');
    
    $mysql->query("insert into equipos values ('".$_REQUEST['codigo']."','".$_REQUEST['nombreEquipo']."','".$_REQUEST['ciudadEquipo']."')") or
      die($mysql->error);
     
    $mysql->close();
    


    
    echo "El nuevo equipo se ha almacenó"<br><br>;
    echo 	"<a href='formularioEquipos.html'>Regresar al registro de equipos</a>";
  ?>  

 </body>
</html>