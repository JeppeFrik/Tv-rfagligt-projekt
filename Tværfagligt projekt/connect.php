<?php

// Her connecter vi til vores database
$server = "mysql68.unoeuro.com"; 
    $username = "clarajbirk_dk"; 
    $password = "DwAt2bdgcryhB3fFGm5k"; 
    $database = "clarajbirk_dk_db"; 
    
    $mySQL = new mysqli($server, $username, $password, $database);

    if(!$mySQL) {
        die("Could not connect to the MySQL server: " . mysqli_connect_error());
    }

?>