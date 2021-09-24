<?php 
    session_start();
    if(isset($_POST['save_push_data'])){
        $quantity = $_POST['quantityProduct'];
        $producer = $_POST['producerProduct'];
        $name = $_POST['nameProduct'];
        $price = $_POST['priceProduct'];
        $priceUnit = $_POST['priceUnitProduct'];
        $size = $_POST['sizeProduct'];
        $unitMeasure = $_POST['measureProduct'];
        $image = $_POST['imageProduct'];

        $data = [
            "Quantity"      =>  $quantity,
            "Producer"      =>  $producer,
            "Name"          =>  $name,
            "Price"         =>  $price,
            "PriceUnit"     =>  $priceUnit,
            "Size"          =>  $size,
            "UnitMeasure"   =>  $unitMeasure,
            "Image"         =>  $image
        ];
        
        $ref = "productos/";
        $postdata = $database->getReference($ref)->push($data);

        if($postdata){
            $_SESSION['status'] = "Data Inserted Successfully";
            header("Location: products.php");
        } else {
            $_SESSION['status'] = "Data Not Inserted";
            header("Location: addProduct.php");
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Agregar Producto</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
    <link rel="stylesheet" href="css/style.css">
    <?php $colorButton = "#F4EB49";?>
</head>
<body>
    <?php include("navbar.php")?>

    <form method="POST" class="form-add-product">
        <div class="form-group">
            <label for="nameProduct">Nombre</label>
            <input type="text" class="form-control" name="nameProduct" id="nameProduct" placeholder="Ingrese nombre del producto">
        </div>
        <div class="form-group">
            <label for="quantityProduct">Cantidad</label>
            <input type="number" class="form-control" name="quantityProduct" id="quantityProduct" placeholder="Ingrese la cantidad del producto">
        </div>
        <div class="form-group">
            <label for="producerProduct">Fabricante</label>
            <input type="text" class="form-control" name="producerProduct" id="producerProduct" placeholder="Ingrese el fabricante del producto">
        </div>
        <div class="form-group">
            <label for="imageProduct">Imagen</label>
            <input type="text" class="form-control" name="imageProduct" id="imageProduct" placeholder="Cargue la imagen del producto">
        </div>
        <div class="form-group">
            <label for="priceProduct">Precio</label>
            <input type="number" class="form-control" name="priceProduct" id="priceProduct" placeholder="Ingrese el precio del producto">
        </div>
        <div class="form-group">
            <label for="priceUnitProduct">Precio por unidad</label>
            <input type="number" class="form-control" name="priceUnitProduct" id="priceUnitProduct" placeholder="Ingrese el precio por unidad del producto">
        </div>
        <div class="form-group">
            <label for="sizeProduct">Tamaño</label>
            <input type="number" class="form-control" name="sizeProduct" id="sizeProduct" placeholder="Ingrese el tamaño del producto">
        </div>
        <div class="form-group">
            <label for="measureProduct">Unidad de medida</label>
            <input type="text" class="form-control" name="measureProduct" id="measureProduct" aria-describedby="measureHelp" placeholder="Ingrese la unidad de medida del producto">
            <small id="measureHelp" class="form-text text-muted">Ejemplo: L (Litros), g (gramos)...</small>
        </div>
        <button type="submit" name="save_push_data" class="btn btn-primary" id="buttonAddProduct" style="background-color: <?php echo $colorButton;?>; ">Agregar Producto
            <?php console.log("Oprimir boton")?>
        </button>
    </form>
    <!-- <script> src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->
</body>x
</html>