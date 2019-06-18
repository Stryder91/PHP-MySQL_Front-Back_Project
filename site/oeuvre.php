<?php

include("../admin/fonctions.php");

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oeuvres</title>
    <link rel="stylesheet" href="../styles/materialize.css">
    <link rel="stylesheet" href="../styles/annonce.css">
</head>
<body>
    <?php include 'headersite.php';
    $sql = "select * from annonces where id_annonce='".change($_GET["id_annonce"])."'";

    $query = mysqli_query($lien,$sql);
    
        //--------Retour à la page annonce si id incongru---------//
        if (!mysqli_num_rows($query))
        {
            header("location:annonce.php");
        }
        
        //--------Retour à la page annonce si id incongru---------//

    

    while ($result = mysqli_fetch_assoc($query)){
    
    
    echo("<section class=\"container oeuvre\">");
        echo("<div class=\"row\">");
            echo("<a class=\"row d-flex justify-content-center\" href=\"annonce.php\">");
                echo("<img src=\"../images/arrow.svg\" alt=\"arrow\" class=\"arrow\">");
                echo("<div class=\"col l1 offset-l1 retour\">Retour </div>");  
            echo("</a>");  
            echo("<h6 class=\"col l2 offset-l2 articleTitle\">".$result["annonce_titre"]."</h6>");
        echo("</div>");

        echo("<div class=\"row valign-wrapper\">");
            echo("<div class=\"col l5 textOeuvre\">");
                echo($result["annonce_text"]);
            echo("</div>");
            echo("<div class=\"col l5\">");
                echo("<img src=\"".$result["annonce_image"]."\" alt=\"oeuvre image\">");
            echo("</div>");
        echo("</div>");

        echo("<div class=\"row\">");
            echo("<div class=\"col l2 offset-l1 articleAuthor\">Fait par : ".$result["annonce_auteur"]."</div>");
        echo("</div>");
    echo("</section>");
    }
    
    ?>
        <a href="annonce.php"></a>
    <?php include 'footersite.php';?>
</body>
</html>
