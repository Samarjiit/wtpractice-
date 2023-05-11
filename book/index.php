<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="Stylesheet" href="style.css">

</head>
<body>

<center>
    <div class="main">
        <form action="insert.php" method="POST"     enctype="multipart/form-data">
            <label for="">ISBN</label>
            <input type="text" name="isbn"><br>
            <label for="">name</label>
            <input type="text" name="name"><br>
            <label for="">qty</label>
            <input type="number" name="qty"><br>
            <label for="">author</label>
            <input type="text" name="author"><br>
            <label for="">Image</label>

            <input type="file" name="image">            
            <button name="upload">submit</button>
        </form>
    </div>
</center>


<!-- fetch data from db -->

<div class="container">
    <table class="table">
        <thead>
    <tr>
        <th >ISBN</th>
        <th >book name</th>
        <th >qty</th>
        <th >author</th>
        <th >image</th>
        <th>Delete</th>
        <th>Update</th>

</tr>
</thread>

<tbody>

    <?php 
    include 'config.php';

    $pic=mysqli_query($conn,"SELECT * FROM `mybook` ");
    while($row=mysqli_fetch_array($pic)){
        echo "
        <tr>
            <td>$row[isbn]</td>
            <td>$row[name]</td>
            
            <td>$row[qty]</td>
            <td>$row[author]</td>
            <td><img src='$row[image]'  width='200px height = '70px'></td>

            <td><a href='delete.php? isbn=$row[isbn]' class='btn btn-danger'>Delete</a></td>
            <td><a href='update.php? isbn=$row[isbn]' class='btn btn-danger'>update</a></td>

    




        </tr>
        
        
        ";
    }


?>

</tbody>

</table>
</div>
    
    
</body>
</html>