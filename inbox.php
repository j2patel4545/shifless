<?php
    require_once('auth.php');
?>

<?php
//checking connection and connecting to a database
require_once('connection/config.php');
//Connect to mysqli server
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,DB_DATABASE);
    if(!$conn) {
        die('Failed to connect to server: ' . mysqli_error());
    }
    
   
//get member id from session
$memberId=$_SESSION['SESS_MEMBER_ID'];
?>
<?php
    //retrieving all rows from the cart_details table based on flag=0
    $flag_0 = 0;
    $items=mysqli_query($conn,"SELECT * FROM cart_details WHERE member_id='$memberId' AND flag='$flag_0'")
    or die("Something is wrong ... \n" . mysqli_error()); 
    //get the number of rows
    $num_items = mysqli_num_rows($items);
?>
<?php
    //retrieving all rows from the messages table
    $messages=mysqli_query($conn,"SELECT * FROM messages")
    or die("Something is wrong ... \n" . mysqli_error()); 
    //get the number of rows
    $num_messages = mysqli_num_rows($messages);
?>

<html>
<head>

<title><?php echo APP_NAME ?>:Tables</title>
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
           <li><a href="inbox.php">Notification</a></li>
  </ul>
  </div>
<div id="header">

  <div id="logo"> <a href="index.php" class="blockLink"></a></div>
</div>
<div id="center">

  <div style="border:#ff0000 solid 3px;padding:4px 6px 2px 6px">


<center>
<table width="850" style="text-align:center;">
<CAPTION><h1>Notification</h2></CAPTION>
<tr>
<th><h2>From</h2></th>
<th><h2>Date Received</h2></th>
<th><h2>Time Received</h2></th>
<th><h2>Subject</h2></th>
<th><h2>Text</h2></th>
</tr>

<?php
//loop through all table rows
while ($row=mysqli_fetch_array($messages)){
echo "<tr>";
echo "<td>" . $row['message_from']."</td>";
echo "<td>" . $row['message_date']."</td>";
echo "<td>" . $row['message_time']."</td>";
echo "<td>" . $row['message_subject']."</td>";
echo "<td width='350' align='left'>" . $row['message_text']."</td>";
echo "</tr>";
}
mysqli_free_result($messages);
mysqli_close($conn);
?>
</table>
</center>
</div>
</div>
<?php include 'footer.php'; ?>
</div>
</body>
</html>