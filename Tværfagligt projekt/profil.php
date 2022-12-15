<?php 
    include('utils.php');
    include('connect.php');
    $user = getCurrentUser();
    $book = getCurrentBooking();
    global $mySQL;
    
    if(!isset($_SESSION['login'])) {
        header("location: index.php");
    }
?>
<div class="booking">

<style>
<?php include 'mystyle.css'; ?>
</style>

<?php include('nav.php') ?>

<div class="tid">

<?php if($book == null){ ?>
     
     No booking yet, book in calender
<?php } else {

    echo "Start" . ": " . $book->booking_start; 
    echo "<br>";
    echo "End" . ": " . $book->booking_end;
    echo "<br>";
    echo "<button class='knap'><a href='vaskegif.html' style='text-decoration: none; color:white;'>Start washing machine</a></button>";
    echo "<form action='delete.php' method='post'>
    <input class='knap' type='submit' value='Delete your booking'> 
</form>";
    
}?>

    </div>
    </div> 

<h2 class="overskrift_login">

    <p> Your informations:</p>

    <p class="input">Firstname: <?php echo $user->firstname?></p>

    <p class="input">Lastname: <?php echo $user->lastname?></p>
    
    <p class="input">Floor & Door: <?php echo $user->Etage?></p>
    
    <p class="input">E-mail: <?php echo $user->Email?></p>

    <form action="information.php" method="post">
    
        <button class="knap" type="submit">
        Change your information now!
        </button> 
    </form>
    
    </h2>  