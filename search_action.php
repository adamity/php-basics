<?php 
//Connection to database 
include 'db_connect.php';
$search=$_REQUEST["txtSearch"];

$query = "Select * from tblpembekal WHERE name LIKE '$search' order by  name Asc";
$result = mysqli_query( $link,$query) or die("Query failed");
?>

<p>back to <a href="menu.php">Menu</a></p>
<table width="493" border="1">
  <?php 
//data looping
foreach($result as $row){ ?>
  <tr> 
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['address'];?></td>
    <td><?php echo $row['tel'];?></td>
  </tr>
  <?php  // looping close
     }?>
</table>
