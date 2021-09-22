<?php

session_start();

if (!isset($_SESSION['name'])){
    $loggedin = 0;
    $session_status = 'Sin inicio de sesión';
}
else {$session_status = 'Cerrar sesión';
    $loggedin = 1; }
//Fall through the view
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Smart Shelf</title>
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
                    <a class="nav-link" href="productos.php">Productos <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="promociones.php">Promociones</a>
                </li>
                <?php if ($loggedin == 0){
                    echo ("<li class='nav-item disabled'>
                    <a class='nav-link' href='login.php'>Inicio de Sesión</a>
                </li>" );
                }?> 
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

<div id="title-box">
    <h1>Smart Shelf</h1>
    <p>Sistema de control y monitoreo de estanterías</p>
</div>

<div id="img-info">
    <img class="img2s"src="images/twoshelves.png" alt="Render of smart shelf">
    
    <p class="info">  Smart Shelf es un sistema de control y monitoreo de estanterías en tiendas como supermercados y minimercados. Se implementan 
    etiquetas de precio electrónicas, eliminando la necesidad de imprimir y reemplazar etiquetas de papel. Por otro lado, se implementa un monitoreo 
    de los estantes utilizando cámaras y sensores de distancia con tecnologías de ultrasonido y láser, con el cual se notifica cuando sea necesario 
    reaprovisionar los productos en una estantería específica o cuando un producto está ubicado en el estante incorrecto.

    Por medio del sitio web, la persona encargada de la tienda puede actualizar la información de las etiquetas de manera remota y verificar si hacen 
    falta productos. En este mismo sitio es también posible consultar tendencias de precios e información sobre los productos que se agotan con mayor 
    frecuencia en las estanterías, teniendo en cuenta los días y las horas en las que los clientes los retiran.
    </p> 
</div>

</body>
</html>