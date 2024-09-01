<?php include("config.php"); ?>

<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hinda restorani</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    </head>
  <body>

  <div class="container">
        <div class="rating-form">
            <h2>Hinda kohta > <span id="restaurantName"><?php echo $_GET['name']; ?></span></h2>
            <form action="#" method="post">
                <label for="name">Sinu nimi:</label><br>
                <input type="text" id="name" name="name"><br>
                <label for="comment">Kommentaar:</label><br>
                <textarea id="comment" name="comment" rows="4" cols="50"></textarea><br>
                <label for="rating">Hinnang:</label><br>
                <div class="rating-stars">
                    <span onclick="setRating(1)">☆</span>
                    <span onclick="setRating(2)">☆</span>
                    <span onclick="setRating(3)">☆</span>
                    <span onclick="setRating(4)">☆</span>
                    <span onclick="setRating(5)">☆</span>
                    <span onclick="setRating(6)">☆</span>
                    <span onclick="setRating(7)">☆</span>
                    <span onclick="setRating(8)">☆</span>
                    <span onclick="setRating(9)">☆</span>
                    <span onclick="setRating(10)">☆</span>
                </div>
                <input type="submit" value="Hinda">
            </form>
        </div>
    </div>














  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script src="https://unpkg.com/bootstrap-icons/font/bootstrap-icons.css"></script>
  </body>
</html>


