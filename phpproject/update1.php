<?php

include 'config.php';

if(isset($_POST['update'])){


    $NAME=$_POST['name'];
    $PRICE=$_POST['price'];
    $IMAGE=$_FILES['image'];

   print_r($_FILES['image']);
   $img_loc=$_FILES['image']['tmp_name'];
   $img_name=$_FILES['image']['name'];
   $img_des="uploadImage/".$img_name;
   move_uploaded_file($img_loc,'uploadImage/'.$img_name);

mysqli_query($con,"UPDATE `tbcard` SET `name`='$NAME',`price`='$PRICE',`image`='$img_des' WHERE  price= '$PRICE'");
//insert data 

header("location:index.php");
}

?>