<!doctype html>
<html lang="en">

<head>
	<title>Login 04</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="./public/css/style.css">

	<script>
		function ComprobarClave() {
			clave1 = document.formulario.password1.value
			clave2 = document.formulario.password2.value

			if (clave1 != clave2) {
				alert("Las dos claves no son iguales...");
				return false;
			}
		}
	</script>

</head>

<body>
	<section class="ftco-section">
		<div class="container">

			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img">
							<img class="mx-auto imagelogo" src="./public/images/utp.svg" alt="">
						</div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-1">Crear Usuario</h3>
								</div>
							</div>
							<form name="formulario" method="POST" action="./?op=registrar" onSubmit="return ComprobarClave()">
								<p class=" <?php if (isset($_GET['msg'])) echo $_GET['t']; ?>">
									<?php if (isset($_GET['msg'])) echo $_GET['msg']; ?>
								</p>

								<div class="form-group">
									<input type="text" class="form-control item" id="nombre" placeholder="Nombre" name="nombre" required>
								</div>
								<div class="form-group">
									<input type="text" class="form-control item" id="apellido" placeholder="Apellido" name="apellido" required>
								</div>
								<div class="form-group">
									<input type="email" class="form-control item" id="email" placeholder="Email" name="correo" required autofocus>
								</div>

								<div class="form-group">
									<input type="password" class="form-control item" id="password" placeholder="Password" name="password1" required>
								</div>

								<div class="form-group">
									<input type="password" class="form-control item" id="repassword" placeholder="Password Nuevamente" name="password2" required>
								</div>
								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary rounded submit px-3" onClick="comprobarClave()">Crear
										cuenta</button>
								</div>

							</form>
							<p class="text-center mb-1">¿Ya tiene cuenta? <a href="./index.php">Accede al Sistema</a></p>
						</div </div>
					</div>
				</div>
			</div>
	</section>



</body>

</html>