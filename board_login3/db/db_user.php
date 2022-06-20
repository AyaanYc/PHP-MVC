<?php
    include_once "db.php";
    function ins_user($param){
        $uid = $param['uid'];
        $upw = $param['upw'];
        $nm = $param['nm'];
        $gender = $param['gender'];
        $sql = 
        "   INSERT INTO t_user
            (uid, upw, nm, gender)
            VALUES
            ('$uid', '$upw', '$nm', $gender)
        ";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }
    
    function sel_user(&$param){
        $uid = $param['uid'];
        $sql = 
        "   SELECT uid, upw, i_user, nm
            FROM t_user
            WHERE uid = '$uid'
        ";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return mysqli_fetch_assoc($result);
    }