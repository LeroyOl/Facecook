
<?php
session_start();
$uploaddir = '../img/avatar/';
$rename = $_POST['id'].'.jpeg';
var_dump($rename);


$uploadfile = $uploaddir . basename($_FILES['avatar']['name']);



echo '<pre>';
if (move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadfile)) {
    rename ( $uploadfile, $uploaddir . $rename );
    header('Location: ../Layouts/utilisateur.php');
} else {
    //$_SESSION['error'] = }
}


?>