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
<?php
	include_once("main_top.php");
?>


<!--  현재 페이지 자바스크립  -------------------------------------------->
<script>

	function Check_Value() {
		if (form2.pwd.value != form2.pwd1.value) {
			alert("암호가 일치하지 않습니다.");	
			form2.pwd.focus();	return;
		}
		if (!form2.name.value) {
			alert("이름이 잘못되었습니다.");	form2.name.focus();	return;
		}
		if (!form2.birthday1.value || !form2.birthday2.value || !form2.birthday3.value) {
			alert("생일이 잘못되었습니다.");	form2.birthday1.focus();	return;
		}
		if (!form2.tel1.value || !form2.tel2.value || !form2.tel3.value) {
			alert("핸드폰이 잘못되었습니다.");	form2.tel1.focus();	return;
		}
		if (!form2.zip.value) {
			alert("우편번호가 잘못되었습니다.");	form2.zip.focus();	return;
		}
		if (!form2.address.value) {
			alert("주소가 잘못되었습니다.");	form2.address.focus();	return;
		}
		if (!form2.email.value) {
			alert("이메일이 잘못되었습니다.");	form2.email.focus();	return;
		}

		form2.submit();
	}
</script>

<div class="row m-5 mb-0">
	<div class="col" align="center">

		<h4 class="m-3 mb-2">회원 정보 수정</h4>

		<hr size="4px" class="m-0">
		<br>

		
		<?php
			
			$sql = "SELECT * FROM member WHERE uid = '$cookie_id'";

			$result = mysqli_query($db, $sql);

			if(!$result) exit("에러: $sql");

			$row = mysqli_fetch_array($result);

		?>
		<!-- form2 시작 -->
		<form name="form2" method="post" action="member_update.php">

		<table style="font-size:13px;">
		<input type="hidden" name="id" size="20" value="<?=$row['id']?>" class="form-control form-control-sm">
			<tr height="40">
				<td align="left" width="120">아이디 <font color="red">*</font></td>
				<td align="left"><?=$row['uid'];?></td>
			</tr>
			<tr height="40">
				<td align="left">새 비밀번호</td>
				<td align="left">
					<div class="d-inline-flex">
						<input type="password" name="pwd" size="20" value="" 
							class="form-control form-control-sm">
					</div>
					<font color='grey'>&nbsp; ※ 비밀번호 변경할 때만 입력.</font>
				</td>
			</tr>
			<tr height="40">
				<td align="left">새 비밀번호 확인</td>
				<td align="left">
					<div class="d-inline-flex my-1">
						<input type="password" name="pwd1" size="20" value="" 
							class="form-control form-control-sm">
					</div>
				</td>
			</tr>
			<tr height="40">
				<td align="left">이름 <font color="red">*</font></td>
				<td align="left">
					<div class="d-inline-flex">
						<input type="text" name="name" size="20" value="<?=$row['name'];?>" 
							class="form-control form-control-sm">
					</div>
				</td>
			</tr>
			<tr height="40">
				<td align="left">휴대폰 <font color="red">*</font></td>
				<td align="left">
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
			<tr height="90">
				<td align="left">주소 <font color="red">*</font></td>
				<td align="left">
					<div class="d-inline-flex mb-1">
						<input type="text" id="zip" name="zip" size="5" maxlength="5" value="<?=$row['zip'];?>" class="form-control form-control-sm" >&nbsp;
					</div>
						<input type="button" class="btn btn-sm btn-secondary text-white mb-1" style="font-size:12px" onclick="execDaumPostcode()" value="우편번호 찾기">
					<br>
					<div class="d-inline-flex">
						<input type="text" id="address" name="address" size="50" value="<?=$row['address'];?>" class="form-control form-control-sm" >
					</div>
				</td>
			</tr>
			<tr height="40">
				<td align="left">E-Mail</td>
				<td align="left">
					<div class="d-inline-flex">
						<input type="text" name="email" size="50" 
							value="<?=$row['email'];?>" class="form-control form-control-sm">
					</div>
				</td>
			</tr>

			<tr height="40">
				<td align="left">생일</td>
				<td align="left">
					<div class="d-inline-flex mt-2">
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
		</table>

		<a href="javascript:Check_Value();"  class="btn btn-sm btn-dark text-white my-4">&nbsp;회원정보 수정&nbsp;</a>

		</form>
		
	</div>
</div>

<br><br>
<?php
	

?>

<!-------------------------------------------------------------------------------------------->	
<!-- 끝 : 다른 웹페이지 삽입할 부분 -->
<!-------------------------------------------------------------------------------------------->	

<!-- 화면 하단 (main_bottom) : 회사소개/이용안내/개인보호정책 -->
<?php
include_once("main_bottom.php");
?>

<!-------------------------------------------------------------------------------------------->	
</div>

</body>
</html>

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