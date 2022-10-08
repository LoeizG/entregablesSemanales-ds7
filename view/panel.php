<?php
@session_start(); // Comienzo de la sesión

if ($_SESSION["acceso"] != true) {
    header('Location: ?op=error');
}





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="./public/css/style.css">
</head>

<body>
    <h1 class="w-100 h-100 p-5  text-center" style="color: purple; "><?php echo "Bienvenido/a: " . $_SESSION["user"]; ?> </h1>
</body>

</html>