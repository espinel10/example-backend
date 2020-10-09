
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

    <style>
        table {
            border-collapse: collapse;
            width: 70%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>




</head>

<body id="brindo-song">

    <!-- MENÙ-->
    <div class="wrapper">
            <nav class="navbar navbar-expand-md navbar navbar-dark brindo-navbar">
                <a href="../../../" class="navbar-left "><img class="logo" src="https://image.flaticon.com/icons/png/512/723/723164.png"></a>
                <a class="navbar-brand" href="../../../">Example</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="clients_home.php">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="users_home.php">usuarios</a>
                        </li>
                        <li class="nav-item active">
                        <form action="" method="post"></form>
                            <a class="nav-link" href="logout.php">SALIR<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" >
                            <?php
                            session_name('login');
                            session_start();
                            $lastTimeClient = $_SESSION['last_time_client'];
                            // Verificación del tiempo de inactividad del usuario mediante una sesion de usuario
                            // FORMATO  March 10, 2001, 5:16 pm
                            echo 'Último acceso '.date("F j, Y, g:i a", $lastTimeClient);
                            ?>
                            </a>
                        </li>

                    </ul>

                </div>
            </nav>
        </div>

    <!--base de datos-->
    <?php
  $enlace = mysqli_connect("sql304.tonohost.com", "ottos_26809991", "pele1234","ottos_26809991_20201B103");
    if (!$enlace) {
        echo "Error en la conexion con el servidor";
    }
    ?>

    <div class="login-client">
        <h2>USUARIOS</h2>
    </div>

    <!--Ciudades -->
	<div class="contenedor">

    <h2 class="tittle" style="margin-left:30%">Agregar usuarios</h2>
		<form action="#" class="formulario" id="formulario" name="formulario" method="POST">
			<div class="contenedor-inputs" style="margin-left:30%">
                <input type="text" name="name" placeholder="Nombre"><br>
                <input type="password" name="password" placeholder="password"><br>
			</div>

			<input type="submit" class="btn btn-success "  style="margin-left:40%" name="registrarse" value="Agregar">
		</form>
    </div>


    <?php
//REGISTRA LOS DATOS EN LA BASE
    if(isset($_POST['registrarse'])){
        $nombre = $_POST["name"];
        $password= $_POST["password"];

        $insertarDatos = "INSERT INTO users (name,password) VALUES('$nombre','$password')";

        $ejecutarInsertar = mysqli_query($enlace,$insertarDatos);
        if(!$ejecutarInsertar){
            echo"Error en la línea de sql";
        }


    }
?>


<h2 class="tittle" style="margin-left:30%">Actualizar</h2>
		<form action="#" class="formulario" id="formulario" name="formulario" method="POST">
            <div class="contenedor-inputs" style="margin-left:30%">
                <input type="number" name="id" placeholder="Id-Users"><br>
                <input type="text" name="name" placeholder="Nombre"><br>
                <input type="password" name="password" placeholder="password"><br>
			</div>

			<input type="submit" class="btn btn-success "  style="margin-left:40%" name="actualizar" value="Actualizar">
		</form>
    </div>


    <?php
//REGISTRA LOS DATOS EN LA BASE
    if(isset($_POST['actualizar'])){
        $id = $_POST["id"];
        $nombre = $_POST["name"];
        $password= $_POST["password"];
        $insertarDatos = "UPDATE users SET name='$nombre',password='$password' WHERE id_users= '$id';";

        $ejecutarInsertar = mysqli_query($enlace,$insertarDatos);
        if(!$ejecutarInsertar){
            echo"Error en la línea de sql";
        }


    }
?>

<h2 class="tittle" style="margin-left:30%">Eliminar</h2>
		<form action="#" class="formulario" id="formulario" name="formulario" method="POST">
            <div class="contenedor-inputs" style="margin-left:30%">
                <input type="number" name="id" placeholder="Id-Users"><br>
			</div>

			<input type="submit" class="btn btn-success "  style="margin-left:40%" name="eliminar" value="eliminar">
		</form>
    </div>


    <?php
//REGISTRA LOS DATOS EN LA BASE
    if(isset($_POST['eliminar'])){
        $id = $_POST["id"];
        $insertarDatos = "DELETE FROM users WHERE id_users= '$id'";

        $ejecutarInsertar = mysqli_query($enlace,$insertarDatos);
        if(!$ejecutarInsertar){
            echo"Error en la línea de sql";
        }


    }
?>

<h2 class="tittle" style="margin-left:30%">Listas de usuarios</h2>
<?php
    //lista las ciudades

    if ($enlace) {
        $queryOrders =
            "SELECT *
            FROM `users` ;";
        $resultado = mysqli_query($enlace, $queryOrders);


        if ($resultado) {
    ?>
            <div>
                <table style="width:500; border:1; bordercolor: #5F5F5F; bgcolor: #F68D2E; margin-left:20%">
                    <th><b>id </b><br></th>
                    <th><b>Name </b><br></th>
                    <th><b>password </b><br></th>

                    <?php

                    while ($row = $resultado->fetch_array()) {
                        $id = $row['id_users'];
                        $nombre = $row['name'];
                        $password = $row['password'];

                    ?>
                        <tr>
                            <th><?php echo $id ?><br></th>
                            <th><?php echo $nombre ?><br></th>
                            <th><?php echo $password ?><br></th>
                        </tr>
                    <?php
                    } ?>
                </table>
            </div> <?php

                } else {
                    echo "no sirve";
                }
            }    ?>









    <?php
    //////cerrar la coneccion
    mysqli_close($enlace);
    ?>






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
