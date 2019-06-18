<?php
    include("../admin/fonctions.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modification page</title>    
    <link rel="stylesheet" href="../styles/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../styles/admin.css">
    <style>
        .hidden {
            display : none;
        }
    </style>
</head>
<body>
    <header class="row d-flex justify-content-between">         
        <h2 class="head1">Admin Dashboard</h2>
        <a href="../site/connexion.php">
            <div>Se déconnecter</div>
        </a>
    </header>
    
    <div class="d-flex justify-content-start">
        
    <?php
        $sql = "select * from annonces where id_annonce='".change($_GET['id_annonce'])."'";
        $query = mysqli_query($lien,$sql);

        ////Récupération de l'image correspond à l'ID///////////
        while ($result = mysqli_fetch_assoc($query))
        {
            echo("<div class=\"col-4\">");
                echo("<img class=\"imagetomodify\" src=\"".$result["annonce_image"]."\" alt=\"oeuvre image\">");
            echo("</div>");
        }
        ////////////////////////////////////////////////////////
        
    ?>
            <div class="col-5 d-flex main">
            
                <div class="row d-flex justify-content-center">
                    <?php
                    $sql = "select * from annonces where id_annonce='".change($_GET['id_annonce'])."'";
                    $query = mysqli_query($lien,$sql);
                    $result = mysqli_fetch_assoc($query);
                    
                    echo("<form action=\"../admin/edit_post.php?id_annonce=\"".$result["id_annonce"]."method=\"get\">");
                    echo("<div class=\"row entete d-flex justify-content-between\">");
                    echo("<div class=\"enteteUnitfirst col-2\"> <span class=\"grey\">ID </span> ".$result["id_annonce"]."</div>");
                    ?>
                        <input name="titleToModify" type="text" class="enteteUnit col-4" placeholder="Titre">
                        <input name="authorToModify" type="text" class="enteteUnit col-4" placeholder="Auteur">
                    </div>
                        <textarea class="col-12" name="description" cols="30" rows="10"></textarea>
                        <div class="col-12 row d-flex justify-content-around buttononform">
                        <input class="btnmodif col-5" type="submit" value="Modifier"> 
                        <?php 
                            $sql = "select * from annonces where id_annonce='".change($_GET['id_annonce'])  ."'";
                            $query = mysqli_query($lien,$sql);
                            while ($result = mysqli_fetch_assoc($query))
                            {
                                echo("<input class=\"hidden\" name=\"edit\" type=\"text\" value=\"".$result["id_annonce"]."\" >");
                            }

                        ?>
                        
                        <button class="btncancel col-5">
                            <a href="dashboard.php">Annuler</a>
                        </button>
                        
                        </div>
                    </form>
                </div>
            </div>

    </div> 
</body>
</html>