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

//selecting all records from the food_details table. Return an error if there are no records in the table
$foods=mysqli_query($conn,"SELECT * FROM food_details")
or die("A problem has occured ... \n" . "Our team is working on it at the moment ... \n" . "Please check back after few hours."); 

//selecting all records from the ratings table. Return an error if there are no records in the table
$ratings=mysqli_query($conn,"SELECT * FROM ratings")
or die("A problem has occured ... \n" . "Our team is working on it at the moment ... \n" . "Please check back after few hours."); 
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
<title><?php echo APP_NAME ?>:Rating</title>
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
    

  <div id="logo"> <a href="index.php" class="blockLink"></a></div>
</div>
<div id="center">
<h1>RATE US</h1>
  <div style="border:#ff0000 solid 3px;padding:4px 6px 2px 6px"><h2>
<a href="member-index.php">Home</a> | <a href="cart.php">Cart[<?php echo $num_items;?>]</a>  | <a href="tables.php">Tables</a>  | <a href="ratings.php">Rate Us</a> | <a href="logout.php">Logout</a>
</h2>
<hr>
<form name="ratingForm" id="ratingForm" method="post" action="ratings-exec.php?id=<?php echo $_SESSION['SESS_MEMBER_ID'];?>" onsubmit="return ratingValidate(this)" style="text-align:center;">
    <table align="center" width="300">
        <CAPTION><h2>RATE OUR FOODS</h2></CAPTION>
            <tr>
                <td>Food</td>
                <td><select name="food" id="food">
                <option value="select">- select food -
                <?php 
                //loop through food_details table rows
                while ($row=mysqli_fetch_array($foods)){
                echo "<option value=$row[food_id]>$row[food_name]"; 
                }
                ?>
                </select></td>
            <tr>
                <td>Scale</td>
                <td><select name="scale" id="scale">
                <option value="select">- select scale -
                <?php 
                //loop through ratings table rows
                while ($row=mysqli_fetch_array($ratings)){
                echo "<option value=$row[rate_id]>$row[rate_name]"; 
                }
                ?>
                </select></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="Submit" value="Rate" /></td>
            </td>
    </table>
</form>
</div>
</div>
<?php include 'footer.php'; ?>
</div>
</body>
</html>