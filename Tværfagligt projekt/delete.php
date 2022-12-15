<?php 

// Her kan man slette sin senest bookede tid //
include('utils.php');

$userId = $_SESSION['login'];

$query = "
DELETE FROM BookTime WHERE userID=$userId";

header("location: profil.php");
 

$mySQL->query($query);



?>