<?php session_start();?>
<?php
if(!isset($_SESSION['mdr'])) {
            $_SESSION['mdr'] = 0;
        }
 if(!isset($_SESSION['login'])) {
        header("location: index.php");
    }
    // Hvis den findes(knap), så læser den vores kode - Derfor får vi ikke en fejl i vores kode //
    if(isset($_REQUEST['knap'])) {
        $knap = $_REQUEST['knap'];

        
        if($knap == "Next month") { 
            $_SESSION['mdr'] ++;
            header('location: booking.php');
            
        }
        if($knap == "Previous month") {
            $_SESSION['mdr'] --;
            header('location: booking.php');
            
        }
        if($knap == "Current month") {
            $_SESSION['mdr'] = 0;
            header('location: booking.php');
            
        }
    }
?>


<?php include('nav.php') ?>
<style>
<?php include 'mystyle.css'; ?>
</style>

<?php

// $knap = isset($_REQUEST['knap']) ? $_REQUEST['knap'] : "";


// Den her ændre månederne - Dette er en INT //


$today = date("Y-m-d h:i:s");

$showDate = date('Y-m-d h:i:s', strtotime($today. ' ' . $_SESSION['mdr'] . ' months'));

$year = date("Y", strtotime($showDate));
$month = date("m", strtotime($showDate));
$monthh = date("M", strtotime($showDate));
$day = date("d", strtotime($showDate));
$dayOfWeek = date("D", strtotime($showDate));
$numbersDaysInMonth = date("t", strtotime($showDate));
$time = date("h:i:s", strtotime($showDate));

echo "<p style='font-size:4rem;'>" .  $monthh . " " . $year . "</p>";

?>


<html>
<body>
    <div class="knapp">
<form method="get" action="booking.php">
<input class="knapv" type="submit" name="knap" value="Next month">
<input class="knaph" type="submit" name="knap"  value="Previous month">
<input class="knapn" type="submit" name="knap"  value="Current month">
</form>
</div>
</body>
</html>


<?php
for($i = 1; $i <= $numbersDaysInMonth; $i++) {
    $dayOfWeek = date("D", strtotime("$year-$month-$i"));
    $dayy = $i;
    if($dayy < 10) {
        $dayy = "0" . $dayy;
    }
    echo "<span class='kalender'><a href='times.php?day=$year-$month-$dayy ' </span> " . "<span class='kalender1'>$dayOfWeek $dayy</a> </span>";
}
 
?>