<?php

include("../admin/fonctions.php");

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Annonces</title>
    <link rel="stylesheet" href="../styles/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../styles/annonce.css">
    <script src="../scripts/jquery.js"></script>
</head>
<body>
    <?php include 'headersite.php';?>

    <section class="row d-flex justify-content-center text-center hero1">
        <h5 class="col-12">Présentation des oeuvres</h5>
        <p class="col-12 subTitleHero1">Oeuvres des différents artistes</p>
        <div class="search col-10 col-md-4 d-flex justify-content-around">
                <div class="col-7">
                    <input type="text" class="inputSearch">
                </div>
                <div class="col-5">
                    <input type="submit" value="RECHERCHER" class="submyt">
                </div>
        </div>
    </section> 
    <section class="row hero2 d-flex">
    <?php
        $sql = "select * from annonces";

        $query = mysqli_query($lien,$sql);

        while ($result = mysqli_fetch_assoc($query)){
        
            
        
        echo ("<div class=\"annoncemain row d-flex justify-content-center\">");
            /////Partie gauche///////////////////////
            echo("<div class=\"col-md-1\"></div>");
            echo("<a class=\"col-12 col-md-6 left\" href=\"oeuvre.php?id_annonce=".$result["id_annonce"]."\">");
                echo ("<div class=\"article d-flex justify-content-between\">");
                    echo ("<div class=\"row blop\">");
                        echo ("<div class=\"topArticle col-12 d-flex justify-content-between\">");
                            echo ("<div class=\"articleTitle\">".$result["annonce_titre"]."</div>");
                            echo ("<div class=\"articleAuthor\"> Fait par : ".$result["annonce_auteur"]."</div>");
                        echo("</div>");
                        echo ("<p class=\"articleText\">".$result["annonce_desc"]." <br><br> Cliquez pour en savoir plus.</p>");
                    echo ("</div>");
                    
                echo("</div>");
            echo("</a>");

            /////Partie droite /////////////////////////
            echo("<a class=\"col-10 col-md-5 right\" href=\"oeuvre.php?id_annonce=".$result["id_annonce"]."\">");
                echo ("<div class=\"col-12 col-md-8 imgcontainer\">
                <img src=\"".$result["annonce_image"]."\" alt=\"image oeuvre\">
                </div>");
            echo("</a>");
            ///////////////////////////////////////////////

        echo("</div>");
        }

        include 'footersite.php';
    ?>  

    </section>
    <script type="text/javascript">
        $(document).ready(function(){
            
            $('.annoncemain').hide();
            setTimeout(function(){
                $('.annoncemain').fadeIn(2000);
            },2000);
        });
    </script>
</body>
</html>