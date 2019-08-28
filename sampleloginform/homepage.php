<?php
  session_start();
?>

<!Doctype html>
<html>
<head>
  <title>Home Page</title>
  <link rel="shortcut icon"  href="imgs/icon.png">
  <link rel="stylesheet" href="css/style.css">
   <link rel="shortcut icon"  type='image/x-icon'  href="./icon.png">
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
      <li class="li1"><a   href="index.php" >GET STARTED</a></li>
      <li class="li1"><a href="SpiderHome.html"  class="active0">HOME</a></li>
      </ul>
      </div>

  <div id="main-wrapper">
     <center>
       <h2>Home Page</h2>
       <h3>Welcome
         <?php echo $_SESSION['username']; ?>
       </h3>
     <img src="avtarlogin.png" class="avatar1"/>
     </center>

     <form class="myform" action="index.php" method="post">
       <input name="logout" type="submit" id="logout_btn" value="Logout"/><br>
      </form>
      <?php
          if(isset($_POST['logout']))
        {
          session_destroy();
          header('location:index.php');
        }
       ?>

  </div>

</body>
</html>
