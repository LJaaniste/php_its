<?php include 'header.php'; ?>


      <div class="container">
      <div class="row">
        <div class="col-sm-1">
          </div>
          <div class="col-sm-4">

          
            <div style="padding-top: 0px;">
             <!-- <h1><b>Hei, olen</b></h1>
             <h1 class="mb-3"><b>SinuNimi</b></h1>
             <h5 class="mb-3">Veebiarendaja</h5>
           <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur debitis suscipit quis, ullam error ipsam blanditiis, aliquam, perferendis id accusantium consectetur. Omnis totam suscipit voluptatem minus quae maxime minima iure.</p> -->
            
          <?php

          $allikas = 'tutvustus.txt'; //faili nimi
          $minu_fail = fopen($allikas, 'r'); //faili avamine
          $faili_sisu = fread($minu_fail, filesize($allikas)); //faili sisu kuvamine
         
         //echo $faili_sisu;

        $read = explode("\n", $faili_sisu);
         
         foreach ($read as $rida) {
            
           $osad = explode(" | ",$rida);

         if (!empty($osad) && count($osad) >= 4) {
  
              echo '<h1><b>' . $osad[0] . '</b></h1>'; // Ülemine pealkiri
              echo '<h1 class="mb-3"><b>' . $osad[1] . '</b></h1>'; // Alumine pealkiri
              echo '<h5 class="mb-3">' . $osad[2] . '</h5>'; //Alapealkiri
              echo '<p class="mb-3">' . $osad[3] .'</p>'; // Teksti kuvamine
             
          }
           }
        
          fclose($minu_fail); //faili sulgemine

          ?>

          <a href="tutvustus.txt" download="tutvustus.txt">
            <button type="button" class="btn btn-primary btn-lg">Palka mind <i class="fas fa-paper-plane"></i></button>
           </a>
          </div>  
         </div>
         <div class="col-sm-2">
        </div>
         
          <div class="col-sm-4">
            <div style="padding-top: 50px;">

            <?php

          $allikas = "tutvustus.txt"; //faili nimi
          $minu_fail = fopen($allikas, 'r'); //faili avamine
          
         $faili_sisu = fread($minu_fail, filesize($allikas)); //faili sisu kuvamine
          
        $read = explode("\n", $faili_sisu);

          foreach ($read as $rida) {

            $osad = explode("|", $rida);
          if (!empty($osad) && count($osad) >= 4) {

             if (isset($osad[4])) {
                
                $pilt = $osad[4]; // Pildi nimi
               
                echo '<img src="' . $pilt . '" alt="Pilt" style="border-radius: 45% 55% 50% 50% / 30% 40% 60% 70%; width: 60%;">'; // Pildi kuvamine
                
            }
          }
          }
        
         fclose($minu_fail); //faili sulgemine

          ?>

            <!-- <img src="mees.jpg" alt="Pilt" style="border-radius: 45% 55% 50% 50% / 30% 40% 60% 70%; width: 60%;"> -->
          </div>
          </div>
          <div class="col-sm-1">
              </div>
          </div>
          
      

        <div class="col-sm-12 text-center">
        <div style="padding-top: 70px;">
        <h1 class="mb-3"><b>Minust</b></h1>
        </div>
        </div>
       
      <div class="col-sm-12 text-center">  
      <p class="mb-3">Minu parimad saavutused</p>
      </div>
      
      <div style="padding-bottom: 50px;">
      </div>

      <div class="row">
      <div class="col-sm-1">
          </div>
        <div class="col-sm-4">
          <div style="padding-bottom: 50px;">
          <img src="cvpilt.jpg" alt="Pilt" style="width: 120%;">
          </div>
        </div>
        <div class="col-sm-2">
        </div>

        <div class="col-sm-4">
            <div style="padding-bottom: 50px;">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum aspernatur doloribus quisquam maiores mollitia sunt veniam, tempora totam delectus, fuga molestiae quos debitis! Inventore praesentium vel voluptas, ducimus earum assumenda?</p>  
          </div>  

          <div class="row sm-3">
            <div class="col-sm-4 text-center">
          <h1 class="my-1"><b>1+</b></h1>
            <p class="my-1">aastat</p>
            <p class="my-1">kogemust</p>
          </div>
          <div class="col-sm-4 text-center">
            <h1 class="my-1"><b>2+</b></h1>
              <p class="my-1">projekti</p>
              <p class="my-1">lõpetanud</p>
            </div>

            <div class="col-sm-4 text-center">
              <h1 class="my-1"><b>0</b></h1>
                <p class="my-1">ettevõttes</p>
                <p class="my-1">töötanud</p>
            </div>
          </div>

          <div class="row">
          <div class="col">
          <div style="padding-top: 20px;">
        </div>

        <?php

          $allikas = 'minucv.txt';
          $minu_fail = fopen($allikas, 'a');
         
          
          fclose($minu_fail);

          ?>
        <a href="minucv.txt" download="minucv.txt">
          <button type="button" class="btn btn-primary btn-lg"> Lae alla CV <i class="bi bi-box-arrow-in-down"></i></button>
         </a>  
        </div>
          </div>

        </div>
        <div class="col-sm-1">
        </div>
      </div>

     </div>
     <div style="padding-top: 50px;">
     </div>

     <div class="container-fluid bg-primary text-white py-4">
        <div class="row align-items-center">
          <div class="col sm-12 text-center">
            <br>
            <br>
            <br>
            
            <i class="bi bi-c-circle"></i>
            <p class="mb-0 d-inline">SinuNimi</p>
          </div>
          </div>
            <br>
           <div class="row">
            <div class="col-sm-12 d-flex justify-content-end">
            <p class="mb-0"><i class="bi bi-arrow-up"></i></p>
          </div>
          </div>
        
      </div>
     


    
      <?php include 'footer.php'; ?>