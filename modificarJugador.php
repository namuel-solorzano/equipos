<?php
    $mysql=new mysqli("localhost","root","","torneo");
    if ($mysql->connect_error)
      die("Problemas con la conexión a la base de datos");
  
    $mysql->query("update jugadores set identificacion='".$_POST['identificacion']."', nombres='".$_POST['nombres']."',                  posi='".$_POST['posicion']."', codigo='".$_POST['codigoEquipo']."' where identificacion=".$_POST['identificacion'].";") or  die($mysql->error());
     
    $mysql->close();

    header('Location:cudJugadores.php');
?>  