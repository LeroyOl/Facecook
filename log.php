<?php

namespace facecook;
require "utilisateurs.php";
require "Function.php";
$Olivier = new utilisateur('Olivier','kira@gmail.com','1234');
$Lyly =   new utilisateur('Lyly','lyly@gmail.com','1234');
$Marc =   new utilisateur('Marc','Marc@gmail.com','1234');
$Nina =   new utilisateur('Nina','Nina@gmail.com','1234');

$utilisateurs = array($Olivier, $Lyly, $Marc, $Nina);

if (isset($_POST['email']) && isset($_POST['password'])) {
   if(log($utilisateurs,$_POST['email'],$_POST['password']) == true){
    echo("ça marche");
  } else {
    echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
    if (isset($_GET['erreur'])) {
      $POSTrr = $_GET['erreur'];
      if ($POSTrr == 1 || $POSTrr == 2)
        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
    }
  }
}


