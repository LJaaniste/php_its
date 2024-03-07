<h1>Teenused</h1>
<form action="" method="get">
    <label for="nimetus">Toote nimetus</label>
    <input type="text" name="nimetus" required><br>

    <label for="kirjeldus">Toote kirjeldus</label>
    <input type="text" name="kirjeldus" required><br>

    <label for="hind">Toote hind</label>
    <input type="number" min="0.00" max="100.00" step="0.01" name="hind" required><br>

    <input type="hidden" name="page" value="services">

    <input class="btn btn-success" type="submit" value="Lisa uus toode">


</form>
<?php
if (isset($_GET['nimetus'])) {
    $read=array();

    //$fp =file('products.csv');
    $id = array_push($read,count(file('products.csv'))+1);

    $nimetus = array_push($read, $_GET['nimetus']);
    $kirjeldus = array_push($read, $_GET['kirjeldus']);
    $hind = array_push($read, $_GET['hind']);

    $path = 'products.csv';
    
    $fp = fopen ($path, 'a');
    fputcsv($fp, $read);
    //print_r($nimetus);
    fclose($fp);
    
    //fputcsv($minu_csv, $nimetus);
    
    //print_r($nimetus);
}


?>
    

<div class="row row-cols-1 row-cols-md-4 g-4 pt-5">
<?php
//faili avamine
 $products = "products.csv";

 $minu_csv = fopen($products, "r");
 
 

 //kõikide ridade saamine feof = fail-end-file
 while (!feof($minu_csv)) {

 //ühe rea saamine, eraldatud komaga
 $rida = fgetcsv($minu_csv, filesize($products), ",");
 //print_r($rida);
 //echo "$rida[1] - $rida[3]€<br>";

 if (is_array($rida)) {
 echo '
<div class="col">
    <div class="card">
      <img src="https://picsum.photos/400/400" class="card-img-top" alt="'.$rida[1].'">
      <div class="card-body">
        <h5 class="card-title">'.$rida[1].'</h5>
        <p class="card-text">'.$rida[2].'</p>
        <p class="card-text">'.$rida[3].'</p>
      </div>
    </div>
  </div>
  ';
 }
}

?>


</div>
