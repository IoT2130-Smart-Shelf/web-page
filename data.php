<?php

session_start();
include('includes/GFirestone.php');
//Fall through into the view
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Datos</title>
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
                    <h1 class="display-4 fw-bolder">Datos</h1>

                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">

            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1481979/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Sensor+Ultrasonido+1&type=line&xaxis=Fecha&yaxis=Distancia+%28cm%29"></iframe>

            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1481979/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Sensor+Ultrasonido+2&type=line&xaxis=Fecha&yaxis=Distancia+%28cm%29"></iframe>

            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1481979/charts/3?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Sensor+Ultrasonido+3&type=line"></iframe>
            
        </section>
        </main>    
    </body>

    <?php include("footer.php");?>
</html>