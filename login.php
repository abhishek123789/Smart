<?php
            
                 $db=mysqli_connect("localhost","root","","shopping") or die($db);
                 if(!$db)
                 {
                       die("connection failed" .mysqli_error($db));
                 } 
                 if(isset($_POST['Login']))
                 {
                            session_start();          
                           $email=mysqli_escape_string($db,$_POST['email']);
                           $password=mysqli_escape_string($db,$_POST['password']);

                            $sql="select * from user_info where EMAIL='$email' and PASSWORD='$password'";

                            $result=mysqli_query($db,$sql);

                            while($row=mysqli_fetch_array($result))
                            {
                                  $_SESSION['username']=$row['NAME'];
                                  $_SESSION['message'] ="you are logged in now";
                                  header("location:home.php");

                            }
                            
                                  echo "Invalid username or password";
                                  
                            

                  }

?>


<!DOCTYPE html>
<html>
<head>
      <title>Login</title>
      <link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
      <link rel="stylesheet" href="css/style.css" type="text/css">
 </head>

<body >
  <?php
    include "header.php";
  ?>

      
      <div class="login">
      <h2 class="login-header">Log in</h2>
        <form class="login-container" action="login.php" method="post" enctype="multipart/form-data" autocomplete="off">
          
          <p><input type="email" placeholder="Email" name="email" required /></p>
          <p><input type="password" placeholder="Password" name="password" autocomplete="new-password" required /></p>
          <p><input type="submit" value="Login" name="Login" class="btn btn-block btn-primary" /></p>
          <p>Click to<a href="register.php"> Register</a></p>
        </form>
      </div>
      
</body>
</html>


