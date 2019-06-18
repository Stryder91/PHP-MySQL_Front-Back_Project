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
</head>
<body>
    <header class="row d-flex justify-content-between">         
        <h2 class="head1">Admin Dashboard</h2>
        <a href="../site/connexion.php">
            <div>Se déconnecter</div>
        </a>
    </header>
        
    <?php

        $sql = "delete from annonces where id_annonce ='".$_GET["id_annonce"]."'";
        $query = mysqli_query($lien,$sql);

        header("location:../admin/dashboard.php");
    ?>
            

    </div> 
</body>
</html>