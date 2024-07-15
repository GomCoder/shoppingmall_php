<?php
// 중복 아이디 검사 처리
include "common.php";
?>



<!doctype html>
<html lang="kr" style="overflow:hidden">
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

<div class="container-fulid">

<!--  현재 페이지 자바스크립  -------------------------------------------->
<script>
	function close_me(v)
	{
		opener.form2.check_id.value = v;
		window.close();
	}
</script>

<!--  페이지 제목 -->
<div class="row m-0">
	<div class="col bg-light" align="center">
		<h4 class="m-2">중복 ID 조사</h4>
	</div>	
</div>	

<div class="row">
	<div class="col" align="center">
		<hr style="height:2px" class="my-0">
		<br><br>
		<?php
		$uid = $_REQUEST["uid"];

		$sql = "select * from member where uid = '$uid'";
		$result = mysqli_query($db, $sql);
		if (!$result) exit("에러: $sql");

		$count = mysqli_num_rows($result); //레코드 개수

		if ($count == 0) {
			echo ("<b>". $uid . "</b>는 <font color='green'>사용 가능한 아이디</font>입니다.
					<br><br><br>
					<a href='javascript:close_me(\"yes\");' class='btn btn-sm btn-dark text-white myfont'>확 인</a>");
		} else {
			echo ("<b>". $uid . "</b>는 <font color='red'>사용할 수 없는 아이디</font>입니다.
					<br><br><br>
					<a href='javascript:close_me(\"\");' class='btn btn-sm btn-dark text-white myfont'>확 인</a>");
		}

		?>
	</div>
</div>

<!-------------------------------------------------------------------------------------------->	
</div>

</body>
</html>

<style>
	b {
		color: blue;
	}
</style>