<?php 
include 'db_connect.php';
           //assign textbox to variable
$add_name=$_POST['txtName']; 
$add_address=$_POST['txtAddress']; 
$add_tel=$_POST['txtTel']; 
        //insert data
$query= "INSERT INTO tblpembekal(name,address,tel) VALUES ('$add_name','$add_address','$add_tel')" ;		
$result = mysqli_query( $link,$query) or die("Query failed");	// SQL statement for checking
 //checking either success or not
         if ($result)
 echo " Add Successfully ! <a href='menu.php'> back to menu </a>";		
 
else
 echo "Problem occured !"; 	
mysqli_close($link);
?>
