<?php require_once('connection/config.php'); ?>

<html>
<head>
<title><?php echo APP_NAME; ?>:Contacts</title>
<script type="text/javascript" src="swf/swfobject.js"></script>
<link href="CSS/style.css"  rel="stylesheet" type="text/css">
</head>
<body>
<div id="page">
  <div id="menu"><ul><li><a href="index.php">Home</a></li>
 	<li><a href="foodzone.php">Our Menu</a></li>
            <li><a href="member-index.php">My Profile</a></li>
            <li><a href="aboutus.php">About Us</a></li>
           <li><a href="contactus.php">Contact Us</a></li>
           <li><a href="inbox.php">Notification</a></li>
  </ul>
  </div>
<div id="header">
  <div id="logo"> <a href="index.php" class="blockLink"></a></div>
</div>
<div id="center">
  <h1>Contact Us</h1>
  
  <div style="border:#ff0000 solid 3px;padding:4px 6px 2px 6px">
  <table width="500" height="50">
  <tr><td rowspan="11"><a href="https://maps.google.com/"><img width="400" height="420" src="image/map.jpg" </td></a></tr>
  <tr><td rowspan="10"></td></tr>
  <tr><td><h1><?php echo APP_NAME ?> Cafeteria</h1></td></tr>
  <tr><td><h2>It Would Be Great To Hear From You! If You Got Any Questions.<h2></td></tr>
  <tr><td>Shop No.09 BBC Complex, Theater Road, Surat, Gujarat 394248</td></tr>
  <tr></tr>
  <tr><td>Phone Number:+911800-1600-143</td></tr>
  <tr></tr>
  <tr><td>Landline: 231018</td></tr>
  <tr><td>Mobile:9726097304/9909920086</td></tr>
  <tr><td>Email: Service@Shiftless.com</td></tr>
  </table>
  </div>
</div>
<?php include 'footer.php'; ?>
</div>

</body>
</html>
