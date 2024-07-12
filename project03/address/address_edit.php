<!-- 주소록 수정 화면 -->

<?php
include "common.php";

$id = $_REQUEST["id"];

$sql = "SELECT * FROM address WHERE id = $id";

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
    <title>주소록 수정</title>
</head>

<body>
    <div class="container">
        <br>
        <h2>주소록 수정</h2>
        <hr>
        <br>
        <form name="form1" action="address_update.php" method="post">
            <table class="table table-sm table-bodered mymargin5">
                <tr height="40">
                    <td width="25%" class="mycolor2">ID</td>
                    <td width="75%" align="left" class="bg-light">
                    <input type="hidden" name="id"  value="<?=$id?>">
                    </td>
                </tr>
                <tr>
                    <td width="25%" class="mycolor2">이름</td>
                    <td width="75%" align="left">
                        <div class="d-inline-flex">
                            <input type="text" class="form-control form-control-sm" name="name" size="20" maxlength="20" value="<?=$row["name"]?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="25%" class="mycolor2">
                        전화
                    </td>
                    <td width="75%" align="left">
                        <div class="d-inline-flex">
                            <?php
                            $tel1 = trim(substr($row["tel"], 0, 3));
                            $tel2 = trim(substr($row["tel"], 3, 4));
                            $tel3 = trim(substr($row["tel"], 7, 4));
                            ?>
                            <input type="text" class="form-control form-control-sm" name="tel1" size="3" maxlength="3" value="<?=$tel1;?>">-
                            <input type="text" class="form-control form-control-sm" name="tel2" size="4" maxlength="4" value="<?=$tel2;?>">-
                            <input type="text" class="form-control form-control-sm" name="tel3" size="4" maxlength="4" value="<?=$tel3;?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="25%" class="mycolor2">
                        음력/양력
                    </td>
                    <td width="75%" align="left">
                        <div class="d-inline-flex">
                            <?php
                                if ($row["sm"] == 1) {
                                    echo "<input type='radio' name='sm' value='1' checked>&nbsp;양력&nbsp;";
                                    echo "<input type='radio' name='sm' value='0'>&nbsp;음력";
                                } else {
                                    echo "<input type='radio' name='sm' value='1'>&nbsp;양력&nbsp;";
                                    echo "<input type='radio' name='sm' value='0' checked>&nbsp;음력";
                                }
                            ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="25%" class="mycolor2">
                        생일
                    </td>
                    <td width="75%" align="left">
                        <div class="d-inline-flex">
                            <input type="date" class="form-control form-control-sm" name="birthday" value="<?=$row["birthday"]; ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="25%" height="40" class="mycolor2">
                        주소
                    </td>
                    <td width="75%" align="left">
                        <div class="d-inline-flex">
                            <input type="text" class="form-control form-control-sm" name="address" value="<?=$row["address"]; ?>">
                        </div>
                    </td>
                </tr>
            </table>
            <br>
            <div align="center">
                <input type="submit" value="저장" class="btn btn-sm mycolor1">&nbsp;
                <input type="button" value="이전화면으로" class="btn btn-sm mycolor1" onclick="history.back();">
            </div>
        </form>
    </div>
</body>
</html>



<style>
    form {
        width: 300px;
    }
</style>