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
or die("Something went wrong ... \n" . mysqli_error());
?>

<?php
//setting-up stay logged in cookie

    if (isset($_POST['Submit'])){

        //setting up a remember me cookie
        if($_POST['logged']) {
            $year = time() + 31536000;
            setcookie('logged_in', $_POST['login'], $year);
        }
        else if(!$_POST['logged']) {
            if(isset($_COOKIE['logged_in'])) {
                $past = time() - 100;
                setcookie(logged_in, gone, $past);
            }
        }
    }
?>


<html>
	<head>
	
		<title><?php echo APP_NAME; ?>:Home</title>
		
    <link href="CSS/style.css"  rel="stylesheet" type="text/css">

		<script language="JavaScript" src="validation/user.js">
		</script>
		</head>

    <style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
</style>
			<body>
				<div id="page">
				  <div id="menu">
            <ul>
              <li><a href="home.php">Home</a></li>
  				  	<li><a href="foodzone.php">Our Menu</a></li>
              <li><a href="member-index.php">My Profile</a></li>
              <li><a href="aboutus.php">About Us</a></li>
             <li><a href="contactus.php">Contact Us</a></li>
             <li><a href="inbox.php">Notification</a></li>
        </ul>
</div>
<hr>

<h1><marquee><font color="Red">Welcome to ShiftLess A Cafeteria Management System 2022</font color="red"></marquee></h1> 

<hr>

<div><img src="image/Shiftless.png" width="100%" height="60%"/></div>
<div id="logo"> <a href="index.php" class="blockLink"></a></div>

<div id="center">
  <h1><center>Welcome To ShiftLess a Cafeteria Management System</center></h1>
      <div class="body_text">
<h2 style="color:black">The core idea behind Shiftless to provide wholesome food with the various delicious spread over in the menu & burger is most recognized food item in the word. We provide you with self made bread, pizza, byrger, freanch fries,pasta and many more.
  </h2> </div>

  <hr>

  <! --- Image Gallary --->
 
  <style>
div.gallery {
  margin: 5px;
  border: 3px solid #ffffff;
  float: left;
  background: #ffffff;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: 300;
}

div.desc {
  padding: 15px;
  font-family: "Fantasy", Copperplate;
  text-align: center;
}
</style>


<div class="gallery">
  <a target="_blank" href="image/Bread.jpg">
    <img src="image/Bread.jpg" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc"> Bread</div>
</div>

<div class="gallery">
  <a target="_blank" href="image/Burger.jpg">
    <img src="image/Burger.jpg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">Burger</div>
</div>

<div class="gallery">
  <a target="_blank" href="image/Noodles with .jpg">
    <img src="image/Noodles with .jpg" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">Noodles</div>
</div>

<div class="gallery">
  <a target="_blank" href="image/Paneer Tikka Pizza.jpg">
    <img src="image/Paneer Tikka Pizza.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Panir Tikka Pizza</div>
</div>

<div class="gallery">
  <a target="_blank" href="image/Rajma.jpg">
    <img src="image/Rajma.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Rajma</div>
</div>

<div class="gallery">
  <a target="_blank" href="image/vadapau.jpg">
    <img src="image/vadapau.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Vadapav</div>
</div>

<div class="gallery">
  <a target="_blank" href="image/Dhosa.jpg">
    <img src="image/Dhosa.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Dhosa</div>
</div>


<div class="gallery">
  <a target="_blank" href="image/Candy.jpg">
    <img src="image/Candy.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Candy</div>
</div>

<div class="gallery">
  <a target="_blank" href="image/IceCreame.jpg">
    <img src="image/IceCreame.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc"> Ice-Creame</div>
</div>

<div class="gallery">
  <a target="_blank" href="Cold-Cofee.jpeg">
    <img src="image/Cold-Cofee.jpeg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Cold-Coffee</div>
</div>

<div class="gallery">
  <a target="_blank" href="image/Tea.jpg">
    <img src="image/Tea.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Masala-Tea</div>
</div>

<div class="gallery">
  <a target="_blank" href="image/coke.jpg">
    <img src="image/coke.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Coka-Cola</div>
</div>

<br>
<br>

  <br> <br>
  <hr>
  <div class="w3-row w3-padding-64" >
    <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">Menu we provide</h1><br>
      <h4>Breads</h4>
      <p class="w3-text-grey">Assortment of fresh baked fruit breads and muffins</p><br>
    
      <h4>Onion Paneer</h4>
      <p class="w3-text-grey">Spread of pizza souce added with chapped onion,piece of panner,cheese and sprinkle of pizza seasoning</p><br>
    
      <h4>Classic Burger</h4>
      <p class="w3-text-grey">A soft Burger Bun,Added with fresh tomato-onion slices,crispy petty and spread of chessy jalapeno sauce</p><br>
    
      <h4>Mexican Burger</h4>
      <p class="w3-text-grey">A soft Burger bun,Added with fresh tomato-Onion slices,crispy petty and spread of mexican sauce</p><br>
    
      <h4>Chees chatni sanwich</h4>
      <p class="w3-text-grey">Spread of fresh green chati on bread slice added with extra cheese</p><br>

      <h4>veg. sandwich</h4>
      <p class="w3-text-grey">Spread of fresh green chatni on bread slice added with fresh veggies slice</p><br>

      <h4>Red pasta</h4>
      <p class="w3-text-grey">Added fresh veggies,authentic sauce with use of penny pasta</p><br> 

      <h4>Paneer corn pizza</h4>
      <p class="w3-text-grey">Spread of pizza sauce added with sweet corns,piece of panner,cheese and sprinkle of pizza seasoning</p>
    </div>




<hr>
</div><div>
<?php include 'footer.php'; ?>
</div>
</body>
</html>
