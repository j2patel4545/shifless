
<html>
<head>

  <?php include 'connection/config.php'; ?>
<title><?php echo APP_NAME ?>: Rating Failed</title>
<link href="CSS/style.css"  rel="stylesheet" type="text/css">
</head>

<body>
<div id="page">
  <div id="menu"><ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="foodzone.php">Food Zone</a></li>
  <li><a href="specialdeals.php">Special Deals</a></li>
  <li><a href="member-index.php">My Account</a></li>
  <li><a href="contactus.php">Contact Us</a></li>
  </ul>
  </div>
<div id="header">
  <div id="logo"> <a href="index.php" class="blockLink"></a></div>
  <div id="company_name"><?php echo APP_NAME ?> Restaurant</div>
</div>
<div id="center">
<h1>Rating Failed !</h1>
  <div style="border:#ff0000 solid 3px;padding:4px 6px 2px 6px">
<p>&nbsp;</p>
<div class="error">You already rated this food.</div>
<p>You are seeing this page because you have already rated this food. <a href="member-index.php">Click Here</a> to go back to your account and rate another food.</p>
</div>
</div>
<?php include 'footer.php'; ?>
</div>
</body>
</html>