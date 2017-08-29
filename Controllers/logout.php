<?php
  session_start();
   
  // Elimina la variable usuario en sesión.
  unset($_SESSION['user']);
 
  // Elimina la sesion.
  session_destroy();
   
  // Redirecciona a la página de login.
  header("Location: ../Views/index.php");
?>