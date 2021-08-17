<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ATN SHOP</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
		integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
		integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
		crossorigin="anonymous"></script>

	<style type="text/css">
		.wrapper {
			width: 100%;
			height: auto;
			margin: auto;
		}

		.header {
			height: 100px;
			background: #FFFFFF;
		}

		.logo {
			float: left;
			width: 150px;
			padding: 10px;
		}

		.logo img {
			padding: auto;
			width: 150px;
			height: 80px;
			left: 100px;
		}

		.search {
			display: flex;
			flex-wrap: nowrap;
			position: relative;
		}

		.search form {
			padding-top: 3%;
		}

		#input1 {
			width: 200px;
			height: 25px;
			border: none;
			border-bottom: 1px solid black;
		}

		#input1:hover {
			border: none;
			border-bottom: 1px solid black;
		}

		.icon {
			float: right;
			right: 100px;
			width: 24px;
			height: 25px;
			margin-top: 2px;
			padding-bottom: 5px;
			background: #FFFFFF;
			border: none;
			display: flex;
			flex-wrap: nowrap;
			position: relative;
		}

		.icon img {
			width: 25px;
			height: 30px;
			margin: -7px;
		}

		.login {
			float: right;
			left: 700px;
			height: 30px;
			cursor: pointer;
			position: relative;
			display: inline;
			border: none;
			background-color: #FFFFFF;
			font-family: Courier New;
			font-size: 16px;
		}

		.login a {
			text-decoration: none;
			color: black;
		}

		.hang {
			float: right;
			left: 680px;
			padding: 1%;
			cursor: pointer;
			position: relative;
			display: inline;
		}

		.hang img {
			margin: 14px;
			width: 40px;
		}

		.menu {
			width: 100%
				/* height: 30px; */
				/* background: #FFFFFF; */
		}

		.menu ul li {
			list-style: none;
			text-align: center;
			display: inline-table;
		}

		.menu ul li a {
			text-decoration: none;
			font-size: 15px;
			margin: 25px;
			padding: 5px;
			text-transform: uppercase;
			color: black;
		}

		.menu ul li a:hover {
			border-bottom: 1px solid #66CCFF;
		}

		.content {
			width: 100%;
			height: 1350px;
		}

		.anhbia img {
			width: 1333px;
		}

		.anhbia h1 {
			position: absolute;
			margin: 150px;
			font-size: 40px;
		}

		#gt {
			position: absolute;
			padding-top: 50px;
			margin: 150px;
			margin-top: 180px;
			font-size: 17px;
		}

		#holidays {
			position: absolute;
			margin: 150px;
			margin-top: 390px;

		}

		#holidays input {
			width: 170px;
			height: 50px;
			background: #FFFFFF;
			border: 1px solid black;
			font-family: Courier New;
			font-size: 13px;
		}

		#holidays input:hover {
			border: 1px solid #66CCFF;
		}

		.sp h1 {
			text-align: center;
		}

		.sp #her {
			width: 400px;
			margin-left: 130px;
		}

		.sp #remix {
			width: 400px;
			margin-right: 130px;
			float: right;
		}

		.sp #her1 {
			margin-left: 280px;
			font-size: 24px;
		}

		.sp #remix2 {
			margin-right: 270px;
			font-size: 24px;
			float: right;
			margin-top: -46px;
		}

		.sp #shop1 a {
			margin-left: 335px;
			font-size: 16px;
			color: black;
			text-decoration: none;
		}

		.sp #shop1 a:hover {
			border-bottom: 1px solid #66CCFF;
		}

		.sp #shop2 a:hover {
			border-bottom: 1px solid #66CCFF;
		}

		.sp #shop2 a {
			margin-right: 335px;
			font-size: 16px;
			color: black;
			text-decoration: none;
			float: right;
			margin-top: -30px;
		}

		.footer {
			width: 100%;
			height: 400px;
			background: #FFFFFF;
			border-top: 5px solid #66CCFF;

		}

		.khach {
			margin: 20px;
			margin-left: 170px;
			font-family: Courier New;
		}

		.khach a {
			text-decoration: none;
			color: black;
		}

		.company {
			float: right;
			margin: 20px;
			margin-right: 200px;
			margin-top: -350px;
			font-family: Courier New;
		}

		.company a {
			text-decoration: none;
			color: black;
		}

		.site {
			float: right;
			margin: 20px;
			margin-right: 110px;
			margin-top: -350px;
			font-family: Courier New;
		}

		.site a {
			text-decoration: none;
			color: black;
		}

		.hover{
        transition: transform 0.2s;
        }
       .hover:hover{
        transform: scale(1.082);
       }
	</style>

