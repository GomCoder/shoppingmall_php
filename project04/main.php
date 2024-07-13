<!doctype html>
<html lang="kr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>INDUK Mall</title>
	<link  href="css/bootstrap.min.css" rel="stylesheet">
	<link  href="css/my.css" rel="stylesheet">
	<script src="js/jquery-3.7.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">

<!-- main_top.php -->
<?php include_once("main_top.php") ?>

<!-------------------------------------------------------------------------------------------->	
<!-- 시작 : 다른 웹페이지 삽입할 부분 -->
<!-------------------------------------------------------------------------------------------->	

<!--  제목  -->
<div class="row mt-5 mb-1">
	<div class="col" align="center">
		<h2>New Arriable</h2>
	</div>	
</div>	

<!--  상품 진열  -->
<div class="row">

	<!--  상품1  -->
	<div class="col-sm-3 mb-3">
		<div class="card h-100">
			<div class="zoom_image" align="center">
				<a href="product.html?id=109469"><img src="product/p1.png" 
					height="360" class="card-img-top img-fluid"></a>
			</div>
			<div class="card-body bg-light" align="center" style="font-size:15px;">
				<div class="card-title">
					<a href="product.html?id=109469">상품명1</a><br>
					<img src="images/i_hit.gif">&nbsp;<img src="images/i_new.gif"> 
				</div>
				<p class="card-text"><b>89,000 원</b><br></p>
			</div>
		</div>
	</div>

	<!--  상품2  -->
	<div class="col-sm-3 mb-3">
		<div class="card h-100">
			<div class="zoom_image" align="center">
				<a href="product.html?id=109469"><img src="product/p2.png" height="360" class="card-img-top img-fluid"></a>
			</div>
			<div class="card-body bg-light" align="center" style="font-size:15px;">
				<div class="card-title"><a href="product.html?id=109469">상품명2</a><br>
					<img src="images/i_new.gif">&nbsp;<img src="images/i_hit.gif">&nbsp;<img src="images/i_sale.gif">&nbsp;<font size="2" color="red">20%</font>
				</div>
				<p class="card-text"><small><strike>89,000 원</strike></small>&nbsp;&nbsp;<b>70,000 원</b></p>
			</div>
		</div>
	</div>

	<!--  상품3  -->
	<div class="col-sm-3 mb-3">
		<div class="card h-100">
			<div class="zoom_image" align="center">
				<a href="product.html?id=109469"><img src="product/p3.png" height="360"  class="card-img-top img-fluid"></a>
			</div>
			<div class="card-body bg-light" align="center" style="font-size:15px;">
				<div class="card-title"><a href="product.html?id=109469">상품명3</a><br>
					<img src="images/i_new.gif"> 
				</div>
				<p class="card-text"><b>89,000 원</b><br></p>
			</div>
		</div>
	</div>

	<!--  상품4  -->
	<div class="col-sm-3 mb-3">
		<div class="card  h-100">
			<div class="zoom_image" align="center">
				<a href="product.html?id=109469"><img src="product/p4.png" 
					height="360" class="card-img-top img-fluid"></a>
			</div>
			<div class="card-body bg-light" align="center" style="font-size:15px;">
				<div class="card-title"><a href="product.html?id=109469">상품명4</a><br></div>
				<p class="card-text"><b>89,000 원</b><br></p>
			</div>
		</div>
	</div>

	<!--  상품5  -->
	<div class="col-sm-3 mb-3">
		<div class="card  h-100">
			<div class="zoom_image" align="center">
				<a href="product.html?id=109469"><img src="product/p5.png" 
					height="360" class="card-img-top img-fluid"></a>
			</div>
			<div class="card-body bg-light" align="center" style="font-size:15px;">
				<div class="card-title"><a href="product.html?id=109469">상품명5</a></div>
				<p class="card-text"><b>89,000 원</b><br></p>
			</div>
		</div>
	</div>

	<!--  상품6  -->
	<div class="col-sm-3 mb-3">
		<div class="card  h-100">
			<div class="zoom_image" align="center">
				<a href="product.html?id=109469"><img src="product/p6.png" height="360" 
					class="card-img-top img-fluid"></a>
			</div>
			<div class="card-body bg-light" align="center" style="font-size:15px;">
				<div class="card-title"><a href="product.html?id=109469">상품명6</a><br></div>
				<p class="card-text"><b>89,000 원</b><br></p>
			</div>
		</div>
	</div>

	<!--  상품7  -->
	<div class="col-sm-3 mb-3">
		<div class="card  h-100">
			<div class="zoom_image" align="center">
				<a href="product.html?id=109469"><img src="product/p7.png" height="360" 
					class="card-img-top img-fluid"></a>
			</div>
			<div class="card-body bg-light" align="center" style="font-size:15px;">
				<div class="card-title"><a href="product.html?id=109469">상품명7</a><br></div>
				<p class="card-text"><b>89,000 원</b><br></p>
			</div>
		</div>
	</div>

</div>
<br>

<!-------------------------------------------------------------------------------------------->	
<!-- 끝 : 다른 웹페이지 삽입할 부분 -->
<!-------------------------------------------------------------------------------------------->	

<!-- main_bottom.php  -->
<?php include_once("main_bottom.php") ?>


</div>

</body>
</html>
