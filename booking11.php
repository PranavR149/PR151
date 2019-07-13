<?php

	$con = mysqli_connect('127.0.0.1','root','');
	
	if(!$con)
	{
		echo 'Not connected';
	}
	
	if(!mysqli_select_db($con,'vehiclerentalmanagement'))
	{
		echo 'db not selected';
	}
	$startdate = $_POST ['startdate'];
	$enddate = $_POST ['enddate'];
	$sstop = $_POST ['sstop'];
	$id = $_POST ['id'];
	$no = $_POST ['no'];
	$vehiclename = $_POST ['vehiclename'];	
	
	
	
	$sql = "INSERT INTO bookingdetails (startdate,enddate,sstop,id,no,vehiclename) VALUES ('$startdate','$enddate','$sstop','$id','$no','$vehiclename')";

	if(!mysqli_query($con,$sql))
	{
		echo "<h1>";echo 'Id does not match:-( ';echo "</h1>";
	}
	else
	{
		echo "<h1>";echo 'Done,';echo "</h1>";
	}
	
?>

<?php

	$con = mysqli_connect('127.0.0.1','root','');
	
	if(!$con)
	{
		echo 'Not connected';
	}
	
	if(!mysqli_select_db($con,'vehiclerentalmanagement'))
	{
		echo 'db not selected';
	}
	$pay = $_POST ['pay'];
	$cname = $_POST ['cname'];
	$cno = $_POST ['cno'];
	$vfrom = $_POST ['vfrom'];
	$vthru = $_POST ['vthru'];
	$initiald = $_POST ['initiald'];
	$id = $_POST ['id'];
	$vehiclename = $_POST ['vehiclename'];	
	
	$sql = "INSERT INTO paymentdetails (pay,cname,cno,vfrom,vthru,initiald,id,vehiclename) VALUES ('$pay','$cname','$cno','$vfrom','$vthru','$initiald','$id','$vehiclename')";
		if(!mysqli_query($con,$sql))
	{
		echo ' ';
	}
	else
	{
		echo "<h1>";echo 'Proceed next:-)';echo "</h1>";
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Vehicle form</title>
	</head>
	<body background="bik.jpg">
	<center>
	<font face="cooper" color="Black"><h1><b><u></u></b></h1></font><tr>
			<h1><td><b><a href="final.html">Next</a></b></td>
		  <td><b><a href="customer1.html">Back to customerdetails</a></b></td>
		<td><b><a href="Pg1.html">Back to home page</a></b></td></h1>
	</form>
</body>
</html>

