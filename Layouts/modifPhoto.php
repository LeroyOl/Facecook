<?php
session_start();
include_once 'parts/header.php';

try {
  $bdd = new PDO('mysql:host=localhost:3306;dbname=facecook;charset=utf8', 'root', '');
} catch (Exception $e) {
  die('error ' . $e->getMessage());
}

$req = $bdd->prepare('SELECT * FROM membres WHERE id=? ');
$req->execute(array($_SESSION['id']));
$donnees = $req->fetchAll();

?>
<?php foreach ($donnees as $var) : ?>


<?php endforeach; ?>

<div class="row p-3">
  <div class="col-md-4 mesRecette border p-3">
    <div class=" ">
      <div class="navigation">
        <p> <a href="">Recette 1</a></p>
        <p><a href="">Recette 2</a></p>
        <p><a href="">Recette 3</a></p>
      </div>
    </div>
  </div>
  <div class="col-md-8 informations border p-3">
    <div class="row modifp">
   
          <img class="" src="../img/avatar/<?= $_SESSION['id'] ?>.jpeg" alt="">
          <form method="post" class="" action="../Traitement/recupAvatar.php" enctype="multipart/form-data">
          <input type="hidden" name="MAX_FILE_SIZE" value="2097152">
          <input type="hidden" name="id" value="<?= $_SESSION['id']; ?>">
          <input type="file" name="avatar" require>
          <input type="submit" class="btn-primary btn " value="Envoyer">
        </form>
    </div>
    <div>
      <h6>Mon pseudo :</h6>
      <p><?php ifisset($var['pseudo']); ?></p>
      <h6>Mon Nom :</h6>
      <p><?php ifisset($var['nom']); ?></p>
    </div>
    <div>
      <h6>Adress email :</h6>
      <p><?php ifisset($var['email']); ?></p>
      <h6>Mot de passe :</h6>
      <p><?= '*******************' ?></p>
    </div>

    <h6>Date de naissance :</h6>
    <p><?php ifisset($var['date_naissance']); ?></p>
    <h6>Ville :</h6>
    <p>
      <?php ifisset($var['ville']); ?>
    </p>
  </div>
</div>
<script src="../Traitement/modif.js"></script>
<?php
function ifisset($e)
{
  if (isset($e)) {
    echo $e;
  } else {
    echo '....................';
  }
};
