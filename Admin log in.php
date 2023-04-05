<?php session_start(); ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/style.css">
    <script src ="js/js.js"> </script>
    <title>Admin log-in</title>
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
<?php 
include("connect.php");
if(isset($_POST['btnSignIn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

     $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";

    $result = mysqli_query($connection, $sql);
    $count = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);
    if($count ==1) {

        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['admin_id'] =  $row['admin_id'];
        $_SESSION['username'] =  $row['username'];

        echo '<div class="alert-ok" role="alert">Welcome You are Signed In Successfully</div>';
        echo '<META HTTP-EQUIV="Refresh" Content="2; URL=admin_index.php">'; 
      
    } else {
        echo '<div class=" alert-error" role="alert">Invalid Login. try Again</div>';
    }
}	
?>
  <div class="FormContainer">

    <form  method="post" onsubmit=" validateLogin();">
        <table style="border:1px solid #EEE; width:720px" >
            <caption> Admin's Log In  </caption>
             <tr>
                    <th><label>Admin's Username:</label></th>
                    <td>  <input type="text" class="form-control" id="username" name="username" placeholder="Enter your Username" style="width:400px;" required></td>
                </tr>
                    <tr>
                    <th> <label>Password</label></th>
                    <td><input type="password" class="form-control" id="password" name="password" placeholder="Password " required style="width:400px;"></td>
                </tr>
                    
                    <tr>
                    <th></th>
                    <td><button type="submit" class="btnsignup" name="btnSignIn"  style="color: black; font-size: medium;">Log In</button></td>
                </tr>
                    
                    
             
        </table>
        </form></div>
    
    
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
    <br>"
    <p>© 2022 All Rights Reserved, Coffee Detective® </p>
    
    </footer>

</html>