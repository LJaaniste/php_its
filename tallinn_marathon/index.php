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
    

// Ühendus andmebaasiga

require_once 'config.php';

// SQL päring andmete väljavõtmiseks
$sql = "SELECT id, nimi, riik FROM tallinn_marathon LIMIT 10";

// Päringu saatmine andmebaasile
$result = mysqli_query($yhendus, $sql);


      // HTML tabeli väljastamime
      echo '<table class="table">';
      echo "<tr><th>ID</th><th>Nimi</th><th>Riik</th></tr>";

      
      // Andmed väljastamine iga rea kaupa
      while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>" . $row['id'] . "</td>";
          echo "<td>" . $row['nimi'] . "</td>";
          echo "<td>" . $row['riik'] . "</td>";
          echo "</tr>";
      }
      
      // Tabeli lõpetamine
      echo "</table>";
  
?>

<br>
<h3>Soome osalejad finishiaja järgi, registreeritud pärast 01.03.2024</h3>


  <?php
    

// Ühendus andmebaasiga

require_once 'config.php';

// SQL päring andmete väljavõtmiseks
$sql = "SELECT id, nimi, riik, registreerimine, finish FROM tallinn_marathon WHERE riik = 'Finland' AND registreerimine > '2024-02-25' ORDER BY finish ASC";

// Päringu saatmine andmebaasile
$result = mysqli_query($yhendus, $sql);


      // HTML tabeli väljastamime
      echo '<table class="table">';
      echo "<tr><th>ID</th><th>Nimi</th><th>Riik</th><th>Registreerimine</th><th>Finish</th></tr>";
      //echo "<tr><th>Nimi</th><th>Riik</th><th>Registreerimine</th><th>Finish</th></tr>";

      
      // Andmed väljastamine iga rea kaupa
      while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>" . $row['id'] . "</td>";
          echo "<td>" . $row['nimi'] . "</td>";
          echo "<td>" . $row['riik'] . "</td>";
          echo "<td>" . $row['registreerimine'] . "</td>";
          echo "<td>" . $row['finish'] . "</td>";
          echo "</tr>";
      }
      
      // Tabeli lõpetamine
      echo "</table>";
  
?>


</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>