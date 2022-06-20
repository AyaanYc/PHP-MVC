<?php
    include_once "db/db_user.php";
    $uid = $_POST['uid'];
    $upw = $_POST['upw'];
    $param = [
        "uid" => $uid,
        "upw" => $upw,
    ];
    $sel_user = sel_user($param);
    if(empty($sel_user["uid"])){
        echo "아이디가 일치하지 않습니다.";
    }else{
        if($upw !== $sel_user['upw']){
            echo "비밀번호가 일치하지 않습니다.";
        }else{
            session_start();
            $_SESSION['login_user'] = $sel_user;
            header("location: list.php");
        }
    }

    