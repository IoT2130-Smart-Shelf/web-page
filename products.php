<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("navbar.php")?>
    <title>Productos</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles_products.css" rel="stylesheet" />
</head>
    <body>
        <?php
        require_once 'includes/Google/GFirestone.php';

        $fs = new GFirestore('Tiendas');

        $store='MaxiDespensa';

        $products = $fs->getProductos('MaxiDespensa');
        ?>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Productos</h1>
                    <p class="lead fw-normal text-white-50 mb-0"><?php echo $store?></p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php 
                    foreach ($products as $product){
                    ?>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="<?php echo $product["Imagen"];?>" alt="Foto producto"/>
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><?php echo $product["Nombre"]; echo " "; echo $product["Tamano"]; echo " "; echo $product["UnidadMedida"];?></h5>
                                        <!-- Product price-->
                                        <?php echo $product["Precio"]; echo ' COP';?>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Ver detalles</a></div>
                                </div>
                            </div>
                        </div>
                    <?php 
                    } // end for products
                    ?>
                </div>
            </div>
        </section>
        <?php include("footer.php");?>
    </body>
</html>