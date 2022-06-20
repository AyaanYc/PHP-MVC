<?php
    include_once "db.php";
    $conn = get_conn();
    $i_num = $_POST['i_num'];
    $title = $_POST['title'];
    $cont = $_POST['cont'];
    $u_query = "UPDATE t_board2 SET title='$title', cont='$cont' WHERE i_num = $i_num";
    $result = mysqli_query($conn, $u_query);
    mysqli_close($conn);
    header("location: detail.php?i_num=$i_num");
?>