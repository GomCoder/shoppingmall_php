
<!--  Title과  메뉴(로그인/회원가입/장바구니/주문조회/게시판/Q&A) -->
<div class="row">
	<div class="col fs-3" align="left">
		&nbsp;<a href="index.html"><font color="#777777">INDUK Mall</font></a>
	</div>
	<div class="col mt-3" align="right" style="font-size:12px;">
		<a href="index.html">Home</a>&nbsp;|&nbsp;
		<a href="member_login.html">Login</a>&nbsp;|&nbsp;
		<a href="member_join.html">회원가입</a>&nbsp;|&nbsp;
		<a href="cart.html">장바구니</a>&nbsp;|&nbsp; 
		<a href="jumun_login.html">주문조회</a>&nbsp;|&nbsp;
		<a href="qa.html">Q & A</a>&nbsp;|&nbsp;
		<a href="faq.html">FAQ</a>&nbsp;&nbsp;
	</div>
</div>

<!-- Slide Images -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"  data-bs-interval="4000">
	<div class="carousel-indicators">
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" aria-label="Slide 1"	class="active" aria-current="true" ></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
	</div>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="images/main1.jpg" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
				<h1>New Fashion 1</h1>
				<p><h6>당신을 위한 패션 제안 1</h6></p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="images/main2.jpg" class="d-block w-100"alt="...">
			<div class="carousel-caption d-none d-md-block">
				<h1>New Fashion 2</h1>
				<p><h6>당신을 위한 패션 제안 2</h6></p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="images/main3.jpg" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
				<h1>New Fashion 3</h1>
				<p><h6>당신을 위한 패션 제안 3</h6></p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="images/main4.jpg" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
				<h1>New Fashion 4</h1>
				<p><h6>당신을 위한 패션 제안 4</h6></p>
			</div>
		</div>
	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	</button>
</div>

<!--  상품 Category 메뉴/ 상품검색 -->
<div class="row bg-light m-0 p-1 fs-6 border">
	<div class="col">
		<div class="d-flex">
			<ul class="nav me-auto">
				<li class="nav-item zoom_a"><a class="nav-link" href="menu.html?menu=1"> Menu1 </a></li>
				<li class="nav-item zoom_a"><a class="nav-link" href="menu.html?menu=2"> Menu2 </a></li>
				<li class="nav-item zoom_a"><a class="nav-link" href="menu.html?menu=3"> Menu3 </a></li>
				<li class="nav-item zoom_a"><a class="nav-link" href="menu.html?menu=4"> Menu4 </a></li>
				<li class="nav-item zoom_a"><a class="nav-link" href="menu.html?menu=5"> Menu5 </a></li>
				<li class="nav-item zoom_a"><a class="nav-link" href="menu.html?menu=6"> Menu6 </a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="menu.html?menu=8" role="button" aria-expanded="false"> Menu7 </a>
					<ul class="dropdown-menu">
						<li class="nav-item zoom_a"><a class="dropdown-item" href="#">SMenu1</a></li>
						<li class="nav-item zoom_a"><a class="dropdown-item" href="#">SMenu2</a></li>
						<li><hr class="dropdown-divider"></li>
						<li class="nav-item zoom_a"><a class="dropdown-item" href="#">SMenu3</a></li>
					</ul>
				</li>
			</ul>

			<script>
				function check_findproduct() {
					if (!form1.find_text.value)  {
						alert('검색어를 입력하세요');
						return;
					}
					form1.submit();
				}
			</script>

			<form name="form1" method="post" action="product_search.html">
				<div class="input-group input-group-sm pt-1" >
					<span  class="input-group-text" style="font-size:13px;">상품검색</span>
					<input type="text" name="find_text" value="" size="10" class="form-control form-control-sm">
					<button type="button" class="btn btn-sm btn-outline-secondary" style="font-size:13px;" 
						onClick="check_findproduct();">Search</button>
				</div>
			</form>

		</div>
	</div>
</div>