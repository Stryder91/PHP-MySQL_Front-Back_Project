<?php
    include("../admin/fonctions.php");
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin</title>

    <link rel="stylesheet" href="../styles/admin.css">
    <link rel="stylesheet" href="../styles/bootstrap/bootstrap.css">
    <style>
        
        body {
                color : white;
                background: #39393A;
            }
            header{
                height: 12vh;
                background: #333334;
                width:100vw;
            }
            .row {
                width: 100vw;
                padding: 0 5%;
                margin:0;
            }
            .main {
                width: 50vw;
                margin-left: 30%;   
                background : #464646;
                padding : 5%;
                background: 464646;
                border-radius: 3px;
            }
            .hidden{
                display:none;
            }
            .bouton{
                padding-right:30px;
            }
            h6{
                margin : 50px;
            }
    </style>
</head>
<body>
    <!-- J'ai du mettre le style dans le head, car, sans savoir pourquoi cela ne marche dans une feuille à part,
    et ce malgré les !important -->

    <header class="row d-flex justify-content-between"> 
        <h2 class="head1">Admin Dashboard</h2>
        <a href="../site/connexion.php">
        <div>Se déconnecter</div>
        </a>
    </header>

        <!-- ADD new oeuvre -->
        <a href="add.php">
            <h6 class="text-center">Ajouter une annonce</h6>
        </a>
        <!----------------------------------------->

    <div class="row container justify-content-center">
    <?php

        $sql_annonce = "select id_annonce, annonce_titre from annonces";
        $query_annonce = mysqli_query($lien,$sql_annonce);


        while ($result_annonce = mysqli_fetch_assoc($query_annonce))
        {

        echo ("<div class=\"row main d-flex justify-content-between\">");
            echo ("<div> ID".$result_annonce["id_annonce"]."</div>");
            echo ("<div>".$result_annonce["annonce_titre"]."</div>");
            echo ("<div>");
                echo("<a href=\"edit.php?id_annonce=".$result_annonce["id_annonce"]."\">");
                    echo("<img src=\"../images/edit.svg\" alt\"ok\">");
                echo("</a>");
                echo("<a href=\"delete_post.php?id_annonce=".$result_annonce["id_annonce"]."\">");
                    echo("<img class=\"bin\" src=\"../images/delete.svg\" alt\"ok\">");
                echo("</a>");
            echo("</div>");
        echo ("</div>");
        }
    ?>
    </div>

    <div class="row partAdminModify container justify-content-center">
    <h2 style="margin:50px;">Les comptes Admin</h2>
    <?php

        $sql_admin = "select * from admin";
        $query_admin = mysqli_query($lien,$sql_admin);


        while ($result_admin = mysqli_fetch_assoc($query_admin))
        {
        echo ("<div class=\"row main d-flex justify-content-between\">");
            echo ("<div>".$result_admin["admin_name"]."</div>");
            echo ("<div>");
                echo("<a href=\"admin_post.php?id_annonce=".$result_admin["id_admin"]."\">");
                    echo("<img src=\"../images/edit.svg\" alt\"ok\">");
                echo("</a>");
                echo("<a href=\"delete_post.php?id_annonce=".$result_annonce["id_annonce"]."\">");
                    echo("<img class=\"bin\" src=\"../images/delete.svg\" alt\"ok\">");
                echo("</a>");
            echo("</div>");
        echo ("</div>");
        }
    ?>
    </div>

</body>
</html>
