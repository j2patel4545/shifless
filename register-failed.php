
<html>
<head>
  <?php include 'connection/config.php'; ?>
<title><?php echo APP_NAME ?>:Registration Failed</title>
<link href="CSS/style.css"  rel="stylesheet" type="text/css">
<script language="JavaScript" src="validation/user.js">
</script>
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
<h1>Alert !!</h1>
  <div style="border:#ff0000 solid 3px;padding:4px 6px 2px 6px">
<p>&nbsp;</p>
<div class="error">Registration Failed!</div>
<p>You Cannot Use Same Email Account For Multiple Account.....     <a href="login-register.php">Try Again</a>   Or  click  to reset your password.   <a href="JavaScript: resetPassword()">Reset Password</a> </p>
</div>
</div>
<?php include 'footer.php'; ?>
</div>
</body>
</html>