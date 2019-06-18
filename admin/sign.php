<?php
    include("fonctions.php");
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Page Admin</title>
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
    $username = $_POST['identifiant'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    echo($username);
    echo($password);

    $sql = "insert into user(user_mail,user_mdp) values('$username','$password')";

    $query = mysqli_query($lien,$sql);

    while ($result = mysqli_fetch_assoc($query))
    {
        
        if ($_POST['password'] !== $_POST['password2']){
            header("location:../site/inscription.php");
        }
        
    }
    

    ?>
    </div>
</body>
</html>
