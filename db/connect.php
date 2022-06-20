<?php
/*
    create database board1;

    use board1;

    create table t_board ( 
        i_board int unsigned primary key auto_increment, 
        title varchar(200) not null, 
        ctnt varchar(3000) not null, 
        create_at datetime default now()
    );
*/
    define("URL", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "506greendg@");
    define("DB_NAME", "board1");
    $conn = mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME);

    $sql = "INSERT INTO t_board(title, ctnt) 
    VALUES('test', 'content');";
    mysqli_query($conn, $sql);

    mysqli_close($conn);
<<<<<<< HEAD
<<<<<<< HEAD
?>
=======
=======
>>>>>>> 0afd3ce53dc33d1dd3cd5d56313727caa808088a
?>
<!-- 
    select - 최대 1개 가져오는것!! 0,1개(배열) detail where절pk있음
    select - 여러개!! 0, 1, 2 => 배열(배열) list where절pk없음
-->
<<<<<<< HEAD
>>>>>>> 0afd3ce53dc33d1dd3cd5d56313727caa808088a
=======
>>>>>>> 0afd3ce53dc33d1dd3cd5d56313727caa808088a
