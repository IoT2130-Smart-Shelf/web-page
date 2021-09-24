<?php // Do not put any HTML above this line
session_start();
include('includes/dbconfig.php');

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
        $_SESSION['error'] = "El usuario ya existe";
        header('Location: register.php');
        return;
    }
    
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registro de Usurio</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
    <link rel="stylesheet" href="css/style.css">
</head>
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
        
</body>
</html>
