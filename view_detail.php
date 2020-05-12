<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>back to <a href="menu.php">Menu</a></p>
<?php 
 include 'db_connect.php';
       //edit data
       $id=$_GET['user_id']; 
	   $query="SELECT * FROM  tblpembekal WHERE id='$id'";
	   $result = mysqli_query( $link,$query) or die("Query failed");	// SQL statement for checking
                 	
?>

<table width="212" border="1">
  <?php foreach($result as $user)
{
				 $id=$user['id'];
				 $name=$user['name'];
				 $address= $user['address'];
				 $tel= $user['tel'];
}
?>
  <tr> 
    <td width="75"><strong>ID</strong></td>
    <td width="121"> 
      <?php echo $id ?>
    </td>
  </tr>
  <tr> 
    <td><strong>NAME</strong></td>
    <td> 
      <?php echo $name ?>
    </td>
  </tr>
  <tr> 
    <td><strong>ADDRESS</strong></td>
    <td> 
      <?php echo $address ?>
    </td>
  </tr>
  <tr> 
    <td><strong>TEL</strong></td>
    <td> 
      <?php echo $tel ?>
    </td>
  </tr>
</table>


</body>
</html>