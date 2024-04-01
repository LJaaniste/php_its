<?php include("config.php"); ?>

<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tallinna maraton</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <div class="container">

  <h1>Tallinna maraton</h1><br>

  <h3>10 nime ja riiki</h3>


  <?php
    // lisamine
    if(!empty($_GET["lisa"])){
      $nimi = $_GET["nimi"];
      $vanus = $_GET["vanus"];
      $tel = $_GET["tel"];
      $riik = $_GET["riik"];
      $sugu = $_GET["sugu"];
      $tsargi_suurus = $_GET["tsargi_suurus"];
      $registreerimine = $_GET["registreerimine"];
      $finish = $_GET["finish"];

       $paring = "INSERT INTO tallinn_marathon(nimi, vanus, tel, riik, sugu, tsargi_suurus, registreerimine, finish) VALUES ('$nimi', '$vanus', '$tel', '$riik', '$sugu', '$tsargi_suurus', '$registreerimine', '$finish')";
       // ($paring);
       $valjund = mysqli_query($yhendus, $paring);
       if($valjund){
          echo "Lisamine õnnestus";
    } else {
      echo "Lisamine ebaõnnestus";

    }
    }





     //päring, mille saadan andmebaasi
     $paring = " SELECT id, vanus, tel, riik, sugu, tsargi_suurus, registreerimine, finish FROM 02_tallinn_marathon ORDER BY id, nimi, riik,  ASC LIMIT 10";
    

         //saadan soovitud ühendusele minu päringu
        // $valjund = mysqli_query($yhendus, $paring);
  









?>


</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>