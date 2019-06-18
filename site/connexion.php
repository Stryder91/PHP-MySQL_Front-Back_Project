<?php

    include("../admin/fonctions.php");

if (!empty($_POST))
{
    $sql = "select * from admin";
    $query = mysqli_query($lien,$sql);
    $result = mysqli_fetch_assoc($query);

	// Récupération des données de formulaires
	
	$identifiant = change($_POST["identifiant"]);
	$password = change($_POST["password"]);
	
	// Limite de l'exercice : un seul compte est valable
	
	if (($identifiant != $result["admin_name"]) or ($password != $result["admin_password"]))
	{
		echo("<p>Erreur d'authentification !</p>");
	}
	
	// L'utilisateur existe
	
	else
	{
		// Création d'une variable session
		
		$_SESSION["admin"] = $identifiant;
		
		// Redirection vers la page d'accueil privée
		
		header("location:../admin/dashboard.php");
	}
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
    <link rel="stylesheet" href="../styles/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../styles/connexion.css">
</head>
<body>
    <?php include 'headersite.php';?>  
    <section class="main row d-flex justify-content-center text-center">
        <h1 class="Title col-12 align-bottom">Welcome Back</h1>
        <span class="col-12 dashboard">Dashboard Admin</span>
        <div class="formcontainer col-s-10 col-md-2">
            <form class="form" method="post" action="connexion.php">
                <label for="">Identifiant</label>
                <input type="text" name="identifiant" class="inputform">
                <label for="">Mot de passe</label>
                <input type="password" name="password" class="inputform">
                <input type="submit" class="btn button" value="Me connecter"></input>   
            </form>
        </div>
    </section>
    <?php include 'footersite.php';?>
</body>
</html>