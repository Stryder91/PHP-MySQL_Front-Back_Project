<?php

include("config.inc.php");

function change($string)
{
	return(str_replace("'","\'",strip_tags($string)));
}

?>