<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>웹 문서 값 전달하기</title>
</head>
<body>
    <h1>웹 문서 값 전달하기</h1>

    <form name="form01" action="testout.php" method="post">
        name1: <input type="text" name="name1" size="20" value="">
        <input type="submit" value="보내기">
        <input type="reset" value="지우기">
    </form>
    name2 : <a href="testout.php?name2=홍길동">홍길동 보내기</a>
</body>
</html>