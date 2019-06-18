<?php

include("../admin/fonctions.php");

$addmail = $_POST["mail"];
$addname = $_POST["name"];
$addarea = $_POST["area"];

$sql = "insert into comments (comment_mail,comment_name,comment_text) values('$addmail','$addname','$addarea')";
$query = mysqli_query($lien,$sql);

header("location:../site/contact.php");


?>