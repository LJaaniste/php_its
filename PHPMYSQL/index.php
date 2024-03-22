<?php
$kasutaja = "leena";
$dbserver = "localhost";
$andmebaas = "muusikapood";
$pw = "Password";

$yhendus = mysqli_connect($dbserver, $kasutaja, $pw, $andmebaas);
if(!$yhendus){
    // echo "jama majas";
    die("Sa jälle ebaõnnestusid!");
} 



?>