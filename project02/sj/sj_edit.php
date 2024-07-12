<!-- 수정 화면 -->
<?php
include "common.php";

$id = $_REQUEST["id"];

$sql = "SELECT * FROM sj WHERE id = $id";

$result = mysqli_query($db, $sql);

if(!$result) exit("에러: $sql");

$row = mysqli_fetch_array($result);

?>


<!DOCTYPE html>

<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/test.css">
    <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <title>성적 수정</title>
</head>

<body>
    <div class="container">
        <br>
        <h2>성적 수정</h2>
        <hr>
        <br>
        <form name="form1" action="sj_update.php" method="post">
            <table class="table table-sm table-bodered mymargin5">
                <tr>
                    <td width="20%" height="40" class="mycolor2">ID</td>
                    <td width="80%" align="left">
                    <div class="d-inline-flex">
                            <input type="text" class="form-control form-control-sm" name="id" size="20" maxlength="20" value="<?=$id?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="20%" class="mycolor2">이름</td>
                    <td width="80%" align="left">
                        <div class="d-inline-flex">
                            <input type="text" class="form-control form-control-sm" name="name" size="20" maxlength="20" value="<?=$row["name"];?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="20%" class="mycolor2">
                        국어
                    </td>
                    <td width="80%" align="left">
                        <div class="d-inline-flex">
                            <input type="text" class="form-control form-control-sm" name="kor" size="10" maxlength="10" value="<?=$row["kor"];?>" onchange="cal_score();">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="20%" class="mycolor2">
                        영어
                    </td>
                    <td width="80%" align="left">
                        <div class="d-inline-flex">
                            <input type="text" class="form-control form-control-sm" name="eng" size="10" maxlength="10" value="<?=$row["eng"];?>" onchange="cal_score();">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="20%" class="mycolor2">
                        수학
                    </td>
                    <td width="80%" align="left">
                        <div class="d-inline-flex">
                            <input type="text" class="form-control form-control-sm" name="mat" size="10" maxlength="10" value="<?=$row["mat"];?>" onchange="cal_score();">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="20%" height="40" class="mycolor2">
                        총점
                    </td>
                    <td width="80%" align="left">
                        <div class="d-inline-flex">
                            <input type="text" class="form-control form-control-sm" name="hap" value="<?=$row["hap"];?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="20%" height="40" class="mycolor2">
                        평균
                    </td>
                    <td width="80%" align="left">
                        <div class="d-inline-flex">
                            <input type="text" class="form-control form-control-sm" name="avg" value="<?=$row["avg"];?>"> 
                        </div>
                    </td>
                </tr>              
            </table>
            <br>
            <div align="center">
                <input type="submit" onclick="cal_score()" value="저장" class="btn btn-sm mycolor1">&nbsp;
                <input type="button" value="이전화면으로" class="btn btn-sm mycolor1" onclick="history.back();">
            </div>
        </form>
    </div>
</body>
</html>

<script>
    function cal_score() {
        form1.hap.value = Number(form1.kor.value) +
                            Number(form1.eng.value) +
                            Number(form1.mat.value);
        form1.avg.value = (form1.hap.value / 3.).toFixed(1);                    
    }

</script>

<style>
    form {
        width: 300px;
    }
</style>
