<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleindoor.css">
    <style>
body{
    background-color: antiquewhite;
}
</style>
    <title>Indoors</title>
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

<div class="add">
    <button type="submit"><img src="img/icons8-plus-48.png" alt="add" id="add" height="70px" width="70px"></button>
    
    <p id="addcoffee" style="font-size: 15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add</p>
</div>

    <div class="cafes">
        
    
            <div class="container">
              <form action="#">
               
                <h3 class="center"><button type="submit"><img src="img/icons8-delete-24.png" alt="delete" id="delete"></button>&nbsp;<button type="submit"><img src="img/icons8-update-60.png" alt="update" id="update" height="22px" width="22px"></button>&nbsp;&nbsp;Cacti</h3><br>
                <img src="img/indoor2.jpeg" alt="bateel cafe" class="canter" height="200px" width="200px"><br><br>
                <div class="textarea">
                  <textarea cols="25" rows="2" placeholder=" Write your name.."></textarea>
                </div><br>
                <div class="textarea">
                  <textarea cols="30" rows="5"placeholder=" Describe your experience.."></textarea>
                </div><br>
                <input type="submit" value="Post Review" class="btn"><br><br>
                <hr><br>
                <h6><img src="img/icons8-user-50.png" alt="user" height="20px" width="20px">bander</h6>
                <p style="font-size: 12px;">2months ago</p><br>
                <b><p style="font-size: 14px;">I highly recommend this cafe!</p></b><br><br>
                <hr><br>
                <h6><img src="img/icons8-user-50.png" alt="user" height="20px" width="20px"> muneera</h6>
                <p style="font-size: 12px;">1months ago</p><br>
                <b><p style="font-size: 14px;">i loved it!</p></b>
              </form>
            </div>
    
            <div class="container">
              <form action="#">
                
                <h3 class="center"><button type="submit"><img src="img/icons8-delete-24.png" alt="delete" id="delete"></button>&nbsp;<button type="submit"><img src="img/icons8-update-60.png" alt="update" id="update" height="22px" width="22px"></button>&nbsp;&nbsp;Camel Step</h3><br>
                <img src="img/indoor3.jpeg" alt="bateel cafe" class="canter" height="200px" width="200px"><br><br>
                <div class="textarea">
                  <textarea cols="25" rows="2" placeholder=" Write your name.."></textarea>
                </div><br>
                <div class="textarea">
                  <textarea cols="30" rows="5"placeholder=" Describe your experience.."></textarea>
                </div><br>
                
                  <input type="submit" value="Post Review" class="btn"><br><br>
                  <hr><br>
                <h6><img src="img/icons8-user-50.png" alt="user" height="20px" width="20px">Sarah Saleh</h6>
                <p style="font-size: 12px;">2months ago</p><br>
                <b><p style="font-size: 14px;">I highly recommend this cafe!</p></b><br><br>
                <hr><br>
                <h6><img src="img/icons8-user-50.png" alt="user" height="20px" width="20px"> Maryam ah</h6>
                <p style="font-size: 12px;">1months ago</p><br>
                <b><p style="font-size: 14px;">i loved it!</p></b>
                
              </form>
            </div>
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
         <script>
             function delet(){

                var answ = confirm("are you sure you want to delete this item??");
          if(answ){
            window.location.href="indoor22.html";
          }
             
             }
         </script>
</body>

<footer>
    <br>
    <p>© 2022 All Rights Reserved, Coffee Detective® </p>
    </footer>
</html>