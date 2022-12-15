<?php

// Dette gør, at man kan logge ud //

session_start();
session_destroy();
header('Location: /index.php');
?>
