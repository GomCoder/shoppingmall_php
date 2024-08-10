<!-- 주소록 목록 화면 -->
<?php
//에러 메시지 표시
error_reporting(E_ALL);
ini_set("display_errors", 1);

include "common.php";

$text1 = $_REQUEST["text1"] ? $_REQUEST["text1"] : "";


$sql="select count(*) from address where name like '%$text1%' order by name";

$result = mysqli_query($db, $sql);
if(!$result) exit('에러: $sql');
$row = mysqli_fetch_array($result);
$count = $row[0];//레코드 개수


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/test.css">
    <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <title>주소록</title>
</head>
<body>

<!-- 검색 -->
<?php
    $sql = "SELECT * FROM address WHERE name like '%$text1%' ORDER BY name"; //sql 정의
    $result = mysqli_query($db, $sql);
    if(!$result) exit('에러: $sql');
?>
<div class="container">
    <a href="/php_shoppingmall/index.html">Home</a>
    <br>
    <h2>주소록 목록</h2>
    <hr>    
    <br>
    <!-- 검색 및 추가 버튼 -->
    <form name="form1" action="address_list.php" method="post">
            <div class="row">
                <div class="col-3" align="left">
                    <div class="input-group input-group-sm">
                        <span class="input-group-text">이름</span>
                        <input type="text" name="text1" value="<?=$text1?>" class="form-control" placeholder="찾을 이름은?">
                        <button class="btn mycolor1" type="button" onclick="form1.submit();">검색</button>
                    </div>
                </div>
                <div class="col-9" align="right">
                    <a href="address_new.html">
                        <div class="btn btn-sm mycolor1">추가</div>
                    </a>
                </div>
            </div>
    </form>
    
    <br>
    <table class="table table-sm table-bordered table-hover mymargin5">
        <tr class="mycolor2">
            <td>ID</td>
            <td>이름</td>
            <td>전화</td>
            <td>음/양</td>
            <td>생일</td>
            <td>주소</td>
            <td width="15%">수정/삭제</td>
        </tr> 
        <?php
            $text1 = $_REQUEST["text1"] ? $_REQUEST["text1"] : "";


            $sql="select * from address where name like '%$text1%' order by name";
            $args = "text1=$text1";
            $result = mypagination($sql, $args, $count, $pagebar);
            

            foreach($result as $row) {
                $id = $row["id"];
                if ($row["sm"] == 0) {
                    $sm = "양력";
                } else {
                    $sm = "음력";
                }

                $tel1 = trim(substr($row["tel"], 0, 3));
                $tel2 = trim(substr($row["tel"], 3, 4));
                $tel3 = trim(substr($row["tel"], 7, 4));

                $tel = $tel1 . "-" . $tel2 . "-" . $tel3;                
        ?>
        <tr>
            <td><?=$id;?></td>
            <td><?=$row["name"];?></td>
            <td><?=$row["tel"] = $tel;?></td>
            <td><?=$row["sm"] = $sm;?></td>
            <td><?=$row["birthday"];?></td>
            <td><?=$row["address"];?></td>

            <td>
                <a href="address_edit.php?id=<?=$id;?>" class="btn btn-sm btn-outline-primary py-0 my-0">수정</a>
                <a href="address_delete.php?id=<?=$id; ?>" class="btn btn-sm btn-outline-danger py-0 my-0" onclick="return confirm('삭제할까요?');">삭제</a>
            </td>
        </tr>
        <?php }?>
    </table>



    <?php
    echo $pagebar; //pagination bar 표시
    ?>            

    
</div>
</body>
</html>