<?php
    include_once "db.php";
    $conn = get_conn();
    $title = $_POST['title'];
    $ctnt = $_POST['ctnt'];
    $i_query = 
    "INSERT INTO t_board7
     (title, ctnt)
     VALUES
     ('$title', '$ctnt')
    ";
    mysqli_query($conn, $i_query);
    mysqli_close($conn);
    header("location: list.php");
?>