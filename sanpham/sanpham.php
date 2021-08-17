
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
		.wrapper{
			width: 100%;
			height: 100vh;
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
		.menu ul li a:hover{
			border-bottom: 1px solid #66CCFF;
		}
		.content{
			width: 100%;
			height: 1600px;
		}
		.anhbia img{
			width: 1333px;
		}
		.anhbia h1{
			position: absolute;
			margin: 100px;
			margin-left: 950px;
			margin-top: 90px;
		}
		#gt{
			position: absolute;
			padding-top: 50px;
			margin: 120px;
			margin-top: 80px;
			font-size: 17px;
			margin-left: 950px;		
		}
		.sp h1{
			text-align: center;
		}
		.image{
			float: left;
			margin: 5px;
			width: 350px;
		}
		.image ul li{
			list-style: none;
		}
		.image: hover{
			border:1px solid black;
		}
		.image img{
			width: 100%;
			height: auto;
			margin-top: -10px;
			margin-left: 110px;
		}
		.footer{
			width: 100%;
			height: 400px;
			background: #FFFFFF;
			border-top: 5px solid #66CCFF;
			margin-top: 1100px;
			
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
				<a href="../index.php"><img src="https://thietkethuonghieu.net/Data/images/thuong-hieu-the-gioi/logo-lego.png"></a>
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
				<li><a href="sanpham.php"> Product </a></li>
				<li><a href=""> Fragrance </a></li>
				<li><a href=""> Men's </a></li>
				<li><a href=""> Gifts </a></li>
				<li><a href=""> What's New </a></li>
			</ul>
		</div>
		<div class ="content" >
			<div class="anhbia">

				<h1 style="font-family: Courier New; font-size: 35px;"> Holiday Gifts </h1> <br>	
				<p id="gt" style="font-family: Courier New;"> There’s no better time to celebrate loved ones<br> than the holiday season. This year, find their<br> favorite things at Tiffany & Co. and spread joy<br> to family and friends near and far.
				</p>
				<img src="https://media.tiffany.com/is/image/tiffanydm/Holiday-DotCom-BG-HolidayGifts_Desktop?$tile$&wid=2992">
				
			</div> <br> <br>
			<hr width="90%" color="#66CCFF" size="2px">

			<div class="sp">
				<h1 style="font-family: Courier New;">Curated Shops</h1> <br>

					<?php $connect = mysqli_connect('localhost','root','','tiff-1');
					if (!$connect) {
						echo "ket noi that bai";
					}
					$sql = "select * from product";
					$result = mysqli_query($connect,$sql);
					while($row_pro = mysqli_fetch_array($result)){
						$product_id = $row_pro['ProductID'];
						$product_name = $row_pro['product_name'];
						$product_price = $row_pro['product_price'];
						$product_image = $row_pro['product_image'];
						$category_id = $row_pro['CategoryID'];
						echo "
						<div class='image'>
							<ul>
								<li>
									<a href='../detail.php?id={$product_id}'> 
										<img src='../$product_image' style='height:20rem;width:100%' />
									</a>
								</li>
							</ul>
						</div>
						";
					} 
					?>
			</div>
			<style>
				.image:hover{
					transform: scale(1.1);
					transform: translateY(-20px);
					transition: all 0.6s;
					filter: drop-shadow(1px 7px 3px grey);
					box-shadow: #66CCFF;
				}
			</style>
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
</body>
</html>