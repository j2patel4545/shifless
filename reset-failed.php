<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <?php include 'connection/config.php'; ?>
<title><?php echo APP_NAME ?>:Reset Failed</title>
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
  
</div>
<div id="center">
<h1>Some Thing Went Wrong</h1>
  <div style="border:#ff0000 solid 3px;padding:4px 6px 2px 6px">
<p>&nbsp;</p>
<div class="error">Password Reset Failed !</div>
<p>You See This Because Password reset is failed. This happend when you entered wrong information.   <a href="password-reset.php">Try Again</a></p>
</div>
</div>
<?php include 'footer.php'; ?>
</div>
</body>
</html>