<?php
    include_once "db/db_user.php";

    $uid = $_POST["uid"];
    $upw = $_POST["upw"];
    $confirm_upw = $_POST["confirm_upw"];
    $nm = $_POST["nm"];
    $gender = $_POST["gender"];

    $param = [
        "uid" => $uid,
        "upw" => $upw,
        "nm" => $nm,
        "gender" => $gender,
    ];
    
    $sel_user = sel_user($param);

    if(@$sel_user["uid"]===$uid)
    {
        print "아이디가 이미 존재합니다. ";
        print "<a href=join.php><button>돌아가기</button></a>";
    }
    else{
    $ins_user = ins_user($param);
    echo "ins_user : ", $ins_user, "<br>";
    echo "uid : ", $uid, "<br>";
    echo "upw : ", $upw, "<br>";
    echo "confirm_upw : ", $confirm_upw, "<br>";
    echo "nm : ", $nm, "<br>";
    echo "gender : ", $gender, "<br>";
    }
?>
