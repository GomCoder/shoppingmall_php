<!-- 주소록 삭제  -->

<?php
include "common.php";

$id = $_REQUEST["id"];

$sql = "DELETE FROM address WHERE id = $id";
$result = mysqli_query($db, $sql);

if (!$result) exit("에러: $sql");

echo ("<script>location.href='address_list.php'</script>");
?>