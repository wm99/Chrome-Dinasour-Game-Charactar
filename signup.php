<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: black;
		font-weight: bold;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: rgba(249, 242, 242, 0.717);
		margin: auto;
		width: 300px;
		padding: 20px;
	}
	body 
    {
       
        background-image: url(backg.jpg);
        background-position: center;
        background-size: cover;}
	a{
        text-decoration:none;
        color:black;
    }
    a:hover{
        color:white;
    }
	</style>

	<div id="box" ALIGN="center">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: black;">Signup</div>

			<input id="text" type="text" name="user_name" placeholder="UserName"><br><br>
			<input id="text" type="password" name="password" placeholder="*****"><br><br>

			<input id="button" type="submit" value="Signup" ><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>
