<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"vehiclerentalmanagement");	
?>

<?php
if(isset($_POST["submit1"]))
{
	$res=mysqli_query($link,"select * from bookingdetails where id='$_POST[id]'");
	echo "<table border=1>";
	echo "<tr>";
	echo "<th>"; echo "Booking id"; echo "</th>";
	echo "<th>"; echo "Start Date"; echo "</th>";
	echo "<th>"; echo "End Date"; echo "</th>";
	echo "<th>"; echo "Pickup Point"; echo "</th>";
	echo "<th>"; echo "Customer Id"; echo "</th>";
	echo "<th>"; echo "Number of Vehicles"; echo "</th>";
	echo "<th>"; echo "Vehiclename"; echo "</th>";
	echo "</tr>";
	
	while($row=mysqli_fetch_array($res))
	{
		echo "<tr>";
		echo "<td>"; echo $row["bid"]; echo "</td>"; 
		echo "<td>"; echo $row["startdate"]; echo "</td>"; 
		echo "<td>"; echo $row["enddate"]; echo "</td>"; 
		echo "<td>"; echo $row["sstop"]; echo "</td>";  
		echo "<td>"; echo $row["id"]; echo "</td>";
		echo "<td>"; echo $row["no"]; echo "</td>";		
		echo "<td>"; echo $row["vehiclename"]; echo "</td>";  
		echo "<tr>";
	}
	echo "</table>";
}
?>

<?php
if(isset($_POST["submit1"]))
{
	$res=mysqli_query($link,"select * from paymentdetails where id='$_POST[id]'");
	echo "<table border=1>";
	echo "<tr>";
	echo "<th>"; echo "Card Type"; echo "</th>";
	echo "<th>"; echo "Card Name"; echo "</th>";
	echo "<th>"; echo "Card Number"; echo "</th>";
	echo "<th>"; echo "Valid From"; echo "</th>";
	echo "<th>"; echo "Valid Thru"; echo "</th>";
	echo "<th>"; echo "Initial Deposit"; echo "</th>";
	echo "<th>"; echo "Customer Id"; echo "</th>";
	echo "</tr>";
	
	while($row=mysqli_fetch_array($res))
	{
		echo "<tr>";
		echo "<td>"; echo $row["pay"]; echo "</td>"; 
		echo "<td>"; echo $row["cname"]; echo "</td>"; 
		echo "<td>"; echo $row["cno"]; echo "</td>"; 
		echo "<td>"; echo $row["vfrom"]; echo "</td>"; 
		echo "<td>"; echo $row["vthru"]; echo "</td>"; 
		echo "<td>"; echo $row["initiald"]; echo "</td>"; 
		echo "<td>"; echo $row["id"]; echo "</td>";  
		echo "<tr>";
	}
	echo "</table>";
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Checkdetails form</title>
	</head>
	
	<body bgcolor="lightblue">
	<center>
			<td><b><center><a href="Pg1.html">Back to home page</a></center></b>
			<b><center><a href="checkdetails.html">Back to view details</a></center></b></td>
		</tr>	
</form>
</body>
</html>
