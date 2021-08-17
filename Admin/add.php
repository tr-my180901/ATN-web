<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<title>Add product</title>
</head>
<body>
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
			font-family: Courier New;
		}
		.menu ul li a:hover{
			border-bottom: 1px solid #66CCFF;
		}
	</style>
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
				<li><a href="../sanpham/sanpham.php"> Product </a></li>
				<li><a href=""> Fragrance </a></li>
				<li><a href=""> Men's </a></li>
				<li><a href=""> Gifts </a></li>
				<li><a href=""> What's New </a></li>
			</ul>
		</div>
		<div class="container">
			<div class="row">
				<?php
				$conn=mysqli_connect("localhost","root","","tiff-1");
				?>
				<div class="col-lg-12">
					<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="name">Product's name</label> <br>
							<input class="form-control" name="name" type="text" placeholder="Product's name">
						</div> <br>
						<div class="form-group">
							<label for="priceproduct">Product price</label> <br>
							<input type="number" name="price" id="priceproduct" class="form-control">
						</div> <br>
						<div class="form-group">
							<label for="des">Description of the product</label> <br>
							<input name="des" type="text" id="des" class="form-control">
						</div> <br>
						<div class="form-group">
							<label for="category">Product type</label> 
							<select name="category">
								<?php 
								$result=$conn->query("select * from category");
								while($row=$result->fetch_array()){
									$catId=$row["CategoryID"];
									$catName=$row["CategoryName"];
									echo "<option value='$catId'>$catName</option>";
								}
								?>
							</select> 
						</div> <br>
						<div class="form-group">
							<label for="img">Product photo </label>
							<input type="file" name="image" id="">
						</div> <br>
						<button name="submit" type="submit" class="form-control btn btn-primary">Add Product</button>

					</form>
					<?php
					if(isset($_POST['submit'])){
						$product_name=$_POST['name'];
						$product_price=$_POST['price'];
						$product_des=$_POST['des'];
						$cat=$_POST['category'];
                    // get img
						$product_image=$_FILES['image']['name'];
						$target="../img/".basename($product_image);
						$resulttarget="img/".basename($product_image);
						$result2=$conn->query("INSERT INTO `product`(`product_name`, `product_price`,`product_des`, `CategoryID`,`product_image`) VALUES('$product_name','$product_price','$product_des','$cat','$resulttarget')");
						move_uploaded_file($_FILES['image']['tmp_name'],$target);
						if($result2){
							echo "<script>alert('Add Product Success !!')</script>";
						}
						else{
							echo "<script>alert('Add Product Fail !!')</script>";
						}
					}




					?>
				</div>
			</div>
		</div>
	</div>
	</body>
	</html>