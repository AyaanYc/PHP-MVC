<?php
    include_once "db.php";

    $conn = get_conn();
    $i_num = $_GET["i_num"];
    $s_query = "SELECT title, cont FROM t_board2 WHERE i_num = $i_num";
    $result = mysqli_query($conn, $s_query);
    mysqli_close($conn);
    if($row = mysqli_fetch_assoc($result))
    {
        $title = $row['title'];
        $cont = $row['cont'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글수정</title>
</head>
<body>
    <h1>글수정</h1>
    <a href="list.php"><button>리스트</button></a>
    <a href="detail.php?i_num=<?=$i_num?>"><button>글로이동</button></a>
    <form action="mod_proc.php" method="post">
        <input type="hidden" name="i_num" value=<?=$i_num?>>
        <div><input type="text" name="title" placeholder="제목" value=<?=$title?>></div>
        <div><textarea name="cont" cols="22" rows="10" placeholder="내용"><?=$cont?></textarea></div>
        <div>
            <input type="submit" value="글수정">
            <input type="reset" value="초기화">
        </div>
    </form>
</body>
</html>