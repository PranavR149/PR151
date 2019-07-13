<?php

// php code to Insert data into mysql database from input text
if(isset($_POST['insert']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "vehiclerentalmanagement";
    
    // get values form input text and number

    $uname = $_POST['uname'];
    $pword = $_POST['pword'];


    
    
    // connect to mysql database using mysqli

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql query to insert data

    $query = "INSERT INTO register VALUES ('$uname','$pword')";
    	//$sql = "INSERT INTO customerdetails (fname,lname,id,address,gender,dob,phone,email) VALUES ('$fname','$lname','$id','$address','$gender','$dob','$phone','$email')";
    $result = mysqli_query($connect,$query);
    
    // check if mysql query successful

    if($result)
    {
        echo 'successfully registered!!! ';
    }
    
    else{
        echo 'not registered';
    }
    
    
    mysqli_close($connect);
}

?>

<!DOCTYPE html>

<html>

    <head>

        <title> PHP INSERT DATA </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body bgcolor="gold">      
        <form action="<?php $_PHP_SELF ?>" method="post">
            <h1><marquee bgcolor="blue"> registration form </marquee></h1>
            
            <center><input type="text" name="uname" required placeholder="user name"><br><br></center>
            <center> <input type="password" name="pword" required placeholder="password"><br><br></center>
            
  
              
            <center><input type="submit" name="insert" value="REGISTER"></center>
            <hr>
            <center><a href="login.php">go to login form</a></center>


        </form>

    </body>

</html>

