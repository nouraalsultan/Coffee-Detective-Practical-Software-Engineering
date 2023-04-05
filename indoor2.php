<?php include("admin_header.php") ?>
<style>
body{
    background-color: antiquewhite;
}
</style>
<div class="well">
   <h3>In Door Coffees <a href="add_new.php" class="btn btn-default pull-right"><i class="fa fa-plus"></i> New </a>
    </h3>
</div>

<div class="cafes">
    <div class="row">
<?php
	
	$query1 = "SELECT * FROM coffee_shop WHERE type='In Door' AND admin_id=$admin_id ORDER BY coffee_id DESC";
	
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
            <div class="one_rest">
                <div class="well2">
                    <h3>
                        <a href="updatecoffee.php?coffee_id=<?php echo $row1['coffee_id'] ?>" class="btn btn-sm btn-success op pull-left"><img src="img/edit.png" class="icon2"></a> &nbsp;
                        <a href="deleteCoffee.php?coffee_id=<?php echo $row1['coffee_id'] ?>" class="btn btn-sm btn-danger op"><img src="img/delete.png" class="icon2"></a> &nbsp;
                        <span> <?php echo $row1['name'] ?></span>
                    </h3>

                </div>
                <img src="<?php echo $row1['image'] ?>" class="coffee_image img-responsive" />
                <h4><i class="fa fa-map-marker"></i> <?php echo $row1['address'] ?></h4>
                 <a href="coffee_details.php?coffee_id=<?php echo $row1['coffee_id'] ?>" class="btn btn-default btn-block">View Details</a>
            </div>
        </div>
<?php
        }
    }
?>
    </div>
</div>
   
<?php include("admin_footer.php") ?>