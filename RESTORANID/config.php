<?php
$kasutaja = "leena";
$dbserver = "localhost";
$andmebaas = "restoranid";
$pw = "Password";

$yhendus = mysqli_connect($dbserver, $kasutaja, $pw, $andmebaas);
if(!$yhendus){
    // echo "jama majas";
    die("Sa jälle ebaõnnestusid!");
} 

?>