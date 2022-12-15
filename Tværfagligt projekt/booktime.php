<?php 

// Denne kode gør, at den tid man booker bliver ført ind i vores SQL database //

include('connect.php');
include('booking.php');

$dato = $_POST['date'];
$tid = $_POST['time'];
$userId = $_SESSION['login'];

$tidArray = explode(" - ", $tid);

$startTid = $dato . " " . $tidArray[0];
$slutTid = $dato . " " . $tidArray[1];

$query = "
INSERT INTO BookTime
(booking_start, booking_end, userID)
VALUES
('$startTid', '$slutTid', '$userId');
";

$mySQL->query($query);

echo '<script type="text/javascript">
       window.onload = function () { alert("Booking confirmed"); } 
       
</script>'; 

exit;
?>
