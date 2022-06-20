<?php
    include_once "db.php";

   $title = $_POST["title"];
   $ctnt = $_POST["ctnt"];

   print "title : $title<br>";
   print "ctnt : $ctnt <br>";

    $conn = get_conn();
    
    $i_query = 
    "
        INSERT INTO t_board
        (title, ctnt)
        VALUES 
        ('${title}', '${ctnt}')
    ";
    // 쿼리를 실행해서 mysql로 보냄  !는 반대 die()는 중간에 실행되면 그다음php값을 죽임 
    $result = mysqli_query($conn, $i_query);
    mysqli_close($conn); //연결 닫는거 !!!
    print $result;
    header("Location: list.php");

    die();
?>