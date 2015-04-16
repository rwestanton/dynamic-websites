<?php
// Setup File:

# Databse Connection Here… -----> You want to stop your site from being hacked so you will want this to be less accessible , but this will do for now 

//mysqli_connect($host, $user, $password, $database, $port, $socket)
$dbc = mysqli_connect("localhost", "dev1", "mafia12", "balletcms") OR die("Could not connect because: ".mysqli_connect_error);

/*$db_host = "localhost"
$db_user = "dev1"
$db_pass = "mafia12"
$db_name = "balletcms"

mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die ("Could not connect because: ".mysqli_connect_error);*/

$site_title = "Calcagno Ballet Tailors and Retailer";
$page_title = "Homepage";

?>