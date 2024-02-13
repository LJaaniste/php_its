<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kodutöö_nr2</title>
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
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.html">Avaleht</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Tooted</a></li>
            <li class="nav-item"><a class="nav-link active"  aria-current="page" href="teenused.php">Teenused</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Kontakt</a></li>
            </ul>
            <button type="button" class="btn btn-primary mx-lg-2 my-2 d-xs-block">Login</button>
          </div> 
          </nav>
          </div>  
        </div>
      </div>

      <div class="container mt-5">
        <br>
        <h2 class="mb-4">Teenuse kalkulaator</h2>

        <?php
            // Kalkulaatori loogika
            $error_message = '';
            $result = '';

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Kogu sisestatud andmed
                $input_value1 = $_POST['input_value1'];
                $input_value2 = $_POST['input_value2'];
                $select_option = $_POST['select_option']; // Näide rippmenüüst

                // Kontroll, kas väljad on täidetud
                if ($input_value1 !== '' && $input_value2 !== '') {
                    // Lihtne kalkulatsioon 
                    $result = $input_value1 * $input_value2;
                } else {
                    $error_message = 'Viga: Vormi täitmiseks on vajalikud kõik väljad.';
                }
            }
            ?>

            <!-- Vormi kuvamine -->
            <form action="" method="POST">

                <div class="form-group">
                    <label class="mb-4" for="select_option">Kasutatud sülearvutite hinnapakkumine</label>
                    <br>
                    <select class="form-control" id="select_option" name="select_option">
                        <option value="1">Kasutatud sülearvutid</option>
                        <option value="2">Dell Latitude 5400</option>
                        <option value="3">Lenovo ThinkdPad T14s</option>
                        <option value="4">Fujitsu Lifebook E459</option>
                    </select>
                </div>
                <br>

                <div class="form-group">
                    <label for="input_value1">Hind €</label>
                    <input type="number" class="form-control" id="input_value1" name="input_value1" required>
                </div>
                <br>

                <div class="form-group">
                    <label for="input_value2">Kogus</label>
                    <input type="number" class="form-control" id="input_value2" name="input_value2" required>
                </div>
               <br>
                
                <button type="submit" class="btn btn-primary">Arvuta</button>
            </form>

            <!-- Kalkulatsiooni tulemus või vead -->
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($result !== '') {
                    echo '<div class="alert alert-success mt-4" role="alert">KOKKU: ' . $result . ' €</div>';
                } elseif ($error_message !== '') {
                    echo '<div class="alert alert-danger mt-4" role="alert">' . $error_message . '</div>';
                }
            }
            ?>
        </div>



      








      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy1q5L4LOhG9cAtI/KD5SBrXbYB/JQOp6u" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  </body>
</html>