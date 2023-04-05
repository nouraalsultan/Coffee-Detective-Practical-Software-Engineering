<?php include("admin_header.php") ?>
<style>
body{
    background-color: antiquewhite;
}
</style>
<section class="catg">
    <h2>Add New Coffee</h2>
</section>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6 well">
<?php
if(isset($_POST['submit'])) {
	
	$admin_id = $_SESSION['admin_id'];
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
        $query = "INSERT INTO coffee_shop VALUES(NULL,'$name', '$ImagePath','$address', '$type', '$notify',$admin_id)";
		
		$result = mysqli_query($connection,$query);	

		if($result) {
			echo '<div class="alert-ok">';
			echo "<p>The Coffee Has Been Added Successfully.</p>";

			echo '</div>';
			echo '<META HTTP-EQUIV="Refresh" Content="2; URL=admin_index.php">';
			exit; 
		}
	} 
}
?>
	<form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="checkbox">Coffee Type</label>
            <select id="type" name="type" class="form-control">
                <option value="New Open">New Open</option>
                <option value="In Door">In Door</option>
                <option value="Out Door">Out Door</option>
            </select>
            
        </div>
        <div class="form-group">
            <label>Coffee Shop Name</label>
            <input type="text" name="name" placeholder="Enter Coffee Shop Name" required autofocus class="form-control">
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" placeholder="Enter Coffee Shop Address" required class="form-control">
        </div>
        <div class="form-group">
            
            <input id="checkbox" type="checkbox" name="notify" value="1" />
            <label for="checkbox">Check here to notify the users</label>
        </div>
        <div class="form-group">
            <label>Coffee Photo</label>
            <input type="file" name="image" accept="image/*" required class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-default" value="Add New">
        </div>
    </form>
</div>
<div class="col-md-3"></div>
</div>

<?php include("admin_footer.php") ?>
