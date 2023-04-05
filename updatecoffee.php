<?php include("admin_header.php"); $coffee_id=$_GET['coffee_id']; ?>
<style>
body{
    background-color: antiquewhite;
}
</style>
<section class="catg">
    <h2>Update Coffee Information</h2>
</section>
<div class="row">


<?php
if(isset($_POST['submit'])) {
	
	$admin_id = $_POST['admin_id'];
	$coffee_id = $_POST['coffee_id'];
	$type = $_POST['type'];
	
	$name = $_POST['name'];
	$address = $_POST['address'];
    if(isset($_POST['notify'])) {
        $notify = $_POST['notify'];
    } else {
        $notify = 0;
    }
	
	@$ImagePath = "coffees/";

	$ImageFilename = basename($_FILES['image']['name']);
	$rnd_number = rand() * 123456;
	@$ImagePath .= $rnd_number;
	@$ImagePath .= "-coffeeImg-";
	@$ImagePath .= $ImageFilename;
	
	if(move_uploaded_file($_FILES['image']['tmp_name'],$ImagePath)) {
        $query = "UPDATE coffee_shop SET name='$name', image='$ImagePath',address='$address', type='$type', allow_notify='$notify' WHERE admin_id = $admin_id AND coffee_id=$coffee_id";
		
		$result = mysqli_query($connection,$query);	

		if($result) {
			echo '<div class="alert-ok">';
			echo "<p>The Coffee Has Been Updated Successfully.</p>";

			echo '</div>';
			echo '<META HTTP-EQUIV="Refresh" Content="2; URL=admin_index.php">';
			exit; 
		}
	} 
}
?>
<?php
	
	$query1 = "SELECT * FROM coffee_shop WHERE coffee_id=$coffee_id";
	
	$result1 = mysqli_query($connection, $query1);
	$count = mysqli_num_rows($result1);
	if($count == 0) {
		echo '<div class=" alert-error ">';
			echo "<p>No Out Door Coffees Found</p>";
		echo '</div>';
		
	} else {
       $row1 = mysqli_fetch_array($result1);
    }
?>
    <div class="col-md-3">
    <img src="<?php echo $row1['image'] ?>" class="img-responsive img-rounded" width="520" height="350" />
</div>
<div class="col-md-6 well">	
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="checkbox">Coffee Type</label>
            <select id="type" name="type" class="form-control">
                <option value="New Open" <?php if($row1['type'] == 'New Open') echo ' selected ' ?>>New Open</option>
                <option value="In Door" <?php if($row1['type'] == 'In Door') echo ' selected ' ?>>In Door</option>
                <option value="Out Door" <?php if($row1['type'] == 'Out Door') echo ' selected ' ?>>Out Door</option>
            </select>
            
        </div>
        <div class="form-group">
            <label>Coffee Shop Name</label>
            <input type="text" name="name" placeholder="Enter Coffee Shop Name" required autofocus class="form-control" value="<?php echo $row1['name']; ?>">
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" placeholder="Enter Coffee Shop Address" required class="form-control"  value="<?php echo $row1['address']; ?>">
        </div>
        <div class="form-group">
            
            <input id="checkbox" type="checkbox" name="notify" value="1" <?php if($row1['allow_notify'] == 1) echo ' checked ' ?> />
            <label for="checkbox">Check here to notify the users</label>
        </div>
        <div class="form-group">
            <label>Coffee Photo</label>
            <input type="file" name="image" accept="image/*" required class="form-control">
        </div>
        <div class="form-group">
            
            <input type="submit" name="submit" class="btn btn-default" value="Update">
            <input type="hidden" name="coffee_id"  value="<?php echo $coffee_id; ?>">
            <input type="hidden" name="admin_id"  value="<?php echo $admin_id; ?>">
        </div>
    </form>
</div>
<div class="col-md-3"></div>
</div>

<?php include("admin_footer.php") ?>
