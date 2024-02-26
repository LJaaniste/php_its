<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kodutöö_nr3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    </head>
  <body>
    
       <div class="container">
        <div class="row">
        <div class="col-md-6">
          <i class="far fa-envelope"></i> 
          <span>sinu@nimi.ee</span>
          <i class="fas fa-headphones"></i> 
          <span>+372 555 666</span>
            </div>
            
            <div class="col-md-6 d-flex justify-content-end">
              <h6>
                <span class="text-primary">Est</span>
                <span class="text-dark">|</span>
                <span class="text-primary">Eng</span>
                <span class="text-dark">|</span>
                <span class="text-primary">Rus</span>
            <a href="#" class="facebook-icon"><i class="fab fa-facebook-f text-dark"></i></a>
            <a href="#" class="twitter-icon"><i class="fab fa-twitter text-dark"></i></a>
              </h6>  
            </div>
            </div>        
      
      <div class="row">
        <div class="col-md-6">   
          <div class="logo">
            <h1><b>Leena Jaaniste</b></h1>
          </div>  
        </div>
        <div class="col-md-6 d-flex justify-content-end">
             
          <nav class="navbar navbar-expand-lg">    
            <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Avaleht</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Tooted</a></li>
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="teenused.php">Teenused</a></li>
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="kontakt.php">Kontakt</a></li>
            </ul>
            <button type="button" class="btn btn-primary mx-lg-2 my-2 d-xs-block">Login</button>
          </div> 
          </nav>
          </div>
              
        </div>
      </div>

      <div class="container">
          <div class="col-md-12 d-flex align-items-center justify-content-center">
            <h5 class="mb-4">Minu oskused</h5>
    
        
        <?php
        // Massiivid oskustest
        $skills = array("HTML", "CSS", "Bootstrap", "PHP");
        
        
        // Tsükkel oskuste ribade genereerimiseks
        foreach ($skills as $index => $skill) {
        
            //Suvalise värvi valimine
        $colors = array("primary", "secondary", "success", "danger", "warning", "info", "dark");   
        $random_colors = $colors[array_rand($colors)];
        
        // Suvalise täisarvu valimine vahemikus 10-100
        $random_number = rand(10, 100);

        //Ribade kuvamine
        echo '<div class="progress">';
        echo '<div class="progress-bar bg-' . $random_color . '" role="progressbar" style="width: ' . $random_number . '%" aria-valuenow="' . $random_number . '" aria-valuemin="0" aria-valuemax="100">' . $skill . '</div>';
        echo '</div>';

        }


        ?>




    </div>
</div>    













      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy1q5L4LOhG9cAtI/KD5SBrXbYB/JQOp6u" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  </body>
</html>