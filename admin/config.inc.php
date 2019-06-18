<?php
session_start();

$host = "   "; //local "localhost" 
$user = "root"; //local root // ltran
$password = ""; //local "" // _M_ol6FN8_
$bdd = "particulart"; //"particulart" // ltran

$lien = mysqli_connect($host,$user,$password,$bdd);

mysqli_query($lien,"set names utf8")
?>