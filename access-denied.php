
<?php require_once('connection/config.php'); ?>


<html>
  <head>
          <title><?php echo APP_NAME; ?>:Access Denied</title>
          <link href="CSS/style.css"  rel="stylesheet" type="text/css">
  </head>

  <body>
<div id="page">
  <div id="menu">
    <ul><li> <a href="index.php">Home</a></li>
  					<li><a href="foodzone.php">Our Menu</a></li>
            <li><a href="member-index.php">My Profile</a></li>
            <li><a href="aboutus.php">About Us</a></li>
           <li><a href="contactus.php">Contact Us</a></li>
           <li><a href="inbox.php">Notification</a></li>

  </ul>
  </div>

  <div id="header">
  <div><img src="image/head-img.jpg" width="100%" height="60%"/></div>
    <div id="logo"> <a href="index.php" class="blockLink"></a></div>
  </div>

  <div id="center">
    <h1><center>Access Denied</center></h1>
    <div style="border:#bd6f2f solid 1px;padding:4px 6px 2px 6px">
  <div class="error">Only Member can Access This Page !</div>

    <p><h1>You Don't have permission to access this page<a href="login-register.php">Click Here</a>  To create new account or login your existing account.<h1></p>
  </div>

  </div>
   <?php include 'footer.php'; ?>
  </div>
</body>
</html>