<?php
    $mysql=new mysqli("localhost","adminDqN9tbB","JQ-4V9JeDLmk","torneo");
    if ($mysql->connect_error)
      die("Problemas con la conexión a la base de datos");
  
    $mysql->query("delete from jugadores where identificacion=".$_GET['ide'].";") or
        die($mysql->error);    
    
      

    $mysql->close();
    
    header('Location:cudJugadores.php');
  ?>  
?>  