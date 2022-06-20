<?php
    include_once 'db.php';
    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];
    $i_board = $_POST["i_board"];
    $conn = get_conn();
    $now = date("Y-m-d H:i:s");

    $u_query = "
        UPDATE t_board
        SET     title = '${title}',
                ctnt = '{$ctnt}',
                updated_at = '${now}'
        WHERE   i_board = $i_board
    ";

    $result = mysqli_query($conn, $u_query);
    mysqli_close($conn);
    header("Location:detail.php?i_board={$i_board}");
?>