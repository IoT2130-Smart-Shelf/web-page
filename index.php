<?php

session_start();

//Fall through into the view
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
<?php include("navbar.php")?>

<div id="title-box">
    <h1>Smart Shelf</h1>
    <p>Sistema de control y monitoreo de estanterías</p>
</div>

<div id="img-info">
    <img class="img2s" src="images/twoshelves.png" alt="Render of smart shelf">
    
    <p class="info">  Smart Shelf es un sistema de control y monitoreo de estanterías en tiendas como supermercados y minimercados. Se implementan 
    etiquetas de precio electrónicas, eliminando la necesidad de imprimir y reemplazar etiquetas de papel. Por otro lado, se implementa un monitoreo 
    de los estantes utilizando cámaras y sensores de distancia con tecnologías de ultrasonido y láser, con el cual se notifica cuando sea necesario 
    reaprovisionar los productos en una estantería específica o cuando un producto está ubicado en el estante incorrecto.

    Por medio del sitio web, la persona encargada de la tienda puede actualizar la información de las etiquetas de manera remota y verificar si hacen 
    falta productos. En este mismo sitio es también posible consultar tendencias de precios e información sobre los productos que se agotan con mayor 
    frecuencia en las estanterías, teniendo en cuenta los días y las horas en las que los clientes los retiran.
    </p> 

    <img class="imgzoom" src="images/zoom shelf.png" alt="Render of smart shelf">
</div>

<div id="function">
    <h1>¿Cómo funciona Smart Shelf?</h1>
</div>

<div id="architecture">

<img class="gif-show1" src="images/highlevel.gif" alt="Gif con arquitectura de alto nivel">

<p class="descript">Smart Shelf implementa un sistema IoT compuesto de sensores de distancia de ultrasonido, sensores de tiempo de vuelo y cámaras,
        todo localizado en una Raspberry Pi 3B+. Utiliza pantallas como etiquetas de precio electrónicas e integra la interacción del usuario a través 
        de la plataforma web.
</p>

<img class="gif-show2" src="images/Imagen2.gif" alt="Gif con arquitectura de alto nivel parte 2">


</div>

</body>
</html>