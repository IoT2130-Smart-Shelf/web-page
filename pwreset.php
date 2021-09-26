<?php // Do not put any HTML above this line

session_start();
include('includes/dbconfig.php');

if ( isset($_POST['cancel'] ) ) {
    // Redirect the browser to game.php
    header("Location: login.php");
    return;
}


if (isset($_POST['pw_reset'])){
    $email = $_POST['email'];
    $clearTextPassword = $_POST['pass'];

    try {
        $user = $auth->getUserByEmail("$email");

        $link = $auth->getPasswordResetLink($email);
        $auth->sendPasswordResetLink($email);
        $_SESSION['success'] = 'Ha sido enviado un enlace a su correo para restablecer la contraseña';
        header('Location:login.php');
        return;
        
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
    <?php include("navbar.php");?>

    
        <form class="form-login" method="POST">
            <h1>Ingrese su correo electrónico para restablecer contraseña</h1>
            
            <div class="form-group">
                <label for="nam">Correo electrónico</label>
                <input type="email" name="email" class="form-control" id="nam" placeholder="Ingrese el usuario"><br/>
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
                <input type="submit" name="pw_reset" value="Enviar email">
                <input type="submit" name="cancel" value="Cancelar">
            </div>
            
        
        </form>


</main> 
<!-- Footer -->
<footer class="bg-dark py-4 mt-auto">
    <div class="container px-5">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Smart Shelf 2021</div></div>
           
             <!-- <div class="col-auto">
                <a class="link-light small" href="#!">Privacy</a>
                <span class="text-white mx-1">&middot;</span>
                <a class="link-light small" href="#!">Terms</a>
                <span class="text-white mx-1">&middot;</span>
                <a class="link-light small" href="#!">Contact</a>
            </div>  -->
        </div>
    </div>
</footer>      
</body>
</html>
