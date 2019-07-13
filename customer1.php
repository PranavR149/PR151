

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
	
	$fname = $_POST ['fname'];
	$lname = $_POST ['lname'];
	$id = $_POST ['id'];
	$address = $_POST ['address'];	
	$gender = $_POST ['gender'];	
	$dob = $_POST ['dob'];
	$phone = $_POST ['phone'];
	$email = $_POST ['email'];
	
	$sql = "INSERT INTO customerdetails (fname,lname,id,address,gender,dob,phone,email) VALUES ('$fname','$lname','$id','$address','$gender','$dob','$phone','$email')";
	if(!mysqli_query($con,$sql))
	{
		echo "<h1>";echo 'Customer already exist proceed furthur';echo "</h1>";
	}
	else
	{
		echo "<h1>";echo 'Details Saved Successfully :-)';echo "</h1>";
	}
	
?>

<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"vehiclerentalmanagement");	

if(isset($_POST["submit4"]))
{
	mysqli_query($link,"update customerdetails set fname='$_POST[fname]' where id='$_POST[id]'");
	mysqli_query($link,"update customerdetails set lname='$_POST[lname]' where id='$_POST[id]'");
	mysqli_query($link,"update customerdetails set address='$_POST[address]' where id='$_POST[id]'");
	mysqli_query($link,"update customerdetails set gender='$_POST[gender]' where id='$_POST[id]'");
	mysqli_query($link,"update customerdetails set age='$_POST[dob]' where id='$_POST[id]'");
	mysqli_query($link,"update customerdetails set phone='$_POST[phone]' where id='$_POST[id]'");
	mysqli_query($link,"update customerdetails set email='$_POST[email]' where id='$_POST[id]'");
	
	echo "<h1>";echo 'Details Updated Successfully :-)';echo "</h1>";
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Vehicle form</title>
	</head>
		<style>
	body,html {
	background-image:url("down5.jpg");
	background-size:cover;
	}
	</style>
	<body>
	<center>
	<font face="cooper" color="Black"><h1><b><u></u></b></h1></font><tr>
			<h1><td><b><a href="booking1.html">Book Car</a></b></td>
			<td><b><a href="booking11.html">Book Bike</a></b></td>
			<td><b><a href="Pg1.html">Exit</a></b></td></h1>
	</form>
</body>
</html>
