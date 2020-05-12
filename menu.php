<html>
<head>
<title>Menu</title>
</head>
<body>
<p>welcome ( 
  <?php
session_start();
echo $_SESSION['name'];
echo $_SESSION['user'];
echo $_SESSION['id'];
echo $_SESSION['pass'];?>
  ) <a href="logout.php">logout</a></p>
<p>MENU</p>
<p><a href="addform.php">add</a></p>
<p><a href="view.php">view </a></p>
<p><a href="search.php">search</a></p>
</body>
</html>
