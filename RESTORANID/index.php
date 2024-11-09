<?php include("config.php"); ?>

<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restoranide hindamine</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        /* Üldine stiil */
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 80%; /* Tabeli laius */
            margin: 0 auto; /* Tabel keskele */
            border-collapse: collapse; /* Lahtrite piirjooned */
        }
        th, td {
            padding: 8px; /* Lahtri polstri suurus */
            border: 1px solid #ddd; /* Lahtrite piirjooned */
            text-align: left; /* Tekst vasakule */
        }
        th {
            background-color: #f2f2f2; /* Ülemine rida halli värvi */
        }
        thead th {
        height: 50px; 
        }
        /* Pealkiri ja otsingulahter */
        header {
            display: flex;
            justify-content: space-between;
        }
        .search {
            margin-top: 20px;
        }
        .pagination {
            margin-top: 20px;
        }
        .rating-form {
            margin-top: 20px;
            border-top: 2px solid #ccc;
            padding-top: 20px;
        }
        .rating-stars span {
            font-size: 24px;
            color: #ddd;
            cursor: pointer;
        }
        
        .rating-stars span:hover,
        .rating-stars span.active {
            color: #4CAF50;
        }
        .search-container {
          float: right;
        }
        th {
            position: relative;
            cursor: pointer;
        }
        th::after {
            content: '';
            display: inline-block;
            width: 0;
            height: 0;
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            position: absolute;
            right: 5px;
            top: 50%;
            transition: 0.3s;
        }
        .asc::after {
            border-bottom: 6px solid #000;
        }
        .desc::after {
            border-top: 6px solid #000;
        }
    </style>
  </head>
  <body>

  <header>
        <h1>Valige asutus, mida hinnata</h1>
    </header>
    <br>
    <div class="container">
      <div class="search">
    <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
            <form role="search">
            <input class="form-control me-2" type="search" placeholder="Otsi" oninput="searchRestaurants()" aria-label="Search">             
        <!--<input type="search" id="searchInput" placeholder="Otsi..." oninput="searchRestaurants()"> -->
      </form>
        </div>
        </div>
        </div>
        </div>
    <main>
      <br>
        <table border="1" id="restaurantTable">
            <thead>
               <tr>
               <!--  <th class="sortable" data-sort="nimi">
                  Nimi
                  <a href="?sort=nimi&order=asc"><i class="bi bi-caret-up-fill"></i></a>
                  <a href="?sort=nimi&order=desc"><i class="bi bi-caret-down-fill"></i></a>
                 </th>

                <th class="sortable" data-sort="asukoht">
                  Asukoht
                  <a href="?sort=asukoht&order=asc"><i class="bi bi-caret-up-fill"></i></a>
                  <a href="?sort=asukoht&order=desc"><i class="bi bi-caret-down-fill"></i></a>
                </th>

                <th class="sortable" data-sort="keskmine_hinne">
                  Keskmine hinne
                  <a href="?sort=keskmine_hinne&order=asc"><i class="bi bi-caret-up-fill"></i></a>
                  <a href="?sort=keskmine_hinne&order=desc"><i class="bi bi-caret-down-fill"></i></a>
                </th>

                <th class="sortable" data-sort="hinnatud_korda">
                  Hinnatud (korda)
                  <a href="?sort=hinnatud_korda&order=asc"><i class="bi bi-caret-up-fill"></i></a>
                  <a href="?sort=hinnatud_korda&order=desc"><i class="bi bi-caret-down-fill"></i></a>
                </th>  -->        
        </tr> 

        
 <!--Algseadistus--> 
 <?php 
    $sort_by = isset($_GET['sort']) ? $_GET['sort'] : '';
    $sort_order = isset($_GET['order']) ? $_GET['order'] : 'ASC';
 ?>

