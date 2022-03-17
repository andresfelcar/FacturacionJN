<?php

require "controller/Controller.php";

$loginError = "";
if (!empty($_POST['email']) && !empty($_POST['password'])) {

	$login = new Controller();
    $array = [];
	
	array_push($array, $_POST['email'], $_POST['password']);

	$_SESSION['user'] = $login->Login(0,$array);

	$resultado = $_SESSION['user'];
	
	if ($resultado != null) {
		header("Location:registroProductos.html");
    }else{
        header("Location:MensajeError.html");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="resources/css/login.css">
    <script src="resources/js/login.js"></script>
    <title>Document</title>
</head>

<body>

    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="row">
                        <div class="col md-6">
                            <div class="form-items">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Bienvenido.</h3>
                                        <p>Ingreso Sistema Facturacion.</p>
                                        <form class="requires-validation" novalidate method="post">



                                            <div class="col-md-12">
                                                <input class="form-control" type="email" name="email"
                                                    placeholder="E-mail Address" required>
                                                <div class="valid-feedback">Email field is valid!</div>
                                                <div class="invalid-feedback">Email field cannot be blank!</div>
                                            </div>
                                            <div class="col-md-12">
                                                <input class="form-control" type="password" name="password"
                                                    placeholder="Password" required>
                                                <div class="valid-feedback">Password field is valid!</div>
                                                <div class="invalid-feedback">Password field cannot be blank!</div>
                                            </div>
                                            <div class="col-md-12 text-center mt-4">
                                                <button id="submit" type="submit" class="btn btn-primary btn-lg btn-block">Iniciar Session</button>
                                            </div>
                                   
                                        </form>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="resources/images/tecnico.png" width="300px" alt="">
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>