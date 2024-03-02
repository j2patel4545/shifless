<?php require_once('connection/config.php'); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <?php include 'connection/config.php'; ?>
<title><?php echo APP_NAME ?>: Reservation Success</title>
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
<div><img src="image/head-img.jpg" width="100%" height="60%"/></div>
  <div id="logo"> <a href="index.php" class="blockLink"></a></div>
</div>
<div id="center">
<h1>Reservation Successful</h1>
  <div style="border:#ff0000 solid 3px;padding:4px 6px 2px 6px">
<p>&nbsp;</p>
<div class="error">Table Reserved Successfully</div>
<p><a href="member-index.php">Click Here</a> to go back to your account.</p>
</div>
</div>
<?php include 'footer.php'; ?>
</div>
</body>
</html>