<?php 
 //$next_page = $page + 1;
 //$prev_page = $page - 1;
 ?>
 
   
    <th>
    <a href="?sort=nimi&order=<?php echo $sort_by == 'nimi' && $sort_order == 'ASC' ? 'DESC' : 'ASC'; ?>">
        Nimi <?php if ($sort_by == 'nimi') { echo $sort_order == 'ASC' ? '▲' : '▼'; } else { echo '▼▲'; } ?>
    </a>
    </th>
    <th>
    <a href="?sort=asukoht&order=<?php echo $sort_by == 'asukoht' && $sort_order == 'ASC' ? 'DESC' : 'ASC'; ?>">
        Asukoht <?php if ($sort_by == 'asukoht') { echo $sort_order == 'ASC' ? '▲' : '▼'; } else { echo '▲▼'; } ?>
    </a>
    </th>
    <th>
    <a href="?sort=keskmine_hinne&order=<?php echo $sort_by == 'keskmine_hinne' && $sort_order == 'ASC' ? 'DESC' : 'ASC'; ?>">
        Keskmine hinne <?php if ($sort_by == 'keskmine_hinne') { echo $sort_order == 'ASC' ? '▲' : '▼'; } else { echo '▲▼'; } ?>
    </a>
    </th>
    <th>
    <a href="?sort=hinnatud_korda&order=<?php echo $sort_by == 'hinnatud_korda' && $sort_order == 'ASC' ? 'DESC' : 'ASC'; ?>">
        Hinnatud (korda) <?php if ($sort_by == 'hinnatud_korda') { echo $sort_order == 'ASC' ? '▲' : '▼'; } else { echo '▲▼'; } ?>
    </a>
    </th>
   
    
    </thead>
    <tbody>
        
      <?php 
        

    // Funktsioon, mis tagastab andmed vastavalt lehekülje numbrile ja sordi parameetrile
    function fetchRestaurants($page, $sort_by, $sort_order, $search_term) {
    global $yhendus;
    $offset = ($page - 1) * 10; // Arvutame offseti
    $query = "SELECT * FROM asutused WHERE nimi LIKE '%$search_term%' OR asukoht LIKE '%$search_term%' ORDER BY $sort_by $sort_order LIMIT 10 OFFSET $offset";
    print_r($query);
    $result = mysqli_query($yhendus, $query);
    return $result;
}

$sort_by = isset($_GET['sort']) ? $_GET['sort'] : 'nimi';
$sort_order = isset($_GET['order']) ? $_GET['order'] : 'ASC';
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$search_term = isset($_GET['search']) ? $_GET['search'] : '';

        

$result = fetchRestaurants($page, $sort_by, $sort_order, $search_term);

            if (mysqli_num_rows($result) > 0) {
                        // Väljasta andmed tabelisse
                while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                //echo "<td><a href='#' onclick='openRatingForm(" . $row['id'] . ")'>" . $row['nimi'] . "</a></td>";
                echo "<td><a href='#' onclick='openRatingForm(" . $row['id'] . ", \"" . $row['nimi'] . "\")'>" . $row['nimi'] . "</a></td>";
                echo "<td>" . $row['asukoht'] . "</td>";
                echo "<td>" . $row['keskmine_hinne'] . "</td>";
                echo "<td>" . $row['hinnatud_korda'] . "</td>";
                echo "</tr>";
                }
                  } else {
                    echo "<tr><td colspan='4'>Andmeid ei leitud</td></tr>";
                   }
                ?>
                
            </tbody>
        </table>

        <div class="container">
            <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3">

        <div class="pagination">
        <?php if ($page > 1): ?>
                <a href="?sort=<?php echo $sort_by ?>&page=<?php echo $page - 1 ?>"> < Eelmine</a> 
            <?php endif; ?>
            <?php if (mysqli_num_rows($result) == 10): ?>
            <span>&nbsp;</span>
            <a href="?sort=<?php echo $sort_by ?>&page=<?php echo $page + 1 ?>">Järgmine ></a>
            <?php endif; ?>
        </div>
        </div>
        </div>
        </div>

    </main>

    
   




    <script>
       function openRatingForm(id, name) {
            document.getElementById('restaurantName').innerText = name;
            document.getElementById('ratingForm').style.display = 'block';   
        }
        </script>
    <script>
        function setRating(rating) {
            let stars = document.querySelectorAll('.rating-stars span');
            for (let i = 0; i < stars.length; i++) {
                if (i < rating) {
                    stars[i].classList.add('active');
                } else {
                    stars[i].classList.remove('active');
                }
            }
        }
        </script>
        <script>
        // Funktsioon, mis muudab sorteerimissuunda ja värvi märki päises
        document.querySelectorAll('.sortable').forEach(function(header) {
            header.addEventListener('click', function() {
                let currentSortOrder = 'ASC';
                if (this.classList.contains('asc')) {
                    currentSortOrder = 'DESC';
                }
                window.location.href = '?sort=' + this.dataset.sort + '&order=' + currentSortOrder;
            });
        });
        </script>
        <script>
        function searchRestaurants() {
            let searchValue = document.getElementById('searchInput').value;
            window.location.href = '?search=' + searchValue;
        }

       
    </script>


  
  
  
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script src="https://unpkg.com/bootstrap-icons/font/bootstrap-icons.css"></script>
  </body>
</html>
