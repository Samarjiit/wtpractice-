<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="Stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>

<?php
    include 'config.php';

    $ISBN=$_GET['isbn'];
    $Record=mysqli_query($conn,"SELECT * FROM `mybook` where isbn=$ISBN ");
    $data=mysqli_fetch_array($Record);


?>

<center>
    <div class="main">
        <form action="update1.php" method="POST" enctype="multipart/form-data">
            <label for="">ISBN</label>
            <input type="text" name="isbn" value="<?php echo $data['isbn']  ?>" ><br>
            <label for="">name</label>
            <input type="text"value="<?php echo $data['name']  ?>"  name="name"><br>
            <label for="">qty</label>
            <input type="number" value="<?php echo $data['qty']  ?>" name="qty"><br>
            <label for="">author</label>
            <input type="text" value="<?php echo $data['author']  ?>"  name="author"><br>
            <td><input type="file" name="image" value="<?php echo $data['image'] ?>"><img src="<?php echo $data['image'] ?>"  width = '200px'  height = '70px' alt=""> </td><br> 
<input type="hidden" name="isbn" value ="<?php echo $data['isbn']  ?>">

            <button name="update">update</button>
        </form>
    </div>
</center>
    
</body>
</html>