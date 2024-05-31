<?php

$host="localhost";
$user="root";
$password="";
$db="user";

session_start();


$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
	die("connection error");
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];


	$sql="select * from login where username='".$username."' AND password='".$password."' ";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);

	if($row["usertype"]=="user1")
	{	

		$_SESSION["username"]=$username;

		header("location:userhome.php");
	}

	elseif($row["usertype"]=="admin")
	{

		$_SESSION["username"]=$username;
		
		header("location:adminhome.php");
	}
    
	if($row["usertype"]=="user2")
	{

		$_SESSION["username"]=$username;
		
		header("location:luyando.php");
	}
    elseif($row["usertype"]=="user3")
	{

		$_SESSION["username"]=$username;
		
		header("location:shadrick.php");
	}
    if($row["usertype"]=="user4")
	{

		$_SESSION["username"]=$username;
		
		header("location:caroline.php");
	}
    elseif($row["usertype"]=="user5")
	{

		$_SESSION["username"]=$username;
		
		header("location:joseph.php");
	}
	elseif($row["usertype"]=="user6")
	{

		$_SESSION["username"]=$username;
		
		header("location:caristo.php");
	}
	elseif($row["usertype"]=="user7")
	{

		$_SESSION["username"]=$username;
		
		header("location:austin.php");
	}
	elseif($row["usertype"]=="user8")
	{

		$_SESSION["username"]=$username;
		
		header("location:grace.php");
	}
	elseif($row["usertype"]=="user9")
	{

		$_SESSION["username"]=$username;
		
		header("location:jeremiah.php");
	}

	else
	{
		echo "username or password incorrect";
	}

}




?>
<div class="body3">
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Namalundu secondary</title>
  <link rel="stylesheet" href="Namz.css">
  <div class="topnav">
    <a class="active" href="Namalundu.html">Home</a>
    <a href="contact.html">Contact us</a>
    <a href="about.html">About us</a>
    <a href="login.php">Login</a>
	<a href="sign up.html">Sign up</a>
  </div>
<header>Login</header>
<center>
<h1>Login Form</h1>
<p2>Fill in your login details in the form below</p2>
<hr>
</center>
<center>
	<br><br>
		<br>


		<form action="#" method="POST">

	<div action>
		<input type="text" name="username" placeholder="Enter Username" class="contact-inputs" required>
	</div>
	<br>

	<div action>
		<input type="password" name="password" placeholder="Enter Password" class="contact-inputs"required>
	</div>

	<div>
	<p class="link">Don't Have An Account?<br>
     <a href="sign up.html">Sign Up</a> Here</p>
	<input class="btnn" type="submit" value="Login">
	</div>


	</form>
</center>


	<br><br>
</head>
<style>
  header{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 50px;
    text-align: left;
    color: aqua;
    padding-bottom: 1%;
  }
  p2{
    font-family: Arial, Helvetica, sans-serif;
  }
  a{
	color:aqua;
  };

</style>
<body>
  <style>
    body{
      background-color: rgb(229, 229, 230);
      text-align: center;
      color: beige;
      margin:0;
      padding:0;
    }
    p1{
      font-family: Arial, Helvetica, sans-serif;
    }
    h1{
        text-align: center;
    }
	p{
		font-family:'Times New Roman', Times, serif;
		font-weight: 500;
	}
	

  </style>
</body>
</div>
</html>