<?php
session_start();
if(!isset($_SESSION['login'])) {
        header("location: index.php");
    }
    ?>

<?php include('nav.php') ?>
<style>
<?php include 'mystyle.css'; ?>
</style>
<header class="knapcu">
  <button class="knaph" onclick="history.go(-1);">Back</button>
</header>

<form action="update.php" method="post">

<br>
<div class="container my-4 ">
    <!--Her er en form til at opdatere brugerens oplysninger -->
    <h1 class="text-center">Update your informations</h1> 
    
    <br>

        <div class="form-group"> 
            <label for="firstname" class="infotekst">Firstname</label> 
            <input type="text" class="form-control"
            id="firstname" name="firstname"> 
        </div>
        <br>

        <div class="form-group"> 
            <label for="lastname" class="infotekst">Lastname</label> 
            <input type="text" class="form-control"
            id="lastname" name="lastname"> 
        </div>
        <br>

        <div class="form-group"> 
            <label for="Etage" class="infotekst">Floor & Door</label> 
            <input type="text" class="form-control"
            id="Etage" name="Etage"> 
        </div><br>

        <div class="form-group"> 
            <label for="Email" class="infotekst">E-mail</label> 
            <input type="text" class="form-control"
            id="Email" name="Email"> 
        </div>
        <br>

        </div>      
    
        <button type="submit" name="update_userprofile" class="knap">Update!</button> 
        </form>