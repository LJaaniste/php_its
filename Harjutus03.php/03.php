<?php include_once("header.php"); ?>

<?php
if (isset($_GET['page'])) {
    echo "Tere leht";
    $page = $_GET["page"];
    if ($page=="services") {
        include("services.php");
    }else if($page="contact"){
        include("contact.php");
    }


}else{    


?>

<h1>Avalehe asjad</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, in quia. Minus, cumque. Labore est repellat quibusdam nam, a consequatur facilis provident dignissimos, repellendus ab nihil. Eius id necessitatibus dicta?</p>
    <?php
   } 
    ?>
    <?php include("footer.php"); ?>

