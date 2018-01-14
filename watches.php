<?php
	if(isset($_POST["add"]))
	{
		
	}
	

?>
<!DOCTYPE html>
<html>
<head>
	<title>Watches</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<?php
		include "header.php";
		$db=mysqli_connect("localhost","root","","shopping") or die($db);
		$sql="select * from product_info";
		$result=mysqli_query($db,$sql);
		while($row=mysqli_fetch_array($result))
		{
		?>
		<div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                	
                                		<img src="../smart/<?php echo $row["product_img"]; ?>"; >
                                	
                                	<h2><?php echo $row["product_price"];?></h2>
									<p><?php echo $row["product_name"]; ?></p>
									<a href="product_details.php?id=<?php echo $row["id"]; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View Description</a>
								</div>
							</div>
						</div>
					</div>
	<?php
		}
	?>
	
	

</body>
</html>