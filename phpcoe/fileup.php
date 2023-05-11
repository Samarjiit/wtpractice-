<?php    
if(isset($_FILES['image']))
{       
$errors= array();       
$file_name = $_FILES['image']['name'];  
$file_size = $_FILES['image']['size'];  
$file_tmp = $_FILES['image']['tmp_name'];   
$file_type = $_FILES['image']['type']; 
//The explode() function breaks a string into an array.   
$temp=explode('.',$_FILES['image']['name']); 
//Returns the value of the last element in the array on success, 
//or FALSE if the array is empty         
$file_ext=end($temp);          
$expensions= array("jpeg","jpg","png"); 
      
if(in_array($file_ext,$expensions)=== false){          
$errors[]="extension not allowed, please choose a JPEG or PNG file."; }       
if($file_size > 2097152) {          
       $errors[]='File size must be less than 2 MB'; 
	   }       
	   if(empty($errors)==true) {         
	   move_uploaded_file($file_tmp,"images/".$file_name);          
	   echo "Success"; 
	   echo "<ul> 
				<li>Temp-Location: ".$file_tmp."
	              <li>Sent file: ".$file_name."     
	              <li>File size: ".$file_size."             
				  <li>File type:".$file_type."          
		      </ul>"; 
	  }else{  
	  print_r($errors);
	  } } 
	  ?> 
<html>
   <body>
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
      </form>
   </body>
</html>
