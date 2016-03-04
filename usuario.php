<?php
   $user = $_GET['user'];
   $password = $_GET['password'];
 
   if (($user == "usuario") AND ($password == "12345")) {
      echo "Bienvenido ".$usuario;
   } else {
      echo "¡Usuario o contrasena incorrectos!";
      echo '<a href="'.$_SERVER['HTTP_REFERER'].'"><br>Volver</a>';
   }
?>