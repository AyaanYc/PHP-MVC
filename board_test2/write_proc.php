<?php
   include_once "db.php";
   $conn = get_conn();
    
   $title = $_POST["title"];
   $cont = $_POST["cont"];
    
    print $title;

    $i_query = 
    "
        INSERT INTO t_board2
        (title, cont)
        VALUES
        ('${title}', '${cont}')
    ";

    $result = mysqli_query($conn, $i_query);
    mysqli_close($conn);

    header("Location: list.php");
?>


