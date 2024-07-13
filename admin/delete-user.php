<?php
include('includes/config.php');

if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $sql="delete from tblusers where `id`='$id' ";

    if(mysqli_query($dbh,$sql)) {
        header ("location: reg-users.php");
    }
}
?>