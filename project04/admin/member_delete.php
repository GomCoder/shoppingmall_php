<?php
include "../common.php";

$id = $_REQUEST["id"];

$sql = "DELETE FROM member WHERE id = $id";
$result = mysqli_query($db, $sql);

if (!$result) exit("에러: $sql");

echo ("<script>location.href='member.php'</script>");
?>