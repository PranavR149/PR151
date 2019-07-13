<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"vehiclerentalmanagement");	
?>

<?php
if(isset($_POST["submit5"]))
{
	$res=mysqli_query($link,"select * from vehicledetails order by vid asc");
	echo "<table border=1>";
	echo "<tr>";
	echo "<th>"; echo "Vehicle Id"; echo "</th>";
	echo "<th>"; echo "Vehiclename"; echo "</th>";
	echo "<th>"; echo "Transmission"; echo "</th>";
	echo "<th>"; echo "Fuel"; echo "</th>";
	echo "<th>"; echo "Milage"; echo "</th>";
	echo "<th>"; echo "Cost/km"; echo "</th>";

	echo "</tr>";
	
	while($row=mysqli_fetch_array($res))
	{
		echo "<tr>";
		echo "<td>"; echo $row["vid"]; echo "</td>"; 
		echo "<td>"; echo $row["vehiclename"]; echo "</td>"; 
		echo "<td>"; echo $row["transmission"]; echo "</td>"; 
		echo "<td>"; echo $row["fuel"]; echo "</td>"; 
		echo "<td>"; echo $row["milage"]; echo "</td>"; 
		echo "<td>"; echo $row["cost"]; echo "</td>"; 

		echo "<tr>";
	}
	echo "</table>";
}
?>

<?php
if(isset($_POST["submit7"]))
{
	$res=mysqli_query($link,"select * from bookingdetails ");
	echo "<table border=1>";
	echo "<tr>";
	echo "<th>"; echo "Start Date"; echo "</th>";
	echo "<th>"; echo "End Date"; echo "</th>";
	echo "<th>"; echo "Vehiclename"; echo "</th>";
	echo "<th>"; echo "Number of Vehicles"; echo "</th>";
	echo "</tr>";
	
	while($row=mysqli_fetch_array($res))
	{
		echo "<tr>";
		echo "<td>"; echo $row["startdate"]; echo "</td>"; 
		echo "<td>"; echo $row["enddate"]; echo "</td>"; 
		echo "<td>"; echo $row["vehiclename"]; echo "</td>"; 
		echo "<td>"; echo $row["no"]; echo "</td>"; 
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
	
	<body bgcolor="cyan">
	<center>
		<tr>
			<td><b><center><a href="Pg1.html">Back to home page</a></center></b>
			<b><center><a href="vehicledetails.html">Back to check details</a></center></b></td>
		</tr>	
</form>
</body>
</html>