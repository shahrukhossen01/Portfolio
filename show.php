<?php
$db=mysqli_connect("localhost","root","","personal");
echo "Sucessfuly connected to database :)";

if(isset($_POST["show"]))
{   
	$query="Select * from registration";
	$result=mysqli_query($db,$query);

	?>
	<table class="table" style=" background: null;" border="1">
		<tr>
			<th>
				Name 


			</th>
			<th>
				Address


			</th>
			<th>
				Nationality


			</th>
			<th>
				Profession


			</th>
			<th>
				Email


			</th>
			<th>
				Mobile


			</th>
			<th>
				ID


			</th>


		</tr>
	<?php
	
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_array($result))
		{
			?>
			<tr>
			<td>
				<?php echo $row['Name'] ;?>


			</td>
			<td>
			  <?php echo $row['Address'];?>


			</td>
			<td>
			  <?php echo $row['Nationality'];?>


			</td>
			<td>
			  <?php echo $row['Profession'];?>


			</td>
			<td>
			  <?php echo $row['Email'];?>


			</td>
			<td>
			  <?php echo $row['Mobile'];?>


			</td>
			<td>
			  <?php echo $row['ID'];?>


			</td>

		</tr>
		<?php
		}

	}
       ?>
		

	</table>


    <?php
	

}

?>


<br>
<br>

<!--end of show section -->




<!--Start search section -->
<?php
$db=mysqli_connect("localhost","root","","personal");
echo "Sucessfuly connected to database ";

if(isset($_POST["submit"]))
{   
	$id=$_POST["search"];
	
	$query="Select * from registration where ID='$id'";
	$result=mysqli_query($db,$query);
	$row=mysqli_fetch_assoc($result);

	$res=mysqli_num_rows($result); ?>


	 <table border="1" class="table">
	 		<tr>
			<th>
				Name 


			</th>
			<th>
				Address


			</th>
			<th>
				Nationality


			</th>
			<th>
				Profession


			</th>
			<th>
				Email


			</th>
			<th>
				Mobile


			</th>
			<th>
				ID


			</th>

		</tr>

	
	
		<tr>
			<td>
				 <?php echo $row['Name'] ;?>


			</td>
			<td>
			  <?php echo $row['Address'];?>


			</td>
			<td>
			  <?php echo $row['Nationality'];?>


			</td>
			<td>
			  <?php echo $row['Profession'];?>


			</td>
			<td>
			  <?php echo $row['Email'];?>


			</td>
			<td>
			  <?php echo $row['Mobile'];?>


			</td>
			<td>
			  <?php echo $row['ID'];?>


			</td>
			
		</tr> 

<?php

	}
	else {

echo ":)";

	}



	?>

<!--End search section -->

<br>

<!DOCTYPE html>
<html>
<head>
	<title> Show Data</title>
	<style >
		input[type=text], input[type=password] {
  width: 60%;
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
	</style>


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
						Show All Data
					</h1>
					<p class="link-nav">
						<span class="box">
							<a href="index.php">Home </a>
							
							

						</span>
					</p>
				</div>
			</div>
		</div>
	</section>
	<br><br>

	<form  method="POST"  action="show.php">

								<button class="primary-btn" style="float: right align-items-center;" data-text="Show Data" name="show">
									<span>S</span>
									<span>h</span>
									<span>o</span>
									<span>w</span>
									<span> </span>
									<span>D</span>
									<span>a</span>
									<span>t</span>
									<span>a</span>
									

								</button>
								<br>
								<br>


				
	<label ><b>Search Your Data</b></label>
    <input type="text" placeholder="Enter Your ID" name="search" id="id" >

    <input type="submit" name="submit" value="Search ID ">

     </form>



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