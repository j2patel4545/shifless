<?php
//checking connection and connecting to a database
require_once('connection/config.php');
error_reporting(1);
//Connect to mysqli server
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,DB_DATABASE);
    if(!$conn) {
        die('Failed to connect to server: ' . mysqli_error());
    }
    
   
//retrieve questions from the questions table
$questions=mysqli_query($conn,"SELECT * FROM questions")
or die("Something is wrong ... \n" . mysqli_error());
?>
<?php
//setting-up a remember me cookie
    if (isset($_POST['Submit'])){
        //setting up a remember me cookie
        if($_POST['remember']) {
            $year = time() + 31536000;
            setcookie('remember_me', $_POST['login'], $year);
        }
        else if(!$_POST['remember']) {
            if(isset($_COOKIE['remember_me'])) {
                $past = time() - 100;
                setcookie(remember_me, gone, $past);
            }
        }
    }
?>




<html>
<head>
<title><?php echo APP_NAME ?>:Login</title>
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
<div id="hd">

  <div id="logo"> <a href="index.php" class="blockLink"></a></div>
</div>
<div id="center">
  <h1>Login/Register</h1>
  <table align="center" width="100%">
    <tr align="center">

      <!-- login Form Code -->

    <td style="text-align:center;">
            <div style="border:#ff0000 solid 3px;padding:4px 6px 2px 6px">
            <form id="loginForm" name="loginForm" method="post" action="login-exec.php" onsubmit="return loginValidate(this)">
              <table width="450"  border="0" align="center" cellpadding="2" cellspacing="0">
                <tr>
                    <td colspan="2" style="text-align:center;"><font color="#FF0000"></font><h1>Login Here</h1></td>
                </tr>
                <tr>
                  <td width="140"><b>Email Address</b></td>
                  <tr> </tr>
                  <td width="188"><font color="#FF0000"></font><input name="login" type="text" class="textfield" id="login" /></td>
                </tr>
                <tr>
                  <td><b>Password</b></td>
                  <tr> </tr>
                  <td><font color="#FF0000"></font><input name="password" type="password" class="textfield" id="password" /></td>
                </tr>
                <tr>
                      <td><input name="logged" type="checkbox" class="" id="logged" value="1" onselect="cookie()" <?php if(isset($_COOKIE['logged_in'])) {
                        echo 'checked="checked"';
                    }
                    else {
                        echo '';
                    }
                    ?>/>Stay Logged in</td>

                    <tr> 
                      <td>
                        <br>
                        <a href="JavaScript: resetPassword()">Forgot Password?</a></td>
                </tr>
                <tr>
                    <td colspan="2"><br><input type="reset" value="Reset"/>
                  <input type="submit" name="Submit" value="Login Here" /></td>
                </tr>
                <tr><td>&nbsp;</td></tr>
              </table>
            </form>
            </div>
                
        </td>

        <!-- registration Form Code -->

        <hr>
        <td style="text-align:center;">
            <div style="border:#ff0000 solid 3px;padding:4px 6px 2px 6px;">
            <form id="loginForm" name="loginForm" method="post" action="register-exec.php" onsubmit="return registerValidate(this)">
              <table width="440"  border="0" align="center" cellpadding="2" cellspacing="0">
                <tr>
                    <td colspan="2" style="text-align:center;"><h1>Register Here</h2></td>
                </tr>
                <tr>
                  <th>First Name </th>
                  <td><input name="fname" type="text" class="textfield" id="fname" /></td>
                </tr>
                <tr>
                  <th>Last Name </th>
                  <td><input name="lname" type="text" class="textfield" id="lname" /></td>
                </tr>
                <tr>
                  <th width="124">Email Address</th>
                  <td width="168"> <input name="login" type="text" class="textfield" id="login" /></td>
                </tr>
                <tr>
                  <th>Password</th>
                  <td><input name="password" type="password" class="textfield" id="password" /></td>
                </tr>
                <tr>
                  <th>Confirm Password </th>
                  <td><input name="cpassword" type="password" class="textfield" id="cpassword" /></td>
                </tr>
                <tr>
                  <th>Security Question </th>
                    <td><select name="question" id="question">
                    <option value="select">- select question -
                    <?php 
                    //loop through quantities table rows
                    while ($row=mysqli_fetch_array($questions)){
                    echo "<option value=$row[question_id]>$row[question_text]"; 
                    }
                    ?>
                    </select></td>
                </tr>
                <tr>
                  <th>Security Answer</th>
                    <td><input name="answer" type="text" class="textfield" id="answer" /></td>
                </tr>
                <tr>
                <td colspan="2"><br> <center><input type="reset" value="Reset"/>
                <input type="submit" name="Submit" value="Register"/></center></td>
                </tr>
                <tr><td>&nbsp;</td></tr>
              </table>
            </form>
            </div>
        </td>
    </tr>
</table>
<hr>
</div>
<?php include 'footer.php'; ?>
</div>
</body>
</html>
