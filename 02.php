<!doctype html>
<html lang="et">
    <head>
        <title>PHP harjutused</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <div class="container">

        <h1>Funktsioonid</h1>

        <?php
        //funk loomine, vaikimisi atribuudiga
        function tervita($kasutaja="ananüümne"){
            echo "Tere $kasutaja!";
        }
        
        function tervita2(){
            return "Tere Eesti!";
        }
        function uudiskiri(){
            echo '<form action="uudiskiri.php" method="post">
            <input type="email" name="email" id="email">
            <input type="submit" value="liitu uudiskirjaga">
          </form>';
        }

        //Head mõtted
        function headmotted(){
            $alus = array("Mari", "Kati", "Mai");
            $oeldis = array("kuulab","teeb","naudib");
            $sihitis = array("autot","kõrvakiilu","ilma");

            echo $alus[array_rand($alus)]." ".$oeldis[array_rand($oeldis)]." ".$sihitis[array_rand($sihitis)]."<br>";
        }
        headmotted();

       //funk välja kutsumine
        tervita("Kati");
        tervita();
        echo tervita2();
        echo uudiskiri();
        



       ?>
       
       


            <h1>Tsüklid</h1>
            <?php
            for ($i=1; $i <=100 ; $i++) {
                if ($i%10==0) {
                    echo $i.".<br>";
                } else {
                    echo $i.". ";
                } 
            }
            echo "<br>-----------------<br>";
            for ($i = 0; $i < 10; $i++) {
                echo "*";
            }
            echo "<br>-----------------<br>";
            for ($i = 0; $i < 5; $i++) {
                for ($j = 0; $j < 5; $i++) {
                    echo "* ";
                }
                echo "<br>";
            }

            echo "<br>-----------------<br>";
            for ($i = 10; $i >= 1 ; $i--) {
                echo $i."<br>";
            }

          ?>


            <h1>Massiivid</h1>
     <?php
     //echo  "Tere maailm!";
     $nimed = array("Mari", "Kati", "Mai", "Kai", "Juuli", "Maali");
     sort($nimed);
     //print_r($nimed);
     foreach ($nimed as $nimi) {
        echo $nimi."<br>"; //mõlemad toimivad
        // echo "$nimi "; ühel real
        //echo $nimed[5]; kuvab ainult ühe nime
    }
    echo "-----------------<br>";
    $counter = 0;
    foreach ($nimed as $nimi) {
        echo "$nimi<br>";
        $counter++; //$counter = $counter+1
        if ($counter==3) {
            break;
        }
    }
    echo "-----------------<br>";
    echo "Viimane nimi: ".$nimed[count($nimed)-1]."<br>";
    echo "-----------------<br>";
    echo "Suvaline nimi: ".$nimed[array_rand($nimed)]."<br>";
     ?>
     <br>
     <h1>Autod</h1>
     <?php
     $cars = array(
     "Subaru","BMW","Acura","Mercedes-Benz","Lexus","GMC","Volvo","Toyota","Volkswagen","Volkswagen","GMC","Jeep","Saab","Hyundai","Subaru","Mercedes-Benz",
     "Honda","Kia","Mercedes-Benz","Chevrolet","Chevrolet","Porsche","Buick","Dodge","GMC","Dodge","Nissan","Dodge","Jaguar","Ford","Honda","Toyota","Jeep",
     "Kia","Buick","Chevrolet","Subaru","Chevrolet","Chevrolet","Pontiac","Maybach","Chevrolet","Plymouth","Dodge","Nissan","Porsche","Nissan","Mercedes-Benz",
     "Suzuki","Nissan","Ford","Acura","Volkswagen","Lincoln","Mazda","BMW","Mercury","Mitsubishi","Ram","Audi","Kia","Pontiac","Toyota","Acura","Toyota","Toyota",
     "Chevrolet","Oldsmobile","Acura","Pontiac","Lexus","Chevrolet","Cadillac","GMC","Jeep","Audi","Acura","Acura","Honda","Dodge","Hummer","Chevrolet","BMW",
     "Honda","Lincoln","Hummer","Acura","Buick","BMW","Chevrolet","Cadillac","BMW","Pontiac","Audi","Hummer","Suzuki","Mitsubishi","Jeep","Buick","Ford");
      
     $vins = array(
     "1GKS1GKC8FR966658", "1FTEW1C87AK375821", "1G4GF5E30DF760067", "1FTEW1CW9AF114701", "WAUGGAFC8CN433989", "3G5DA03E83S704506", "4JGDA2EB0DA207570", 
     "1FTEW1E88AK070552", "SAJWA0F77F8732763", "JHMFA3F21BS660717", "JTHBP5C29C5750730", "WA1LFAFP9DA963060", "3D7TT2CT6BG521976", "WVWN7EE961049", 
     "2C3CA5CG3BH341234", "YV4952CFXC162587", "KNALN4D71F5805172", "JN1CV6EK7BM903692", "5FRYD3H84EB186765", "WAUL64B83N441878", "WDDGF4HBXCF845665", 
     "WAUKF78E45A133973", "JN1BY0AR2AM022612", "WA1EY74L69D931520", "3GYFNGEYXBS290465", "1D7CW2GK4AS059336", "JN8AZ1FY5EW087447", "WAUBF78E57A343355", 
     "SCFFBCCD8AG695133", "WBAWC73548E143482", "3GYFNGE38DS093883", "SCBCP73WC348460", "JN8AE2KPXE9353316", "2C3CDXDT2EH018229", "1G6AH5SX7D0325662", 
     "WVWED7AJ7DW431402", "1FTKR1AD3AP316066", "WBAKF5C52CE612586", "1FTNX2A57AE16083", "WAUCFAFR1AA166821", "SCFFDAAM3EG486065", "1G4PR5SK5F4821043", 
     "1C3CDFCB4ED858321", "1N6AD0CW8EN722090", "1NXBU4EE0AZ438077", "2T1BPRHE7FC131594", "JH4KB1637C451183", "1C4NJCBA7ED747024", "WAUHF68P86A736691", 
     "3D7TT2HT1AG96429", "5GADX23L96D250838", "5FRYD3H25FB985936", "1G4GG5E30DF126304", "KNADH5A38B6072755", "WAUBFAFL1BA477979", "3C63DRL4CG674293", 
     "1G6AR5SX0E0834815", "1NXBU4EE2AZ309838", "WAUKGBFB4AN797783", "JN1AJ0HP8AM801887", "WAUPL68E25A448831", "WA1C8BFP3FA535374", "WAUHE78P78A019744", 
     "TRURD38J081400551", "1G4HP52K95428171", "5N1CR2MN1EC607241", "5UMDU93417L322773", "1G6AJ5S35F09585", "JN1CV6AP3BM234743", "SCBCR63W66C842051", 
     "SCFFDCBD2AG509467", "WBA3C1C58CA664091", "1D7RW2BK6BS922303", "WAUDH98E67A546009", "2HNYB1H46CH683844", "3VW467AT4DM257275", "WDDGF4HB7CA515172", 
     "2G61W5S88E9666199", "5GADV33W17D256205", "2C3CDXDT9CH683075", "2G4GU5X0E9989574", "WAUJC58E53A641651", "WDDEJ7KB3CA053774", "3D73M3CL6AG890452", 
     "5GAER13D19J026924", "1G4HC5EM1BU329204", "3VWML7AJ6CM772736", "3C6TD4HT2CG011211", "JTDZN3EU2FJ023675", "JN8AZ1MU4CW041721", "KNAFX5A82F5991024", 
     "1N6AA0CJ1D57470", "WAUEG98E76A780908", "WAUAF78E96A920706", "1GT01XEG8FZ268942", "1FTEW1CW4AF371278", "JN1AZ4EH8DM531691", "WAUEKAFBXAN294295", 
     "1N6AA0EDXFN868772", "WBADW3C59DJ422810");

     echo "Autosid massiivis: ".count($cars);
     echo "<br>-----------------<br>";
     if (count($cars)==count($vins)) {
         echo "Autod (".count($cars).") ja VIN-id (".count($vins).") klapivad";   //echo "Autod ja VINid klapivad";
     } else {
         echo "Autod (".count($cars).") ja VIN-id (".count($vins).") ei klapi";   //echo "Autod ja VIN-id ei klapi";
     }

     echo "<br>-----------------<br>";
     $toyota = 0;
     $audi = 0;
     foreach ($cars as $car) {
        if ($car == "Toyota") {
            $toyota++;
            }
            if ($car == "Audi") {
                $audi++;
            }
        }
     echo "Toyota: $toyota<br>Audi: $audi<br>";
     echo "<br>-----------------<br>";
     foreach ($vins as $vin) {
        if (strlen($vin)< 17) {
            echo "$vin<br>";
        }
     }
     //echo strlen($vins[0]);



    ?>
         


     </div>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
