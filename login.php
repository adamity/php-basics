
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" method="post" action="login_check.php">
  Username 
  <input name="user" type="text" id="user" value="<?php if(isset($_COOKIE["user"])) { echo $_COOKIE["user"]; } ?>">
  Password 
  <input name="pass" type="Password" id="pass" value="<?php if(isset($_COOKIE["pass"])) { echo $_COOKIE["pass"]; } ?>">
  <input type="submit" name="Submit" value="Submit"><br>
  <input type="checkbox" name="remember" id="user"> Remember Password?
</form>

</body>
</html>

<!--Remember Me Function using Cookie
	value="<?php //if(isset($_COOKIE["user"])) { echo $_COOKIE["user"]; } ?>"
	-->