<?php
 session_start();
include("connect.php");   
    
    global $mySQL; 

if(isset($_POST['update_userprofile']))
{
    $id = $_SESSION['login'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $Etage = $_POST['Etage'];
    $Email = $_POST['Email'];
   

    $query = "UPDATE UserProfile SET firstname='$firstname', lastname='$lastname', Etage='$Etage', Email='$Email' WHERE id='$id' ";
    $query_run = mysqli_query($mySQL, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data Updated Successfully";
       header("Location: profil.php");
    }
    else
    {
        $_SESSION['status'] = "Not Updated";
        header("Location: information.php");
    }
}

?>