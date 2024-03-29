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
	
	//Select database
	
//get member id from session
$memberId=$_SESSION['SESS_MEMBER_ID'];

//selecting all records from the orders_details table. Return an error if there are no records in the table
$result=mysqli_query($conn,"SELECT * FROM orders_details o inner join cart_details c on c.cart_id = o.cart_id inner join quantities q on q.quantity_id = c.quantity_id WHERE o.member_id='$memberId' ")
or die("There are no records to display ... \n" . mysqli_error()); 
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
<?php
    //retrive a currency from the currencies table
    //define a default value for flag_1
    $flag_1 = 1;
    $currencies=mysqli_query($conn,"SELECT * FROM currencies WHERE flag='$flag_1'")
    or die("A problem has occured ... \n" . "Our team is working on it at the moment ... \n" . "Please check back after few hours."); 
?>



<html>
<head>


<title><?php echo APP_NAME; ?>:Member Home</title>
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
           <li><a href="logout.php">Logout</a></li>
  </ul>
  </div>
<div id="header">

  <div id="logo"> <a href="index.php" class="blockLink"></a></div>

</div>
<div id="center">
<h1>Welcome <?php echo $_SESSION['SESS_FIRST_NAME'];?></h1>
  <div style="border:#ff0000 solid 3px;padding:4px 6px 2px 6px">
<h2><a href="member-profile.php">My Profile</a> | <a href="cart.php">Cart[<?php echo $num_items;?>]</a>  | <a href="tables.php">Tables</a> | <a href="ratings.php">Rate Us</a> </h2>
<p>&nbsp;</p>




<h3><a href="foodzone.php">Order More Food!</a></h3>
<hr>
<center>
<table border="0" width="910" style="text-align:center;">
<CAPTION><h2>ORDER HISTORY</h2></CAPTION>
<tr>
<th>Order ID</th>
<th>Food Photo</th>
<th>Food Name</th>
<th>Food Category</th>
<th>Food Price</th>
<th>Quantity</th>
<th>Total Cost</th>
<th>Delivery Date</th>
<th>Action(s)</th>
</tr>

<?php
//loop through all table rows
$symbol=mysqli_fetch_assoc($currencies); //gets active currency
while ($row=mysqli_fetch_array($result)){
  $lt = $row['lt'];
  if($lt =='food'){
    $qry = "SELECT * FROM food_details f inner join categories c on c.category_id = f.food_category where food_id = {$row['food_id']}";
  }else{
    $qry = "SELECT * FROM specials where special_id = {$row['food_id']}";
  }
  // echo $qry.'\n';
  $res = mysqli_fetch_array(mysqli_query($conn,$qry));
echo "<tr>";
echo "<td>" . $row['order_id']."</td>";
echo '<td><a href=images/'. $res[$lt.'_photo']. ' alt="click to view full image" target="_blank"><img src=images/'. $res[$lt.'_photo']. ' width="80" height="70"></a></td>';
echo "<td>" . $res[$lt.'_name']."</td>";
echo "<td>" . ($lt == 'food'? $res['category_name'] : 'Special Deals')."</td>";
echo "<td>" . $symbol['currency_symbol']. "" . $res[$lt.'_price']."</td>";
echo "<td>" . $row['quantity_value']."</td>";
echo "<td>" . $symbol['currency_symbol']. "" . $row['total']."</td>";
echo "<td>" . $row['delivery_date']."</td>";
echo '<td><a href="delete-order.php?id=' . $row['order_id'] . '">Cancel Order</a></td>';
echo "</tr>";
}
mysqli_free_result($result);
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
