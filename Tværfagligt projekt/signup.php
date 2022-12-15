<?php
    session_start();
    include("connect.php");
    global $mySQL;

    $firstname = isset($_REQUEST["firstname"]) ? $_REQUEST["firstname"] : null;
    $lastname = isset($_REQUEST["lastname"]) ? $_REQUEST["lastname"] : null;
    $Etage = isset($_REQUEST["Etage"]) ? $_REQUEST["Etage"] : null;
    $Email = isset($_REQUEST["Email"]) ? $_REQUEST["Email"] : null;
    $username = isset($_REQUEST["username"]) ? $_REQUEST["username"] : null;
    $password = isset($_REQUEST["password"]) ? password_hash($_REQUEST["password"], PASSWORD_DEFAULT) : null;


    $sql = "CALL AddNewUser('" . $firstname . "','" . $lastname . "','" . $Etage . "','" . $Email . "','" . $username . "','" . $password . "')";
    $result = $mySQL->query($sql);


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST['username'])) {
        echo '<script type="text/javascript">alert("Please fill username");window.location=\'create_user.php\';</script>';
    }

    if (empty($_POST['password'])) {
        echo '<script type="text/javascript">alert("Plese fill password");window.location=\'create_user.php\';</script>';
    }

    if (empty($_POST['firstname'])) {
        echo '<script type="text/javascript">alert("Please fill firstname");window.location=\'create_user.php\';</script>';
    }

    if (empty($_POST['lastname'])) {
        echo '<script type="text/javascript">alert("Please fill Lastname");window.location=\'create_user.php\';</script>';

    }
    if (empty($_POST['Etage'])) {
        echo '<script type="text/javascript">alert("Please fill Floor & Door");window.location=\'create_user.php\';</script>';

    }
    if (empty($_POST['Email'])) {
        echo '<script type="text/javascript">alert("Please fill Email");window.location=\'create_user.php\';</script>';
    }
}
?>
<style>
<?php include 'mystyle.css'; ?>
</style>
<?php include('nav.php') ?>
<p class="infotekst">Congratulations, log in now<br></p>
    <form action='login.php' method='post'>
        <input type='text' name='username' placeholder='Username'><br>
        <input type='password' name='password' placeholder='Password'><br>
        <input type='submit' value='Login'>
    </form>




