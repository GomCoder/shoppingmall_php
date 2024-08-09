
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
<!-------------------------------------------------------------------------------------------->	
<?php include_once("main_top.php") ?>
<!-------------------------------------------------------------------------------------------->	
<!-- 시작 : 다른 웹페이지 삽입할 부분 -->
<!-------------------------------------------------------------------------------------------->	

<div class="row m-5 mb-0">
	<div class="col" align="center">
		<h4>회원가입</h4>
	</div>	
</div>	

<hr size="4px" class="m-0 mx-5">

<div class="row m-3">
	<div class="col  align-items-center justify-content-center" align="center">

		<br><br><br>
		<h3><b>Congratulation !!!</b></h3>
		<br><br>
		회원 정보가 수정되었습니다.<br>

		<br>
		<!-- 업데이트 되었는지 값 확인 -->
		<?php		
			
		$sql = "SELECT * FROM member WHERE uid = '$cookie_id'";

		$result = mysqli_query($db, $sql);

		if(!$result) exit("에러: $sql");

		$row = mysqli_fetch_array($result);

		var_dump($row);

	?>		
		<br><br><br><br>
		<a href="index.html" class="btn btn-sm btn-dark text-white">&nbsp;돌아가기&nbsp;</a>

	</div>
</div>
<br><br><br><br><br><br>	

<!-------------------------------------------------------------------------------------------->	
<!-- 끝 : 다른 웹페이지 삽입할 부분 -->
<!-------------------------------------------------------------------------------------------->	
<?php include_once("main_bottom.php");?>
<!-------------------------------------------------------------------------------------------->	
</div>

</body>
</html>
