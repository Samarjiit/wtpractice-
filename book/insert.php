<?php
include 'config.php';

if(isset($_POST['upload'])){
    $ISBN=$_POST['isbn'];
    $NAME=$_POST['name'];
    $QTY=$_POST['qty'];
    $AUTHOR=$_POST['author'];
    $IMAGE=$_FILES['image'];

    $img_loc=$_FILES['image']['tmp_name'];
    $img_name=$_FILES['image']['name'];
    $img_des="uploadImage/".$img_name;

    move_uploaded_file($img_loc,'uploadImage/'.$img_name);


    //insert data


    mysqli_query($conn,"INSERT INTO `mybook`(`isbn`, `name`, `qty`, `author`, `image`) VALUES ('$ISBN','$NAME','$QTY','$AUTHOR','$img_des')");


    header("location:index.php");
    
}



?>