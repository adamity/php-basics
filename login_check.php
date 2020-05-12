<?php

include 'db_connect.php';
session_start(); 							//session_start(); 							

$user = $_POST['user']; 					// assign textbox to variable
$pass = $_POST['pass'];

//Remember Me Function
if(isset($_POST["remember"])) {
	setcookie ("user",$_POST["user"],time()+ 3600);
	setcookie ("pass",$_POST["pass"],time()+ 3600);
	
} else {
	setcookie("user","");
	setcookie("pass","");
}


$query = "SELECT * FROM tblpelanggan where username='$user' AND password='$pass'"; 
$result = mysqli_query( $link,$query) or die("Query failed");	// SQL statement for checking
 if(mysqli_num_rows($result) <= 0)   			// check either result found or not
	   {
	   header("location:login.php");			// redirect to another page (data not found!)
	   }
	   else
	   {
		$info = mysqli_fetch_array($result); 	// returns a row from a recordset
	    $_SESSION['name']=$info['name'];
	    $_SESSION['user']=$info['username'];
	    $_SESSION['id']=$info['id'];
	    $_SESSION['pass']=$info['password'];	// assign field in username to session [user]	   
		header("location:menu.php");
	   }
mysqli_close($link);
?>
