<?php
    include_once "db.php";
    $conn = get_conn();
    $title = $_POST['title'];
    $ctnt = $_POST['ctnt'];
    $i_query = 
    "INSERT INTO t_board6
     (title, ctnt)
     VALUES
     ('$title', '$ctnt')
    ";
    $result = mysqli_query($conn, $i_query);
    mysqli_close($conn);
    header("location: list.php");
?>