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

  <h3>1. 10 esimest nime ja riiki</h3>


  <?php
    
// SQL päring andmete väljavõtmiseks
$sql = "SELECT id, nimi, riik FROM tallinn_marathon LIMIT 10";
print_r($sql);
// Päringu saatmine andmebaasile
$result = mysqli_query($yhendus, $sql);


      // HTML tabeli väljastamime
     // echo '<table class="table">';
     echo "<table border='1'>";
      echo "<tr><th>ID</th><th>Nimi</th><th>Riik</th></tr>";

      
      // Andmete väljastamine iga rea kaupa
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
<h3>2. Soome osalejad finišiaja järgi, registreeritud pärast 01.03.2024</h3>


  <?php
    
// SQL päring andmete väljavõtmiseks
//$sql = "SELECT id, nimi, riik, registreerimine, finish FROM tallinn_marathon WHERE riik = 'Finland' AND registreerimine > '2024-03-01' ORDER BY finish ASC";
$sql = "SELECT id, nimi, riik, registreerimine, finish FROM tallinn_marathon WHERE riik = 'Finland' AND registreerimine > DATE('2024-02-28') ORDER BY finish ASC";
print_r($sql);

// Päringu saatmine andmebaasile
$result = mysqli_query($yhendus, $sql);


      // HTML tabeli väljastamime
      echo '<table class="table">';
      echo "<tr><th>ID</th><th>Nimi</th><th>Riik</th><th>Registreerimine</th><th>Finish</th></tr>";
         
      // Andmete väljastamine iga rea kaupa
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

<br>
<h3>3. Osalejad vanusegruppides 18-30</h3>

<?php
    

// SQL päring andmete väljavõtmiseks
//$sql = "SELECT vanus, COUNT(*) AS osalejate_arv FROM tallinn_marathon WHERE vanus BETWEEN 18 AND 30";

$sql = "SELECT vanus, COUNT(*) AS osalejate_arv FROM tallinn_marathon WHERE vanus BETWEEN 18 AND 30 GROUP BY vanus ORDER BY vanus";
print_r($sql);

// Päringu saatmine andmebaasile
$result = mysqli_query($yhendus, $sql);


    // HTML tabeli väljastamime
      echo '<table class="table">

      <tr>
       <th>Vanus</th>
       <th>Osalejate arv</th>
       </tr>';
    
      // Andmete väljastamine iga rea kaupa
          
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['vanus'] . "</td>";
        echo "<td>" . $row['osalejate_arv'] . "</td>";
        echo "</tr>";
      }
      // Tabeli lõpetamine
      echo "</table>";
  
?>

<br>
<h3>4. 3 juhuslikku naisosalejat, kes lõpetasid maratoni</h3>

<?php
    

// SQL päring andmete väljavõtmiseks

$sql = "SELECT nimi FROM tallinn_marathon WHERE sugu = 'Female' AND finish IS NOT NULL ORDER BY RAND() LIMIT 3";
print_r($sql);

// Päringu saatmine andmebaasile
$result = mysqli_query($yhendus, $sql);


      // HTML tabeli väljastamime
      echo '<table class="table">';
      echo "<tr><th>Nimi</th></tr>";
      
      
      // Andmete väljastamine iga rea kaupa
      while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>" . $row['nimi'] . "</td>";
       
          echo "</tr>";
      }
      
      // Tabeli lõpetamine
      echo "</table>";
      ?>



</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>