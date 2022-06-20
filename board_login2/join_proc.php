<?php
    include_once "db/db_user.php";

    $uid = $_POST['uid'];
    $upw = $_POST['upw'];
    $confirm_upw = $_POST['confirm_upw'];
    $nm = $_POST['nm'];
    $gender = $_POST['gender'];

    $param = [
        'uid' => $uid,
        'upw' => $upw,
        'nm' => $nm,
        'gender' => $gender
    ];

    $ins_user = ins_user($param);
    
    if(isset($ins_user)){
        print "회원가입에 성공하였습니다.";
        print "<a href='login.php'><button>로그인</button></a>";
    }
     
?>