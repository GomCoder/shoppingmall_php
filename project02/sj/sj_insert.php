<!-- 추가(insert) -->

<?php
    include "common.php";

    $name = $_REQUEST["name"];
    $kor = $_REQUEST["kor"];
    $eng = $_REQUEST["eng"];
    $mat = $_REQUEST["mat"];
    $hap = $_REQUEST["hap"];
    $avg = $_REQUEST["avg"];

    $sql = "INSERT INTO sj (name, kor, eng, mat, hap, avg)
            values('$name', $kor, $eng, $mat, $hap, $avg)";

    $result = mysqli_query($db, $sql);

    if(!$result) exit("에러: $sql");

    echo("<script>location.href='sj_list.php'</script>");

?>