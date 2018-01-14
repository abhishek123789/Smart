<?php
	$db=mysqli_connect("localhost","root","","shopping") or die($db);
	if(!$db)
	{
		die("connection failed".mysqli_error($db));
	}
	if(isset($_POST['upload']))
	{
		$v1=rand(1111,9999);
		$v2=rand(1111,9999);

		$v3=$v1.$v2;
		$v3=md5($v3);

		$filename=$_FILES["pimg"]["name"];
		$dst="./img/product_image/".$v3.$filename;

		

		move_uploaded_file($_FILES["pimg"]["tmp_name"],$dst);

		$product_name=mysqli_escape_string($db,$_POST['pname']);
		$product_price=mysqli_escape_string($db,$_POST['pprice']);
		$product_quantity=mysqli_escape_string($db,$_POST['pquantity']);
		$product_category=mysqli_escape_string($db,$_POST['pcategory']);
		$dst1="img/product_image/".$v3.$filename;//To store the image location
		$product_description=mysqli_escape_string($db,$_POST['pdescription']);

		$sql="insert into product_info (product_name,product_price,product_quantity,product_img,product_category,product_description)values('$product_name',$product_price,$product_quantity,'$dst1','$product_category','$product_description')";
		
		if (!mysqli_query($db,$sql)) {
            die('Error: ' . mysqli_error($db));
        }
        else
        {
        	echo "updated successfully";
        }


	}






?>

<!DOCTYPE html>
<html>
<head>
	<title>ADD PRODUCT</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php 
		include "header.php"
	?>
	<div class="">
		
			
			<div class="login">
				<h2 class="login-header">Add Product</h2>
				<form class="login-container" name="add-product-form" action="add-product.php" method="post" enctype="multipart/form-data">
					<p><input type="text" name="pname" placeholder="Product Name" required=""></p>
					<p><input type="text" name="pprice" placeholder="Product Price" required=""></p>
					<p><input type="text" name="pquantity" placeholder="Product Quantity" required=""></p>
					<p><b>Product Image <b> <br><input type="file" name="pimg" placeholder="Product Image" required=""></p>
					<p> Product Category <select name="pcategory" cols="50" required="" placeholder="Product Image">
						<option value="">  </option>
						<option value="Men_Clothes">Men Clothes</option>
						<option value="Women_Clothes">Women Clothes</option>
						<option value="Electronics">Electronics</option>
						<option value="Books">Books</option>
						<option value="Accessories">Accessories</option>
					</select></p>
					<p><textarea rows="10" cols="50" name="pdescription" placeholder="Product Description"required=""></textarea></p>
					<p><input type="submit" name="upload" value="Upload"></p>
					
				</form>
			</div>
		
	</div>
</body>
</html>