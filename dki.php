<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
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
			font-size: 15px;
			margin: 25px;
			padding: 5px;
			text-transform: uppercase;
			color: black;
		}
		.content{
			width: 100%;
			height: 700px;

		}
		.left{
			width: 50%;
			background: #FFFFFF;
			height: 300px;
			float: left;

		}

		.please{
			margin: 50px;
			font-family: Courier New;
		}
		.SI{
			float: right;
			right: 260px;
			bottom: 55px;
			display: flex;
			flex-wrap:nowrap;
			position: relative;
		}
		.SI a{
			text-decoration: none;
			color: black;
		}
		.signin{
			margin: 40px;
			border: none;

		}
		.signin #f_name{
			height: 30px;
			width: 400px;
			margin: 10px;
			border: none;
			border-bottom: 1px solid black;
		}
		.signin #l_name{
			height: 30px;
			width: 400px;
			margin: 10px;
			border: none;
			border-bottom: 1px solid black;
		}
		.signin #v_email{
			height: 30px;
			width: 400px;
			margin: 10px;
			border: none;
			border-bottom: 1px solid black;
		}
		#username{
			height: 30px;
			width: 400px;
			margin: 10px;
			border: none;
			border-bottom: 1px solid black;
		}
		#password{
			height: 30px;
			width: 400px;
			margin: 10px;
			border: none;
			border-bottom: 1px solid black;
		}
		#img{
			width: 400px;
			margin: 10px;
		}
		
		.b_signin{
			height: 50px;
			width: 407px;
			margin: 10px;
			background: black;
			color: white;
			border: 1px solid black;
			font-family: Courier New;
				font-weight: bold;
				font-size: 16px;
		}
		.b_signin a{
			color: white;
			text-decoration: none;
		}
		.signin .b_signin:hover{
			background: #66CCFF ;
			color: black;
		}
		.right{
			width: 50%;
			background:#FFFFFF;
			height: 300px;
			float:right;
		}
		.right img{
			width: 550px;
			float: left;
			padding-top: 100px;
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

</head>
<body>
	<div class="wrapper">
		<div class="header">
			<div class="logo">
				<a href="index.php"><img src="https://thietkethuonghieu.net/Data/images/thuong-hieu-the-gioi/logo-lego.png"></a>
			</div>
			<div class="search">
				<form >
					<input type="text" name="" id="input1">
					<button type="button" class="icon"> <img src="https://img.icons8.com/pastel-glyph/2x/search--v2.png"> </button>
					<button class="login"><a href="../account.php"> My Account </a></button>
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
				<li><a href=""> Home & Accessories </a></li>
				<li><a href=""> Fragrance </a></li>
				<li><a href=""> Men's </a></li>
				<li><a href=""> Gifts </a></li>
				<li><a href=""> What's New </a></li>
			</ul>
		</div>
		<div class ="content">
			<div class ="left">
				<div class="please">
					<h1>Create an Account</h1>
					<p>With a Tiffany.com account, you can save time during <br> checkout, access your shopping bag from any device <br> and view your order history.</p>
					<h4 class="have">Have a Tiffany account?</h4>
					<p class="SI">
						<a href="../account.php"> Sign In</a>
					</p>
				</div>
				<div class="signin">
					<form method="post" enctype="multipart/form-data">
						<input type="text" name="firstname" placeholder="First Name" id="f_name"> <br>
						<input type="text" name="lastname" placeholder="Last Name" id="l_name"> <br>
						<input type="text" name="email" placeholder="Email" id="v_email"> <br>
						<input type="password" name="password" placeholder="Password" id="password"> <br> <br>
						
						<input type="file" name="img" id="img" > <br>
						<a href="../trangchu.php">
							<input type="submit" name="register" value="Create an Account" class="b_signin" >
						</a>
					</form>

					<?php
					$connect = mysqli_connect('localhost','root','','tiff-1');
					if (isset($_POST['register'])) {
						$file=$_FILES['img']['name'];
						$file_tmp=$_FILES['img']['tmp_name'];
						$path = "Avartar/";
						move_uploaded_file($file_tmp,$path.$file);

						$password = $_POST['password'];
						$firstname=$_POST['firstname'];
						$lastname = $_POST['lastname'];
						$email=$_POST['email'];
						$sql="insert into users values ('$userid','$password','$firstname','$lastname','$email','$file')";
						$result = mysqli_query($connect,$sql);
						if ($result) {
							echo "<script>alert('Account has been created successfully!')</script>";
							echo "<script>window.open('index.php','_self')</script>";
						}
						else{
							echo"<script>alert('Error')</script>";
						}  
					}
					?>

				</div>
			</div>
			<div class="right">
				<img src="https://www.tiffany.com/shared/images/checkout/blue-box.jpg">
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