<?php
  session_start();
?>

<?php require_once("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>

<?php

  if(isset($_SESSION["session_username"])){
  // echo "Session is set"; // for testing purposes
    header("Location: intropage.php");
  }

  if(isset($_POST["login"])){

    if(!empty($_POST['username']) && !empty($_POST['password'])) {
      $username=$_POST['username'];
      $password=$_POST['password'];

      $query = mysqli_query($con, "SELECT * FROM usertbl WHERE username='".$username."' AND password='".$password."'");

      $numrows=mysqli_num_rows($query);
      if($numrows!=0)

      {
        while($row=mysqli_fetch_assoc($query))
        {
          $dbusername=$row['username'];
          $dbpassword=$row['password'];
        }

        if($username == $dbusername && $password == $dbpassword)

        {


          $_SESSION['session_username']=$username;

          /* Redirect browser */
          header("Location: intropage.php");
        }
      } else {

       $message =  "Nombre de usuario ó contraseña invalida!";
     }

   } else {
    $message = "Todos los campos son requeridos!";
  }
  }
  ?>

  <div class="container">
    <form class="form-signin" name="loginform" id="loginform" action="" method="POST">
      <h2 class="form-signin-heading" align="center">Iniciar Sesión</h2>

      <label for="user_login" class="sr-only">Nombre De Usuario</label>
      <input type="text" name="username" id="username" placeholder="Usuario" class="form-control" required autofocus name="usuario" />
      
      <label for="user_pass" class="sr-only">Contraseña</label>
      <input type="password" name="password" id="password" placeholder="Contraseña" class="form-control" required />
      
      <input type="submit" name="login" class="button" value="Entrar" />
      
      <p class="regtext">No estas registrado? <a href="register.php" >Registrate Aquí</a>!</p>
    </form>

  </div>

  <?php include("includes/footer.php"); ?>

  <?php if (!empty($message)) {echo "<p class=\"error\">" . "ADVERTENCIA: ". $message . "</p>";} ?>
