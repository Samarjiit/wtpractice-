<?php 

    include 'config.php';

    if(isset($_POST['update'])){

        $ISBN=$_POST['isbn'];
        $NAME=$_POST['name'];
        $QTY=$_POST['qty'];
        $AUTHOR=$_POST['author'];
        $IMAGE=$_FILES['image'];
    
        $img_loc=$_FILES['image']['tmp_name'];
        $img_name=$_FILES['image']['name'];
        $img_des="uploadImage/".$img_name;
    
        move_uploaded_file($img_loc,'uploadImage/'.$img_name);


    mysqli_query($conn,"UPDATE `mybook` SET `isbn`='$ISBN',`name`='$NAME',`qty`='$QTY',`author`='$AUTHOR',`image`='$IMAGE' WHERE isbn=$ISBN");

    header("location:index.php");
    }






?>