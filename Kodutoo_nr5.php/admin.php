
<?php include 'header.php'; ?>

      <div class="container">
      <h1>Admin</h1><br>

    <h2>Avalehe sisu</h2>

    <?php
if (isset($_GET['ok'])) {
    echo '<div class="alert alert-success" roles="alert">
    Salvestamine õnnestus!
    </div>
    ';
}

?>

<form action="" method="post" enctype="multipart/form-data">

    <label for="pealkiri1">Ülemine pealkiri:</label>
    <input type="text" name="pealkiri1" required><br>

    <label for="pealkiri2">Alumine pealkiri:</label>
    <input type="text" name="pealkiri2" required><br>

    <label for="alapealkiri">Alapealkiri:</label>
    <input type="text" name="alapealkiri" required><br>

    <label for="tekst">Tekst:</label>
    <textarea name="tekst"></textarea><br>

    <label for="pilt">Lisa pilt</label>
    <input type="file" name="pilt">

    <input class="btn btn-success" type="submit" value="Salvesta">
</form>



<?php
     //if (isset($_POST['submit'])) {

   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
   $pealkiri1 = $_POST["pealkiri1"];
   $pealkiri2 = $_POST["pealkiri2"];
   $alapealkiri = $_POST["alapealkiri"];
      $tekst = $_POST["tekst"];
      //$pilt = $_POST["pilt"];
      $pilt = $_FILES['pilt']['name'];
      
      move_uploaded_file($_FILES['pilt']['tmp_name'], "img/".$_FILES['pilt']['name']);
     
      
     $rida = "$pealkiri1 | $pealkiri2 | $alapealkiri | $tekst | $pilt\n";
    
     
      file_put_contents("tutvustus.txt", $rida, FILE_APPEND);
     
   
    header('Location: index.php?ok');
    exit;
     
   }
 

?>


</div> 




    <?php include 'footer.php'; ?>