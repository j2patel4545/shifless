<html>
<head>
  <?php include 'connection/config.php'; ?>
<title><?php echo APP_NAME ?>:Reset Successful</title>
<link href="CSS/style.css"  rel="stylesheet" type="text/css">
</head>
<body>
<div id="page">
  <div id="menu"><ul><li><a href="index.php">Home</a></li>
 	<li><a href="foodzone.php">Our Menu</a></li>
            <li><a href="member-index.php">My Profile</a></li>
            <li><a href="aboutus.php">About Us</a></li>
           <li><a href="contactus.php">Contact Us</a></li>
  </ul>
  </div>
<div id="header">
<div><img src="image/head-img.jpg" width="100%" height="60%"/></div>
  <div id="logo"> <a href="index.php" class="blockLink"></a></div>
</div>
<div id="center">
<h1>Password Reset Successfully</h1>
  <div style="border:#bd6f2f solid 1px;padding:4px 6px 2px 6px">
<p>&nbsp;</p>
<p><a href="login-register.php">Click Here</a> to login to your account with your new password.</p>
</div>
</div>
<?php include 'footer.php'; ?>
</div>
</body>
</html>