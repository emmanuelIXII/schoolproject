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
    <link rel="stylesheet" href="style101.css">
<div class="topnav">
<a class="active" href="logout.php">Logout</a>
</div>
</head>
<body>

<header>Joseph j's Database</header><div class="name"><?php echo $_SESSION["username"] ?> </div>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        color: antiquewhite;
    }
    th {
        color: antiquewhite;
    }
    header{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 50px;
    text-align: left;
    color: aqua;
    padding-bottom: 1%;
  }
  body{
      margin:0;
      padding:0;
      }
</style>
</head>
<body>

<h2>School Test Results</h2>

<table>
  <thead>
    <tr>
      <th>Student Name</th>
      <th>English</th>
      <th>Math</th>
      <th>Science</th>
      <th>History</th>
      <th>Biology</th>
      <th>Design and technology</th>
      <th>Religious education</th>
      <th>GRADE</th>
      <th>CLASS</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Joseph j nkomanga</td>
      <td>89</td>
      <td>85</td>
      <td>90</td>
      <td>78</td>
      <td>75</td>
      <td>89</td>
      <td>90</td>
      <td>12</td>
      <td>A</td>
    </tr>
    <style>
        table{
            width:5px;
        }
    </style>
    <!-- Add more rows for additional students -->
  </tbody>
</table>
 </style>
</body>
</html>
