<?php include("config.php"); ?>

<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Muusikapood OÜ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <div class="container">

    <h1>Maailma imelikumad albumid</h1>
  <h2>Uue albumi lisamine</h2>
  <form action="#" method="get">
    artist <input type="text" name="artist"><br>
    album <input type="text" name="album"><br>
    aasta <input type="number" name="aasta" min="1900"><br>
    hind <input type="number" name="hind" step="0.01"><br>
    <input type="submit" value=" + Lisa uus" name="lisa">
</form>



  <h2>Otsing</h2>
    <form action="" method="get">
      Otsi: <input type="text" name="s">
      <input type="submit"  value="Otsi">

    <div class="row row-cols-1 row-cols-md-6 g-4 pt-4">


    <?php
    // lisamine
    if(!empty($_GET["lisa"])){
      $artist = $_GET["artist"];
      $album = $_GET["album"];
      $aasta = $_GET["aasta"];
      $hind = $_GET["hind"];

       $paring = "INSERT INTO albumid(artist, album, aasta, hind) VALUES ('$artist', '$album', '$aasta', '$hind')";
       // ($paring);
       $valjund = mysqli_query($yhendus, $paring);
       if($valjund){
          echo "Lisamine õnnestus";
    } else {
      echo "Lisamine ebaõnnestus";

    }
    }

    //kustutamine
    if(!empty($_GET["del"]) && !empty($_GET["id"])){
      $del = $_GET["del"];
      $id = $_GET["id"];

      $paring = "DELETE FROM albumid WHERE id=$id";
      $valjund = mysqli_query($yhendus, $paring);
      if($valjund){
        echo "Kustutamine õnnestus";
        header("Location: index.php?msg=true");

      }else{
        echo "Kustutamine ebaõnnestus!";
        header("Location: index.php?msg=false");
      }

    }

    //otsing
    if (!empty($_GET["s"])){  //isset
      $s = $_GET["s"];
      $paring = 'SELECT id, album, hind FROM albumid WHERE album LIKE "%'.$s.'%" ';
    } else {

    

    //päring, mille saadan andmebaasi
         $paring = " SELECT id, album, hind FROM albumid ORDER BY artist ASC LIMIT 10";
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
        <a href="index.php?del=kustuta&id='.$rida['id'].'" class="btn btn-warning"> Kustuta</a>
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