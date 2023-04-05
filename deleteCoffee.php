<?php include("admin_header.php"); $coffee_id=$_GET['coffee_id']; ?>
<style>
body{
    background-color: antiquewhite;
}
</style>

<section class="catg">
    <h2>Delete Coffee Information</h2>
</section>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6 well">
<?php
if(isset($_GET['coffee_id'])) {
	
        $query = "DELETE FROM coffee_shop WHERE admin_id = $admin_id AND coffee_id=$coffee_id";
		
		$result = mysqli_query($connection,$query);	

		if($result) {
			echo '<div class="alert-ok">';
			echo "<p>The Coffee Has Been Deleted Successfully.</p>";

			echo '</div>';
			echo '<META HTTP-EQUIV="Refresh" Content="2; URL=admin_index.php">';
			exit; 
		}
	
}
?>
</div>
<div class="col-md-3"></div>
</div>

<?php include("admin_footer.php") ?>
