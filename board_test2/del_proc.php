<?php
    include_once "db.php";
    $conn = get_conn();
    $i_num = $_GET['i_num'];
    $d_query = "DELETE FROM t_board2 WHERE i_num = $i_num";
    mysqli_query($conn, $d_query);
    mysqli_close($conn);
    header("location: list.php");
?>