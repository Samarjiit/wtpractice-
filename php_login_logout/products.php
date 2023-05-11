<?php

?>

<html>
<head>
    <style>
        .container{
            display:flex;
            
        }
        .item,.item div{
            padding: 15px;
            text-align: center;
        }
        img{
            width: 250px;
            height: 250px;
        }
    </style>
</head> 
<body>
<form method="get" action="add_to_cart.php">
<h1> Shopping Store</h1>
<div class = "container">
<div class="item">
<h2> Bag </h2>
<img src="images/bag.jpg">
<div>
<button name="id" value=1>Add to cart </button>
</div>
</div>

<div class="item"> 
<h2> Mobile </h2>
<img src="images/mobile.jpg">
<div>
<button name="id" value=2>Add to cart </button>
</div>
</div>

<div class="item">
<h2> Watch </h2>
<img src="images/watch.jpg">
<div>
<button name="id" value=3>Add to cart </button>
</div>
</div>
</div>
</form>

<a href="logout.php"> Logout
</body>
</html>