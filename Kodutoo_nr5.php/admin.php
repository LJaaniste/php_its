
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

    <label for="tekst">Tekst:</label>
    <textarea name="tekst"></textarea><br>

    <input class="btn btn-success" type="submit" value="Salvesta">
</form>
<br>
<h2>Lae üles uus pilt</h2>

<form method="POST" enctype="multipart/form-data">
  <label for="lisapilt"></label>
  <input type="file" name="lisapilt">
  <input class="btn btn-success" type="submit" value="Lae üles">
</form>





<?php
if (isset($_POST['pealkiri'])) {
    
   $uus_pealkiri = $_POST["pealkiri"];
      $uus_tekst = $_POST["tekst"];
      $uus_pilt = $_POST["pilt"];

      $rida = "$pealkiri | $tekst | $lisapilt\n";

      file_put_contents("palka.txt", $rida, FILE_APPEND);
      file_put_contents("minucv.txt", $rida, FILE_APPEND);

  
   
    header('Location: index.php');
    
   
}


?>
</div> 




    <?php include 'footer.php'; ?>