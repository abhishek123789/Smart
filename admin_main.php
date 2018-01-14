<?php
	$db=mysqli_connect("localhost","root","","shopping") or die($db);
    if(!$db)
    {
        die("connection failed" .mysqli_error());
    } 
    $sql="Select * from admin_info";
    $result=mysqli_query($db,$sql);
    while($row=mysqli_fetch_array($result))
    {
    	$username=$row['username'];
    }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin main page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header class="header_main" >
		<div class="col-2"> 
			<div class="floatright">
			<a href="index.php"><img src="img/logo.jpg" id="logo" height="70px" alt="The shopping Zone" /></a>
			</div>
		</div>
		
		<div class="col-6">
			<div class="floatright">
			<ul>
				<li class="header-right-pad"><a href="login.php">Login</a></li>
				<li class="header-right-pad"><a href="#">Contact Us</a></li>
				<li class="header-right-pad"><a href="admin.php"><?php echo "Welcome ". $username;?></a></li>
			</ul>
			</div>
		</div>
			<div class="clear-both"></div>
	</header>
	
	<br>
	<br><br>
	<br>
	<div class="col-12">
		
		<div class="col-12">
			<ul>
				<li><a href="add-product.php">ADD PRODUCT</a></li>
				<li><a href="delete-product.php">DELETE PRODUCT</a></li>
		
			</ul>
		</div>
	</div>
</body>
</html>