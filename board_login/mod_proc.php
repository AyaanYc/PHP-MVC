<?php
   include_once "db/db_board.php";

   session_start();
   $login_user = $_SESSION["login_user"];
   $i_user = $login_user["i_user"];
   $i_board = $_GET['i_board'];
   $title = $_POST['title'];
   $ctnt = $_POST['ctnt'];
   $param = [
       'i_board' => $i_board,
       'i_user' => $i_user,
       'ctnt' => $ctnt,
       'title' => $title
   ];

   $result = mod_proc_board($param);
   if($result){
       header("location: detail.php?i_board=$i_board");
   }
