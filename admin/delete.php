<?php
session_start();
include("db.php");
$delete_id=$_GET['del'];
$delete_query="DELETE  FROM raj WHERE id='$delete_id'";
$run=mysqli_query($conn,$delete_query);
if($run)
{
//javascript function to open in the same window
    echo "<script>window.open('admin.php?deleted=user has been deleted','_self')</script>";
}

?>





		