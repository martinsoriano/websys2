<?php
   if (isset($_REQUEST["lastname"]) || isset ($_REQUEST["age"]) || isset ($_REQUEST["pass"])){
	if (preg_match("/[^A-Za-z-]/", $_REQUEST["pass"])){
		echo "welcome".$_REQUEST['lastname']."<br/>";
		echo "you are".$_REQUEST['age'].'"year old <br/>';
		echo "my password is".$_REQUEST['pass']."."."this is secured";
	}
	else {
		die("password complexity does not meet. your password must contain.");
	}
}
<html>
<head>
	<title>GET Method</title>
</head>
<body>
<form action="diplaymethod.php" method="GET">
   name : <input type ="text" name="lastname"/>
   age : <input type ="text" name="age"/>
   Password: <input type="password" name="pass"/>
   <input type="submit" value="submit">
</form>
</body>
</html>