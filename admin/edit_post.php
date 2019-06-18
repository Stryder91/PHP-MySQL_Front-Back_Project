<?php

include("../admin/fonctions.php");

if (!isset($_SESSION["admin"]))
{
	header("location:exercice30.php?pirate");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit_post</title>
</head>
<body>
    <?php

        $changement = $_GET["description"];
        $titleToModify = $_GET["titleToModify"];
        $authorToModify = $_GET["authorToModify"];
        $session = $_GET['edit'];

        $sql = "update annonces set annonce_desc='$changement', annonce_titre='$titleToModify', annonce_auteur='$authorToModify' where id_annonce='$session'";
        $query = mysqli_query($lien,$sql);

        header("location:../admin/dashboard.php");
        
    ?>
</body>
</html>