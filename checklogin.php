<?php
	session_start();

	$con = mysqli_connect("localhost", "root", "", "ipl") or die(mysqli_error());

	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MySql: " . mysqli_connect_error();
	}

	$username = mysqli_real_escape_string($con, $_POST['username']);
	$password = mysqli_real_escape_string($con, $_POST['password']);

	$query = mysqli_query($con, "SELECT * from users WHERE username = '$username'"); 

	$table_users = "";
	$table_password = "";
	
	while($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
	{
		$table_users = $row['username']; 
		$table_password = $row['password']; 
	}

	if(($username == $table_users)) 
	{
		if($password == $table_password)
		{
			$_SESSION['user'] = $username; 
			header("location: home1.php"); 
		}
		else
		{
			Print '<script>alert("Incorrect Password..!");</script>'; 
			Print '<script>window.location.assign("index.php");</script>';
		}
				
	}
	else
	{
		Print '<script>alert("Incorrect Username..!");</script>';
		Print '<script>window.location.assign("index.php");</script>'; 
	}

	mysqli_close($con);
?>