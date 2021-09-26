<?php // Do not put any HTML above this line
session_start();
include('includes/Kreait/dbconfig.php');

if ( isset($_POST['cancel'] ) ) {
    // Redirect the browser to game.php
    header("Location: login.php");
    return;
}

if(isset($_POST['reg_btn'])){

    try {

    $email = $_POST['email'];
    $password = $_POST['pass'];
    
    $userProperties = [
        'email' => $email,
        'emailVerified' => false,
        'password' => $password,
        'disabled' => false,
    ];

    $createdUser = $auth->createUser($userProperties);
    
    if($createdUser){
        $_SESSION['success'] = "Usuario registrado exitosamente";
        header('Location: login.php');
        return;
    }
    else {
        $_SESSION['error'] = "Registro fallido";
        header('Location: register.php');
        return;
    }

    }
    catch (Exception $e) {
        $_SESSION['error'] = "Este correo se encuentra registrado";
        header('Location: register.php');
        return;
    }
    
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Inicio de sesión</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body class="d-flex flex-column h-100">

<main class="flex-shrink-0">
<body>
    <?php include("navbar.php")?>

    
        <form class="form-login" method="POST">
            <h1>Registro</h1>
            <div class="form-group">
                <label for="nam">Correo electrónico</label>
                <input type="email" name="email" class="form-control" id="nam" placeholder="Ingrese el usuario"><br/>
            </div>
            <div class="form-group">
                <label for="id_1723">Contraseña</label>
                <input type="password" name="pass" id="id_1723" class="form-control" placeholder="Ingrese la contraseña"><br/>
            </div>
            <?php
            if ( isset($_SESSION['error']) ) {
                echo '<p style="color: red;">'.htmlentities($_SESSION['error'])."</p>\n";
                unset($_SESSION['error']);
            }

            ?>
            <div class="form-check">
                <input type="submit" name="reg_btn"value="Registrar usuario">
                <input type="submit" name="cancel" value="Cancelar">
            </div>
        </form>
</main>       
</body>
</html>
