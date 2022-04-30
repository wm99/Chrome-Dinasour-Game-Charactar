<?php

session_start();

include("connection.php");
include("functions.php");
$user_data = check_login($con);
if($_SERVER['REQUEST_METHOD'] == "POST")
{
	//something was posted
	$score = $_POST['key'];
	$user_name = $user_data['user_name'];
	$password =  $user_data['password'];
//	if(!empty($score))
//	{

		//save to database
		$user_id = random_num(20);
		//$query = "UPDATE users SET score = '$score' WHERE user_name='$user_name'";
		$query = "insert into users (user_id,user_name,password,score) values ('$user_id','$user_name','$password','$score')";

		mysqli_query($con, $query);
        header("Location: index.php");
        die;
	}
	?>