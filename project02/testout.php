<?php
    ini_set('display_errors', '0');//에러메시지 감춤
    $name1 = $_REQUEST["name1"] ;
    $name2 = $_REQUEST["name2"] ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>웹 문서 값 전달하기</title>
</head>
<body>
    <h1>웹 문서 값 전달하기</h1>

    name1은 <font color="blue"><?=$name1; ?></font>입니다.
    <br>
    name2은 <font color="blue"><?php echo("$name2"); ?></font>입니다.
    <br>
    <a href="javascript:history.back();">돌아가기</a>

</body>
</html>