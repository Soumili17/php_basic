<?php
include "database_connection.php";
if($_GET['delete']){
    $delete_id=$_GET['delete'];
    $sql="DELETE FROM `bca` WHERE `bca`.`id`='$delete_id'";
    $delete_data=mysqli_query($connection,$sql);
    header("location:fetch.php");
}
?>

