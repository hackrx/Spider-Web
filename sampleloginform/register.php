<?php
   require 'dbconfig/config.php';
?>

<!Doctype html>
<html>
<head>
  <title>Registration Page</title>
   <link rel="shortcut icon"  href="imgs/icon.png">
  <link rel="shortcut icon"  href="icon.png">
  <link rel="stylesheet" type="text/css" href="tesssssssstspider.css">
  <link rel="stylesheet" type="text/css" href="Spider_privacy.css">
  <!--Adding link for icons  -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta http-equiv="refres2h" content="30">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width , initial-scale=1.0">
  <!--adding bootstrap link -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script type="text/javascript">

  </script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="Spider_pricing.css">
</head>
<body style=" background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.4)),url(desg1.jpg);background-repeat: no-repeat;background-size: cover;background-attachment:fixed;">



   <div class="navsiz">
      <ul class="uli">
        <li class="he2"><span style="font-size: 40px;margin-left: 0px"> <i class='fas fa-spider' style="font-size:40px; color:#50C878;"></i></span>Spider<span class="he3">Web</span></li>
        
        
      
      <li class="li1"><a href="Spider_pricing.html"  >PRICING</a></li>
      <li class="li1"><a href="index.php" style="color:white;" class="active">LOGIN</a></li>
      <li class="li1"><a href="How_it_works.html" >HOW IT WORKS</a></li>
      <li class="li1"><a href="index.php" >GET STARTED</a></li>
      <li class="li1"><a href="SpiderHome.html"  class="active0">HOME</a></li>
      </ul>
      </div>




  <!--Registration Form  -->

  <div id="main-wrapper">
     <center><h2>Registration Form</h2>
     <img src="avtarlogin.png" class="avatar1"/>
     </center>

     <form class="myform" action="register.php" method="post">
       <label><b>Username:</b></label><br>
       <input name="username" type="text" class="inputvalues" placeholder="Type your username" required/><br>
       <label><b>Password:</b></label><br>
       <input name="password" type="password" class="inputvalues" placeholder="Type your Password" required/><br>
       <label><b>Confirm Password:</b></label><br>
       <input name="cpassword" type="password" class="inputvalues" placeholder="Confirm password" required/><br>
       <input name="submit_btn" type="submit" id="signup_btn" value="Sign Up"/><br>
       <a href="index.php"><input type="button" id="back_btn" value="Back"/></a>

      </form>
      <?php
         if (isset($_POST['submit_btn']))
         {
           //echo '<script type="text/javascript">alert("Sign up button clicked")</script>';

           $username = $_POST['username'];
           $password = $_POST['password'];
           $cpassword = $_POST['cpassword'];

           if ($password == $cpassword)
           {
              $query= "select * from user WHERE username ='$username'";
              $query_run = mysqli_query($con,$query);

              if(mysqli_num_rows($query_run)>0)
              {
                  //there is already a user with the same username
                  echo '<script type="text/javascript">alert("User already exists.. try another username")</script>';
              }
              else
              {
                $query= "insert into user values('$username','$password')";
                $query_run = mysqli_query($con,$query);

                if($query_run)
                {
                    echo '<script type="text/javascript">alert("User Registered....Go to login page to login")</script>';
                }
                else
                {
                    echo '<script type="text/javascript">alert("Error!")</script>';
                }
              }
            }
          else
              {
                 echo '<script type="text/javascript">alert("password and confirm password does not match!")</script>';
              }

         }
       ?>
  </div>
</body>
</html>
