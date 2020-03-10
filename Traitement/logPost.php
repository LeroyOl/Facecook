<?php
session_start();
//connexion à la bdd
try{
    $bdd = new PDO('mysql:host=localhost:3306;dbname=facecook;charset=utf8','root',"");
}
catch(Exception $e){
    die('Erreur'. $e->getMessage());
}

$req = $bdd->query('SELECT id, pseudo, pass FROM membres');
$donnees = $req->fetchAll();

if (isset($_POST['pseudo'], $_POST['password'])){
foreach($donnees as $var){
  if($var['pseudo'] == $_POST['pseudo'] AND (password_verify ( $_POST['password'] , $var['pass']))){
    $_SESSION['id'] = $var['id'];
    header('Location: ../Layouts/utilisateur.php');
    die;
  }else{
    $_SESSION['error'] = "<p class=\"error\">Nom d'utilisateur ou mot de passe incorrecte</p>";
    header('Location:../Layouts/log.php');

  };
}
}



