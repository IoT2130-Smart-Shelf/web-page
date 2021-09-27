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
        <title>Acerca de Smart Shelf</title>
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
                    <p class="lead fw-normal text-white-50 mb-4">Utilizamos sensores ultrasónicos de distancia, sensores de tiempo de vuelo y cámaras para monitorear tus estantes; todo esto 
            integrado en una tarjeta Raspberry 3B+, donde también se encuentran acopladas nuestras etiquetas de precio electrónicas. </p>
                </div>
            </div>
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="images/highlevel.gif" alt="estante supermercado" /></div>
        </div>
    </div>
</header>

<!-- About assembly-->
<section class="py-5 bg-light">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="images/zoomshelf.png" alt="Reabastecimiento" /></div>
            <div class="col-lg-6">
                <h2 class="fw-bolder">Instalación del sistema</h2>
                <p class="lead fw-normal text-muted mb-0">Instalamos nuestro sistema en tus estantes.</p>
            </div>
        </div>
    </div>
</section>

<!-- Features section-->
<section class="py-5" id="features">
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0">Sobre nuestra solución</h2></div>
            <div class="col-lg-8">
                <div class="row gx-5 row-cols-1 row-cols-md-2">
                    <div class="col mb-5 h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-tag"></i></div>
                        <h2 class="h5">Actualización de precios</h2>
                        <p class="mb-0">Actualiza precios e información de las etiquetas de manera remota.</p>
                    </div>
                    <div class="col mb-5 h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-exclamation-circle"></i></div>
                        <h2 class="h5">Alertas de desabastecimiento</h2>
                        <p class="mb-0">Recibe notificaciones para reabastecimiento.</p>
                    </div>
                    <div class="col mb-5 mb-md-0 h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-cloud"></i></div>
                        <h2 class="h5">Almacenamiento de datos en la nube</h2>
                        <p class="mb-0">Nuestros sensores transmiten a la nube toda su información.</p>
                    </div>
                    <div class="col h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-file-bar-graph"></i></div>
                        <h2 class="h5">Analítica de datos</h2>
                        <p class="mb-0">Recibe reportes sobre la tendencia de los productos a agotarse en los estantes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team members section-->
<section class="py-5 bg-light">
    <div class="container px-5 my-5">
        <div class="text-center">
            <h2 class="fw-bolder">Nuestro equipo</h2>
            <p class="lead fw-normal text-muted mb-5">Dedicados a brindarte un servicio de calidad</p>
        </div>
        <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
            <div class="col mb-5 mb-5 mb-xl-0">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="images/FotoSebastian.jpeg" alt="Foto de Sebastian Barreto" width="210"/>
                    <h5 class="fw-bolder">Sebastián Barreto</h5>
                    
                </div>
            </div>
            <div class="col mb-5 mb-5 mb-xl-0">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="images/carolina.jpg" alt="Foto de Carolina Burgos" width="210"/>
                    <h5 class="fw-bolder">Carolina Burgos</h5>
                    
                </div>
            </div>
            <div class="col mb-5 mb-5 mb-sm-0">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="images/edwin.jpeg" alt="Foto de Edwin Caicedo" width="210"/>
                    <h5 class="fw-bolder">Edwin Caicedo</h5>
                    
                </div>
            </div>

        </div>
    </div>
</section>

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