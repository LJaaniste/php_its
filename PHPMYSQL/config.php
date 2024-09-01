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



<<<<<<< HEAD
    //otsing
    if (!empty($_GET["s"])){  //isset
      $s = $_GET["s"];
      $paring = 'SELECT album, hind FROM albumid WHERE album LIKE "%'.$s.'%" ';
    } else {

    

    //päring, mille saadan andmebaasi
         $paring = " SELECT album, hind FROM albumid ORDER BY artist ASC LIMIT 10";
    }     

         //saadan soovitud ühendusele minu päringu
         $valjund = mysqli_query($yhendus, $paring);
         // sikutame andmebaasist kõik vastused
         
         while($rida = mysqli_fetch_assoc($valjund)) {        
         //print_r($rida);
         //echo $rida['artist']." - ".$rida["album"]."<br>";
         echo '

         <div class="col">
    <div class="card">
      <img src="https://picsum.photos/400/400" alt="pildike">
      
      <div class="card-body">
      
        <h5 class="card-title">'.$rida['album'].'</h5>
        <p class="card-text">'.$rida['hind'].'€</p>
        <a href="#" class="btn btn-danger">Osta</a>
        <a href="index.php?del=kustuta&id=' .$rida['id']. '" class="btn btn-warning">"Kustuta"</a>
        <a href="edit.php?del=' .$rida['id']. '" class="btn btn-warning">"Kustuta"</a>
      </div>
    </div>
  </div>
  
      ';
         }
    ?>

   </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
=======
?>
>>>>>>> 12ac64ce31ee9310c772eac8543b7f7f9be48adf
