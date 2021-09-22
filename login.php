<?php // Do not put any HTML above this line

session_start();
if ( isset($_POST['cancel'] ) ) {
    // Redirect the browser to game.php
    header("Location: index.php");
    return;


}

if (!isset($_SESSION['name'])){
    $loggedin = 0;
    $session_status = 'Sin inicio de sesión';
}
else {$session_status = 'Cerrar sesión';
    $loggedin = 1; }


$salt = 'XyZzy12*_';
$stored_hash = '1a52e17fa899cf40fb04cfc42e6352f1';  // Pw is php123

$failure = false;  // If we have no POST data

// Check to see if we have some POST data, if we do process it
if ( isset($_POST['email']) && isset($_POST['pass']) ) {

    if ( strlen($_POST['email']) < 1 || strlen($_POST['pass']) < 1 ) {
        
        $_SESSION['error'] = "Se requiere usuario y contraseña";
        header("Location: login.php");
        return;
    } 

    else {
        $check = hash('md5', $salt.$_POST['pass']);
        if ( $check == $stored_hash ) {
            // Redirect the browser to view.php
            error_log("Login success ".$_POST['email']);
            $_SESSION['name'] = $_POST['email'];
            header("Location: index.php");
            return;
        } else {
           
            $_SESSION['error'] = "Contraseña incorrecta";
            error_log("Login fail ".$_POST['email']." $check");
            header("Location: login.php");
            return;
            
        }
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
    <nav class="navbar navbar-customclass navbar-expand-lg">
        <a class="navbar-brand" href="index.php">Smart Shelf</a>
        <a class="navbar-brand" href="#">Maxi Despensa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="promociones.php">Productos <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="productos.php">Promociones</a>
                </li>
                <li class="nav-item disabled">
                    <a class="nav-link" href="login.php">Inicio de Sesión</a>
                </li>
            </ul>
        </div>
        <?php
            if ($loggedin == 0) {
                echo(htmlentities($session_status));
            }
            else {
                echo("<a class='nav-link' href='logout.php'>Cerrar sesión</a>");
            }
            
        ?>
    </nav>

<div class="container">
<h1>Inicie sesión</h1>

<?php
if ( isset($_SESSION['error']) ) {
    echo('<p style="color: red;">'.htmlentities($_SESSION['error'])."</p>\n");
    unset($_SESSION['error']);
}
?>

<form method="POST">
<label for="nam">Nombre de usuario</label>
<input type="text" name="email" id="nam"><br/>
<label for="id_1723">Contraseña</label>
<input type="text" name="pass" id="id_1723"><br/>
<input type="submit" value="Iniciar sesión">
<input type="submit" name="cancel" value="Cancelar">
</form>


</div>
</body>
</html>
