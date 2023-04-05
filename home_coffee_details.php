<?php include("header.php"); ?>

<div class="well">
   <h3>Coffee Details</h3>
</div>

<div class="cafes">
    <div class="row">
        <div class="col-md-3"></div>
<?php
	$coffee_id=$_GET['coffee_id'];
	$query = "UPDATE coffee_shop SET allow_notify=0 WHERE  coffee_id=$coffee_id ";
    $result = mysqli_query($connection, $query);
        
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
            <div class="one_rest" style="background-color:#f1f2f6">
                <div class="well2">
                    <h3>
                        <span> <?php echo $row1['name'] ?></span>
                    </h3>

                </div>
                <img src="<?php echo $row1['image'] ?>" class=" img-rounded" width="520" height="350" />
                <h4><i class="fa fa-check"></i> Coffee Type: <?php echo $row1['type'] ?></h4>
                <h4><i class="fa fa-map-marker"></i> Location: <?php echo $row1['address'] ?></h4>
                 <hr>
                
                <?php
                if(isset($_POST['submit'])) {
                     $coffee_id = $_GET['coffee_id'];
                    $username = $_POST['username'];
                    $review = $_POST['review'];
                    $sql = "INSERT INTO reviews VALUES(NULL,'$username', '$review', NOW(), $coffee_id)";

                    $result = mysqli_query($connection, $sql);
                    if($result) {
                        echo '<div class=" alert-ok" role="alert">Your Review Posted Successfully</div>';
                        echo '<META HTTP-EQUIV="Refresh" Content="1; URL=home_coffee_details.php?coffee_id=' . $coffee_id . '">'; 
                    }
                }
                ?>
                <form method="post">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" required placeholder="Enter Your Name." >
                        <input type="hidden" name="coffee_id" value="<?php echo $_GET['coffee_id'] ?>">
                    </div>
                    <div class="form-group">
                        <textarea name="review" style="width:100%" rows="4" class="form-control" required placeholder="Describe your experience.."></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Post Review" class="btn btn-success">
                    </div>
                </form>
                <hr>
                <h4>Sort By : 
                    
                    <?php
                        if(isset($_GET['sort_type']) and $_GET['sort_type']=="desc") {
                         ?>
                        <a  href="home_coffee_details.php?coffee_id=<?php echo $coffee_id ?>&sort_type=asc"><img src="img/desc.png" class="icon"></a>
                    <?php   
                        } else if(isset($_GET['sort_type']) and $_GET['sort_type']=="asc") {
                            
                            ?>
                        <a   href="home_coffee_details.php?coffee_id=<?php echo $coffee_id ?>&sort_type=desc"><img src="img/asc.png" class="icon"></a>
                    <?php
                        }  else {
                            ?>
                        <a href="home_coffee_details.php?coffee_id=<?php echo $coffee_id ?>&sort_type=desc"><img src="img/asc.png" class="icon"></a>
                    <?php
                        }
                    ?>
                
                </h4>
<?php
                    $sort_type = " ASC ";
                    if(isset($_GET['sort_type'])) {
                        $sort_type = $_GET['sort_type'];
                    } else {
                        $sort_type = " ASC ";
                    }
                    
                    $query2 = "SELECT * FROM reviews WHERE coffee_id=$coffee_id  ORDER BY review_id  $sort_type";

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
   
<?php include("footer.php") ?>