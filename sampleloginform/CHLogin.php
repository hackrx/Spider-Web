<?php
  session_start();
  require 'dbconfig/config.php';
?>
<style>
	<?php include 'CHLogin.css'; ?>
</style>
<!DOCTYPE html>
<html>
<head>
	<title>ChocolateShop Login</title>
	<link rel="stylesheet" type="text/css" href="CHLogin.css">
	<link rel="shortcut icon"  href="icon.png">
	<link rel="stylesheet" href="">
</head>

<body>

<!Doctype html>
<html>
<head>
  <title>Login Page</title>
  
</head>
<body>

<div>
		<div class="head0"><img  src="./gsi/choco.png">  <h1 style="font-family: Brush Script MT, Brush Script Std, cursive;display: inline-block;color:yellow">The Choclate Shop</h1></div>
		<nav class="nav">
			<ul class="ul">
				<li ><a href="TheChoclateShop.HTML">Home</a></li>
				<li><a href="page2ourchoclate.html">Our Choclate</a></li>
				<li><a href="CHLogin.php" style="text-decoration: underline;text-decoration-color: blue;color: white;">Login</a></li>
				<li><a href="Spider_aboutus.html">About</a></li>
			</ul>
		</nav>
</div>



  <!--Login Form -->
  <div id="main-wrapper">
     <center><h2>Login Form</h2>
     <img src="avtarlogin.png" class="avatar1"/>
     </center>

     <form class="myform" action="CHLogin.php" method="post">
       <label><b>Username:</b></label><br>
       <input name="username" type="text" class="inputvalues" placeholder="Type your username"/><br>
       <label><b>Password:</b></label><br>
       <input name="password" type="password" class="inputvalues" placeholder="Type your Password"/><br>
       <input name="login" type="button" id="login_btn" value="Login"/><br>
       <input type="button" id="register_btn" value="Register"/>
      </form>
      <?php
        if(isset($_POST['login']))
        {   $username=$_POST['username'];
            $password=$_POST['password'];

             $query_run = mysqli_query($con,$query);
             if (mysqli_num_rows($query_run)>0)
             {
                // valid
                $_SESSION['username']= $username;
                header('location:homepage.php');
             }
             else
             {
               // invalid
                 echo '<script type="text/javascript">alert("Invalid Credentials!")</script>';
             }
        }

      ?>
  </div>
 <footer style=" text-align: center;
  background-color: #2D2D32;
  font-family:Arial, Helvetica, sans-serif; 
  position: absolute;
  bottom: 0px;
  display: block;
  text-align: center;
  width: 100%;
  padding:20px; 
  height: 100px;
  color: white;
  overflow: hidden;">
		<div>
	<p class="font_c">Made By <span style="color:#50C878;"> <i class='fas fa-spider' style="font-size:40px; "></i>Spider</span><span style="color:white;" class="he3">Web</span> ...</p>
</div>
</footer>
</body>
</html>

</body>
</html>
