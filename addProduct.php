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
    <form class="form-add-product">
        <div class="form-group">
            <label for="nameProduct">Nombre</label>
            <input type="text" class="form-control" id="nameProduct" placeholder="Ingrese nombre del producto">
        </div>
        <div class="form-group">
            <label for="quantityProduct">Cantidad</label>
            <input type="number" class="form-control" id="quantityProduct" placeholder="Ingrese la cantidad del producto">
        </div>
        <div class="form-group">
            <label for="producerProduct">Fabricante</label>
            <input type="text" class="form-control" id="producerProduct" placeholder="Ingrese el fabricante del producto">
        </div>
        <div class="form-group">
            <label for="imageProduct">Imagen</label>
            <input type="text" class="form-control" id="imageProduct" placeholder="Cargue la imagen del producto">
        </div>
        <div class="form-group">
            <label for="priceProduct">Precio</label>
            <input type="number" class="form-control" id="priceProduct" placeholder="Ingrese el precio del producto">
        </div>
        <div class="form-group">
            <label for="priceUnitProduct">Precio por unidad</label>
            <input type="number" class="form-control" id="priceUnitProduct" placeholder="Ingrese el precio por unidad del producto">
        </div>
        <div class="form-group">
            <label for="sizeProduct">Tamaño</label>
            <input type="number" class="form-control" id="sizeProduct" placeholder="Ingrese el tamaño del producto">
        </div>
        <div class="form-group">
            <label for="measureProduct">Unidad de medida</label>
            <input type="text" class="form-control" id="measureProduct" aria-describedby="measureHelp" placeholder="Ingrese la unidad de medida del producto">
            <small id="measureHelp" class="form-text text-muted">Ejemplo: L (Litros), g (gramos)...</small>
        </div>
        <button type="submit" class="btn btn-primary" id="buttonAddProduct" style="background-color: <?php echo $colorButton;?>; ">Agregar Producto</button>
    </form>
</body>
</html>