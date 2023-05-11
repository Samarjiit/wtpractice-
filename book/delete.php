<?php
    include 'config.php';

    $ISBN=$_GET['isbn'];

    mysqli_query($conn,"DELETE FROM `mybook` WHERE isbn=$ISBN");

    header('location:index.php');


?>