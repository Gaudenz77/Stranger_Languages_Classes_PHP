<?php 
  session_start();   // PHP session starten
      
  $_SESSION["favoriteAnimal"] = $_POST["favoriteAnimal"];

  print $_SESSION["favoriteAnimal"];

  print "<pre>";
  print_r($_SESSION);
?>