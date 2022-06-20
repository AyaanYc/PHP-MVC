<?php
    include_once "db.php";
    $conn = get_conn();
    $i_board = $_GET['i_board'];
    $d_query = "DELETE FROM t_board7 WHERE i_board = $i_board";
    $result = mysqli_query($conn, $d_query);
    mysqli_close($conn);
    header("location: list.php");
?>