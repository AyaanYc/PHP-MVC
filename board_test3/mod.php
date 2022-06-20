<?php
 include_once "db.php";
 $conn = get_conn();
 $s_query = "SELECT title, ctnt, i_board FROM t_board3";
 $result = mysqli_query($conn, $s_query);
 mysqli_close($conn);

 if($row = mysqli_fetch_assoc($result))
 {
     $title = $row['title'];
     $ctnt = $row['ctnt'];
     $i_board = $row['i_board'];
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
    <a href="detail.php?i_board=<?=$i_board?>"><button><?=$i_board?>번 글로이동</button></a>
    <a href="list.php"><button>리스트</button></a>
    <div><form action="mod_proc.php" method="POST">
        <input type="hidden" name="i_board" value=<?=$i_board?>>
        <div><input type="text" name="title" placeholder="제목" value=<?=$title?>></div>
        <div><textarea name="ctnt" cols="30" rows="10" placeholder="내용"><?=$ctnt?></textarea></div>
        <input type="submit" value="글수정">
        <input type="reset" value="초기화">
    </form></div>
</body>
</html>