</head>

<body>
	<!-- Swapper -->
	<div class="wrapper">
		<div class="header">
			<div class="logo">
				<a href="index.php"><img
						src="https://thietkethuonghieu.net/Data/images/thuong-hieu-the-gioi/logo-lego.png"></a>
			</div>
			<div class="search">
				<form>
					<input style="margin-left: 20%;" type="text" name="" id="input1">
					<button style="margin-left: 2.8em;" type="button" class="icon"> <img
							src="https://img.icons8.com/pastel-glyph/2x/search--v2.png"> </button>
					<button class="login" style="opacity: 0%; "><a href="account.php"> My Account </a></button>
				</form>

			</div>
		</div>
		<div class="menu">
			<ul>
				<li> <a href="#" style="font-weight: bold;">Jewelry </a> </li>
				<li> <a href="#" style="font-weight: bold;">Love & Engagement </a></li>
				<li><a href="#" style="font-weight: bold;"> Watches </a> </li>
				<li><a href="#" style="font-weight: bold;"> Product </a></li>
				<li><a href="#" style="font-weight: bold;"> Fragrance </a></li>
				<li><a href="#" style="font-weight: bold;"> Men's </a></li>
				<li><a href="#" style="font-weight: bold;"> Gifts </a></li>
				<li><a href="#" style="font-weight: bold;"> Add Product</a></li>
			</ul>
		</div>

		<!-- carousel -->
		<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active" data-bs-interval="10000">
					<img src="img/carousel_1.png" style="height:600px"
						class="d-block w-100" alt="No photos found">
				</div>
				<div class="carousel-item" data-bs-interval="2000">
					<img src="https://d1a9v60rjx2a4v.cloudfront.net/2018/01/21/17_29_29_480_optimus_prime_3d_model_c4d_max_obj_fbx_ma_lwo_3ds_3dm_stl_1878173_o_1.jpg"
						style="height:600px" class="d-block w-100" alt="No photos found">
				</div>
				<div class="carousel-item">
					<img src="https://bizweb.dktcdn.net/thumb/large/100/098/550/products/mo-hinh-khung-long-indoraptor-w-dragon-115-jurassic-world-5.jpg?v=1618726384537" class="d-block w-100"
						alt="No photos found" style="height:600px">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
				data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
				data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div><br> <br>
		<hr width="90%" color="#66CCFF" size="2px">

		<div class="sp">
			<h1 style="font-family: Courier New;">BEST SELLING</h1> <br>
			<a href="">
				<img class="hover" src="img/GODZILA.png"
					id="her">
				<img class="hover" src="img/AUTOBOT.png"
					id="her">
				<img class="hover" src="img/NUHOANGBANGGIA.png" id="remix">
			</a>

			<p id="her1" style="font-family: Courier New;">
				KING OF GODZILA
			</p>
			<p id="remix2" style="font-family: Courier New;">
				ICE QEEN MODEL
			</p>
			<p id="remix2" style="font-family: Courier New;">
				TRANFORMER AUTOBOT
			</p>

			<p id="shop1" style="font-family: Courier New;">
				<a href="">Shop Now</a>
			</p>
			
			<p id="shop2" style="font-family: Courier New;">
				<a href="">Shop Now</a>
			</p>
			
		</div>
		
		<hr>
		<h1 style="font-family: Courier New; text-align: center;">PRODUCT PORTFOLIO</h1> <br>
		
		<!-- container -->
		<div class="container">
			<div class="row">
			  <div class="col-lg-12">
				<br>
				<div class="row row-cols-1 row-cols-md-4 g-4">
				  <br>
				  <div class='col-md-3 hover'>
					<div class='card border-success'>
					  <div class='card-header' style='background-color: rgb(0 0 0 / 8%); text-align: center;'>MODEL Batman</div>
					  <div class='card-body'>
						<p class='card-text'><img src="img/batman.png" class="img-fluid rounded"
							style="height:13rem; width:100%" /></p>
					  </div>
					  <div class='card-footer' style='background-color: rgb(0 0 0 / 8%);'>
						<a class='btn btn-warning' href="detail.php">Detail</a>
						<a class='btn btn-primary' href="#">Add to Cart</a>
					  </div>
					</div>
				  </div>
		
				  <div class='col-md-3 hover'>
					<div class='card border-success'>
					  <div class='card-header' style='background-color: rgb(0 0 0 / 8%); text-align: center;'>MODEL Ironman</div>
					  <div class='card-body'>
						<p class='card-text'><img src="img/ironman.png" class="img-fluid rounded"
							style="height:13rem; width:100%" /></p>
					  </div>
					  <div class='card-footer' style='background-color: rgb(0 0 0 / 8%);'>
						<a class='btn btn-warning' href="detail.php">Detail</a>
						<a class='btn btn-primary' href="#">Add to Cart</a>
					  </div>
					</div>
				  </div>
		
				  <div class='col-md-3 hover'>
					<div class='card border-success'>
					  <div class='card-header' style='background-color: rgb(0 0 0 / 8%); text-align: center;'>LBX Pantheon</div>
					  <div class='card-body'>
						<p class='card-text'><img src="img/lbx pantheon.png" class="img-fluid rounded"
							style="height:13rem; width:100%" /></p>
					  </div>
					  <div class='card-footer' style='background-color: rgb(0 0 0 / 8%);'>
						<a class='btn btn-warning' href="detail.php">Detail</a>
						<a class='btn btn-primary' href="#">Add to Cart</a>
					  </div>
					</div>
				  </div>
		
				  <div class='col-md-3 hover'>
					<div class='card border-success'>
					  <div class='card-header' style='background-color: rgb(0 0 0 / 8%); text-align: center;'>LBX Hunter</div>
					  <div class='card-body'>
						<p class='card-text'><img src="img/lbx hunter.png" class="img-fluid rounded"
							style="height:13rem; width:100%" /></p>
					  </div>
					  <div class='card-footer' style='background-color: rgb(0 0 0 / 8%);'>
						<a class='btn btn-warning' href="detail.php">Detail</a>
						<a class='btn btn-primary' href="#">Add to Cart</a>
					  </div>
					</div>
				  </div>
		
				  <div class='col-md-3 hover'>
					<div class='card border-success'>
					  <div class='card-header' style='background-color: rgb(0 0 0 / 8%); text-align: center;'>POKEMON WAR</div>
					  <div class='card-body'>
						<p class='card-text'><img src="img/pokemon1.png" class="img-fluid rounded"
							style="height:13rem; width:100%" /></p>
					  </div>
					  <div class='card-footer' style='background-color: rgb(0 0 0 / 8%);'>
						<a class='btn btn-warning' href="detail.php">Detail</a>
						<a class='btn btn-primary' href="#">Add to Cart</a>
					  </div>
					</div>
				  </div>
		
				  <div class='col-md-3 hover'>
					<div class='card border-success'>
					  <div class='card-header' style='background-color: rgb(0 0 0 / 8%); text-align: center;'>Red RaceCar</div>
					  <div class='card-body'>
						<p class='card-text'><img src="img/oto đỏ.jpg" class="img-fluid rounded"
							style="height:13rem; width:100%" /></p>
					  </div>
					  <div class='card-footer' style='background-color: rgb(0 0 0 / 8%);'>
						<a class='btn btn-warning' href="detail.php">Detail</a>
						<a class='btn btn-primary' href="#">Add to Cart</a>
					  </div>
					</div>
				  </div>
		
				  <div class='col-md-3 hover'>
					<div class='card border-success'>
					  <div class='card-header' style='background-color: rgb(0 0 0 / 8%); text-align: center;'>Bugatti Car</div>
					  <div class='card-body'>
						<p class='card-text'><img src="img/sieu xe bugatti.png" class="img-fluid rounded"
							style="height:13rem; width:100%" /></p>
					  </div>
					  <div class='card-footer' style='background-color: rgb(0 0 0 / 8%);'>
						<a class='btn btn-warning' href="detail.php">Detail</a>
						<a class='btn btn-primary' href="#">Add to Cart</a>
					  </div>
					</div>
				  </div>
		
				  <div class='col-md-3 hover'>
					<div class='card border-success'>
					  <div class='card-header' style='background-color: rgb(0 0 0 / 8%); text-align: center;'>LBX Perseus</div>
					  <div class='card-body'>
						<p class='card-text'><img src="img/lbx perseus.png" class="img-fluid rounded"
							style="height:13rem; width:100%" /></p>
					  </div>
					  <div class='card-footer' style='background-color: rgb(0 0 0 / 8%);'>
						<a class='btn btn-warning' href="detail.php">Detail</a>
						<a class='btn btn-primary' href="#">Add to Cart</a>
					  </div>
					</div>
				  </div>
		
				</div> <br>
			  </div>
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