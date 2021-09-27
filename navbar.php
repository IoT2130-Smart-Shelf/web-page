<?php 

if(isset($_SESSION['loggedin'])){
$loggedin = 1;
$session_status = 'Cerrar sesión';
}else {$loggedin=0;
    $session_status = 'Sin inicio de sesión';}
?> 


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
        <a class="navbar-brand" href="index.php">Smart Shelf</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="about.php">Acerca de</a></li>
            
                <?php if ($loggedin == 0){ ?>
            <li class='nav-item'>
                    <a class='nav-link' href='login.php'>Inicio de Sesión</a>
                </li>
                <?php } 
                else { ?>
                   
                   <li class="nav-item"><a class="nav-link" href="products.php">Productos <span class="sr-only"></span></a></li>
                   <li class="nav-item"><a class="nav-link" href="promotions.php">Promociones</a></li>
                   <a class='nav-link' href='logout.php'>Cerrar sesión</a>
                
                <?php } ?>    
            </ul>
        </div>

    </div>
</nav>
