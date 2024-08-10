<?php
    include_once('../common.php');

    $adminid = $_REQUEST["adminid"];
    $adminpw = $_REQUEST["adminpw"];

    if ($adminid == $admin_id && $adminpw == $admin_pw) {
        //$cookie_admin 변수에 'yes'로 쿠키 저장
        //member.php로 이동
        setcookie("cookie_admin", 'yes');
        echo ("<script>location.href='member.php'</script>");

    } else {
        //$cookie_admin 쿠키변수 삭제
        setcookie("cookie_admin", '');
        //admin 폴더의 index.html로 이동
        echo ("<script>location.href='admin/index.html'</script>");
    }
?>