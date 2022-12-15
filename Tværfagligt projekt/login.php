<?php
    session_start();
    
    include("connect.php");
    global $mySQL;

//Her checker vi om username og password er sat
    $username = isset($_REQUEST["username"]) ? $_REQUEST["username"] : null;
    $password = isset($_REQUEST["password"]) ? $_REQUEST["password"] : null;

    $sql = "SELECT ID, hashed_password FROM UserLogin WHERE username = '$username' LIMIT 1";
    $response = $mySQL->query($sql);

    $user = $response->fetch_object();

//Her er vores function til at sende brugeren tilbage hvis indtastning er forkert 
//eller sende brugeren videre hvis indtastning er rigtigt

    if($user == NULL) {
        // Forkert brugernavn
        echo '<script type="text/javascript">alert("Wrong username or password, try again");window.location=\'index.php\';</script>';
    } else {
        $verify = password_verify($password, $user->hashed_password);
        if($verify == true) {
            // Kodeord og brugernavn KORREKT
            $_SESSION['login'] = $user->ID;
            header('location: profil.php');
        } else {
            // Kodeord FORKERT
            echo '<script type="text/javascript">alert("wrong password, try again");window.location=\'index.php\';</script>';
        }
    }
?>