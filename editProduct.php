<?php

session_start();
include('includes/GFirestone.php');
include('includes/dbconfig.php');
//Fall through into the view
$token = $_GET['token'];
        
$store='MaxiDespensa';
$fs = new GFirestone($store);
$products = $fs->getProductos();


if ( isset($_POST['cancel'] ) ) {
    // Redirect the browser to game.php
    header("Location: products.php");
    return;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
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


    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">

        <?php include("navbar.php");?>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Editar Producto</h1>
                    <p class="lead fw-normal text-white-50 mb-0"><?php echo $store?></p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        <form class="form-login" action="codePut.php" method="POST">
            <input type="hidden" name="token" value="<?php echo $token;?>">
            <div class="form-group">
                <label for="nam">Nombre</label>
                <?php  
                    foreach ($products as $product){
                        if($product['Token'] == $token){
                            $prod = $product;
                            break;
                        }
                    }
                ?>
                <input name="prname" class="form-control" id="nam" value="<?php echo $prod['Nombre'];?>" placeholder="Ingrese nombre del producto"><br/>
            </div>
            <div class="form-group">
                <label for="id_1723">Precio</label>
                <input  name="prprize" id="id_1723" class="form-control" value="<?php echo $prod['Precio'];?>" placeholder="Ingrese el precio"><br/>
            </div>
            <div class="form-group">
                <label for="id_1723">Tamaño</label>
                <input name="prtam" id="id_1723" class="form-control" value="<?php echo $prod['Tamano'];?>" placeholder="Ingrese el tamaño"><br/>
            </div>
            <div class="form-group">
                <label for="id_1723">Unidad de medida</label>
                <input name="prunt" id="id_1723" class="form-control" value="<?php echo $prod['UnidadMedida'];?>" placeholder="Ingrese la unidad de medida"><br/>
            </div>
            <div class="form-group">
                <label for="id_1723">Cantidad</label>
                <input name="prqty" id="id_1723" class="form-control" value="<?php echo $prod['Cantidad'];?>" placeholder="Ingrese la cantidad del producto en el estante"><br/>
            </div>
            <?php
            if ( isset($_SESSION['error']) ) {
                echo '<p style="color: red;">'.htmlentities($_SESSION['error'])."</p>\n";
                unset($_SESSION['error']);
            }

            ?>
            <div class="form-check">
                <input type="submit" name="reg_btn" value="Actualizar información">
                <input type="submit" name="cancel" value="Cancelar">
            </div>
        </form>   
                </div>
            </div>
        </section>
        </main>    
    </body>

    <?php include("footer.php");?>
</html>