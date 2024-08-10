<?php
include "../common.php";

$id = $_REQUEST["id"];
$pwd = $_REQUEST["pwd"];
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
$member_state = $_REQUEST["member_state"];


$tel = $tel1 . $tel2 . $tel3;
$birthday = $birthday1 . $birthday2 . $birthday3;

$sql = "UPDATE member SET name='$name', tel='$tel', zip='$zip', address='$address', email='$email', birthday='$birthday', member_state='$member_state' WHERE id=$id";


$result = mysqli_query($db, $sql);

if(!$result) exit("에러: $sql");


echo ("<script>location.href='member.php'</script>");

?>
