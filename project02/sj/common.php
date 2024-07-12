<!-- DB 연결 파일 -->

<?php
    error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
    ini_set("display_errors", 1);

    mysqli_report(MYSQLI_REPORT_OFF);

    $db = mysqli_connect("localhost", "shop0", "1234", "shop0");
    if(!$db) exit("서버 연결 에러");

    $page_line = 10; //페이지당 line수
    $page_block = 5; //블록당 page수

?>

