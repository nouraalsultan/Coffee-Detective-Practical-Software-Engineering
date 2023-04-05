<?php include("admin_header.php") ?>
<section class="catg">
    <h1>Riyadh Coffee Shops</h1>
    <p>Search for your coffee shops in catagories</p>
</section>
<style>
body{
    background-color: antiquewhite;
}
</style>
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
                <button class="btn btn1"><a href="outdoor2.php">Search</a></button>
                <br /><br />
            </div>
        </td>
        <td>
            <div class="div1">
                <img src="img/img2.JPG" style="width: 50%;" /><br><br>
            <p>Indoors Coffee Shops</p><br>
            <button class="btn btn2"><a href="indoor2.php">Search</a></button>
            <br /><br />
            </div>
        </td>
        <td>
            <?php
	$query1 = "SELECT * FROM coffee_shop WHERE type='New Open' AND allow_notify=1";
	$result1 = mysqli_query($connection, $query1);
	$count = mysqli_num_rows($result1);
?>
            <div class="div1   "> 
                <img src="img/img3.JPG" style="width: 50%;" /><br><br>
            <p>Newly Opened Coffee Shops</p><br>
            <button class="btn btn3"><a href="newopen2.php">Search</a></button>
            
            <br /><br />
            </div>
        </td>
        
    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
    
</table>
<?php include("admin_footer.php") 
//<?php if($count > 0) echo " notified "; ?>
