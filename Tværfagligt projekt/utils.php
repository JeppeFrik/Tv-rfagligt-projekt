<?php
    session_start();
    
    include("connect.php");
    global $mySQL;



function getCurrentUser() {
    if (!isset($_SESSION['login']))  {
        session_start(); 

    }

    global $mySQL;

    $id = $_SESSION['login'];

    
    $res = $mySQL->query("SELECT * FROM UserProfile WHERE id ='$id'");
    
    $data = $res->fetch_object();

    return $data;
}

function getCurrentBooking() {
    if (!isset($_SESSION['login']))  {
        session_start(); 

    }

    global $mySQL;

    $id = $_SESSION['login'];

    $res = $mySQL->query("SELECT * FROM BookTime WHERE userID ='$id'");
    
    $data = $res->fetch_object();

    return $data;
}

?>