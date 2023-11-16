<?php
include 'connect.php';
  session_start();
if(!isset($_SESSION["username"])){
  // echo $_SESSION["username"];
  // echo "hey you are in welcome.php";
  header("Location:login.php");
  // {$hostname}/thepass/
}
?>


<html>
    <head>
        <title>property management</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
     <div class="banner">
        <div class="navbar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="display.php">Owner</a></li>
                <li><a href="displaypr.php">Property</a></li>
                <li><a href="displayte.php">Tenant</a></li>
                <li><a href="displayle.php">Lease</a></li>
                <li><a href="displaypay.php">Payment</a></li>
                <li><a href="logout.php">Log out</a></li>
            </ul>
        </div>
        <div class="content">
            
            <h1>PROPERTY MANAGEMENT</h1><br>
            <h2>The Simplest Way to Manage Property</h2>
           
        </div>
     </div>
    </body>
</html>
