<?php
	include "../common.php";

?>
<!doctype html>
<html lang="kr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>INDUK Mall</title>
	<link  href="../css/bootstrap.min.css" rel="stylesheet">
	<link  href="../css/my.css" rel="stylesheet">
	<script src="..js/jquery-3.7.1.min.js"></script>
	<script src="../js/bootstrap.bundle.min.js"></script>
	<script src="../js/my.js"></script>
</head>
<body>

<div class="container">
<!-------------------------------------------------------------------------------------------->	
<script> document.write(admin_menu());</script>
<!-------------------------------------------------------------------------------------------->	

<!-- <script>
	function FindZip(zip_kind) 
	{
		w=window.open("zipcode.html?zip_kind="+zip_kind, "zip", "scrollbars=no,width=490,height=320");
	}
</script> -->

<!-- form2 시작 -->
<form name="form2" method="post" action="member_update.php">



<div class="row mx-1  justify-content-center">
	<div class="col-sm-10" align="center">

		<h4 class="m-0 mb-3">회원</h4>

		<?php
			$id = $_REQUEST['id'];

			$sql = "SELECT * FROM member WHERE id = $id";

			$result = mysqli_query($db, $sql);

			if(!$result) exit("에러: $sql");

			$row = mysqli_fetch_array($result);

		?>

		<table class="table table-sm table-bordered myfs12">
			<input type="hidden" name="id" value="<?=$id?>">
			<tr height="40">
				<td width="15%" class="bg-light">아이디</td>
				<td align="left" class="ps-2"><?=$row['uid']?></td>
			</tr>
			<tr>
				<td class="bg-light">암호</td>
				<td align="left" class="ps-2">
					<div class="d-inline-flex">
						<input type="text" name="pwd" size="20" value="<?=$row['pwd']?>" class="form-control form-control-sm" readonly>
					</div>
				</td>
			</tr>
			<tr>
				<td class="bg-light">이름</td>
				<td align="left" class="ps-2">
					<div class="d-inline-flex">
						<input type="text" name="name" size="20" value="<?=$row['name']?>" class="form-control form-control-sm" readonly>
					</div>
				</td>
			</tr>
			<tr>
				<td class="bg-light">휴대폰</td>
				<td align="left" class="ps-2">
					<div class="d-inline-flex">
						<?php
							$tel1 = substr($row['tel'], 0, 3);
							$tel2 = substr($row['tel'], 3, 4);
							$tel3 = substr($row['tel'], 7, 4);
						?>
						<input type="text" name="tel1" size="3" maxlength="3" 
							value="<?=$tel1?>" class="form-control form-control-sm">-
						<input type="text" name="tel2" size="4" maxlength="4" 
							value="<?=$tel2?>" class="form-control form-control-sm">-
						<input type="text" name="tel3" size="4" maxlength="4" 
							value="<?=$tel3?>" class="form-control form-control-sm">
					</div>
				</td>
			</tr>
			<tr>
				<td class="bg-light">주소</td>
				<td align="left" class="ps-2">
					<div class="d-inline-flex mb-1">
						<input type="text" id="zip" name="zip" size="5" maxlength="5" value="<?=$row['zip']?>" class="form-control form-control-sm">&nbsp;
					</div>
						<input type="button" class="btn btn-sm btn-secondary text-white mb-1" style="font-size:12px" onclick="execDaumPostcode()" value="우편번호 찾기">
					<br>
					<div class="d-inline-flex">
						<input type="text" id="address" name="address" size="50" value="<?=$row['address']?>" class="form-control form-control-sm" >
					</div>
				</td>
			</tr>
			<tr>
				<td class="bg-light">E-Mail</td>
				<td align="left" class="ps-2">
					<div class="d-inline-flex">
						<input type="text" name="email" size="50" value="<?=$row['email']?>" class="form-control form-control-sm">
					</div>
				</td>
			</tr>
			<tr>
				<td class="bg-light">생일</td>
				<td align="left" class="ps-2">
					<div class="d-inline-flex pe-4">
					<?php
						$birthday1 = substr($row['birthday'], 0, 4);
						$birthday2 = substr($row['birthday'], 5, 2);
						$birthday3 = substr($row['birthday'], 8, 2);
					?>
						<input type="text" name="birthday1" size="4" maxlength="4" 
							value="<?=$birthday1?>" class="form-control form-control-sm"> -
						<input type="text" name="birthday2" size="2" maxlength="2" 
							value="<?=$birthday2?>" class="form-control form-control-sm"> -
						<input type="text" name="birthday3" size="2" maxlength="2" 
							value="<?=$birthday3?>" class="form-control form-control-sm">
					</div>
				</td>
			</tr>
			<tr height="40">
				<td class="bg-light">구분</td>
				<td align="left" class="ps-2 pt-2">
					<div class="d-inline-flex">
						<?php
							if ($row["member_state"] == 0) {
								echo '<div class="form-check">
										<input class="form-check-input" type="radio" name="member_state" value="0" checked>
										<label class="form-check-label me-2">회원</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="member_state" value="1">
										<label class="form-check-label">탈퇴</label>
									</div>';
							} else {
								echo '<div class="form-check">
										<input class="form-check-input" type="radio" name="member_state" value="0">
										<label class="form-check-label me-2">회원</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="member_state" value="1" checked>
										<label class="form-check-label">탈퇴</label>
									</div>';
							}
						?>
					</div>
				</td>
			</tr>
		</table>

		<a href="javascript:form2.submit();"  class="btn btn-sm btn-dark text-white my-2">&nbsp;저 장&nbsp;</a>&nbsp;
		<a href="javascript:history.back();"  class="btn btn-sm btn-outline-dark my-2">&nbsp;돌아가기&nbsp;</a>

	</div>
</div>
<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
<script>
	function execDaumPostcode() {
		new daum.Postcode({
			oncomplete: function(data) {
				// 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

				// 각 주소의 노출 규칙에 따라 주소를 조합한다.
				// 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
				var addr = ''; // 주소 변수
				//var extraAddr = ''; // 참고항목 변수

				//사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
				if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
					addr = data.roadAddress;
				} else { // 사용자가 지번 주소를 선택했을 경우(J)
					addr = data.jibunAddress;
				}								

				// 우편번호와 주소 정보를 해당 필드에 넣는다.
				document.getElementById('zip').value = data.zonecode;
				document.getElementById('address').value = addr;
			}
		}).open();
	}
</script>

<!-------------------------------------------------------------------------------------------->	
</div>

</body>
</html>
