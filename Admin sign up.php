<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src ="js/js.js"> </script>
    <title>Admin sign-in</title>
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
        if(isset($_POST['btnsignup'])) {
            
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            //$admin_id = mysqli_insert_id($connection); 

            $sql = "SELECT * FROM admin WHERE username='$username'";
            $result = mysqli_query($connection, $sql);
            $count = mysqli_num_rows($result);
            if($count ==1) {
                echo '<div class=" alert-error" role="alert">The admin username is already found into database</div>';
                
            } else {
                $sql = "INSERT INTO admin VALUES(NULL,'$firstname', '$lastname', '$username', '$password')";

                $result = mysqli_query($connection, $sql);
                if($result) {
                    $_SESSION['firstname'] = $firstname;
	            $_SESSION['lastname'] = $lastname;
	            $_SESSION['username'] = $username;
                   $_SESSION['admin_id'] =  mysqli_insert_id($connection); 
										
                    echo '<div class=" alert-ok" role="alert">Sign up Successfully</div>';
                     echo '<META HTTP-EQUIV="Refresh" Content="2; URL=admin_index.php">';
                }
            }


        }	
    ?>
    <div class="FormContainer1">
    <form method="post" onsubmit=" validateSignUp();">
        <table style="border:1px solid #EEE; width:720px" >
            <caption> Fill Admin's information </caption>
					
                <tr>
                    <th><label>Admin's First name:</label></th>
                    <td>
                    <input type="text" class="form-control" id="firstname" name="firstname" pattern="[a-zA-Z]*" title="Letters Only" placeholder="Enter your First Name" required style="width:400px;"><br></td>
                </tr>
                    <tr>
                    <th> <label>Admin's Last name:</label></th>
                    <td><input type="text" class="form-control" id="lastname" name="lastname" pattern="[a-zA-Z]*" title="Letters Only" placeholder="Enter your Last Name" required style="width:400px;"><br></td>
                </tr>
                    <tr>
                    <th><label>Admin's Username:</label></th>
                    <td>  <input type="text" class="form-control" id="username" name="username" placeholder="Enter your Username" style="width:400px;" required><br></td>
                </tr>
                    <tr>
                    <th> <label>Password</label></th>
                    <td><input type="password" class="form-control" id="password" name="password"pattern="[0-9]{3,15}" title="enter 3-15 digits Only" placeholder="enter 3-15 digits Only" required style="width:400px;"><br></td>
 
                </tr>
                    
                    <tr>
                    <th></th>
                    <td><button type="submit" class="btnsignup" name="btnsignup" value="Sign Up"  style="color: black; font-size: medium;">Sign Up</button><br></td>
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
    <br>
    <p>© 2022 All Rights Reserved, Coffee Detective® </p>
    </footer>
</html>