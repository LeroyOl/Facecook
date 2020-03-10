<?php
session_start();
include_once 'parts/header.php';
?>


<body class="text-center">
  <form class="form-log" action="../Traitement/logPost.php" method="POST">
  <?php if(isset($_SESSION['error'])){
    echo $_SESSION['error'];
    unset($_SESSION['error']);
  }?>
    <img class="mb-4" src="img/b.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Please login or register from the bottom box. </h1>
    <label for="pseudo" class="sr-only">Pseudo</label>
    <input type="text" id="pseudo" name="pseudo" class="form-control" placeholder="Pseudo" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Log me</button>
    <a href="signIn.php">New ? sign in</a>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
    
  </form>
</body>
<?php 

      

      


