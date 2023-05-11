<?php 
    include 'config.php';




?>


<form action="" method="POST">

Email <input type="text" name="gmail"><br><br>
password <input type="text" name="password"><br><br>

<input type="submit" name="login" value="login">

</form>


<?php
    include 'config.php';

if(isset($_POST['login'])){
    $EMAIL=$_POST['gmail'];
    $PASSWORD=$_POST['password'];


    $QUERY="SELECT * FROM `login` WHERE gmail='$EMAIL' && password='$PASSWORD'";

    $data=mysqli_query($conn,$QUERY);
    $total=mysqli_num_rows($data);


    if($total==1){
        header('location:index.php');
    }
    else {
        echo "login failed";
    }
}

?>