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
	
	$id = $_POST ['id'];
	$fb = $_POST ['fb'];
	$suggession = $_POST ['suggession'];
	$bid = $_POST ['bid'];
	
	$sql = "INSERT INTO feedback (id,fb,suggession,bid) VALUES ('$id','$fb','$suggession','$bid')";
	if(!mysqli_query($con,$sql))
	{
		echo "<h1>";echo 'Please enter correct booking Id and customer Id ';echo "</h1>";
	}
	else
	{
		echo "<h1>";echo ' Thanks for your feedback :-)';echo "</h1>";
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Feedback form</title>
	</head>
		
	<body bgcolor="lightbrown">
	<center>
		<tr>
			<td><b><center><a href="Pg1.html">Back to home page</a></center></b>
						<b><center><a href="feedback.html">Back to feedback page</a></center></b></td>
		</tr>	
</form>
</body>
</html>