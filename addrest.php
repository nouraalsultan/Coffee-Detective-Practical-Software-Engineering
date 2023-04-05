<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src ="js/jj.js"> </script>
    <title>add Coffee</title>
</head>

<body>

   <header>
       <nav>
           <a href="index.php"><img src="img/logoSWE-removebg-preview.png" alt="logo" height="170px" width="170px"></a> 
           <div class="nav-links">
               <ul>
                <li><a href="admin_index.php">Home</a></li>
                   <li><a href="Admin log in.php">Admin log-In</a></li>
                   <li><a href="Admin sign up.php">Admin Sign-Up</a></li>
                   <li><a href="index.php">Admin Sign-Out</a></li>
                        <!-- Theme Change Button START------------->
                <img src="img/moon.png" id="moon" alt="moon dark theme">
               </ul>
           </div>
       </nav>
    </header>
    <div class="FormContainer">
    <form method="post" action="" class="addform" ><br>
        <fieldset id="form3">
            <legend>Add New Coffee information</legend>
		
        <ul>
                   <li><label>Coffee Shop Name</label></li> 
                    <input type="text" name="coffeename"><br><br>

                    <li>
                    <input id="choise" type="radio" name="new" value="1"> Check here to notify the users</li><br>

                    
       
                    <li><label>Coffee Photo</label></li><br>
                    <input type="file" name="coffeephoto" ><br><br>
             
                </ul>
                    <input type="submit" onclick="redirect();" value="Add" name="add" class="btnform"><br>
                </fieldset>
    </form>
</div>



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