<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>My portforlio</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	
</head>
<body>
	<header class="header_main" >
		<div class="col-2"> 
			<a href="index.php"><img src="img/logo.png" id="logo" width="100px" height="50px" alt="The shopping Zone"/></a>
		</div>
		<div class="col-6">
			<ul>
				<li><a href="men.php">Men</a></li>				
				<li><a href="test.php">Women</a></li>
				<li><a href="test.php">Electronics</a></li>
				<li><a href="#">Accessories</a></li>
				<li><a href="#">Books</a></li>
			</ul>
		</div>
		<div class="col-4">
			<ul>
				<li class="header-right-pad"> <?php echo "Welcome ".$_SESSION['username'] ?> </li>
				<li class="header-right-pad"><a href="#">Contact Us</a></li>
				<li class="header-right-pad"><a href="logout.php">Logout</a></li>
			</ul>
		</div>
			<div class="clear-both"></div>
	</header>
	<br>
	<br><br>
	<br>


	<div class="slider">
		<figure>
			<div class="slide">
				<a href="#"><img src="img/g2.jpg"></a>
			</div>
			<div class="slide">
				<a href="#"><img src="img/men1.jpg"></a>
			</div>
			<div class="slide">
				<a href="#"><img src="img/men2.jpg"></a>
			</div>
		</figure>
	</div>


	<div class="row">
		<div class="col-4"><a href="#"><img src="img/d1.jpg"  class="images" alt=""/></a> </div>
		<div class="col-4"><a href="#"><img src="img/d1.jpg"  class="images" alt=""/></a> </div>
		<div class="col-4"><a href="#"><img src="img/d1.jpg"  class="images" alt=""/></a> </div>

	</div>
	<footer class="row">
		<div class="col-4">
			<div class="about">
			<h3><a href="#">The shopping Zone</a></h3>
			<h4>About Us</h4>
			<h4>Tel:83880-03595</h4>
			<p class="center"><b>abhishek123789@gmail.com</b></p>
			</div>
		</div>
		<div class="col-4">
			<div class="social">
			<ul>
				<li><a href="https://www.facebook.com/abhishek.bhattacharya.3158"><img src="img/facebook.png" /></a></li>
				<li><a href="#"><img src="img/twitter.png" /> </a></li>
				<li><a href="#"><img src="img/linkedin.png" /> </a></li>
			</ul>
			</div>
		</div>
		<div class="col-4">
			<div class="query">
			<form >
			<br>
				NAME: <input type="text" name="name"><br><br>
				QUERY:<textarea rows="4" cols="25" placeholder="Ask your Queries We will be happy to help"></textarea>
				<input type="Submit" name="submit">
			</form>
			</div>
		</div>
	</footer>

<?php
		//Message sign that you are logged in
		if(isset($_SESSION['message']))
		{
			//echo "<div id='error_message'>".$_SESSION['message']."</div>"; 
			unset($_SESSION['message']);
		}
	?>
	
	
	
	
</body>
</html>

