<?php include("header.php") ?>

<style>
body{
    background-color: antiquewhite;
}
</style>
    <h1 align="center">In Door Coffees</h1>


<div class="cafes">
    <div class="row">
<?php
	
	$query1 = "SELECT * FROM coffee_shop WHERE type='In Door'  ORDER BY coffee_id DESC";
	
	$result1 = mysqli_query($connection, $query1);
	$count = mysqli_num_rows($result1);
	if($count == 0) {
		echo '<div class=" alert-error ">';
			echo "<p>No In Door Coffees Found</p>";
		echo '</div>';
		
	} else {
        while($row1 = mysqli_fetch_array($result1)) {
?>
        <div class="col-md-4">
           <div class="one_rest <?php if($row1['allow_notify'] ==1) echo " notified "; ?>" style="border:1px solid #000" >
                <div class="well2">
                    <h3>
                        <span><?php echo $row1['name'] ?></span>
                    </h3>

                </div>
                <img src="<?php echo $row1['image'] ?>" class="coffee_image img-responsive" />
                <br>
                 <a href="home_coffee_details.php?coffee_id=<?php echo $row1['coffee_id'] ?>" class="btn btn-warning btn-block">View Details</a>
            </div>
        </div>
<?php
        }
    }
?>
    </div>
</div>
   
<?php include("footer.php") ?>