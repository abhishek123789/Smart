
<?php
	 $db=mysqli_connect("localhost","root","","shopping") or die($db);
     if(!$db)
     {
             die("connection failed" .mysqli_error($db));
     } 
	if(isset($_POST['Login']))
	{
		$username=mysqli_escape_string($db,$_POST['username']);
		$password=mysqli_escape_string($db,$_POST['password']);

		$sql="select * from admin_info where username='$username' and password='$password'";
		$result=mysqli_query($db,$sql);

		if(mysqli_num_rows($result)==1)
		{
			header("location:admin_main.php"); 
		}


	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="login">
		<h2 class="login-header">Admin login</h2>
		<form class="login-container" name="Admin" action="admin.php" method="post" >
			<p><input type="text" name="username" placeholder="Username"  required></p>
			<p><input type="password" name="password" placeholder="Password" required></p>
			<p><input type="submit" value="Login" name="Login"></p>
		</form>
	</div>
</body>
</html>