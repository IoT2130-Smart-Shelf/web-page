<?php
    session_start();
    include('includes/dbconfig.php');
    if(isset($_POST['reg_btn'])){

    try {
    $token = $_POST['token'];
    $prName = $_POST['prname'];
    $prPrize = $_POST['prprize'];
    $prQty = $_POST['prqty'];
    $prTam = $_POST['prtam'];
    $prUnt = $_POST['prunt'];

    $postData = [
        'Cantidad' => $prQty,
        'Nombre' => $prName,
        'Precio' => $prPrize,
        'Tamano' => $prTam,
        'UnidadMedida' => $prUnt
    ];
    $ref_table = "/Tiendas/MaxiDespensa/Productos/$token";
    $database->getReference($ref_table)->update($postData);
    $_SESSION['success'] = "Producto Actualizado";
    $response = file_get_contents('https://api.thingspeak.com/update?api_key=A444YRSEAZKLS3KB&field1=2');
    header('Location: products.php');
    return;

    }
    catch (Exception $e) {
        $_SESSION['error'] = "Datos inválidos";
        header('Location: products.php');
        return;
    }

    }
?>