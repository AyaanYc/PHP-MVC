<?php
    include_once "db/db_board.php";
    session_start();
    $login_user = $_SESSION['login_user'];
    $title = $_POST['title'];
    $ctnt = $_POST['ctnt'];
    $i_user = $login_user['i_user'];
    $param = [
        'title' => $title,
        'ctnt' => $ctnt,
        'i_user' => $i_user,
    ];
    $result = ins_board($param);
    header("location: list.php");
    