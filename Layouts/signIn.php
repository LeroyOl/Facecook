<?php
include_once 'parts/header.php';
?>

<body class="text-center">
    <form class="form-signin" action="../Traitement/signInPost.php" method="POST">
        <h1 class="h3 mb-5 font-weight-normal">Inscription</h1>
        <div class="row p-1">
            <div class="col">
                <label for="pseudo" class="sr-only">Pseudo</label>
                <input type="text" id="pseudo" name="pseudo" class="form-control" placeholder="Pseudo" required autofocus>
            </div>
            <div class="col">
                <label for="date_naissance" id="date_naissance" name="date_naissance" class="sr-only">Date de naissance</label>
                <input type="date" id="date_naissance" name="date_naissance" class="form-control" >
            </div>
        </div>
        <div class="row p-1">
            <div class="col">
                <label for="email" class="sr-only"></label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Adresse email" required>
            </div>
            <div class="col">
            <label for="password" class="sr-only">Mot de passe</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Mot de passe "required>
            </div>
        </div>
        <img class="mb-4" src="img/b.svg" alt="" width="72" height="72">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>


    </form>
</body>
<?php
