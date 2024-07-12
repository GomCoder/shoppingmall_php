<!-- 주소록 추가 -->
<?php
    include "common.php";

    $name = $_REQUEST["name"];
    $tel1 = $_REQUEST["tel1"];
    $tel2 = $_REQUEST["tel2"];
    $tel3 = $_REQUEST["tel3"];
    $sm = $_REQUEST["sm"];
    $birthday = $_REQUEST["birthday"];
    $address = $_REQUEST["address"];
   

    $tel = $tel1 . $tel2 . $tel3;

    $sql = "INSERT INTO address (name, tel, sm, birthday, address)
            values('$name', '$tel', $sm, '$birthday', '$address')";

    $result = mysqli_query($db, $sql);

    if(!$result) exit("에러: $sql");

    echo("<script>location.href='address_list.php'</script>");

?>
