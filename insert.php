<?php
$db=mysqli_connect("localhost","root","","personal");
echo "successfuly connect :)";
if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$address=$_POST["address"];
$natio=$_POST["nat"];
$prof=$_POST["pro"];
$email=$_POST["email"];
$mob=$_POST["mobile"];
$id=$_POST["id"];




$query="INSERT INTO registration (Name, Address, Nationality, Profession, Email,  Mobile,  ID)

VALUES('$name' ,'$address','$natio','$prof','$email','$mob','$id')";

$result=mysqli_query($db,$query);

if($result=="1")  
{
  echo  "Successfuly Registration Complete";

}
else
{
  echo"somthing error";
} 
}
?>



<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Visitor Registration</title>

</head>
<body>

	<header id="header" class="dark">
		<div class="container main-menu">
			<div class="row align-items-center d-flex">
				
				<nav id="nav-menu-container" class="ml-auto">
					<ul class="nav-menu white">
						<li><a href="index.php">Home</a></li>
						<li><a href="info.htm">About</a></li>
						<li><a href="portfolio.php">Contact</a></li>
					
						<li class="menu-has-children"><a href="">Blog</a>
							<ul class="dark">
								<li><a href="blog-home.php">Blog Home</a></li>
						
							</ul>
						</li>
							<li><a href="insert.php">Visiter Registration</a></li>
						<li><a href="show.php">Show Members</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
		<section class="banner-area relative">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Register Here 
					</h1>
					<p class="link-nav">
						<span class="box">
							<a href="index.php">Home </a>
							<a href="insert.php">Registration</a>
							

						</span>
					</p>
				</div>
			</div>
		</div>
	</section>

	<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}


.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}


.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}


.container {
  padding: 16px;
}


.clearfix::after {
  content: "";
  clear: both;
  display: table;
}


@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>

<form action="insert.php"  method="POST"  style="border:1px solid #ccc">
  <div class="container">
    <h1>Member Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label ><b>Full Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required>

    <label ><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address"  id="address" required>

    

    <label ><b>Nationality</b></label>
    <input type="text" placeholder="Enter Nationality" name="nat" id="nat" required>

     <label ><b>Profession</b></label>
    <input type="text" placeholder="Enter Profession" name="pro" id="pro" required>

    <label ><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email"  id="email"  required>

      <label><b>Mobile</b></label>
    <input type="text" placeholder="Enter Mobile" name="mobile"   id="mobile" required>

    <label ><b>ID</b></label>
    <input type="text" placeholder="Enter Id" name="id"   id="id"  required>

   
    

    <div class="clearfix">
      
      <button type="submit" value="submit" name="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>




		<footer class="footer-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="footer-top flex-column">
						<div class="footer-logo">
							<a href="#">
								<img src="img/logo.png" alt="">
							</a>
							<h4>Follow Me On</h4>
						</div>
						<div class="footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer-bottom justify-content-center">
				<p class="col-lg-8 col-sm-12 footer-text">
					</p>
			</div>
		</div>
	</footer>

 
	<div id="back-top">
		<a title="Go to Top" href="#">
			<i class="lnr lnr-arrow-up"></i>
		</a>
	</div>
	
	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/easing.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>
	<script src="js/mn-accordion.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/jquery.circlechart.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/main.js"></script>

	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="img/fav.png">
	<meta name="author" content="colorlib">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta charset="UTF-8">
	<title>Contact</title>
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700,900" rel="stylesheet">
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
</head>
</body>
</html>