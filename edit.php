<?php 
 include 'db_connect.php';

       $edit_id=$_POST['txtId']; 
	   $edit_name=$_POST['txtName']; 
	   $edit_address=$_POST['txtAddress']; 
	   $edit_tel=$_POST['txtTel']; 
       //Update data   
	   $query="Update tblpembekal set name='$edit_name',address='$edit_address',tel='$edit_tel' where id='$edit_id'" ;
	   $result = mysqli_query( $link,$query) or die("Query failed");
	  
        if ($result)
		{ echo " Updated Successfully !  <a href='view.php'> back to view </a>"; }
		   else
		{ echo "Problem occured !"; }
        mysqli_close($link);	
?>
