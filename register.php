<?php

    //Connection to the database
    session_start();

    $db=mysqli_connect("localhost","root","","shopping") or die($db);
    if(!$db)
    {
        die("connection failed" .mysqli_error());
    } 
   

    if(isset($_POST['register']))
    {
        $username=mysqli_escape_string($db,$_POST['name']);
        $email=mysqli_escape_string($db,$_POST['email']);
        $password=mysqli_escape_string($db,$_POST['password']);
        $phone=mysqli_escape_string($db,$_POST['phoneNo']);
        $address=mysqli_escape_string($db,$_POST['address']);
        $pincode=mysqli_escape_string($db,$_POST['pin']);


        $_SESSION['username']=$username;
        //Insert into database
        $sql="Insert into user_info(NAME,EMAIL,PASSWORD,PHONE_NO,ADDRESS,PINCODE)values('$username','$email','$password',$phone,'$address',$pincode)";
       
        if (!mysqli_query($db,$sql)) {
            die('Error: ' . mysqli_error($db));
        }

        $_SESSION['message']="you are logged in now";
        header("location:home.php");
    }
    mysqli_close($db);
    
?>

<html>
<head>
<title>Registration Form</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
include "header.php"
?>

<div class="login">
<h2 class="login-header">Register</h2>
<form action="register.php" method ="post">
<p><b>Please fill the form with proper details</b></p><br>

<p> <input type="text" name="name" placeholder="Name" required /></p>
<p> <input type="email" name ="email"  placeholder="Email" required /></p>
<p> <input type="Password" name ="password" placeholder="Password" required /></p>
<p><input type="text" name ="phoneNo" placeholder="Phone No " minlength="10" maxlength="10" required /></p>
<p><textarea cols="10" rows="10" name="address" placeholder="Address" required></textarea></p>
<p><input type="text" name="pin" placeholder="Pincode" minlength="6" maxlength="6" required></p>
<p><input type="Submit" value="Register" name ="register" /></p>

</div>
</body>
</html>




