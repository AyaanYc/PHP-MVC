<?php
    include_once "db.php";
    $conn = get_conn();
    $s_query = "SELECT * FROM t_board3";
    $result = mysqli_query($conn, $s_query);
    mysqli_close($conn);
    $i_board = $_GET['i_board'];

    if($row = mysqli_fetch_assoc($result))
    {
        $title = $row['title'];
        $ctnt = $row['ctnt'];
        $mot_at = $row['mot_at'];
        $create_at = $row['create_at'];

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>디테일</title>
    <style>
        button {
            margin-bottom : 3px;
        }
    </style>
</head>
<body>
    <h1>세부내용</h1>
    <a href="list.php"><button>리스트</button></a> 
    <a href="mod.php?i_board=<?=$i_board?>"><button>글수정</button></a>
    <a href="del_proc.php?i_board=<?=$i_board?>"><button>글삭제</button></a>
    <div>제목: <?=$title?></div>
    <div>내용: <?=$ctnt?></div>
    <div>수정일시: <?=$mot_at?></div>
    <div>작성일시: <?=$create_at?></div>
    
</body>
</html>