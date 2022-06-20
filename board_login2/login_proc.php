<?php
    include_once "db/db_user.php";
    $uid = $_POST['uid'];
    $upw = $_POST['upw'];
    $param = [
        'uid' => $uid,
        'upw' => $upw
    ];
    $sel_user = sel_user($param);

    if($uid!==@$sel_user['uid']){
        print "아이디가 존재하지 않습니다.";
        print "<a href=login.php><button>돌아가기</button></a>";
    }
    else if($upw!==$sel_user['upw']){
        print "비밀번호가 다릅니다.";
        print "<a href=login.php><button>돌아가기</button></a>";
    }
    else{
        session_start();
        $_SESSION['login_user'] = $sel_user;
        header("location: list.php");
    }
