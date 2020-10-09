
<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="icon" href="https://image.flaticon.com/icons/png/512/723/723164.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Para los íconos-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Para la familia de la fuente -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Anton" />
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <!-- Para el css principal -->
    <link rel="stylesheet" href="../../css/plantilla.css">
    <link rel="stylesheet" href="../../css/loginForm.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit" />
    <meta name="distribution" content="global" />
    <meta name="Keywords" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit" />
    <meta name="Robots" content="all" />
    <meta name="author" content="Alejandro José Espinel Perez" />
    <meta name="copyright" content="Alejandro José Espinel Perez" />
    <title>Example</title>


</head>

<body id="brindo-song">

<?php 
$bandera=0;
?>


    
    <!-- MENÙ-->
    <div class="wrapper">
        <nav class="navbar navbar-expand-md navbar navbar-dark brindo-navbar">
            <a href="#" class="navbar-left "><img class="logo" src="https://image.flaticon.com/icons/png/512/723/723164.png"></a>
            <a class="navbar-brand" href="#">Serempre</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../../../index.php">Regresar</a>
                    </li>
                 

                </ul>
   
              
            </div>
        </nav>
    </div> 
    <!--Login-->
    <div class="login-client">
        <h2> Restablecer clave</h2>
        <form action="phpmailer/get_correo.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese su nombre" required >
                <input type="text" class="form-control" id="correo" name="correo" placeholder="Ingrese su correo donde va a enviar su nueva password" required >
                <input type="submit" class="btn btn-success" value="Enviar">
                <p id="demo"></p>
            </div>
        </form>

    </div>

    <!-- DISEÑO A 3 COLUMNAS -->
    <div class="why-us">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <!-- Muestra el ícono x5 solo en dispositivos grandes, sino en x3 -->
                    <i class="fa fa-clock-o fa-3x card-img-top why-us-header-icon d-none d-sm-none d-md-block d-lg-block" aria-hidden="true"></i>
                    <i class="fa fa-clock-o fa-2x card-img-top why-us-header-icon .d-block .d-sm-none d-md-none" aria-hidden="true"></i>
                    <div class="card-body">
                        <h3 class="card-title d-none d-sm-none d-md-block d-lg-block">Servicio r&aacute;pido </h3>
                        <p class="card-text d-none d-sm-none d-md-none d-lg-block"> Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        <!-- Sólo para dispositivos pequeños -->
                        <h6 class="d-block d-sm-none small-devices-description">Rápidez</h6>

                    </div>
                </div>
                <div class="best-service-card">

                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <!-- Muestra el ícono x5 solo en dispositivos grandes, sino en x3 -->
                    <i class="fa fa-check-circle-o fa-3x card-img-top why-us-header-icon d-none d-sm-none d-md-block d-lg-block" aria-hidden="true"></i>
                    <i class="fa fa-check-circle-o fa-2x card-img-top why-us-header-icon .d-block .d-sm-none d-md-none" aria-hidden="true"></i>
                    <div class="card-body">
                        <h3 class="card-title d-none d-sm-none d-md-block d-lg-block ">Diversidad </h3>
                        <p class="card-text d-none d-sm-none d-md-none d-lg-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        <!-- Sólo para dispositivos pequeños -->
                        <h6 class="d-block d-sm-none small-devices-description">Variedad</h6>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <i class="fa fa-check-circle-o fa-3x card-img-top why-us-header-icon d-none d-sm-none d-md-block d-lg-block" aria-hidden="true"></i>
                    <i class="fa fa-check-circle-o fa-2x card-img-top why-us-header-icon .d-block .d-sm-none d-md-none" aria-hidden="true"></i>
                    <div class="card-body">
                        <h3 class="card-title d-none d-sm-none d-md-block d-lg-block">Con todas las medidas</h3>
                        <p class="card-text d-none d-sm-none d-md-none d-lg-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        <!-- Sólo para dispositivos pequeños -->
                        <h6 class="d-block d-sm-none small-devices-description">Seguridad</h6>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery para las animaciones de la página -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    
    <!-- ajax -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    
    <footer>
        <div class="container">
            <div class="row">
                
                <div class="col-sm">
                  Alejandro José Espinel Perez
                    <a href="https://www.github.com/espinel10" class="nav-link" target="_blank"><i
                            class="fa fa-github fa-lg"></i></a>
                </div>
            </div>
        </div>

    </footer>

</body>

</html>
