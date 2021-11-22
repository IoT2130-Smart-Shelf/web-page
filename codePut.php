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
    $response = file_get_contents('https://api.thingspeak.com/update?api_key=A444YRSEAZKLS3KB&field1=1');

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