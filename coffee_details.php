<?php include("admin_header.php"); $coffee_id=$_GET['coffee_id'];?>
<style>
body{
    background-color: antiquewhite;
}
</style>
<div class="well">
   <h3>Coffee Details</h3>
    <a href="updatecoffee.php?coffee_id=<?php echo $coffee_id; ?>" class="btn btn-sm btn-success pull-left"><img src="img/edit.png"  class="icon"> Update</a> &nbsp;
    <a href="deleteCoffee.php?coffee_id=<?php echo $coffee_id; ?>" class="btn btn-sm btn-danger"><img src="img/delete.png" class="icon">  Remove</a>
</div>

<div class="cafes">
    <div class="row">
        <div class="col-md-3"></div>
<?php
	
	$query1 = "SELECT * FROM coffee_shop WHERE  coffee_id=$coffee_id ";
	
	$result1 = mysqli_query($connection, $query1);
	$count = mysqli_num_rows($result1);
	if($count == 0) {
		echo '<div class=" alert-error ">';
			echo "<p>No Coffee Matched Found</p>";
		echo '</div>';
		
	} else {
        $row1 = mysqli_fetch_array($result1);
?>
        <div class="col-md-6">
            <div class="one_rest">
                <div class="well2">
                    <h3>
                        
                        <span> <?php echo $row1['name'] ?></span>
                    </h3>

                </div>
                <img src="<?php echo $row1['image'] ?>" class=" img-rounded" width="520" height="350" />
                <h4><i class="fa fa-map-marker"></i> <?php echo $row1['address'] ?></h4>
                 <hr>
<?php
                    $query2 = "SELECT * FROM reviews WHERE coffee_id=$coffee_id  ORDER BY review_id DESC";

                    $result2 = mysqli_query($connection, $query2);
                    $count2 = mysqli_num_rows($result2);
                    if($count2 == 0) {
                        echo '<div class=" alert-error ">';
                            echo "<p>No User Reviews Found</p>";
                        echo '</div>';

                    } else {
                        while($row2 = mysqli_fetch_array($result2)) {
                            ?>
                            <div class="media" style="">
                              <div class="media-left">
                                
                                 <i class="fa fa-3x fa-user"></i>
                              
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading">
                                  <?php echo $row2['username'] ?>
                                  <small class="pull-right"><?php echo $row2['review_date'] ?></small>
                                </h4>
                                <b><?php echo $row2['review'] ?></b>
                              </div>
                            </div>
                           <?php
                        }
                    }
                ?>
            </div>
        </div>
<?php
        
    }
?>
    </div>
</div>
   
<?php include("admin_footer.php") ?>