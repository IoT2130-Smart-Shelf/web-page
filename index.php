<?php

session_start();

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
            <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="images/pricetag.png" alt="electronic price tag" /></div>
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