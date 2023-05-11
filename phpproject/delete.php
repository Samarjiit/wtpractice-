<?php

include 'config.php';

$PRICE=$_GET['price'];
mysqli_query($con,"DELETE FROM `tbcard` WHERE price=$PRICE");

header('location:index.php')

?>