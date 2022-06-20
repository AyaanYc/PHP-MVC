<?php
    include_once "db.php";
    $conn = get_conn();
    $i_board = $_POST['i_board'];
    $title = $_POST['title'];
    $ctnt = $_POST['ctnt'];
    $u_query = 
    "   UPDATE t_board7 
        SET    title='$title', ctnt='$ctnt'
        WHERE  i_board = $i_board
    ";
    $result = mysqli_query($conn, $u_query);
    mysqli_close($conn);
    header("location: detail.php?i_board=$i_board");
?>