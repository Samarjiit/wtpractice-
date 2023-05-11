<?php
//include 'nocookie.php';
// session_id("8989898hhjj");
session_start();
echo session_id();
?>

<?php
if(isset($_SESSION['views']))
$_SESSION['views']=$_SESSION['views']+1;
else
$_SESSION['views']=1;
echo "Views=". $_SESSION['views'];
?>
