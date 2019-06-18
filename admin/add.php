<?php
    include("../admin/fonctions.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add page</title>    
    <link rel="stylesheet" href="../styles/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../styles/admin.css">
</head>
<body>
    <header class="row d-flex justify-content-between">         
        <h2 class="head1">Admin Dashboard</h2>
        <a href="../site/connexion.php">
            <div>Se déconnecter</div>
        </a>
    </header>
    
    <div class="d-flex justify-content-center">
        
    
            <div class="col-5 d-flex main">
            
                <div class="row d-flex justify-content-center">
                    <form action="../admin/add_post.php" method="post">
                        <div class="col-12 row d-flex justify-content-around" style="width:25vw !important;">
                            <input type="text" name="addname" placeholder="Entrez un titre" class="col-5 addname"> 
                            <input type="text" name="addauthor" placeholder ="Entrez un auteur" class="col-5 addname">
                            <input type="text" name="addimg" placeholder ="Entrez une url image" class="col-12 addname">
                        </div>
                        <textarea class="col-12" name="description" id="" cols="30" rows="10" placeholder="Description.."></textarea>
                        <div class="col-12 row d-flex justify-content-around buttononform">
                        <input class="btnmodif col-3" type="submit" value="Ajouter"> 
                        <a href="dashboard.php" class="btncancel col-3">
                            Annuler
                        </a>
                        </div>
                    </form>
                </div>
            </div>

    </div> 
</body>
</html>