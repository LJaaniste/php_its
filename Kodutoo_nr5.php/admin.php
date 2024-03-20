
<?php include 'header.php'; ?>

      <div class="container">
      <h1>Admin</h1><br>

    <h2>Muuda Avalehe sisu</h2>

    <?php
if (isset($_GET['ok'])) {
    echo '<div class="alert alert-success" roles="alert">
    Salvestamine õnnestus!
    </div>
    ';
}


?>

<form action=""method="post" enctype="multipart/form-data">

    <label for="pealkiri">Pealkiri:</label>
    <input type="text" name="pealkiri" required><br>

    <label for="alapealkiri">Alapealkiri:</label>
    <input type="text" name="alapealkiri" required><br>

    <label for="tekst">Tekst:</label>
    <textarea name="tekst"></textarea><br>

    <label for="lisapilt">Lisa pilt</label>
    <input type="file" name="lisapilt">

  

    <input class="btn btn-success" type="submit" value="Salvesta">
</form>



<?php
if (isset($_POST['palka'])) {
    
   $uus_pealkiri = $_POST["pealkiri"];
   $uus_alapealkiri = $_POST["alapealkiri"];
      $uus_tekst = $_POST["tekst"];
      $uus_pilt = $_POST["pilt"];

      $rida = "$pealkiri | $alapealkiri | $tekst | $lisapilt\n";

      file_put_contents("palka.txt", $rida, FILE_APPEND);
     

  
   
    header('Location: index.php');
    
   
}


?>

<?php
if (isset($_POST['cv'])) {
    
   $uus_pealkiri = $_POST["pealkiri"];
   $uus_alapealkiri = $_POST["alapealkiri"];
      $uus_tekst = $_POST["tekst"];
      $uus_pilt = $_POST["pilt"];

      $rida = "$pealkiri | $alapealkiri | $tekst | $lisapilt\n";

     
      file_put_contents("minucv.txt", $rida, FILE_APPEND);

  
   
    header('Location: index.php');
    
   
}


?>





</div> 




    <?php include 'footer.php'; ?>