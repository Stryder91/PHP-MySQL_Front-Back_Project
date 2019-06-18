<?php

include("../admin/fonctions.php");

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contactez nous</title>
    <link rel="stylesheet" href="../styles/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../styles/connexion.css">
    <script src="../scripts/jquery.js"></script>
</head>
<body>
    <?php include 'headersite.php';?>  
    <section class="main row d-flex justify-content-center text-center">
        <h1 class="Title col-12 align-bottom">Bienvenue</h1>
        <h3 class="col-12 dashboard dashboard2">Contacter nous</h3>
        <div class="formcontainer col-s-10 col-md-4">
            <form class="form" method="post" action="contact_post.php">
                <div class="row rowformPropos">
                    <div class="col-6">
                        <label for="mail">Email</label>
                        <input id="mail" type="text" name="mail" class="inputform inputformPropos">
                    </div>
                    <div class="col-6">
                        <label for="name">Prénom</label>
                        <input id="name" type="text" name="name" class="inputform inputformPropos">
                    </div>
                </div>

                <label for="area">Votre message</label>
                <textarea name="area" cols="30" rows="50" class="areaContact"></textarea>
                <input type="submit" class="btn button buttonContact" value="Envoyer">
            </form>
        </div>
    </section>
    <?php include 'footersite.php';?>
    <script type="text/javascript">
        $(document).ready(function(){
            
            
            $('.buttonContact').click(function(){
                alert('Merci pour votre message!');
            })
        });
    </script>
</body>
</html>
