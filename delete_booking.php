<?php
$con=mysqli_connect('localhost','root','','employability');

$sql="DELETE FROM booking_cal WHERE id='$_GET[id]'";

if(mysqli_query($con,$sql))
	header("refresh:0.2; url=manage_booking.php");
else
	echo "NOT DELETED";
?>