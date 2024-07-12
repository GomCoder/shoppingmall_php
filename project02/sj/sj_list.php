<!-- 성적 목록 화면 -->
<?php
//에러 메시지 표시
error_reporting(E_ALL);
ini_set("display_errors", 1);

include "common.php";

$text1 = $_REQUEST["text1"] ? $_REQUEST["text1"] : "";


$sql="select count(*) from sj where name like '%$text1%' order by name";

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
    <title>성적처리</title>
</head>
<body>

<!-- 검색 -->
<?php
    $sql = "SELECT * FROM sj WHERE name like '%$text1%' ORDER BY name"; //sql 정의
    $result = mysqli_query($db, $sql);
    if(!$result) exit('에러: $sql');
?>
<div class="container">
    <br>
    <!-- 검색 및 추가 버튼 -->
    <form name="form1" action="sj_list.php" method="post">
            <div class="row">
                <div class="col-3" align="left">
                    <div class="input-group input-group-sm">
                        <span class="input-group-text">이름</span>
                        <input type="text" name="text1" value="<?=$text1?>" class="form-control" placeholder="찾을 이름은?">
                        <button class="btn mycolor1" type="button" onclick="form1.submit();">검색</button>
                    </div>
                </div>
                <div class="col-9" align="right">
                    <a href="sj_new.html">
                        <div class="btn btn-sm mycolor1">추가</div>
                    </a>
                </div>
            </div>
    </form>
    
    <br>
    <table class="table table-sm table-bordered table-hover mymargin5">
        <tr class="mycolor2">
            <td>ID</td>
            <td width="20%">이름</td>
            <td>국어</td>
            <td>영어</td>
            <td>수학</td>
            <td>총점</td>
            <td>평균</td>
            <td width="15%">수정/삭제</td>
        </tr> 
        <?php
            $page = $_REQUEST["page"] ? $_REQUEST["page"] : 1; //page 초기화

            $first = ($page-1) * $page_line; //해당 페이지 1번째 위치
            $sql = "select * from sj where name like '%$text1%' order by name limit $first, $page_line";
            $result = mysqli_query($db, $sql);
            if(!$result) exit("에러: $sql");           
            

            foreach($result as $row) {
                $id = $row["id"];
                $avg = sprintf("%6.1f", $row["avg"]); //평균 점수: 소수점 1 자리로 변환
        ?>
        <tr>
            <td><?=$id;?></td>
            <td><?=$row["name"];?></td>
            <td><?=$row["kor"];?></td>
            <td><?=$row["eng"];?></td>
            <td><?=$row["mat"];?></td>
            <td><?=$row["hap"];?></td>
            <td><?=$avg;?></td>
            <td>
                <a href="sj_edit.php?id=<?=$id;?>" class="btn btn-sm btn-outline-primary py-0 my-0">수정</a>
                <a href="sj_delete.php?id=<?=$id; ?>" class="btn btn-sm btn-outline-danger py-0 my-0" onclick="return confirm('삭제할까요?');">삭제</a>
            </td>
        </tr>
        <?php } ?>
    </table>



    <?php
    $url = "sj_list.php?text1=$text1";

    $pages = ceil($count / $page_line); //페이지수
    $blocks = ceil($pages / $page_block); //블록 수
    $block = ceil($page / $page_block);//블록 위치
    $page_s = $page_block * ($block-1); //블록의 시작페이지
    $page_e = $page_block * $block + 1 ; //블록의 마지막 페이지


    if($block >= $blocks) {
        $page_e = $pages+1;
    }

    $pagebar .="<nav>
        <ul class='pagination pagination-sm justify-content-center py-1'>";
  
    if ($block > 1){ //이전 블록으로
        $pagebar .= "<li class='page-item'>
                <a class='page-link' href='$url&page=$page_s'>◀</a>
                </li>";
    }

    for ($i = $page_s+1 ; $i < $page_e; $i++) {
        
        if ($page == $i) {
            $pagebar .= "<li class='page-item active'>
                <span class='page-link mycolor1'>$i</span>
            </li>";

        } else {
            $pagebar .= "<li class='page-item'>
                <a class='page-link' href='$url&page=$i'>$i</a>
            </li>";
            
        }
    }

    if ($block < $blocks) { //다음 블록으로
        $pagebar .= "<li class='page-item'>
                <a class='page-link' href='$url&page=$page_e'>▶</a>
                </li>";
    }

    $pagebar .= "</ul> </nav>";


    echo $pagebar;
    ?>            

    
</div>
</body>
</html>