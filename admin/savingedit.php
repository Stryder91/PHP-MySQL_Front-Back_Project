<?php
    include("../admin/fonctions.php");
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Page Admin</title>
    <link rel="stylesheet" href="../styles/admin.css">
    <link rel="stylesheet" href="../styles/bootstrap/bootstrap.css">
    <style>
        body {
                margin: 0;
                background: #39393A;
                color: white;
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
                margin-left: 40%;   
                background : #464646;
                padding : 5%;
                background: 464646;
                border-radius: 3px;
            }
    </style>
</head>
<body>
    <header class="row d-flex justify-content-between"> 
    <h2 class="head1">Admin Dashboard</h2>
    <div>Se déconnecter</div>
    </header>
    <h6 class="text-center">Ajouter une annonce</h6>
    <div class="row container justify-content-center">
    <?php
    $sql = "select * from admin";

    $sql_annonce = "select id_annonce, annonce_titre from annonces";

    $query = mysqli_query($lien,$sql);
    $query_annonce = mysqli_query($lien,$sql_annonce);

                /////Gere l'authentification////////////////
                while ($result = mysqli_fetch_assoc($query))
                {
                    if (($result["admin_name"] !== $_POST['identifiant']) || 
                    ($result["admin_password"] !== $_POST['password'])){
                        header("location:../site/connexion.php");
                    }
                }
                ///////////////////////////////////////////

    while ($result_annonce = mysqli_fetch_assoc($query_annonce))
    {
    
        echo ("<div class=\"row main d-flex justify-content-between\">");
            echo ("<div> ID ".$result_annonce["id_annonce"]."</div>");
            echo ("<div>".$result_annonce["annonce_titre"]."</div>");
            echo ("<div>");
                echo ("<a href=\"editwork.php\">");
                    echo("<img style=\"padding-right : 25px;\" src=\"../images/edit.svg\">");
                echo ("</a>");
                echo ("<a href=\"#\">");
                    echo("<img src=\"../images/delete.svg\">");
                echo ("</a>");
            echo("</div>");
        echo ("</div>");
    }



    ?>
    </div>
</body>
</html>
