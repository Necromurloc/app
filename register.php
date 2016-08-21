<?php require_once("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>

<?php

if(isset($_POST["register"])){


if(!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) {
	$full_name=$_POST['full_name'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	

		
	$query=mysqli_query($con, "SELECT * FROM usertbl WHERE username='".$username."'");
	$numrows=mysqli_num_rows($query);
	
	if($numrows==0)
	{
	$sql="INSERT INTO usertbl
			(full_name, email, username,password) 
			VALUES('$full_name','$email', '$username', '$password')";

	$result=mysqli_query($con, $sql);


	if($result){
	 $message = "Cuenta Correctamente Creada";
	} else {
	 $message = "Error al ingresar datos de la informacion!";
	}

	} else {
	 $message = "El nombre de usuario ya existe! Por favor, intenta con otro!";
	}

} else {
	 $message = "Todos los campos son requeridos!";
}
}
?>


<?php if (!empty($message)) {echo "<p class=\"error\">" . "Mensaje: ". $message . "</p>";} ?>
	
	<div class="container">
		<form class="form-register" name="registerform" id="registerform" action="register.php" method="post">
		<h2 class="form-register-heading" align="center">Registrarse</h2>

		<label for="user_login" class="sr-only">Nombre Completo</label>
		<input type="text" name="full_name" id="full_name" placeholder="Nombre Completo" class="form-control" required autofocus name="nombre" />

		<label for="user_pass" class="sr-only">Correo Electronico<br />
		<input type="email" name="email" id="email" placeholder="Correo Electronico" class="form-control" required />

		<label for="user_pass" class="sr-only">Nombre de Usuario<br />
		<input type="text" name="username" id="username" placeholder="Nombre de Usuario" class="form-control" required />

		<label for="user_pass" class="sr-only">Contraseña<br />
		<input type="password" name="password" id="password" placeholder="Contraseña" class="form-control" required />

		<input type="submit" name="register" id="register" class="button" value="Registrar" />
		
		<p class="regtext">Ya tienes una cuenta? <a href="login.php" >Entra Aquí!</a>!</p>
		
		</form>
	
	</div>
	
<?php include("includes/footer.php"); ?>