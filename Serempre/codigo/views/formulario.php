

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
    <link rel="stylesheet" href="../css/plantilla.css">
    <link rel="stylesheet" href="../css/formulario.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit" />
    <meta name="distribution" content="global" />
    <meta name="Keywords" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit" />
    <meta name="Robots" content="all" />
    <meta name="author" content="Alejandro José Espinel Perez" />
    <meta name="copyright" content="Alejandro José Espinel Perez" />
    <title>Example</title>



    <script>
        function showHint(str) {
        if (str.length == 0) {
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            if (this.responseText=="CIUDAD NUEVA"){
              
                document.getElementById("txtHint").innerHTML = this.responseText;
            }else{
                document.getElementById("city").value =this.responseText;
                document.getElementById("txtHint").innerHTML = "CIUDAD EXISTENTE";  
            }
            
               
            }
            };


            xmlhttp.open("GET", "../scripts/gethint.php?q=" + str, true);
            xmlhttp.send();
        }
        }

    </script>


</head>

<body id="brindo-song">
    
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
                        <a class="nav-link" href="../../index.php">Inicio<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Desarrollador del sitio</a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link" href="#">Formulario con ajax</a>
                    </li>
                </ul>
                <!-- NAV BAR ALINEADO A LA DERECHA -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="users/clientLogin.php">Users</a>
                    </li>
                </ul>
              
            </div>
        </nav>
    </div> 

    <p><span id="txtHint"></span></p>

    <div class="cv-form">
     <form action="#" target="_blank" method="post">
        <div class="form-group">
                <span class="contacto-form-titulo">
                    <h3>Formulario  con ajax</h3>
                </span>
                    <div class="input-validacion" data-validate="Please Type Your Name">
                        <span class="label-input">Escriba el nombre de la ciudad haber si existe de existir se autocompleta el formulario</span>
                        <input class="form-control" type="text" id="username" name="username" placeholder="ciudad" onkeyup="showHint(this.value)">
                        <input class="form-control" type="text" id="city" name="city" placeholder="city" >
                    </div>
                    </div>

             <input type="submit" class="btn btn-success" value="enviar">
           
        </div>
    </form>            

    </div>
    <!-- DISEÑO A 3 COLUMNAS -->


    <!-- Jquery para las animaciones de la página -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    
    <!-- ajax -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="codigo/jquery/animaciones.js"></script>
    <script src="codigo/jsFunctions/cargarAudio.js"></script>
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
