<nav class="navbar navbar-customclass navbar-expand-lg">
        <a class="navbar-brand" href="index.php">Smart Shelf</a>
        <a class="navbar-brand" href="#">Maxi Despensa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="promociones.php">Productos <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="productos.php">Promociones</a>
                </li>
                <?php if ($loggedin == 0){
                    echo ("<li class='nav-item disabled'>
                    <a class='nav-link' href='login.php'>Inicio de Sesión</a>
                </li>" );
                }?>   
            
            </ul>
        </div>
        <?php
            if ($loggedin == 0) {
                echo(htmlentities($session_status));
            }
            else {
                echo("<a class='nav-link' href='logout.php'>$session_status</a>");
            }
            
        ?>
    </nav>