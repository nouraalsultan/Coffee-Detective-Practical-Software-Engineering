<?php session_start(); include("connect.php"); $admin_id=$_SESSION['admin_id'];?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <title>Welcome Admin</title>
</head>

<body>

   <header style="width:100%; height:200px;">
       <nav>
           <a href="admin_index.php"><img src="img/logoSWE-removebg-preview.png" alt="logo"  style="float:left; width:170px; height:170px; margin-top:-1px;"></a> 
           <div class="nav-links">
               <ul style="margin-top:60px;">
                   <li style="font-size: 25px; font-weight: bold;">
                     Hi, <?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname'] ?></li>
                    <li> <a href="admin_index.php"><i class="fa fa-home"></i> Home</a></li>
                   <li><a href="outdoor2.php"><i class="fa fa-building-o"></i> Out Door</a></li>
                   <li><a href="indoor2.php"><i class="fa fa-building"></i> In Door</a></li>
                   <li><a href="newopen2.php"><i class="fa fa-star"></i> New Open</a></li>
                   <li><a href="adminLogout.php"><i class="fa fa-sign-out"></i> Sign-Out</a></li>
                   

                        <!-- Theme Change Button START------------->
                <img src="img/moon.png" id="moon" alt="moon dark theme">
                  
               </ul>
           </div>
       </nav>
    </header>

<div class="container">