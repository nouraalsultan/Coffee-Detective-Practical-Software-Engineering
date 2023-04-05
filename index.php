<?php include("connect.php"); ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src ="js/jj.js"> </script>
    <title>Coffee Detective</title>
</head>

<body>

   <header>
       <nav>
           <a href="index.php"><img src="img/logoSWE-removebg-preview.png" alt="logo" height="170px" width="170px"></a> 
           <div class="nav-links">
               <ul>
                <li><a href="index.php">Home</a></li>
                   <li><a href="Admin log in.php">Admin log-In</a></li>
                   <li><a href="Admin sign up.php">Admin Sign-Up</a></li>
                       <!-- Theme Change Button START------------->
                <img src="img/moon.png" id="moon" alt="moon dark theme">
               </ul>
           </div>
       </nav>
    </header>
<hr>

<section class="catg">
    <h1 id="h1">Riyadh Coffee Shops</h1>
    <p>Search for your coffee shops in catagories</p>
</section>


<table id="table">
    <tr>
        <td colspan="4">
        </td>
    </tr>
    <tr>
        <td>
            <div class="div1">
                <img src="img/img1.JPG" style="width: 50%;" /><br><br>
                <p>Outdoors Coffee Shops</p><br>
                <button class="btn btn1"><a href="outdoor.php">Search</a></button>
                <br /><br />
            </div>
        </td>
        <td>
            <div class="div1">
                <img src="img/img2.JPG" style="width: 50%;" /><br><br>
            <p>Indoors Coffee Shops</p><br>
            <button class="btn btn2"><a href="indoor.php">Search</a></button>
            <br /><br />
            </div>
        </td>
        <td>
<?php
	$query1 = "SELECT * FROM coffee_shop WHERE type='New Open' AND allow_notify=1";
	$result1 = mysqli_query($connection, $query1);
	$count = mysqli_num_rows($result1);
?>
            <div class="div1  <?php if($count > 0) echo " notified "; ?>" id="gg" >
             
                <img src="img/img3.JPG" style="width: 50%;" /><br><br>
            <p>Newly Opened Coffee Shops</p><br>
            <button class="btn btn3"><a href="newopen.php">Search</a></button>
            <br /><br />
            </div>
        </td>
        
    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
    
</table>

<script>
    var moon = document.getElementById("moon");
  
    moon.onclick = function() {
      document.body.classList.toggle("dark-theme");
      if(document.body.classList.contains("dark-theme")){
        moon.src = "img/sun.png";
      }
      else {
        moon.src = "img/moon.png";
      }
    }
     </script> 
</body>

<footer>
    <br>
    <p>© 2022 All Rights Reserved, Coffee Detective® </p>
    </footer>
</html>