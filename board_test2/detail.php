<?php
    include_once "db.php";
    $conn = get_conn();


    $i_num = $_GET["i_num"];
    $s_query = "SELECT * FROM t_board2 WHERE i_num = $i_num" ;

    $result = mysqli_query($conn, $s_query);
    mysqli_close($conn);

    if($row = mysqli_fetch_assoc($result))
    {
        $title = $row['title'];
        $cont = $row['cont'];
        $create_at = $row['create_at'];
        $mod_at = $row['mod_at'];

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>세부 내용</h1>
    <a href="list.php"><button>리스트</button></a>
    <a href="mod.php?i_num=<?=$i_num?>"><button>글수정</button></a>
    <a href="del_proc.php?i_num=<?=$i_num?>"><button>글삭제</button></a>
    <div>제목: <?=$title?></div>
    <div>내용: <?=$cont?></div>
    <div>작성일시: <?=$create_at?></div>
    <div>수정일시: <?=$mod_at?></div>
</body>
</html>