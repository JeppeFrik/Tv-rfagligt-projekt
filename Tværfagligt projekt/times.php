<?php session_start();?>
<?php include('nav.php'); ?>
<?php
$date = $_GET['day'];
?>
<html>
<body>


<form action="booktime.php" method="post">

<input class="knap" type="submit" name="time" value="06:00 - 07:59"> 
<input class="knap" type="submit" name="time" value="08:00 - 09:59">
<input class="knap" type="submit" name="time" value="10:00 - 11:59">
<input class="knap" type="submit" name="time" value="12:00 - 13:59">
<input class="knap" type="submit" name="time" value="14:00 - 15:59">
<input class="knap" type="submit" name="time" value="16:00 - 17:59">
<input class="knap" type="submit" name="time" value="18:00 - 19:59">
<input class="knap" type="submit" name="time" value="20:00 - 21:59">
<input class="knap" type="submit" name="time" value="22:00 - 23:59">
<input type="hidden" name="date" value="<?php echo $date; ?>">


</form>

</body>
</html>

