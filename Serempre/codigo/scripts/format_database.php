<?php
$enlace = mysqli_connect("sql304.tonohost.com", "ottos_26809991", "pele1234","ottos_26809991_20201B103");
if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
//SCRIPT PARA FORMATEAR LA BASE DE DATOS E INSERTAR MANUALMENTE,

$queryDropClients =  'DROP TABLE IF EXISTS clients;';
$resultado = mysqli_query($enlace, $queryDropClients);

if (!$resultado) {
    die('Error borrando los clientes');
}


$queryDropUsers =  'DROP TABLE IF EXISTS users;';
$resultado = mysqli_query($enlace, $queryDropUsers);
if (!$resultado) {
    die('Error borrando los usuarios');
}


$queryDropCities =  'DROP TABLE IF EXISTS cities;';
$resultado = mysqli_query($enlace, $queryDropCities);

if (!$resultado) {
    die('Error borrando los clientes');
}

//SE CREA LA BASE DE DATOS, HAY QUE EJECUTARLO UNA VEZ

$resultado = mysqli_query($enlace, 'CREATE TABLE IF NOT EXISTS clients(
    id_clients INT(3) NOT NULL AUTO_INCREMENT,
    name varchar(155),
    city CHARACTER varying(40) NOT NULL,
    CONSTRAINT id_clients_pk PRIMARY KEY (id_clients)
  );');
if (!$resultado) {
    die('Error, creando clientes');
}

$resultado = mysqli_query($enlace, 'CREATE TABLE IF NOT EXISTS users(
    id_users INT(3) NOT NULL AUTO_INCREMENT,
    name varchar(155) NOT NULL UNIQUE,
    password CHARACTER varying(255) NOT NULL,
    CONSTRAINT id_users_pk PRIMARY KEY (id_users)
  );');
if (!$resultado) {
    die('Error, creando usuarios');
}


$resultado = mysqli_query($enlace, 'CREATE TABLE IF NOT EXISTS cities(
    id_cities INT(3) NOT NULL AUTO_INCREMENT,
    name varchar(155)  NOT NULL,
    CONSTRAINT id_cities_pk PRIMARY KEY (id_cities)
  );');
if (!$resultado) {
    die('Error, creando las ciudades');
}


////////////////insertando los clientes
$queryClients =  'INSERT INTO clients
(name, city) VALUES ("Lionel","barcelona"),("cristiano","juventus"),("Pirlo","turin"),("casillas","madrid"),("alberto","paris");';
$resultado = mysqli_query($enlace, $queryClients);

if (!$resultado) {
    die('Error, insertando clients, ANTES DEBES CREAR LAS TABLAS');

}
///////insertando los usuarios

$queryUsers =  'INSERT INTO users
(name, password) VALUES ("root","toor"),("admin","clavesegura1234");';
$resultado = mysqli_query($enlace, $queryUsers);

if (!$resultado) {
    die('Error, insertando clients, ANTES DEBES CREAR LAS TABLAS');

}

/////////ingreando ciudades

$queryCities =  'INSERT INTO cities
(name) VALUES ("jalisco"),("purto vallarta"),("madrid"),("barcelona"),("atenas");';
$resultado = mysqli_query($enlace, $queryCities);

if (!$resultado) {
    die('Error, insertando cities, ANTES DEBES CREAR LAS TABLAS');

}

echo('Base de datos formateada!!');
mysqli_close($enlace);

?>
