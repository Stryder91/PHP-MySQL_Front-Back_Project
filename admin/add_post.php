<?php
    include("../admin/fonctions.php");
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add_Post</title>
    <style type="text/css">
        body {
            color : red;
            background:grey;
        }
    </style>
</head>
<body>
    <div class="row container main">
    <?php
    echo $addname = $_POST['addname'];
    echo $addauthor = $_POST['addauthor'];
    echo $addimg = $_POST['addimg'];
    echo $adddesc = $_POST['description'];

    $sql = "insert into annonces (annonce_titre,annonce_auteur,annonce_desc,annonce_image) values('$addname','$addauthor','$adddesc','$addimg')";
    
    $query = mysqli_query($lien,$sql);
    
    // header("location:../admin/dashboard.php");
    ?>
    </div>
</body>
</html>
