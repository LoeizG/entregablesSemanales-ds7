<!doctype html>
<html lang="en">

<head>
	<title>Login 04</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="./public/css/style.css">

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
									<h3 class="mb-4">Acceder al Sistema</h3>
								</div>
							</div>
							<form method="POST" action="./?op=acceder" class="signin-form">
								<p class="text-danger"> <?php if (isset($_GET['msg'])) echo $_GET['msg']; ?> </p>
								<div class="form-group mb-3">
									<label class="label" for="floatingInput">Email</label>
									<input type="email" class="form-control"  id="floatingInput" name="correo" placeholder="name@example.com" required>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="floatingPassword">Password</label>
									<input type="password" class="form-control"  id="floatingPassword" name="password" placeholder="Password" required>
								</div>
								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary rounded submit px-3">Ingresar</button>
								</div>
								<div class="form-group d-md-flex">
									<div class="w-50 text-left">
										<label class="checkbox-wrap checkbox-primary mb-0">Recordar Usuario
											<input type="checkbox" value="remember-me">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">¿Olvidó su contraseña?</a>
									</div>
								</div>
							</form>
							<p class="text-center">¿No tienes cuenta? <a href="./index.php?op=crear">Registrate aquí</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



</body>

</html>