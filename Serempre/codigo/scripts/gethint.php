<?php
// Array with names


// get the q parameter from URL
$q = $_REQUEST["q"];


if (isset($q) && !empty($q)){
$enlace = mysqli_connect("sql304.tonohost.com", "ottos_26809991", "pele1234","ottos_26809991_20201B103");
if (!$enlace) {
    echo "Error: No se pudo conectar al server." . PHP_EOL;
    exit;
}

$query = "SELECT * FROM cities WHERE (name ='".$q."');";

$result = mysqli_query($enlace, $query);

if( $result->num_rows > 0){

  $row = $result->fetch_array(MYSQLI_BOTH);
  echo $row['name'];
 $result->free();
}else{
    echo "CIUDAD NUEVA";
}


mysqli_close($enlace);
}
?>
