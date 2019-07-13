<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"vehiclerentalmanagement");	
?>

<?php
if(isset($_POST["submit3"]))
{
	mysqli_query($link,"delete from bookingdetails where id='$_POST[id]'");
	mysqli_query($link,"delete from paymentdetails where id='$_POST[id]'");
	mysqli_query($link,"delete from customerdetails where id='$_POST[id]'");
	mysqli_query($link,"delete from feedback where id='$_POST[id]'");
	echo "<h1>";echo "Booking cancelled,Deposit amount will be refunded shortly";echo "</h1>";
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Editdetails form</title>
	</head>

	<body bgcolor="silver">
	<center>
		<tr>
			<td><b><center><a href="Pg1.html">Back to home page</a></center></b>
						<b><center><a href="editdetails.html">Back</a></center></b></td>
		</tr>
</form>
</body>
</html>
