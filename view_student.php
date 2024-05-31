<?php
session_start();


if(!isset($_SESSION["username"]))
{
	header("location:login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="admin.css">
<div class="topnav">
<a class="active" href="logout.php">Logout</a>
</div>
</head>
<body>
<header class="header">
<a href="adminhome.php">Admin Dashboard</a>
</header>
<style>
  body{
      margin:0;
      padding:0;
      }
</style>
</head>
<body>
  <aside>
    <ul>
      <li>
        <a href="add_student.php">Add student</a>
      </li>
      <li>
        <a href="view_student.php">View student results</a>
      </li>
    </ul>


  </aside>
  <div class="content">
    <h1>VIEW STUDENT RESULTS</h1>
    <p></p>



  </div>
  <style>
    h1{
        font-family: Arial, Helvetica, sans-serif;
        color: antiquewhite;
    }
  </style>

</body>
</html>
