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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}
	/*if($_SERVER['REQUEST_METHOD'] == "POST"){
		//part1
		$score = $_POST['score'];
		if(!empty($user_name)){
			$user_id = random_num(20);
			$query = "insert into users (score) values ('$score')";
	
			mysqli_query($con, $query);
		}
		//part2
		if(iseset($_POST['score']))
		 $score=$_POST['score'];*/
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">
	 body 
    {
       
        background-image: url(backg.jpg);
        background-position: center;
        background-size: cover;}

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
		position: center;
	}

	#box{

		background-color: rgba(249, 242, 242, 0.717);
		margin: auto;
		width: 300px;
		padding: 20px;
	}
	a{
    text-decoration:none;
    }
    a:hover{
    color:white;
    }

	</style>

	<div id="box" ALIGN="center">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: black;" ALIGN="center">Login</div>

			<input id="text" type="text" name="user_name" placeholder="UserName"><br><br>
			<input id="text" type="password" name="password" placeholder="******"><br><br>

			<input id="button" type="submit" value="Login" ><br><br>

			<a href="signup.php" ALIGN="center">Click to Signup</a><br><br>
		</form>
	</div>
</body>
</html>
