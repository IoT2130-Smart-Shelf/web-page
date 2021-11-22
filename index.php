<?php

session_start();

include('includes/GFirestone.php');
$store='MaxiDespensa';
$fs = new GFirestone($store);
$products = $fs->getProductos();
$token = '/t/';
foreach ($products as $prod){
    //$message = ";
    $message = $prod["Cantidad"].$token.$prod["Fabricante"].$token.$prod["Id"].$token.$prod["Imagen"].$token.$prod["Nombre"].$token.$prod["Precio"].$token.$prod["Tamano"].$token.$prod["UnidadMedida"];
    $url = 'https://api.thingspeak.com/update.json?api_key=75RJHS14YYDV4XEU&/json';
    print($message);

    $data = [ 'field1' => $message];

    $options = array(
        'http' => array(
        'method'  => 'GET',
        'content' => json_encode( $data ),
        'header'=>  "Content-Type: application/json\r\n" .
                    "Accept: application/json\r\n"
        )
    );  
    $context  = stream_context_create( $options );
    $result = file_get_contents( $url, false, $context );
    //$response = json_decode( $result );
    sleep(20);
}

//Fall through into the view
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Smart Shelf</title>
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

<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-5 fw-bolder text-white mb-2">Smart Shelf</h1>
                    <p class="lead fw-normal text-white-50 mb-4">Implementamos un sistema IoT para el control y monitoreo de estanterías para tu supermercado o minimercado. </p>
                </div>
            </div>
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="images/shelf.jpg" alt="estante supermercado" /></div>
        </div>
    </div>
</header>

<!-- Function one-->
<section class="py-5" id="scroll-target">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="images/pricetag.png" alt="electronic price tag" /></div>
            <div class="col-lg-6">
                <h2 class="fw-bolder">Etiquetas de precio electrónicas</h2>
                <p class="lead fw-normal text-muted mb-0">Instalamos etiquetas de precio electrónicas para ser actualizadas de manera remota.</p>
            </div>
        </div>
    </div>
</section>
<!-- Function two-->
<section class="py-5 bg-light">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="images/restock.webp" alt="Reabastecimiento" /></div>
            <div class="col-lg-6">
                <h2 class="fw-bolder">Monitoreo de estantes</h2>
                <p class="lead fw-normal text-muted mb-0">Recibe alertas cuando sea necesario reabastecer los estantes.</p>
            </div>
        </div>
    </div>
</section>


<!-- Function three-->
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="images/userplatform.jpg" alt="electronic price tag" /></div>
            <div class="col-lg-6">
                <h2 class="fw-bolder">Plataforma de usuario</h2>
                <p class="lead fw-normal text-muted mb-0">Modifica los precios, recibe notificaciones para reabastecer y encuentra analítica de datos
                    desde nuestra plataforma web.
                </p>
            </div>
        </div>
    </div>
</section>
<div class="py-5 bg-light">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
        <div class="col-lg-8 col-xxl-6">
            <div class="text-center">
                <h1 class="fw-bolder mb-3">Nuestra misión es ahorrarte tiempo y recursos para la administración de tus estantes</h1>
                <p class="lead fw-normal text-muted mb-4">Smart Shelf es una solución IoT basada en sensores, procesamiento de imágenes y almacenamiento de datos en la nube.</p>
                <a class="btn btn-primary btn-lg" href="about.php">Conoce más</a>
            </div>
        </div>
        </div>
    </div>
</div>


</main>
<?php include("footer.php");?>

</body>
</html>