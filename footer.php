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