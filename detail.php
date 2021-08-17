<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<title>Detail</title>
</head>
<body style="font-family: Courier New;">
	<?php
	$connect=mysqli_connect("localhost","root","","tiff-1");
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$sql=mysqli_query($connect,"select * from product where ProductID='$id'");
		while($row=mysqli_fetch_array($sql)){
			$productname=$row['product_name'];
			$productprice=$row['product_price'];
			$productimg=$row['product_image'];
			$productdes=$row['product_des'];
		}
	}
	?>
	<style>
		.wrapper{
			width: 100%;
			height: auto;
			margin: auto;
		}
		.header{
			height: 100px;
			background:#FFFFFF;
		}
		.logo{
			float: left;
			width: 150px;
			padding: 10px;
		}
		.logo img{
			padding: auto;
			width:150px;
			height: 80px;
			left: 100px;
		}
		
		.search{
			display: flex;
			flex-wrap:nowrap;
			position: relative;
		}
		
		.search form{
			padding-top: 3%;
		}
		#input1{
			width: 200px;
			height: 25px;
			border: none;
			border-bottom: 1px solid black;
		}
		#input1:hover{
			border: none;
			border-bottom: 1px solid black;
		}
		.icon{
			float: right;
			right: 100px;
			width: 24px;
			height: 25px;
			margin-top: 2px;
			padding-bottom: 5px;
			background: #FFFFFF;
			border: none;
			display: flex;
			flex-wrap:nowrap;
			position: relative;
		}
		.icon img{
			width: 25px;
			height: 30px;
			margin: -7px;
		}
		.login{
			float: right;
			left: 700px;
			height: 30px;
			cursor: pointer;
			position: relative;
			display: inline;
			border: none;
			background-color:#FFFFFF;
			font-family: Courier New;
			font-size: 16px;
		}
		.login a{
			text-decoration: none;
			color: black;
		}
		.hang{
			float: right;
			left: 680px;
			padding: 1%;
			cursor: pointer;
			position: relative;
			display: inline;
		}
		.hang img{
			margin: 14px;
			width: 40px;
		}
		.menu{	
			width: 100%		
			height: 30px;
			background: #FFFFFF;
		}
		.menu ul li{
			list-style: none;
			text-align: center;
			display: inline-table;
		}
		.menu ul li a{
			text-decoration: none;
			font-size: 17px;
			margin: 25px;
			padding: 5px;
			text-transform: uppercase;
			color: black;
		}
		.menu ul li a:hover{
			border-bottom: 1px solid #66CCFF;
		}
		.footer{
			width: 100%;
			height: 400px;
			background: #FFFFFF;
			border-top: 5px solid #66CCFF;
			
		}
		.khach{
			margin: 20px;
			margin-left: 170px;
			font-family: Courier New;
		}
		.khach a{
			text-decoration: none;
			color: black;
		}
		.company{
			float: right;
			margin: 20px;
			margin-right: 200px;
			margin-top: -350px;
			font-family: Courier New;
		}
		.company a{
			text-decoration: none;
			color: black;
		}
		.site{
			float: right;
			margin: 20px;
			margin-right: 110px;
			margin-top: -350px;
			font-family: Courier New;
		}
		.site a{
			text-decoration: none;
			color: black;
		}

	</style>
	<div class="wrapper">
		<div class="header">
			<div class="logo">
				<a href="index.php"><img src="https://thietkethuonghieu.net/Data/images/thuong-hieu-the-gioi/logo-lego.png"></a>
			</div>
			<div class="search">
				<form >
					<input type="text" name="" id="input1">
					<button type="button" class="icon"> <img src="https://img.icons8.com/pastel-glyph/2x/search--v2.png"> </button>
					<button class="login"><a href="account.php"> My Account </a></button>
				</form>



				<a href="" class="hang">
					<img src="https://www.velisa.vn/uploads/1/icons/icon-tuida.png">
				</a>
			</div>
		</div>
		<div class="menu">
			<ul>
				<li> <a href="">Jewelry </a> </li>
				<li> <a href="">Love & Engagement </a></li>
				<li><a href=""> Watches </a> </li>
				<li><a href="./sanpham/sanpham.php"> Product </a></li>
				<li><a href=""> Fragrance </a></li>
				<li><a href=""> Men's </a></li>
				<li><a href=""> Gifts </a></li>
				<li><a href="Admin/add.php"> Add Product</a></li>
			</ul>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<?php
					echo "<img src='./$productimg' />";
					?>
				</div>
				<div class="col-lg-4">
					<p> <strong style="font-size: 1.2em;">Name of Product :</strong> <?php echo "$productname" ?></p>
					<h3> <strong>Price :</strong> <?php echo "$productprice" ?> </h3>
					<p> <strong>Description:</strong><?php echo "$productdes" ?> </p>
				</div>
			</div>
		</div>

		<div class="footer">

			<div class="khach">
				<h4>Customer Service</h4> <br>
				<a href="">
					<p> Contact Us <br> <br>
						Product Care & Repair <br> <br>
						Book an Appointment <br> <br>
						Frequently Asked Questions <br> <br>
						Shipping & Returns <br> <br>
						Tiffany Select Financing <br> <br>
					Gift Cards</p>
				</a> 
			</div>

			<div class="company">
				<h4>Our Company</h4> <br>
				<a href="">
					<p> World of Tiffany <br> <br>
						Sustainability<br> <br>
						CA Supply Chains Act<br> <br>
						Investors<br> <br>
						Tiffany Careers<br> <br>
						Website Policies<br> <br>
						California Privacy<br> <br>
					Do Not Sell My Info</p>
				</a> 
			</div>

			<div class="site">
				<h4>Related Tiffany Sites</h4> <br>
				<a href="">
					<p> Wedding & Gift Registry <br> <br>
						Business Accounts <br> <br>
						Tiffany for the Press <br> <br>
						The Tiffany & Co. Foundation <br> <br>
					Site Index</p>
				</a> 
			</div>

		</div>
	</div>
	</body>
	</html>