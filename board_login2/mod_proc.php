<?php
    include_once "db/db_board.php";
    $i_board = $_GET['i_board'];
    $title = $_POST['title'];
    $ctnt = $_POST['ctnt'];
    session_start();
    if(isset($_SESSION["login_user"])){
        $login_user = $_SESSION["login_user"];
    }
    $i_user = $login_user["i_user"];
    $param = [
        'i_board' => $i_board,
        'title' => $title,
        'ctnt' => $ctnt,
        'i_user' => $i_user,
    ];
    
    $result = mod_board($param);
    
    header("location: detail.php?i_board=$i_board");
    