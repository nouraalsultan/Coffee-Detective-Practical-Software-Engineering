<?php include("admin_header.php"); ?>
<style>
body{
    background-color: antiquewhite;
}
</style>

<section class="catg">
    <h2>Admin Logout</h2>
</section>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6 well">
<?php

session_destroy();
    echo '<div class="alert-ok">';
    echo "<p>Admin Logout Successfully.</p>";

    echo '</div>';
    echo '<META HTTP-EQUIV="Refresh" Content="1; URL=index.php">';
    exit; 
?>
</div>
<div class="col-md-3"></div>
</div>

<?php include("admin_footer.php") ?>
