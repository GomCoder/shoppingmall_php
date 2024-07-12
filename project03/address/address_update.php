<!-- 주소록 수정 -->

<?php
include "common.php";

$id = $_REQUEST["id"];
$name = $_REQUEST["name"];
$tel1 = $_REQUEST["tel1"];
$tel2 = $_REQUEST["tel2"];
$tel3 = $_REQUEST["tel3"];
$sm = $_REQUEST["sm"];
$birthday = $_REQUEST["birthday"];
$address = $_REQUEST["address"];

$tel = $tel1 . $tel2 . $tel3;

$sql = "UPDATE address SET name='$name', tel='$tel', sm=$sm, birthday='$birthday', address='$address' WHERE id=$id";

$result = mysqli_query($db, $sql);

if(!$result) exit("에러: $sql");

echo("<script>location.href='address_list.php'</script>")


?>