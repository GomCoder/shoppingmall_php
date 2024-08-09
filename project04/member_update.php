<?php
include "common.php";

$id = $_REQUEST["id"];
$pwd = $_REQUEST["pwd"];
$pwd1 = $_REQUEST["pwd1"];
$name = $_REQUEST["name"];
$tel1 = $_REQUEST["tel1"];
$tel2 = $_REQUEST["tel2"];
$tel3 = $_REQUEST["tel3"];
$zip = $_REQUEST["zip"];
$address = $_REQUEST["address"];
$email = $_REQUEST["email"];
$birthday1 = $_REQUEST["birthday1"];
$birthday2 = $_REQUEST["birthday2"];
$birthday3 = $_REQUEST["birthday3"]; 


$tel = $tel1 . $tel2 . $tel3;
$birthday = $birthday1 . $birthday2 . $birthday3;

if ($pwd1) {
        $sql = "UPDATE member SET pwd='$pwd', name='$name', tel='$tel', zip='$zip', address='$address', email='$email', birthday='$birthday' WHERE id=$id";
} else {
        $sql = "UPDATE member SET name='$name', tel='$tel', zip='$zip', address='$address', email='$email', birthday='$birthday' WHERE id=$id";
}

$result = mysqli_query($db, $sql);

if(!$result) exit("에러: $sql");


echo ("<script>location.href='member_updated.php'</script>");

?>
