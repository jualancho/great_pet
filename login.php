<?php
session_start();

if (isset($_SESSION["id_usuario"])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST["email"]) && isset($_POST["password"])) {
		$con = mysqli_connect("localhost", "great_pet", "admin.greatpet.gecko23", "great_pet");

		$email = $_POST["email"];
        $password = md5($_POST["password"]);

		$sql = "SELECT * FROM `usuarios` WHERE email = '$email' AND contraseña = '$password'";

		$res = mysqli_query($con, $sql);

		if (mysqli_num_rows($res) > 0) {
			$row = mysqli_fetch_assoc($res);
			$id_usuario = $row['id_usuario'];
			$nombre = $row['nombre'];
			$apellido = $row['apellido'];
			$email = $row['email'];
			$localidad = $row['localidad'];
			$_SESSION["id_usuario"] = $id_usuario;
    		$_SESSION["nombre"] = $nombre;
			$_SESSION["apellido"] = $apellido;
			$_SESSION["email"] = $email;
			$_SESSION["localidad"] = $localidad;
			if($_SESSION["pagina"] == 1){
				header("Location: index.php");
	        	exit();
			} elseif ($_SESSION["pagina"] == 2){
				header("Location: adopcion.php");
	        	exit();
			} elseif ($_SESSION["pagina"] == 3){
				header("Location: busqueda.php");
	        	exit();
			} elseif ($_SESSION["pagina"] == 4){
				header("Location: qr.php");
	        	exit();
			} elseif ($_SESSION["pagina"] == 5){
				header("Location: servicios.php");
	        	exit();
			}
	    } else {
	        echo "Correo o contraseña inválidos.";
	    }
	}
}

if (isset($_SESSION["registro_exitoso"])) {
    if ($_SESSION["registro_exitoso"] == true) {
        echo "Registro exitoso. Ahora puedes iniciar sesión.";
        unset($_SESSION["registro_exitoso"]);
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo_pestaña.png">
	<title></title>
	<!-- <link rel="stylesheet" href="css/login.css"> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
	rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
	crossorigin="anonymous">
</head>
<body class="releway">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
	crossorigin="anonymous"></script>
	<div class="login">
		<h1 class="roboto">Iniciar sesión</h1>
	    <form action="login.php" method="POST">
	        <div class="input">
	            <input type="text" name="email" placeholder="Correo electronico" required>
	            <input type="password" name="password" placeholder="Contraseña" id="myInput" required>
	            <div>
	                <input type="checkbox" onclick="myFunction()"><label>Mostrar contraseña</label>
	            </div>
	        </div>
	        <div class="botones">
	            <a href="registro.php">Registrarse</a>
	            <input type="submit" value="Ingresar">
	        </div>
	        <script>
	            function myFunction() {
	            var x = document.getElementById("myInput");
	            if (x.type === "password") {
	                x.type = "text";
	            } else {
	                x.type = "password";
	            }
	            //   var y = document.getElementById("myInput2");
	            //   if (y.type === "password") {
	            //     y.type = "text";
	            //   } else {
	            //     y.type = "password";
	            //   }
	            }
	        </script>
	    </form>
    </div>
</body>
</html>