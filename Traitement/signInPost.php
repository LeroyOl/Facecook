<?php
session_start();
//connexion à la bdd
try{
    $bdd = new PDO('mysql:host=localhost:3306;dbname=facecook;charset=utf8','root',"");
}
catch(Exception $e){
    die('Erreur'. $e->getMessage());
}

// Insertion des données utilisateurs dans la bdd
if(isset($_POST['pseudo'], $_POST['date_naissance'], $_POST['email'], $_POST['password'])){
    $req = $bdd->prepare('INSERT INTO membres (pseudo,pass,email,date_naissance) VALUES(?,?,?,?)');
    //Cryptage du mdp par password_hash
    $password = $_POST['password'];
    $passhash = password_hash($password,PASSWORD_DEFAULT);
    //Insertion dans la bdd
    $req->execute(array($_POST['pseudo'], $passhash, $_POST['email'], $_POST['date_naissance']));
    //redirection page log
    header('Location:../Layouts/log.php');
}