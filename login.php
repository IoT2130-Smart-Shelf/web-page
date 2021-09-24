<?php // Do not put any HTML above this line

session_start();
include('includes/dbconfig.php');

if ( isset($_POST['cancel'] ) ) {
    // Redirect the browser to game.php
    header("Location: index.php");
    return;
}


if (isset($_POST['login_btn'])){
    $email = $_POST['email'];
    $clearTextPassword = $_POST['pass'];

    try {
        $user = $auth->getUserByEmail("$email");
        
        try {
            $signInResult = $auth->signInWithEmailAndPassword($email, $clearTextPassword);
            $idTokenString = $signInResult->idToken();

        try {
            $verifiedIdToken = $auth->verifyIdToken($idTokenString);
            $uid = $verifiedIdToken->claims()->get('sub');
            $_SESSION['verified_user_id'] = $uid;
            $_SESSION['idTokenString'] = $idTokenString;

            $_SESSION['loggedin'] = 1;
            header('Location: index.php');
            return;

        } catch (InvalidToken $e) {
            echo 'The token is invalid: '.$e->getMessage();
        } catch (\InvalidArgumentException $e) {
            echo 'The token could not be parsed: '.$e->getMessage();
        }
        }
        catch (Exception $e){   
            $_SESSION['error'] = 'Contraseña incorrecta';
            header('Location:login.php');
            return;
        }
        
    } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
       // echo $e->getMessage();
       $_SESSION['error'] = 'Correo no registrado';
       header('Location:login.php');
       return;
    }
}




// Fall through into the View
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inicio de Sesión</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include("navbar.php")?>

    
        <form class="form-login" method="POST">
            <h1>Iniciar sesión</h1>
            
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
            if ( isset($_SESSION['success']) ) {
                echo '<p style="color: green;">'.htmlentities($_SESSION['success'])."</p>\n";
                unset($_SESSION['success']);
            }
            ?>
            <div class="form-check">
                <input type="submit" name="login_btn" value="Iniciar sesión">
                <input type="submit" name="cancel" value="Cancelar">
            </div>
            
            <br></br>
        <p> ¿No tiene una cuenta? <a href="register.php">Registrese aquí</a>
        </form>
        
</body>
</html>
